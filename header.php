<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php
	$post = get_post();
 wp_head() ?>
</head>
<body <?php echo 'class="' . join( ' ', str_replace("custom-background", "", get_body_class())) . '"'; ?>>
	<div id="scoutflik"><img src="<?php echo get_template_directory_uri() . '/images/Tab-vertical.png' ?>"></div>
	<?php

	if ( is_home() || is_archive() || !has_post_thumbnail($post->id) ) {
			 $get_header_image = get_header_image();
			
		}else{
			 $get_header_image = get_the_post_thumbnail_url($post->id, 'pageHeader'); 
			
		}
	

	if($get_header_image){
		$luminance = get_avg_luminance($get_header_image);
		//var_dump($luminance);
		if ($luminance > 100) {
			$imglum = "dark";
		}else{
			$imglum = "light";

		}
	}
	?>
	<header class="main-header <?php echo $imglum; ?> <?php echo $luminance; ?>" >
		<div id="header-image" class="<?php echo $imglum; ?> <?php echo $luminance; ?>" style="background-image: url(<?php echo $get_header_image; ?>);">
		<div id="hamburger">
			<span></span>
			<span></span>
			<span></span>
		</div>	
		<nav id="topMeny">
		  <?php wp_nav_menu(array('container_id'=> 'main-menu', 'theme_location'=>"main" )); 
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

			<?php the_kårnamn($imglum); ?>
			<p class="slogan"><?php echo get_bloginfo('description') ?></p>
			</div>
			<?php
	$ua = htmlentities($_SERVER['HTTP_USER_AGENT'], ENT_QUOTES, 'UTF-8');
	if (preg_match('~MSIE|Internet Explorer~i', $ua) || (strpos($ua, 'Trident/7.0') !== false && strpos($ua, 'rv:11.0') !== false)) {
		// do stuff for IE
		?>
		<div id="IE-ALLERT">
			<div class="ie-allert-content">
				<h2><?php echo ucwords(get_bloginfo('name'))?></h2>
				<div class="info">
					<p>Denna sidan stödjer inte <strong>Internet Explorer</strong>.</p>
					<p>denna sidan stöjer i stortsätt alla mobilers webbläsare så testa med den</p>
					<h3>Webbläsare som stöds</h3>
					<ul>
						<li>
							<a href="https://www.google.com/chrome/">Chrome</a>
						</li>
						<li>
							<a href="https://www.mozilla.org/en-US/firefox/new/">Firefox</a>
						</li>
						<li>
							<a href="https://www.microsoft.com/en-us/windows/microsoft-edge">Edge</a>
						</li>
						<li>
							<a href="https://support.apple.com/downloads/safari">Safari</a>
						</li>
						<li>
							<a href="https://www.opera.com/download">Opera</a>
						</li>
					</ul>
					<p>
						Varmt välkommen tillbaka med en modärnare och säkrare webbläsare!
					</p>
				</div>
			</div>
		</div>
	<?php
	die();
	}
	
	?>
	<?php get_template_part( 'inc/breadcrumbs', 'breadcrumbs' ); ?>
	</header>
	<?php 

	?>
