<?php

/**
 * Theme class used to add description to nav items.
 *
 * @since 1.0.0
 *
 * @see Walker
 */
class My_Nav_Menu_Walker extends Walker {

    /**
	 * Starts the element output.
	 *
	 * @since 3.0.0
	 * @since 4.4.0 The {@see 'nav_menu_item_args'} filter was added.
	 *
	 * @see Walker::start_el()
	 *
	 * @param string   $output Used to append additional content (passed by reference).
	 * @param WP_Post  $item   Menu item data object.
	 * @param int      $depth  Depth of menu item. Used for padding.
	 * @param stdClass $args   An object of wp_nav_menu() arguments.
	 * @param int      $id     Current item ID.
	 */

	var $tree_type = array('post_type', 'taxonomy', 'custom');
	var $db_fields = array('parent' => 'menu_item_parent', 'id' => 'db_id');

    public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
        global $wp_query;

        $class_names = $value = '';

		$classes = empty($item->classes) ? array() : (array) $item->classes;
		$classes = in_array('current-menu-item', $classes) ? array('current-menu-item active') : array();
		$class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
		$class_names = strlen(trim($class_names)) > 0 ? ' class="' . esc_attr($class_names) . '"' : '';
		// $id = apply_filters('nav_menu_item_id', '', $item, $args);
		// $id = strlen($id) ? ' id="' . esc_attr($id) . ' class="nav-bar""' : '';
		$attributes  = !empty($item->attr_title) ? ' title="'  . esc_attr($item->attr_title) . '"' : '';
		$attributes .= !empty($item->target)     ? ' target="' . esc_attr($item->target) . '"' : '';
		$attributes .= !empty($item->xfn)        ? ' rel="'    . esc_attr($item->xfn) . '"' : '';
		$attributes .= !empty($item->url)        ? ' href="'   . esc_attr($item->url) . '"' : '';

		$item_output = $args->before;
		$item_output .= '<li' . $class_names . '>';
		$item_output .= '<a class="nav-link"' . $attributes . $id  . $class_names . '>';;
		$item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;
		$item_output .= '</a>';
		$item_output .= "</li>\n";
		$item_output .= $args->after;
		$output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);

    }
}
