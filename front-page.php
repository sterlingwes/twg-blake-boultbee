<?php //index.php is the last resort template, if no other templates match ?>
<?php
  if(is_front_page())
  {
      get_header('home');
  }
  else
  {
      get_header();
  }
?>

<div class="homepage">

<section class="slogan-address aligncenter">
  <p class="slogan">Building Relationships. Healing Youth.</p>
  <p class="address">41 Blake Street, Toronto, ON, M4J 3E2</p>
</section>

<section class="home-navigation">
  <?php wp_nav_menu( array(
    'container' => false,
    'theme_location' => 'primary'
  )); ?>
</section>

<section class="history-bg">
<div class="light"></div>
  <div class="section-container">
    <h2>History</h2>
    <p>The Blake Boultbee Youth Outreach Service (BBYOS) was established in 1989 to provide comprehensive services to high-risk youth and their families in the Blake-Boultbee community.</p>
    <p>Since our inception our clientele has grown to include youth and families across the GTA, people who are at risk of becoming in conflict with the law, of prematurely ending their education, of not reaching their potential and of not securing fulfilling employment in life.</p>
  </div>
</section>

<section class="green-bg">
  <div class="section-container">
    <h2>Services</h2>
    
    <!-- <div class="services-columns"> -->
      <div class="service-item" style="background: url('<?php the_field('image_1'); ?>'); background-size:cover;"></div>
      <div class="service-info"><h3><?php the_field('first_service'); ?></h3></div>
      <div class="service-item" style="background: url('<?php the_field('image_2'); ?>'); background-size:cover;"></div>
      <div class="service-info"><h3><?php the_field('second_service'); ?></h3></div>
      <div class="service-item" style="background: url('<?php the_field('image_3'); ?>'); background-size:cover;"></div>
      <div class="service-info"><h3><?php the_field('third_service'); ?></h3></div>
      <div class="service-item" style="background: url('<?php the_field('image_4'); ?>'); background-size:cover;"></div>
      <div class="service-info"><h3><?php the_field('fourth_service'); ?></h3></div>
    <!-- </div> -->
  </div>
</section>

<section class="white-bg">
  <div class="section-container">
    <h2>Reports</h2>
      <div class="reports aligncenter">
        <div class="row1">
          <div class="report-item"><a href="/" class="button"><i class="fa fa-file" aria-hidden="true"></i> Christmas Letter 2007</a></div>
          <div class="report-item"><a href="/" class="button"><i class="fa fa-file" aria-hidden="true"></i> Christmas Letter 2006</a></div>
          <div class="report-item"><a href="/" class="button"><i class="fa fa-file" aria-hidden="true"></i> Christmas Letter 2005</a></div>
        </div>
        <div class="row2">
          <div class="report-item"><a href="/" class="button"><i class="fa fa-file" aria-hidden="true"></i> Christmas Letter 2004</a></div>
          <div class="report-item"><a href="/" class="button"><i class="fa fa-file" aria-hidden="true"></i> Christmas Letter 2003</a></div>
        </div>
      </div>
  </div>
</section>

<?php get_footer(); ?>