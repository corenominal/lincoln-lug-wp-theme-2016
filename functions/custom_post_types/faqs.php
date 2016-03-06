<?php
/**
 * Custom post type for snippets
 */

function llug_register_post_type_faq()
{
	
	$singular = 'FAQ';
	$plural = 'FAQs';
	$slug = str_replace( ' ', '_', strtolower( $singular ) );

	$labels = array(
		'name' 					=> $plural,
		'singular_name' 		=> $singular,
		'add_new' 				=> 'Add New',
		'add_new_item'  		=> 'Add New ' . $singular,
		'edit'		        	=> 'Edit',
		'edit_item'	        	=> 'Edit ' . $singular,
		'new_item'	        	=> 'New ' . $singular,
		'view' 					=> 'View ' . $singular,
		'view_item' 			=> 'View ' . $singular,
		'search_term'   		=> 'Search ' . $plural,
		'parent' 				=> 'Parent ' . $singular,
		'not_found' 			=> 'No ' . $plural .' found',
		'not_found_in_trash' 	=> 'No ' . $plural .' in Trash'
		);

	$args = array(
			'labels'              => $labels,
	        'public'              => true,
	        'publicly_queryable'  => false,
	        'exclude_from_search' => true,
	        'show_in_nav_menus'   => true,
	        'show_ui'             => true,
	        'show_in_menu'        => true,
	        'show_in_admin_bar'   => true,
	        'menu_position'       => 20,
	        'menu_icon'           => 'dashicons-admin-page',
	        'can_export'          => true,
	        'delete_with_user'    => false,
	        'hierarchical'        => false,
	        'has_archive'         => false,
	        'query_var'           => true,
	        'capability_type'     => 'post',
	        'map_meta_cap'        => true,
	        'rewrite'             => false,
	        'supports'            => array( 
	        	'title', 
	        	'editor', 
	        	'author'
	        )
	);
	register_post_type( $slug, $args );
}
add_action( 'init', 'llug_register_post_type_faq' );
