<?php
// Register Custom Post Type
function the_process()
{

	$labels = array(
		'name'                  => _x('The process', 'Post Type General Name', 'mypaperhelpers'),
		'singular_name'         => _x('the_process', 'Post Type Singular Name', 'mypaperhelpers'),
		'menu_name'             => __('The Process', 'mypaperhelpers'),
		'name_admin_bar'        => __('All you need to do', 'mypaperhelpers'),
		'archives'              => __('Item Archives', 'mypaperhelpers'),
		'attributes'            => __('Item Attributes', 'mypaperhelpers'),
		'parent_item_colon'     => __('Parent Item:', 'mypaperhelpers'),
		'all_items'             => __('All Items', 'mypaperhelpers'),
		'add_new_item'          => __('Add New Item', 'mypaperhelpers'),
		'add_new'               => __('Add New', 'mypaperhelpers'),
		'new_item'              => __('New Item', 'mypaperhelpers'),
		'edit_item'             => __('Edit Item', 'mypaperhelpers'),
		'update_item'           => __('Update Item', 'mypaperhelpers'),
		'view_item'             => __('View Item', 'mypaperhelpers'),
		'view_items'            => __('View Items', 'mypaperhelpers'),
		'search_items'          => __('Search Item', 'mypaperhelpers'),
		'not_found'             => __('Not found', 'mypaperhelpers'),
		'not_found_in_trash'    => __('Not found in Trash', 'mypaperhelpers'),
		'featured_image'        => __('Featured Image', 'mypaperhelpers'),
		'set_featured_image'    => __('Set featured image', 'mypaperhelpers'),
		'remove_featured_image' => __('Remove featured image', 'mypaperhelpers'),
		'use_featured_image'    => __('Use as featured image', 'mypaperhelpers'),
		'insert_into_item'      => __('Insert into item', 'mypaperhelpers'),
		'uploaded_to_this_item' => __('Uploaded to this item', 'mypaperhelpers'),
		'items_list'            => __('Items list', 'mypaperhelpers'),
		'items_list_navigation' => __('Items list navigation', 'mypaperhelpers'),
		'filter_items_list'     => __('Filter items list', 'mypaperhelpers'),
	);
	$args = array(
		'label'                 => __('the_process', 'mypaperhelpers'),
		'description'           => __('Post Type Description', 'mypaperhelpers'),
		'labels'                => $labels,
		'supports'              => array('title', 'editor'),
		'taxonomies'            => array('category', 'post_tag'),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type('the_process', $args);
}
add_action('init', 'the_process', 0);
