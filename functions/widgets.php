<?php
/**
 * Register widgets areas for the Theme
 */
if ( function_exists( 'register_sidebar' ) ) {
	register_sidebar( array(
		'name' => 'Footer Last',
		'id'   => 'llug-aside-column-one-widget',
		'description'   => 'Final footer widget.',
		'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>'
	) );
}

/**
 * Include all files in widgets dir
 */
foreach ( glob( get_template_directory() . '/functions/widgets/*.php' ) as $widget )
{
    require_once( $widget );
}