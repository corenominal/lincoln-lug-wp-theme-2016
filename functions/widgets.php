<?php
/**
 * Include all files in widgets dir
 */
foreach ( glob( get_template_directory() . '/functions/widgets/*.php' ) as $widget )
{
    require_once( $widget );
}