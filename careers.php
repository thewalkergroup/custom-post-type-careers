<?php
/*
Plugin Name: Custom Post Type: Careers
Plugin URI: 
Description: Careers post type
Version: 1.0
Author: Michael W. Delaney
Author URI: 
License: MIT
*/
// Register Custom Post Type
function careers_post_type() {
	$labels = array(
		'name'                  => _x( 'Careers', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Career', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Careers', 'text_domain' ),
		'name_admin_bar'        => __( 'Career', 'text_domain' ),
		'archives'              => __( 'Careers Archives', 'text_domain' ),
		'parent_item_colon'     => __( 'Career Item:', 'text_domain' ),
		'all_items'             => __( 'All Careers', 'text_domain' ),
		'add_new_item'          => __( 'Add New Career', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Career', 'text_domain' ),
		'edit_item'             => __( 'Edit Career', 'text_domain' ),
		'update_item'           => __( 'Update Career', 'text_domain' ),
		'view_item'             => __( 'View Career', 'text_domain' ),
		'search_items'          => __( 'Search Career', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into Career', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Career', 'text_domain' ),
		'items_list'            => __( 'Careers list', 'text_domain' ),
		'items_list_navigation' => __( 'Careers list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter Career list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Career', 'text_domain' ),
		'description'           => __( 'Careers', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', ),
		'taxonomies'            => array( 'category' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-yes',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'careers', $args );
}
add_action( 'init', 'Grants_post_type', 0 );
