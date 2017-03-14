<header class="site-header <?php if($page == ''){ echo "site-header--home"; } ?>">
  <div class="row">
    <div class="medium-4 columns">
      <a href="/" class="header-logo <?php if($page == ''){ echo "header-logo--home"; } ?>"><img src="img/logo.png" alt="The Window Wizard" /></a>
      <button type="button" class="off-canvas-button show-for-small-only" data-toggle="offCanvas"></button>
    </div>
    <div class="large-8 medium-5 columns">
      <button type="button" class="off-canvas-button show-for-medium" data-toggle="offCanvas"></button>
      <div class="contact-header text-right">
        <a href="https://www.facebook.com/windowwizardhorsham" class="header-facebook-icon" target="_blank"><img src="/img/svg/facebook-logo.svg" alt="Visit the Window Wizard Horsham Facebook Page!"></a>
        <p>
          <small>Telephone enquiries only</small><br />
          Call <a href="tel:07858 269699">07858 269699</a> / <a href="tel:01403 267288">01403 267288</a>
        </p>
      </div>
      <nav class="site-nav">
        <a href="/" <?php if($page == ''){ echo "class='active'"; } ?>>Home</a>
        <a href="index.php?page=services" <?php if($page == 'services'){ echo "class='active'"; } ?>>Services</a>
        <a href="index.php?page=gallery" <?php if($page == 'gallery'){ echo "class='active'"; } ?>>Gallery</a>
        <a href="index.php?page=testimonials" <?php if($page == 'testimonials'){ echo "class='active'"; } ?>>Testimonials</a>
      </nav>

    </div>
  </div>
</header>
