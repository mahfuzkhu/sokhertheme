<?php
/**
 * Sokher theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Sokher_theme
 * @since 1.0
 */

/**
 * Sokher theme only works in WordPress 4.7 or later.
 */
if ( version_compare( $GLOBALS['wp_version'], '4.7-alpha', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
	return;
}

function sokhertheme_setup(){
	load_textdomain('sokhertheme',get_template_directory().'/lang');
	add_theme_support("autometic-feed-links");
	add_theme_support("post_thumbnail");

	add_theme_support("html5", array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	));

	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'audio',
	) );

	add_theme_support("title-tag");

	add_theme_support("custom-background",array(
		'default-color'          => '',
		'default-image'          => '',
		'default-repeat'         => '',
		'default-position-x'     => '',
		'default-attachment'     => '',
		'wp-head-callback'       => '_custom_background_cb',
		'admin-head-callback'    => '',
		'admin-preview-callback' => ''
	) );

	add_theme_support("custom-header",array(
	'width' => '580px',
	'height' => '200px',
	'flex-width'  => true,

  ) );

	add_theme_support("custom-header-uploads");
	add_theme_support( 'custom-logo', array(
		'width'       => 250,
		'height'      => 250,
		'flex-width'  => true,
	) );
	add_image_size( 'twentyseventeen-featured-image', 2000, 1200, true );
	add_image_size( 'twentyseventeen-thumbnail-avatar', 100, 100, true );

}

add_action("after_setup_theme","sokhertheme_setup");
