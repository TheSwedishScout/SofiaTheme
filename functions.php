<?php
if ( ! isset( $content_width ) ) $content_width = 1362;
include 'functions/admin-function.php';
include 'functions/avdelningar.php';
include 'functions/avg_lum.php';
include 'functions/css_and_js.php';
include 'functions/frontpage.php';
include 'functions/karnamn.php';
include 'functions/menus.php';
include 'functions/theme_support.php';
include 'functions/widget_areas.php';


























// Add Shortcode
/*function sofia_max_infobar( $atts , $content = null ) {

	// Attributes
	$atts = shortcode_atts(
		array(
			'rubrik' => 'Rubrik',
			'img' => '',
			'color' =>"",
		),
		$atts,
		'Infobar'
	);

	// kåd här

	// KOLLA efter bilder i content och se till att de hamnar för sigkälva så de hamnar i höger 
	$tor = "<div class='clear-action-box'></div>
			<div class='action-box' style='background-color:{$atts['color']}'>
				<div>
					<div>
					<h3>{$atts['rubrik']}</h3>
					<p>{$content}</p>
					</div>
					<img alt='{$atts['rubrik']}' src='{$atts['img']}'>
				</div>
			</div>";
	return $tor;

}
add_shortcode( 'Infobar', 'sofia_max_infobar' );
*/



/** - - - - - - - - - - - - - - - - - - - - - - - - - - - - -**/








	
	
	?>
