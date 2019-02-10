<?php 
/**
 * Template Name: parent page
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
		
		?>
		<article>
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
		  ?><div class="exerpt">
			<?php the_content();?>
			</div><?php
		}
		?>
		<?php
		$args = array(
		    'post_type'      => 'page',
		    'posts_per_page' => -1,
		    'post_parent'    => $post->ID,
		    'order'          => 'ASC',
		    'orderby'        => 'menu_order'
		 );

		?>
			<ul id="child-pages">
				<?php
				$parent = new WP_Query( $args );
				if ( $parent->have_posts() ) : ?>
				    <?php while ( $parent->have_posts() ) : $parent->the_post(); ?>
					<li>
				    	<h1><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
				    	<p><?php the_excerpt(); ?></p>
					</li>
				    <?php endwhile; ?>
				<?php endif; wp_reset_postdata(); ?>
			</ul>
		<footer>
			Senast uppdaterad: <?php  the_modified_time("j F Y") ?>
		</footer>
		
		</article>
		<?php
	} // end while
} // end if
get_template_part( 'sidebar', 'page' );
?>
</main>
<?php
get_footer();
?>