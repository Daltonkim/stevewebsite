<div class="newsletter"style="background-image: url(<?php echo get_sub_field('background_image'); ?>), linear-gradient(to left, #db4687, #522e86)">
    <div class="wrapper">
        <div class="newsletter-image">
            <div class="newsletter-image_content_desktop" >
                <div class="bg-img">
                    <!-- <img src="<?php echo get_sub_field('background_image'); ?>)" alt=""> -->
                </div>
            </div>
            <div class="newsletter-image_content_mobile" >
                <div class="bg-img">
                    <img src="<?php echo get_sub_field('mobile_image'); ?>" alt="">
                </div>
            </div>
        </div>

        <div class="newsletter-content">
       
        <div class="form">
        <h2><?php echo get_sub_field('title'); ?></h2>
	        <h4><?php echo get_sub_field('newsletter_details'); ?></h4>
			<h2 class="mobile-title"><?php echo get_sub_field('title'); ?></h2>
			<?php echo do_shortcode( get_sub_field('newsletter_form_7_shortcode') ); ?>
		</div>
        </div>
    </div>
</div>