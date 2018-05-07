<?php 
// Register Custom Post Type
function frontpage_post_type() {

	$labels = array(
		'name'                  => _x( 'Första sidans', 'Post Type General Name', 'sofiascoutkar' ),
		'singular_name'         => _x( 'Första sidan', 'Post Type Singular Name', 'sofiascoutkar' ),
		'menu_name'             => __( 'Första Sidan', 'sofiascoutkar' ),
		'name_admin_bar'        => __( 'Första Sidan', 'sofiascoutkar' )
	);
	$args = array(
		'label'                 => __( 'Första sidan', 'sofiascoutkar' ),
		'description'           => __( 'Posts on first page', 'sofiascoutkar' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'front_page', $args );

}
add_action( 'init', 'frontpage_post_type', 0 );
?>