<section>
	<div class='container'>
		<div class='row'>
			<?php

			// Check rows exists.
			if (have_rows('cards')) :

				// Loop through rows.
				while (have_rows('cards')) : the_row();

					// Load sub field value.
					$title = get_sub_field('title');
					$desc = get_sub_field('description');

				// Do something...
				?>
				<div class="col-md-6">
					<h3 class="card-title"><?php echo $title  ?></h3>
					<p><?php echo $desc  ?></p>
				</div>
				<?php
				// End loop.
				endwhile;

			// No value.
			else :
			// Do something...
			endif;
			?>
		</div>
	</div>
</section>
