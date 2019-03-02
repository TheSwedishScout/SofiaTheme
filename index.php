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
		<h1 class="heading"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
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
		  	//echo("<div>image</div>");
		  }
		} else {
		  //normal page
		  ?><div class="exerpt">
			<?php the_content();
			if(is_singular()){
				comments_template();
			}
			?>
			</div><?php
		}
		
		?>
		
		<footer>
		<?php
			/* $defaults = array(
				'before'           => '<p>' . __( 'Pages:', 'twentyfourteen' ),
				'after'            => '</p>',
				'link_before'      => '',
				'link_after'       => '',
				'next_or_number'   => 'number',
				'separator'        => ' ',
				'nextpagelink'     => __( 'Next page', 'twentyfourteen'),
				'previouspagelink' => __( 'Previous page', 'twentyfourteen' ),
				'pagelink'         => '%',
				'echo'             => 1
			); */
		
				wp_link_pages();
				//var_dump(get_the_tags($post->id));
				$post_categories = get_the_category($post->id);
				//var_dump($post_categories );
					
				foreach($post_categories as $cat){
					//Loop threw all the categorys
					// Get the URL of this category
					$category_link = get_category_link( $cat->cat_ID );
					?>
					<a class="category" href="<?php echo esc_url( $category_link ); ?>" title="<?php echo $cat->name;?>"><?php echo $cat->name;?></a>
					<?php
				}
		?>
			<?php the_author_link(); the_date( '', ' ', '', true ); ?>
		</footer>
		</article>
		<?php
	} // end while
} // end if
	
	if ( get_next_posts_link() ){
		next_posts_link( 'Äldre inlägg', 10 );
	}
	if ( get_previous_posts_link() ) {
		previous_posts_link( 'Nyare inlägg', 10 );
	}
				
			
	get_template_part( 'sidebar', 'index' );
?>
</main>
<?php
get_footer();
?>