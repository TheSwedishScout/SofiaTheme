<?php
/** - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
*
* Add a menu location
*/
function sofia_max_register_primary_menu() {
    //register_nav_menu( 'primary', __( 'Primary Menu', 'theme-text-domain' ) );
	register_nav_menu('main', 'The Main menu' );
}
add_action( 'after_setup_theme', 'sofia_max_register_primary_menu' );
?>
