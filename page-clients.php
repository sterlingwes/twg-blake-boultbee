<?php

/*
	Template Name: Clients
*/

get_header();  ?>

<div class="section-container">
  <div class="container">
    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      <h2><?php the_title(); ?></h2>

			<div class="team-content">

				<div class="two-column--team margin-b-40p">
					<div class="member" style="background:url('<?php the_field('client_1_photo'); ?>'); background-size:cover"></div>
					<div class="member-info">
						<h3><?php the_field('client_1_name'); ?></h3>
						<p><?php the_field('client_1_bio'); ?></p>
					</div>
				</div>

				<div class="two-column--team margin-b-40p">
					<div class="member" style="background:url('<?php the_field('client_2_photo'); ?>'); background-size:cover"></div>
					<div class="member-info">
						<h3><?php the_field('client_2_name'); ?></h3>
						<p><?php the_field('client_2_bio'); ?></p>
					</div>
				</div>

			</div>

    <?php endwhile; // end the loop?>
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>