var gulp = require('gulp');
var sass = require('gulp-sass');
var concat = require('gulp-concat');
var sourcemaps = require('gulp-sourcemaps');
var autoprefixer = require('gulp-autoprefixer');
var AssetsManager = require('assets-manager');

var browserSync = require('browser-sync').create();

var autoprefixerOptions = {
  browsers: ['last 2 versions', '> 5%', 'Firefox ESR']
};

// BROWSER SYNC ///////////////////////////////////////

gulp.task('browser-sync', ['sass'], function() {
	browserSync.init({
    
    proxy: "localhost:8080"
	});

	gulp.watch('./assets/scss/**/*.scss', ['sass'])
  .on('change', function(event) {
    console.log('File ' + event.path + ' was ' + event.type + ', running tasks...');
  });

  gulp.watch('htdocs/**/**/*.php').on('change', browserSync.reload);
});

// SASS BUILD /////////////////////////////////////////////////

var OUTPUT_STYLE = 'expanded';
var SITE_PATH = './node_modules/foundation-sites/scss';

gulp.task('sass', function() {
	return gulp.src('./assets/scss/main.scss')
	.pipe(
    sass(
      {
		      includePaths: SITE_PATH,
          outputStyle: OUTPUT_STYLE
	    }
    ).on('error', sass.logError)
  )
	.pipe(sourcemaps.write('.htdocs/css/maps'))
	.pipe(autoprefixer(autoprefixerOptions))
	.pipe(
    concat('main.css')
  )
	.pipe(
    gulp.dest('./htdocs/css')
  )
	.pipe(browserSync.stream());
});

// SASS WATCH ///////////////////////////////////////

gulp.task('sass:watch', function () {
	return gulp.watch(['./assets/scss/**/*.scss', './assets/scss/*.scss'], ['sass'])
  .on('change', function(event) {
    console.log('File ' + event.path + ' was ' + event.type + ', running tasks...');
  });
});

// ASSETS MANAGER ///////////////////////////////////////

var manager = new AssetsManager('manifest.json');

gulp.task('assets', function(done) {
  manager.copyPackages().then(function(){
    done();
  });
});

gulp.task('clean:assets', function(done) {
  manager.cleanPackages().then(function(){
    done();
  });
});

gulp.task('default', ['sass']);
