<section class="ordersection">
	<div class="container">
		<div class="row">
			<div class="ordersection__section col-md-7">
				<div class="ordersection__section-title">
					<?php echo get_sub_field('title') ?>
				</div>
				<div class="ordersection__section-desc">
					<?php echo get_sub_field('description') ?>
				</div>
				<div class="ordersection__section-button">
					<div class="global-btn">
						<a href="https://app.mypaperhelpers.net/order" target="_blank" class="btn btn-default ">Order Now</a>
					</div>
				</div>
			</div>
			<div class="ordersection__section2 col-md-5">
				<img src="<?php echo get_sub_field('image') ?>" />
			</div>
		</div>
	</div>
</section>
