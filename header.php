<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width" />
	<title><?php wp_title('|', true, 'right'); ?></title>
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php echo esc_url(get_bloginfo('pingback_url')); ?>">
	<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions.
	?>
	<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js?ver=3.7.0" type="text/javascript"></script>
<![endif]-->
	<?php wp_head(); ?>
</head>
<!-- START HEADER -->
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="header_wrap dark_skin hover_menu_style2">
	<div class="container">
		<nav class="navbar navbar-expand-lg">
			<a class="navbar-brand" href="">
				<?php the_custom_logo(); ?>
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="ion-android-menu"></span>
			</button>
			<div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
				<?php
				wp_nav_menu(array(
					'walker' => new My_Nav_Menu_Walker(),
				));
				?>
				<div class="social-icons mobile">
					<ul>
						<li><a href="https://twitter.com/mypaperhelpers" target="_blank"><i class="fa wp-icon fa-twitter fa-lg"></i></a></li>
						<li><a href="https://www.facebook.com/mypaperhelpers" target="_blank"><i class="fa wp-icon fa-facebook-f fa-lg"></i></a></li>
						<li><a href="whatsapp://send?text=Thank you to showing your interest with us we are connecting your shortly.." target="_blank"><i class="fa wp-icon fa-whatsapp"></i></a></li>
						<li><a href="whatsapp://send?text=Thank you to showing your interest with us we are connecting your shortly.." target="_blank"><i class="fab wp-icon fa-discord"></i></a></li>
					</ul>
					<div class="global-btn">
						<a href="https://mypaperhelpers.net/order" target="_blank" class=" btn btn-default "><?php _e('Order Now', 'mypaperhelper'); ?></a>
					</div>
				</div>
			</div>
		</nav>
	</div>
</header>
