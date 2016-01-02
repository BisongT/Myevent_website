<?php
// Register Custom taxonomy
function Occasion_items() {

	$labels = array(
		'name'                  => 'myoccasions',
		'singular_name'         => 'myoccasion',
		'menu_name'             => 'Myoccasions',
		'parent_item'          	=> 'parent_item',
		'parent_item_colon'     => 'Parent Item:',
		'all_items'             => 'All myoccasions',
		'add_new_item'          => 'Add New Occasion',
		'add_new'               => 'Add New',
		'new_item'              => 'New Item',
		'edit_item'             => 'Edit Item',
		'update_item'           => 'Update Item',
		'view_item'             => 'View Item',
		'search_items'          => 'Search Item',
		'separate_items_with_commas' => 'Separate items with commas',
		'add_or_remove_items'        => 'Add or remove items',
		'choose_from_most_used'      => 'Choose from the most used',
		'popular_items'              => 'Popular Items',
		'search_items'               => 'Search Items',
		'not_found'                  => 'Not Found',
		);

	$args = array(
		'label'                 => __( 'Myoccasion', 'text_domain' ),
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
	register_taxonomy( 'myoccasions', array( '' ), $args );

}
add_action( 'init', 'Occasion_items', 0 );



// Register Custom Post Type
function News_Occasions() {

	$labels = array(
		'name'                  => _x( 'News & Occasions', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'News & Occasion', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'News & Occasions', 'text_domain' ),
		'name_admin_bar'        => __( 'Occasion Mgt', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All News & occasions', 'text_domain' ),
		'add_new_item'          => __( 'Add News & Occasion', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New News & Occasion', 'text_domain' ),
		'edit_item'             => __( 'Edit News & Occasion', 'text_domain' ),
		'update_item'           => __( 'Update News & Occasion', 'text_domain' ),
		'view_item'             => __( 'View News & Occasion', 'text_domain' ),
		'search_items'          => __( 'Search News & Occasions', 'text_domain' ),
		'not_found'             => __( 'News & Occasions Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'News & Occasions Not found in Trash', 'text_domain' ),

	);
	$args = array(
		'label'                 => __( 'Occasion', 'text_domain' ),
		'description'           => __( 'Post Type Description', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array('title','editor','thumbnail' ),
		'taxonomies'            => array( 'myoccasions' ),
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

//Hook into the 'init' action
add_action( 'init', 'News_Occasions', 0 );
