<?php 
get_header('home');
?>
<main>
<?php
	/*
	--avdelningar 
	nästa läger (kalender)
	senaste nyheten (post)
	*/
		?>
	
	
	<div class="frontpageNotes nr-<?php echo count($query->posts); ?>" >
<?php	
	$args = array(
		'post_type' => 'front_page',
		'posts_per_page' => 4,
		'post_in'  => get_option( 'sticky_posts' ),
	);
	$query = new WP_Query( $args );

	?>
	
	<?php

	if ( $query->have_posts() ) {
	while ( $query->have_posts() ) {
		$query->the_post(); 
		?>
		<div class="news" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<a href="<?php the_permalink()?>">

		<?php
		echo "<h2>";
		the_title();
		echo "</h2>";
		the_content();
		
		?>
		</a>
		<?php
		if(has_post_thumbnail()){
			the_post_thumbnail($post->ID, 'postits');
		} 
		 ?>
		</div>
		<?php
		}
	}

	/*

	nästa kår aktivitet (Kalender)
	4 costum cards + avdelningar
	Hyr bastan (Costum card)
	*/

?>
	</div> <!-- frontpagenotes-->
	<div class="page_post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>> 
	<?php
	if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 
		echo "<h1>".get_bloginfo( 'name' )."</h1>";
		the_content();
		}
	}
	?>
	</div>

	
	<?php  
	if ( have_posts() ) {
		while ( have_posts() ) {
			the_post(); 
			the_post_thumbnail();
		}
	}
	?>
</main>
<?php
get_footer();
?>