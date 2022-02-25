<section class="single_hero" style="background-image: url(<?php echo get_sub_field('background_image'); ?>)">
	<div class="container">
		<div class="row">
			<!-- <div class="single_hero-wrapper "> -->
			<div class="single_hero-content col-md-12">
				<p><?php echo get_sub_field('top_title') ?></p>
				<h1> <?php echo get_sub_field('main_title') ?>

				</h1>
				<p><?php echo get_sub_field('bottom_title') ?></p>
			</div>
			<!-- </div> -->
		</div>
		<div class="single_hero-ratings">
			<img src="<?php echo get_stylesheet_directory_uri() . '/assets/frontend/images/ratings.png' ?> " />
			<p><?php echo get_sub_field('ratings_title') ?></p>
		</div>
	</div>
</section>
