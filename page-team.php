<?php

/*
	Template Name: Team
*/

get_header();  ?>

<div class="section-container">
  <div class="container">
    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      <h2><?php the_title(); ?></h2>

			<div class="team-content">

				<div class="two-column--team margin-b-40p">
					<div class="member" style="background:url('<?php the_field('team_member_1_photo'); ?>'); background-size:cover"></div>
					<div class="member-info">
						<h3><?php the_field('team_member_1_name'); ?></h3>
						<h4><?php the_field('team_member_1_title'); ?></h4>
						<p><?php the_field('team_member_1_bio'); ?></p>
					</div>
				</div>

				<div class="two-column--team margin-b-40p">
					<div class="member" style="background:url('<?php the_field('team_member_2_photo'); ?>'); background-size:cover"></div>
					<div class="member-info">
						<h3><?php the_field('team_member_2_name'); ?></h3>
						<h4><?php the_field('team_member_2_title'); ?></h4>
						<p><?php the_field('team_member_2_bio'); ?></p>
					</div>
				</div>

				<div class="small-container">
					<h2><?php the_field('heading_board'); ?></h2>
					<p><?php the_field('body_text_board'); ?></p>
				</div>

				<div class="two-column--team margin-b-40p">
					<div class="member" style="background:url('<?php the_field('board_member_1_photo'); ?>'); background-size:cover"></div>
					<div class="member-info">
						<h3><?php the_field('board_member_1_name'); ?></h3>
						<h4><?php the_field('board_member_1_title'); ?></h4>
						<p><?php the_field('board_member_1_bio'); ?></p>
					</div>
				</div>

				<div class="two-column--team margin-b-40p">
					<div class="member" style="background:url('<?php the_field('board_member_2_photo'); ?>'); background-size:cover"></div>
					<div class="member-info">
						<h3><?php the_field('board_member_2_name'); ?></h3>
						<h4><?php the_field('board_member_2_title'); ?></h4>
						<p><?php the_field('board_member_2_bio'); ?></p>
					</div>
				</div>

			</div>

    <?php endwhile; // end the loop?>
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>