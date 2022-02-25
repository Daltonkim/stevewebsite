<section class="containersection" style="background-image : url(<?php echo get_stylesheet_directory_uri() . '/assets/frontend/images/testimony_image.png' ?> )">
	<div class="container testimonials">
		<section id="testim" class="testim">
			<div class="testim-cover">
				<div class="wrap">

					<span id="right-arrow" class="arrow right fa fa-chevron-right"></span>
					<span id="left-arrow" class="arrow left fa fa-chevron-left "></span>
					<ul id="testim-dots" class="dots">
						<?php
						$testi = new WP_Query(array(
							'post_type' => 'testimonials',
							'posts_per_page' => '-1',
						));
						?>
						<?php if ($testi->have_posts()) : ?>
							<?php while ($testi->have_posts()) : $testi->the_post(); ?>
								<li class="dot"></li>
							<?php endwhile;
						else : ?>
							<p>They are no posts yet</p>
						<?php endif; ?>
					</ul>

					<div id="testim-content" class="cont">
						<?php
						$testi = new WP_Query(array(
							'post_type' => 'testimonials',
							'posts_per_page' => '-1',
						));
						?>
						<?php if ($testi->have_posts()) : ?>
							<?php while ($testi->have_posts()) : $testi->the_post();
								// Load sub field value.
								$description = get_field('text');
								$icon = get_field('image');
							?>

								<div class="">
									<div class="img"><img src="<?php echo $icon ?>" alt=""></div>
									<div class="testidetails">
										<p>"<?php echo $description ?>" </p>
										<h2>- <?php the_title(); ?>. -</h2>
									</div>
								</div>
							<?php endwhile;
							wp_reset_postdata();
						else : ?>
							<p>They are no posts yet</p>
						<?php endif; ?>

					</div>
				</div>
			</div>
		</section>
	</div>
</section>
