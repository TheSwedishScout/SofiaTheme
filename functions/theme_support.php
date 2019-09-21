<?php
function sofia_max_theme_setup() {
	add_image_size( 'logo_size', 100, 100, false );
	add_image_size( 'wallsize', 872 );
	add_image_size( 'postits', 665, 300, array('center', 'center') );
	add_image_size( 'pageHeader', 1920, 300, true );
	
	
	/* Add theme support for:
		* automatic title tags
		* featured images
		* title-tags
		* Costum logo
		* costum header
		*/
		//add_theme_support( 'custom-background');// Enable admin to set custom background images in 'appearance > background'
		add_theme_support('title-tag');
		add_theme_support('post-thumbnails');
		add_theme_support( 'title-tag' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'custom-logo', array(
			'height'      => 100,
			'width'       => 100,
			'flex-height' => true,
			'flex-width'  => true,
			'header-text' => array( 'site-title', 'site-description' ),
			) );
			$defaults = array(
				'video' => false,
			);
	add_theme_support( 'custom-header', $defaults );
	add_editor_style();
}
add_action( 'after_setup_theme', 'sofia_max_theme_setup' );
?>
