<!DOCTYPE html>
<html lang="en">
  <head>
  <?php wp_head(); ?>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    
    <?php wp_head(); ?>

    <title>Fictional University</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous" />
    <link rel="stylesheet" href="build/index.css" />
    <link rel="stylesheet" href="build/style-index.css" />
  </head>
  <body <?php body_class() ;?> >
    <header class="site-header">
      <div class="container">
        <h1 class="school-logo-text float-left">
          <a href="<?php echo site_url()?>"><strong>Fictional</strong> University</a>
        </h1>
        <span class="js-search-trigger site-header__search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
        <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
        <div class="site-header__menu group">
          <nav class="main-navigation">
          <?php 
          //another way in wordpress to add menue 
          
          // wp_nav_menu(array(
          //   'theme_location' => 'headerMenueLocation',
          // )); 
                   
          ?>
            <ul>
              <li <?php if(is_page('about-us') or wp_get_post_parent_id(0)== 6) echo 'class="current-menu-item"'; ?>><a href="/about-us">About Us</a></li>
              <li><a href="/programs">Programs</a></li>
              <li <?php if(get_post_type()== 'event' OR is_page('past-events')) echo 'class="current-menu-item"'; ?>><a href="<?php echo get_post_type_archive_link('event'); ?>">Events</a></li>
              <li><a href="#">Campuses</a></li>
              <li <?php if(get_post_type() == 'post') echo 'class="current-menu-item"'; ?> ><a href="<?php echo site_url('/blog'); ?>">Blog</a></li>
            </ul>
          </nav>
          <div class="site-header__util">
            <a href="#" class="btn btn--small btn--orange float-left push-right">Login</a>
            <a href="#" class="btn btn--small btn--dark-orange float-left">Sign Up</a>
            <span class="search-trigger js-search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
          </div>
        </div>
      </div>
    </header>