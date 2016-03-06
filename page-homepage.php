<?php
get_header();
the_post();
echo the_content();

// Test FAQs
// WP_Query arguments
$args = array (
	'post_type'              => array( 'faq' ),
	'post_status'            => array( 'published' ),
	'posts_per_page'         => '100',
	'order'                  => 'ASC',
	'orderby'                => 'date',
);

// The Query
$query = new WP_Query( $args );

// The Loop
if ( $query->have_posts() ) {
	while ( $query->have_posts() ) {
		$query->the_post();
		echo '<li>';
		echo the_title();
		echo the_content();
		echo '</li>';
	}
} else {
	// no posts found
}

// Restore original Post Data
wp_reset_postdata();

get_sidebar();
get_footer();