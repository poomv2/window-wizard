<?php
  $page = $_GET['page'];

  if($page==''){
    $page == 'home';
  }

  include('includes/page_head.php');
  include('includes/templates/header.php');

  if ($_GET['page']=='services') {
    include('includes/templates/pages/services.php');
  }
  elseif ($_GET['page']=='gallery') {
    include('includes/templates/pages/gallery.php');
  }
  elseif ($_GET['page']=='testimonials') {
    include('includes/templates/pages/testimonials.php');
  }
  else {
    include('includes/templates/pages/home.php');
  }

  include('includes/templates/footer.php');
  include('includes/page_tail.php');
?>
