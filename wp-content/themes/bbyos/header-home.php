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

<header class="home-header">
<div class="light-hero"></div>
  <div class="section-container margin-auto aligncenter">
    <img src="/wp-content/uploads/2016/10/bbyoshorz_purple.png" alt="Blake Boultbee">
    <h2>Youth Outreach Service</h2>
    <a href="https://www.canadahelps.org/dn/4075" class="button button-donate">Donate</a>    
  </div>
</header><!--/.header-->
