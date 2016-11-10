<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <!-- stylesheets are enqueued in functions.php -->
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="hamburger-menu">
  <?php wp_nav_menu( array(
    'container' => false,
    'theme_location' => 'primary'
  )); ?>
</div>

<header class="main-header">
  <!-- <div class="section-container"> -->
    <div class="logo-single">
      <h1>
        <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
          <div class="logo-bg aligncenter"></div>
        </a>
      </h1>
    </div>

    <a href="https://www.canadahelps.org/dn/4075" class="donate-link">
      <div class="donate-sticky-bar">
        Donate
      </div>
    </a>
    

    <section class="slogan-address aligncenter">
      <p class="slogan">Building Relationships. Healing Youth.</p>
      <p class="address">41 Blake Street, Toronto, ON, M4J 3E2</p>
    </section>

    <nav>
      <!-- MAIN MENU -->
      
      <div class="fullmenu aligncenter">
      <div class="section-container">
        <?php wp_nav_menu( array(
          'container' => 'navigation',
          'theme_location' => 'primary'
        )); ?>
        </div>
      </div>
      
      <!-- RESPONSIVE MENU -->
      <div class="burger">
        <span class="patty">
      </div>
    </nav>
  <!-- </div> -->
</header><!--/.header-->

