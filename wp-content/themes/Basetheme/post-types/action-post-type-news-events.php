<?php
// Register Custom Taxonomy
function event_items() {

	$labels = array(
		'name'                       => 'events',
		'singular_name'              => 'event',
		'menu_name'                  => 'Events',
		'all_items'                  => 'All Items',
		'parent_item'                => 'Parent Item',
		'parent_item_colon'          => 'Parent Item:',
		'new_item_name'              => 'New Item Name',
		'add_new_item'               => 'Add New Item',
		'edit_item'                  => 'Edit Item',
		'update_item'                => 'Update Item',
		'view_item'                  => 'View Item',
		'separate_items_with_commas' => 'Separate items with commas',
		'add_or_remove_items'        => 'Add or remove items',
		'choose_from_most_used'      => 'Choose from the most used',
		'popular_items'              => 'Popular Items',
		'search_items'               => 'Search Items',
		'not_found'                  => 'Not Found',
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'events', array( '' ), $args );

}
add_action( 'init', 'event_items', 0 );



// Register Custom Post Type
function news_events() {

	$labels = array(
		'name'                => _x( 'News & Events', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'News & Event', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'News & Events', 'text_domain' ),
		'name_admin_bar'      => __( 'News & Event', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Item:', 'text_domain' ),
		'all_items'           => __( 'All News & Events', 'text_domain' ),
		'add_new_item'        => __( 'Add New News & Event', 'text_domain' ),
		'add_new'             => __( 'Add News & Event', 'text_domain' ),
		'new_item'            => __( 'New News & Event', 'text_domain' ),
		'edit_item'           => __( 'Edit News & Event', 'text_domain' ),
		'update_item'         => __( 'Update News & Event', 'text_domain' ),
		'view_item'           => __( 'View News & Event', 'text_domain' ),
		'search_items'        => __( 'Search News & Event', 'text_domain' ),
		'not_found'           => __( 'News & Events not found', 'text_domain' ),
		'not_found_in_trash'  => __( 'News & Events not found in Trash', 'text_domain' ),
	);
	$args = array(
		'label'               => __( 'News & Events', 'text_domain' ),
		'description'         => __( 'News & Events Description', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title','editor','thumbnail' ),
		'taxonomies'          => array('events'),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-megaphone',
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'newsevents', $args );

}

// Hook into the 'init' action
add_action( 'init', 'news_events', 0 );


// Register Custom Post Type
function Occasions_types() {

	$labels = array(
		'name'                  => _x( 'Occasions', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Occasion', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Occasion', 'text_domain' ),
		'name_admin_bar'        => __( 'Occasion Mgt', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Items', 'text_domain' ),
		'add_new_item'          => __( 'Add New Item', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Item', 'text_domain' ),
		'edit_item'             => __( 'Edit Item', 'text_domain' ),
		'update_item'           => __( 'Update Item', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Occasion', 'text_domain' ),
		'description'           => __( 'Post Type Description', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-nametag',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'occasions', $args );

}
add_action( 'init', 'Occasions_types', 0 );
