<section>
	<div class="container">
		<h2 class="homework__title">Do You Need Homework Help?</h2>
		<div class="homework__desc">We are experts in statistics, maths and homework tasks. Please check the articles below, they can help you understand your assignment.</div>
		<div class="row">
			<ul class="homework">
				<?php
				$blogs = new WP_Query(array(
					'post_type' => 'post',
					'posts_per_page' => '-1',
				));
				?>
				<?php if ($blogs->have_posts()) : ?>
					<?php while ($blogs->have_posts()) : $blogs->the_post(); ?>
						<li>
							<i class="fas fa-circle">
								<p><a href="<?php the_permalink() ?>" target="_blank"><?php the_title(); ?></a></p>
							</i>
						</li> <?php endwhile;
						wp_reset_postdata();
						else : ?>
					<p>They are no posts yet</p>
				<?php endif; ?>
			</ul>
		</div>
	</div>
</section>
