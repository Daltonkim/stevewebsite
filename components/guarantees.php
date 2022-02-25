<section class="guarantees">
	<div class="container">
		<div class="row">
			<div class="guarantees__section">
				<h2><?php echo get_sub_field('title') ?></h2>
				<div class="guarantees__section-description"> <?php echo get_sub_field('description') ?></div>
				<img class="guarantees__section-img" src="<?php echo get_sub_field('image') ?>" alt="" />
			</div>
			<div class="guarantees__section2">
				<?php
				// Check rows exists.
				if (have_rows('cards')) :

					// Loop through rows.
					while (have_rows('cards')) : the_row();

						// Load sub field value.
						$sub_value = get_sub_field('sub_field');
						$sub_values = get_sub_field('icon');
				?>
						<div class="guarantees__section2-card">
							<div class="guarantees__section2-card-icon"><?php echo get_sub_field('icon') ?> <h3><?php echo get_sub_field('card_title') ?></h3>
							</div>
							<div class="guarantees__section2-card-description"><?php echo get_sub_field('card_description') ?></div>
						</div>
				<?php
					// Do something...

					// End loop.
					endwhile;

				// No value.
				else :
				// Do something...
				endif;
				?>
			</div>
		</div>
	</div>
</section>
