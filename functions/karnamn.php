<?php
function the_kårnamn(){
	//$karnamn = str_replace("scoutkår", "", get_bloginfo( 'name' ));
	$karnamn = explode("scoutkår", utf8_encode(strtolower(utf8_decode(get_bloginfo( 'name' )))));
	$karnamn2 = utf8_encode(strtolower(utf8_decode(get_bloginfo( 'name' ))));
	?>
	<div class="karnamn logo">
	
	<a href="<?php echo get_home_url(); ?>" >

		<span class="before"><?php echo $karnamn[0]?> </span>
		<?php
		if(has_custom_logo()){

			$custom_logo_id = get_theme_mod( 'custom_logo' );
			$logo_image = wp_get_attachment_image_src( $custom_logo_id , 'logo_size' );

			?><img alt="logo märke" src="<?php echo $logo_image[0] ?>"><?php
		}else{
			/*echo "Scoutemblem";*/
			?><img alt="Scouterna svenska scouternas symbol" src="<?php echo get_template_directory_uri() . '/images/Scoutsymbolen_rgb.png' ?>"><?php


		}
		if (strpos($karnamn2, 'scoutkår') !== false) {
			echo '<span class="after" > Scoutkår</span>';
		}

	//echo $karnamn[1]; ?></a></div><?php
}
?>
