<section class="allyouneedtoknow" style="background-image : url(<?php echo get_stylesheet_directory_uri() . '/assets/frontend/images/all_you_need.png' ?> )">
	<div class="container">
		<div class="allyouneedtoknow__titlecard">
			<h2>All you need to do</h2>
			<p>Here is what you need to do for our team of experts to hlep out</p>
		</div>
		<div class="allyouneedtoknow__bottomcards">

			<?php
			$faqs = new WP_Query(array(
				'post_type' => 'the_process',
				'posts_per_page' => '3',
			));
			?>
			<?php if ($faqs->have_posts()) : ?>
				<?php while ($faqs->have_posts()) : $faqs->the_post();
					// Load sub field value.
					$title = get_field('title');
					$description = get_field('description');
					$icon = get_field('icon');
				?>
					<div class="allyouneedtoknow__bottomcards-card">
						<div class="allyouneedtoknow__bottomcards-card-icon">
							<div> <?php echo $icon ?></div>
						</div>
						<div class="allyouneedtoknow__bottomcards-card-title">
							<h3> <?php echo $title ?></h3>
						</div>
						<div class="allyouneedtoknow__bottomcards-card-description">
							<p> <?php echo $description ?></p>
						</div>
					</div>
				<?php endwhile;
				wp_reset_postdata();
			else : ?>
				<p>They are no posts yet</p>
			<?php endif; ?>
		</div>
	</div>
</section>
