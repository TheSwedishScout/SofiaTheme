<?php 
get_header();
?>
<main>
	<div class="articles">
<?php
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 
		//
		// Post Content here
		get_template_part( 'inc/post', 'the_post' );

	} // end while
} // end if
	
	if ( get_next_posts_link() ){
		next_posts_link( 'Äldre inlägg', 10 );
	}
	if ( get_previous_posts_link() ) {
		previous_posts_link( 'Nyare inlägg', 10 );
	}
	?>
	<!-- end of articles -->
	</div> 
	<?php
	
		get_template_part( 'sidebar', 'sidebar' );		
?>
</main>
<?php
get_footer();
?>