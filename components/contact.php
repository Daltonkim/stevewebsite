<section class="contact">
	<div class="container">
		<div class="row">
			<div class="intro col-md-6">
				<h3 class="title"><?php echo get_sub_field('subtitle'); ?></h3>
				<?php echo do_shortcode(get_sub_field('contact_form_7_shortcode')); ?>
				<img src="<?php echo get_sub_field('contact_image')?>" alt="" />
			</div>

			<div class="contact-form form col-md-6" style="background-image: url(<?php echo get_sub_field('background_image'); ?>)">
				<h2 class="contact-form-title"><?php echo get_sub_field('title'); ?></h2>
				<div class="contact-form-questions">
					<p><?php echo get_sub_field('sub_title_2'); ?></p>
				</div>
				<div class="contact-form-location">
					<img src="<?php echo get_sub_field('location_icon'); ?>" />
					<div><?php echo get_sub_field('location_text'); ?></div>
				</div>
				<div class="contact-form-call">
					<img src="<?php echo get_sub_field('phone_icon'); ?>" />
					<div><?php echo get_sub_field('phone_text'); ?></div>
				</div>
				<div class="contact-form-email">
					<img src="<?php echo get_sub_field('email_icon'); ?>" />
					<div><?php echo get_sub_field('email_text'); ?></div>
				</div>
				<div class="contact-form-footer">
					<img src="<?php echo get_sub_field('my_paper_icon'); ?>" />
				</div>
			</div>
		</div>
	</div>
</section>
