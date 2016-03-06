<?php
/**
 * Include all custom post types
 */
foreach ( glob( get_template_directory() . '/functions/custom_post_types/*.php' ) as $custom_post_type )
{
    require_once( $custom_post_type );
}