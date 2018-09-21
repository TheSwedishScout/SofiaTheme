<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php
	$post = get_post();
 wp_head() ?>
</head>
<body <?php echo 'class="' . join( ' ', str_replace("custom-background", "", get_body_class())) . '"'; ?>>
	<div id="scoutflik"><img src="<?= get_template_directory_uri() . '/images/Tab-vertical.png' ?>"></div>
	<header class="main-header" style="<?php
		if ( is_home() ) {
			?>
			background-image: url(<?php header_image(); ?>);
			<?php
		}else{
			?>
			background-image: url(<?= the_post_thumbnail_url('pageHeader'); ?>);
			<?php
		}
		?>">
		<div id="hamburger">
			<span></span>
			<span></span>
			<span></span>
		</div>	
		<nav id="topMeny">
		  <?php wp_nav_menu(array('menu' => 'main' , 'container_id'=> 'main-menu' )); 
			$post = get_post();
			if( is_page() ) { 
			        /* Get an array of Ancestors and Parents if they exist */
				$parents = get_post_ancestors( $post->ID );
			        /* Get the top Level page->ID count base 1, array base 0 so -1 */ 
				$id = ($parents) ? $parents[count($parents)-1]: $post->ID;
				/* Get the parent and set the $class with the page slug (post_name) */
			        $parent = get_post( $id );
				
			//var_dump($id);
			/*wp_list_pages( array(
			    'title_li'    => '',
			    'child_of'    => $parent->ID,
			    
			) );*/
			}
		  ?>
		  
		</nav>

		  <?php the_kårnamn(); ?>
	</header>
	<?php 

	?>