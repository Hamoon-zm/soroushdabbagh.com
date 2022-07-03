<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=1024px, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:ital,wght@0,600;0,800;1,100&family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <title></title>
    <?php wp_head();?>
</head>
<body <?php body_class();?> >

<header>
    <div class="container flex-column">
        <div class="img-fluid logo">
        <img src="<?php bloginfo('template_directory');?>/images/logo.gif" alt="logo" >
        </div>
    </div>

</header>
<nav class="navbar navbar-expand-md navbar-light bg-light" role="navigation">
<div class="container">
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>">
      <span class="navbar-toggler-icon"></span>
  </button>
      <?php
      wp_nav_menu( array(
          'theme_location'    => 'primary',
          'depth'             => 2,
          'container'         => 'div',
          'container_class'   => 'collapse navbar-collapse justify-content-center',
          'container_id'      => 'bs-example-navbar-collapse-1',
          'menu_class'        => 'nav navbar-nav',
          'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
          'walker'            => new WP_Bootstrap_Navwalker(),
      ) );
      ?>
  </div>
</nav>
