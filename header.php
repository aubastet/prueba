<!DOCTYPE html>
<html lang="e">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
    <link  rel="icon"   href="/assets/img/favicon.ico" type="image/png" />
</head>
<body>
    
<!--header-->
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
  <div class="carousel-inner">
    <div class="carousel-item active">
        <nav class="navbar navbar-expand-lg navbar-light bg-transparent p-4 ">
  <div class="container">
    <div class="container-fluid">
    <img class="logo" src="<?php echo get_template_directory_uri()?>/assets/img/logo-julius.png" alt="logo">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <?php wp_nav_menu(
        array(
            'theme_location' => 'top_menu',
            'menu_class'    => 'menu-principal',
            'container_class' => 'container-menu',
        )
    ); 
    ?>
    </div>
  </div>
  </div>
</nav>
      <!-- <img class="d-block w-100" src="<?php echo get_template_directory_uri()?>/assets/img/slider-01.jpg" alt="header"> -->
      <div class="carousel-caption d-none d-md-block">
        <h5 class="h1 carousel">WE ARE A MARKETING AGENCY<br> <span>WITH DIGITAL DNA </span> </h5>
       
      </div>
    </div>
  </div>
</div>

