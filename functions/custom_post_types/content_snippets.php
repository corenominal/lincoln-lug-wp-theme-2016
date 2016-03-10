<?php
/**
 * Custom post type for content snippets
 */

function llug_register_post_type_content_snippet()
{
	
	$singular = 'Content Snippet';
	$plural = 'Content Snippets';
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
	        'menu_icon'           => 'dashicons-media-text',
	        'can_export'          => true,
	        'delete_with_user'    => false,
	        'hierarchical'        => false,
	        'has_archive'         => false,
	        'query_var'           => true,
	        'capability_type'     => 'page',
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
add_action( 'init', 'llug_register_post_type_content_snippet' );

/**
 * Return array of the content snippet to page template
 */
function get_content_snippet( $id )
{
	$data['title'] = 'No snippet title';
	$data['content'] = '<p>No snippet body.</p>';

	$args = array (
		'p'                      => $id,
		'post_type'              => array( 'content_snippet' ),
		'post_status'            => array( 'published' ),
	);

	$query = new WP_Query( $args );

	if ( $query->have_posts() )
	{
		while ( $query->have_posts() )
		{
			$query->the_post();
			$data['title'] = get_the_title();
			$data['content'] = get_the_content();
		}
	}

	return $data;

	wp_reset_postdata();
}

/**
 * Return array of the content snippet to page template
 */
function content_snippet( $id )
{

	$data['content'] = '<p>No snippet body.</p>';

	$args = array (
		'p'                      => $id,
		'post_type'              => array( 'content_snippet' ),
		'post_status'            => array( 'published' ),
	);

	$query = new WP_Query( $args );

	if ( $query->have_posts() )
	{
		while ( $query->have_posts() )
		{
			$query->the_post();
			the_content();
		}
	}

	wp_reset_postdata();
}