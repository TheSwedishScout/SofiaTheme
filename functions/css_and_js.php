<?php
function sofia_max_additional_custom_styles() {

/*Enqueue The Styles*/
wp_enqueue_style( 'Null', get_template_directory_uri() . '/css/null.css' );
wp_enqueue_style( 'wpcore', get_template_directory_uri() . '/css/wpCore.css' );
wp_enqueue_style( 'SofiaScoutkårMain', get_template_directory_uri() . '/css/main.css' );
wp_enqueue_style( 'SofiaScoutkårPost', get_template_directory_uri() . '/css/post.css' );
wp_enqueue_style( 'SofiaScoutkårHeader', get_template_directory_uri() . '/css/header.css' );
wp_enqueue_style( 'SofiaScoutkårBody', get_template_directory_uri() . '/css/body.css' );
wp_enqueue_style( 'SofiaScoutkårFooter', get_template_directory_uri() . '/css/footer.css' );
wp_enqueue_style( 'SofiaScoutkårWidget', get_template_directory_uri() . '/css/widget.css' );
wp_enqueue_style( 'SofiaScoutkårInput', get_template_directory_uri() . '/css/input.css' );
wp_enqueue_style( 'SofiaScoutkårcomment', get_template_directory_uri() . '/css/comment.css' );
wp_enqueue_style( 'SofiaScoutkårCategorysAndTags', get_template_directory_uri() . '/css/catsAndTags.css' );
wp_enqueue_style( 'SofiaScoutkårBreadbrumbs', get_template_directory_uri() . '/css/breadcrumbs.css' );
if(is_page_template('parent-page.php')){
wp_enqueue_style( 'SofiaScoutkårParentPage', get_template_directory_uri() . '/css/parent.css' );
}
wp_enqueue_style( 'my-theme-ie', get_template_directory_uri() . "/css/ie.css" );
wp_style_add_data( 'my-theme-ie', 'conditional', 'IE' );


wp_enqueue_script("jquery");
wp_enqueue_script( 'SofiaScoutkårjs', get_template_directory_uri() . '/js/main.js' );
wp_enqueue_script( 'commentjs', get_template_directory_uri() . '/js/comments.js' );
if ( is_singular() ) wp_enqueue_script( "comment-reply" );


}

add_action( 'wp_enqueue_scripts', 'sofia_max_additional_custom_styles' );
?>
