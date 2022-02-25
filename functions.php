<?php


namespace MyPaperHelpers;

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly
}

class MyPaperHelpers
{

	/**
	 * Class Construct
	 */
	public function __construct()
	{
		add_action('after_setup_theme', [$this, 'mypaperhelper_setup']);

		add_action('init', [$this, 'mypaperhelper_init']);
		add_action('customize_register', [$this, 'mypaperhelper_customize_register']);

		add_action('wp_enqueue_scripts', [$this, 'mypaperhelper_enqueue_scripts']);

		$this->include_files();
	}

	function include_files()
	{
		require_once 'includes/cpt/faqs.php';
		require_once 'includes/cpt/allyouneedtoknow.php';
		require_once 'includes/cpt/testimonials.php';
		require_once ('includes/menu/menu.php');
	}


	function mypaperhelper_setup()
	{

		/*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     */
		/* Pinegrow generated Load Text Domain Begin */
		load_theme_textdomain('mypaperhelper', get_template_directory() . '/languages');
		/* Pinegrow generated Load Text Domain End */

		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		/*
     * Let WordPress manage the document title.
     */
		add_theme_support('title-tag');

		/*
     * Enable support for Post Thumbnails on posts and pages.
     */
		add_theme_support('post-thumbnails');
		set_post_thumbnail_size(825, 510, true);

		// Add menus.
		register_nav_menus(array(
			'primary' => __('Primary Menu', 'mypaperhelper'),
			'social'  => __('Social Links Menu', 'mypaperhelper'),
		));

		/*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
		add_theme_support('html5', array(
			'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
		));

		add_theme_support('custom-logo', array(

			'flex-height' => true,
			'flex-width'  => true,
			'header-text' => array('site-title', 'site-description'),
		));

		/*
     * Enable support for Post Formats.
     */
		add_theme_support('post-formats', array(
			'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
		));
	}





	function mypaperhelper_init()
	{
		register_taxonomy_for_object_type('category', 'attachment');
		register_taxonomy_for_object_type('post_tag', 'attachment');
	}





	function mypaperhelper_customize_register($wp_customize)
	{
		// Do stuff with $wp_customize, the WP_Customize_Manager object.

		/* Pinegrow generated Customizer Controls Begin */

		/* Pinegrow generated Customizer Controls End */
	}


	function mypaperhelper_enqueue_scripts()
	{


		wp_enqueue_script('custom', get_template_directory_uri() . '/assets/frontend/js/custom.js', false, null, true);

		wp_enqueue_script('jquery', get_template_directory_uri() . '/images/jquery-1.12.4.min.js', false, null, true);

		wp_enqueue_script('jqueryui', get_template_directory_uri() . '/images/jquery-ui.js', false, null, true);

		wp_enqueue_script('widgets', get_template_directory_uri() . '/images/widgets.js', false, null, true);

		wp_enqueue_script('popper', get_template_directory_uri() . '/images/popper.min.js', false, null, true);

		wp_enqueue_script('bootstrap', get_template_directory_uri() . '/images/bootstrap.min.js', false, null, true);

		wp_enqueue_script('owlcarousel', get_template_directory_uri() . '/images/owl.carousel.min.js', false, null, true);

		wp_enqueue_script('magnificpopup', get_template_directory_uri() . '/images/magnific-popup.min.js', false, null, true);

		wp_enqueue_script('waypoints', get_template_directory_uri() . '/images/waypoints.min.js', false, null, true);

		wp_enqueue_script('parallax', get_template_directory_uri() . '/images/parallax.js', false, null, true);

		wp_enqueue_script('jquerycountdown', get_template_directory_uri() . '/images/jquery.countdown.min.js', false, null, true);

		wp_enqueue_script('jqueryfitvids', get_template_directory_uri() . '/images/jquery.fitvids.js', false, null, true);

		wp_enqueue_script('jquerycounterup', get_template_directory_uri() . '/images/jquery.counterup.min.js', false, null, true);

		wp_enqueue_script('isotope', get_template_directory_uri() . '/images/isotope.min.js', false, null, true);

		wp_enqueue_script('jqueryelevatezoom', get_template_directory_uri() . '/images/jquery.elevatezoom.js', false, null, true);

		wp_enqueue_script('typed', get_template_directory_uri() . '/images/typed.min.js', false, null, true);

		wp_enqueue_script('typedtext', get_template_directory_uri() . '/images/typed-text.js', false, null, true);

		wp_enqueue_script('scripts', get_template_directory_uri() . '/images/scripts.js', false, null, true);

		wp_enqueue_style('animate', get_template_directory_uri() . '/images/animate.css', false, null, 'all');

		wp_enqueue_style('raw', get_template_directory_uri() . '/assets/frontend/css/style.min.css', false, null, 'all');

		wp_enqueue_style('bootstrap', get_template_directory_uri() . '/images/bootstrap.min.css', false, null, 'all');

		wp_enqueue_style('icomoon', get_template_directory_uri() . '/images/ico-moon.css', false, null, 'all');

		wp_enqueue_style('ionicons', get_template_directory_uri() . '/images/ionicons.min.css', false, null, 'all');

		wp_enqueue_style('themifyicons', get_template_directory_uri() . '/images/themify-icons.css', false, null, 'all');

		wp_enqueue_style('all', get_template_directory_uri() . '/images/all.min.css', false, null, 'all');

		wp_enqueue_style('owlcarousel', get_template_directory_uri() . '/images/owl.carousel.min.css', false, null, 'all');

		wp_enqueue_style('owltheme', get_template_directory_uri() . '/images/owl.theme.css', false, null, 'all');

		wp_enqueue_style('owlthemedefault', get_template_directory_uri() . '/images/owl.theme.default.min.css', false, null, 'all');

		wp_enqueue_style('magnificpopup', get_template_directory_uri() . '/images/magnific-popup.css', false, null, 'all');

		wp_enqueue_style('style', get_template_directory_uri() . '/images/style.css', false, null, 'all');

		wp_enqueue_style('fontawesome', "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css", false, null, 'all');

		wp_enqueue_style('responsive', get_template_directory_uri() . '/images/responsive.css', false, null, 'all');

		wp_enqueue_style('fonts', get_template_directory_uri() . '/assets/frontend/fonts/webfont/stylesheet.css', false, null, 'all');

		wp_enqueue_style('theme', get_template_directory_uri() . '/images/theme.css', false, null, 'all');

		wp_enqueue_style('gravity', get_template_directory_uri() . '/images/gravity.css', false, null, 'all');
	}
}
new MyPaperHelpers;
