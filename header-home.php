<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head() ?>
</head>
<body <?php echo 'class="' . join( ' ', str_replace("custom-background", "", get_body_class())) . '"'; ?>>
	<div id="scoutflik"><img src="<?php echo get_template_directory_uri() . '/images/Tab-vertical.png' ?>"></div>
	<?php
	$img = get_header_image();
	$luminance = get_avg_luminance($img);
	//var_dump($luminance);
	if ($luminance > 100) {
		$imglum = "dark";
	}else{
		$imglum = "light";

	}
	 ?>
<header class="main-header <?php echo $imglum; ?>" style="background-image: url(<?php header_image(); ?>);">
	<h1>
	<?php 
	the_kårnamn();
	?>
	</h1>
	<?php if ( is_active_sidebar( 'action' ) ) : ?>
	    <div class="action-btn">
	        <?php dynamic_sidebar( 'action' ); ?>
	    </div>
	<?php endif; ?>
	<!--<button>action</button>-->
	
		<div id="hamburger">
			<span></span>
			<span></span>
			<span></span>
		</div>
	<nav id="topMeny">
	  <?php wp_nav_menu('main'); ?>
	</nav>
</header>
<?php
the_avdelningarna();
?>