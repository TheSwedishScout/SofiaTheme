<?php 
get_header();
?>
<main>
<?php
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 
		//
		// Post Content here
		
		?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<h1 class="heading"><?php the_title(); ?></h1>
		<?php
		if ( is_home() ) {
		  //echo ' blog page';
		  ?><div class="exerpt">
			<?php the_excerpt();?>
			</div>
			<?php

		  if(has_post_thumbnail()){
		  	the_post_thumbnail('wallsize');
		  	//echo "string";
		  } 
		  else{
		  	echo("<div>image</div>");
		  }
		} else {
		  //normal page
		  ?><div  class="exerpt">
			<?php the_content();?>
			</div><?php
		}
		?>
		
		<footer>
			Senast uppdaterad: <?php  the_modified_time("j F Y") ?>
		</footer>
		</article>
		<?php
	} // end while
} // end if
?>
<div id="pageSidebar">
	<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
	    <ul id="sidebar">
	        <?php dynamic_sidebar( 'sidebar-1' ); ?>
	    </ul>
	<?php endif; ?>
</div>
</main>
<?php
get_footer();
?>