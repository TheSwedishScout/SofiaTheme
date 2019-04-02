<?php 
/**
 * Template Name: Fullbrädd
*/
get_header();
?>
<main>
<?php
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 
		//
		// Post Content here
		get_template_part( 'inc/post', 'the_post' );
	} // end while
} // end if
?>

</main>
<?php
get_footer();
?>