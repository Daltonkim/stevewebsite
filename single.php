<?php
get_header(); ?>

<!-- END HEADER -->
<!-- START SECTION BANNER -->
<!-- END SECTION BANNER -->
<!-- START SECTION CONTENT -->
<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
		<section style="padding:0;" class="blog-post" id="post-<?php the_ID(); ?>">
			<div class="container-hero" style="background-repeat: no-repeat; background-size: cover; background-position: centre;  background-image: url( <?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)) ?>),linear-gradient(to bottom, rgba(0, 32, 96, 0.3), rgba(0, 32, 96, 0.3));">
				<h1><?php echo the_title() ?></h1>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="single_post">
							<div class="blog_content">
								<?php the_content(); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<?php get_template_part('partials/allyouneedtoknow', null); ?>
		<?php get_template_part('partials/faqs', null); ?>
		<?php get_template_part('partials/testimonials', null); ?>
		<?php get_template_part('partials/homeworkhelp', null); ?>
		<?php get_footer(); ?>
	<?php endwhile; ?>
<?php endif; ?>

