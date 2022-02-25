<?php

/**
 * Template Name: Home Template
 */
get_header();
$imagePath = get_stylesheet_directory_uri() . '/assets/frontend/images/';
?>

<main>
	<?php
	// check if the flexible content field has rows of data
	if (have_rows('components')) :

		// loop through the rows of data
		while (have_rows('components')) : the_row();

			$name = (string) get_row_layout();

			if (empty($name)) continue;

			$slug = 'components/';

			$templates = array();
			$templates[] = $slug . $name . '.php';

			include(locate_template($templates, false, true));

		endwhile;
		wp_reset_postdata();
	endif;
	?>
	<div class="container the_content">
		<?php echo 	the_content(); ?>
	</div>
	<?php get_template_part('partials/allyouneedtoknow', null); ?>
	<?php get_template_part('partials/faqs', null); ?>
	<?php get_template_part('partials/testimonials', null); ?>
	<?php get_template_part('partials/homeworkhelp', null); ?>
</main>

<?php get_footer();
