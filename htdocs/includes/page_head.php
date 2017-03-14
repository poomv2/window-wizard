<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>The Window Wizard</title>

  <link rel="icon" type="image/png" href="favicon.png" />

  <!-- Motion UI - Foundation requirement -->
  <link rel="stylesheet" href="vendor/css/motion-ui.min.css">
  <!-- Compiled CSS -->
  <link rel="stylesheet" href="/css/main.css">

  <script src="https://use.typekit.net/poq0idt.js"></script>
  <script>try{Typekit.load({ async: true });}catch(e){}</script>
</head>
<body>
  <div class="off-canvas position-right" id="offCanvas" data-off-canvas>
    <button class="close-button" aria-label="Close menu" type="button" data-close>
        <span aria-hidden="true">&times;</span>
    </button>
    <h3>Menu</h3>
    <ul class="no-bullet">
      <li><a href="/">Home</a></li>
      <li><a href="index.php?page=services">Services</a></li>
      <li><a href="index.php?page=gallery">Gallery</a></li>
      <li><a href="index.php?page=testimonials">Testimonials</a></li>
    </ul>
  </div>

  <div class="off-canvas-content" data-off-canvas-content>
