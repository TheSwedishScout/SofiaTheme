<?php
function sofia_max_admin_page(){
	add_theme_page( "Theme settings", "Scouterna", "manage_options", "Scout_max", 'sofia_max_theme_create_page', '', 110 );
	add_theme_page( 'Scout_max', 'Theme options', 'generaloptions', 'manage_options', 'scout_max_options', 'sofia_max_theme_create_page');
	//add_submenu_page( $parent_slug, $page_title, $menu_title, $capability, $menu_slug, '' );
	add_action( 'admin_init', 'sofia_max_cusom_settings' );
}
add_action( 'admin_menu', 'sofia_max_admin_page' );

function sofia_max_cusom_settings(){

	//Social
	register_setting( 'Scout_settings_group_social', 'facebook' );
	register_setting( 'Scout_settings_group_social', 'instagram' );
	register_setting( 'Scout_settings_group_social', 'twitter' );
	register_setting( 'Scout_settings_group_social', 'googleplus' );
	register_setting( 'Scout_settings_group_social', 'youtube' );
	add_settings_section( 'sofia-max-social-media', 'Sociala medier', 'sofia_max_sociala_medier_options', 'Scout_max' );
	add_settings_field( 'facebook-link', 'facebook', 'sofia_max_insert_social_media', 'Scout_max', 'sofia-max-social-media', array( 'for' => 'facebook', 'type'=>"text" ));
	add_settings_field( 'instagram-link', 'instagram', 'sofia_max_insert_social_media', 'Scout_max', 'sofia-max-social-media', array( 'for' => 'instagram', 'type'=>"text" ));
	add_settings_field( 'twitter-link', 'twitter', 'sofia_max_insert_social_media', 'Scout_max', 'sofia-max-social-media', array( 'for' => 'twitter', 'type'=>"text" ));
	add_settings_field( 'googleplus-link', 'googleplus', 'sofia_max_insert_social_media', 'Scout_max', 'sofia-max-social-media', array( 'for' => 'googleplus', 'type'=>"text" ));
	add_settings_field( 'youtube-link', 'youtube', 'sofia_max_insert_social_media', 'Scout_max', 'sofia-max-social-media', array( 'for' => 'youtube', 'type'=>"text" ));

	
	//avdelningar
	register_setting( 'Scout_settings_group_social', 'bäver' );
	register_setting( 'Scout_settings_group_social', 'spårare' );
	register_setting( 'Scout_settings_group_social', 'upptäckare' );
	register_setting( 'Scout_settings_group_social', 'äventyrare' );
	register_setting( 'Scout_settings_group_social', 'utmanare' );
	register_setting( 'Scout_settings_group_social', 'rover' );
	add_settings_section( 'sofia-max-Avdelningar', 'avdelningar', 'sofia_max_avdelnigar_sidor', 'Scout_max_avdelningar' );
	add_settings_field( 'bäver-link', 'bäver', 'sofia_max_insert_link', 'Scout_max_avdelningar', 'sofia-max-Avdelningar', array( 'for' => 'bäver', 'type'=>"text" ));
	add_settings_field( 'spårare-link', 'spårare', 'sofia_max_insert_social_media', 'Scout_max_avdelningar', 'sofia-max-Avdelningar', array( 'for' => 'spårare', 'type'=>"text" ));
	add_settings_field( 'upptäckare-link', 'upptäckare', 'sofia_max_insert_social_media', 'Scout_max_avdelningar', 'sofia-max-Avdelningar', array( 'for' => 'upptäckare', 'type'=>"text" ));
	add_settings_field( 'äventyrare-link', 'äventyrare', 'sofia_max_insert_social_media', 'Scout_max_avdelningar', 'sofia-max-Avdelningar', array( 'for' => 'äventyrare', 'type'=>"text" ));
	add_settings_field( 'utmanare-link', 'utmanare', 'sofia_max_insert_social_media', 'Scout_max_avdelningar', 'sofia-max-Avdelningar', array( 'for' => 'utmanare', 'type'=>"text" ));
	add_settings_field( 'rover-link', 'rover', 'sofia_max_insert_social_media', 'Scout_max_avdelningar', 'sofia-max-Avdelningar', array( 'for' => 'rover', 'type'=>"text" ));
	


}

function sofia_max_sociala_medier_options()
{
	echo "Länkar till sociala medier som kåren använder";
}
function sofia_max_avdelnigar_sidor(){
	echo "Länkar till de olika avdelningarna för snabb åtkomst till de sidorna";
	return "true";
}
function sofia_max_insert_social_media($args){
	$info = esc_attr( get_option( $args['for'] ) );
	?>
	<input type="text" name="<?php echo $args['for'] ?>" placeholder="<?php echo $args['for'] ?> link" value="<?php echo $info; ?>">
	<?php
}
function sofia_max_insert_link($args){
	$info = esc_attr( get_option( $args['for'] ) );
	?>
	<input type="text" name="<?php echo $args['for'] ?>" placeholder="<?php echo $args['for'] ?> link" value="<?php echo $info; ?>">
	<?php
}


function sofia_max_theme_create_page(){
	?>
	<h1>Theme Options</h1>
	<?php settings_errors(); ?>
	<form method="POST" action="options.php">
		<?php
			settings_fields( 'Scout_settings_group_social' );
			do_settings_sections( "Scout_max" );
			do_settings_sections( "Scout_max_avdelningar" );
			submit_button();
		 ?>
		
	</form>
	<?php
}
?>