<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head() ?>
</head>
<body <?php echo 'class="' . join( ' ', str_replace("custom-background", "", get_body_class())) . '"'; ?>>
<header class="main-header" style="background-image: url(<?php header_image(); ?>);">
	
	<?php 
	the_kårnamn();
	?>
	<?php if ( is_active_sidebar( 'action' ) ) : ?>
	    <div class="action-btn">
	        <?php dynamic_sidebar( 'action' ); ?>
	    </div>
	<?php endif; ?>
	<!--<button>action</button>-->
	
	<nav id="topMeny">
	  <?php wp_nav_menu('main'); ?>
	</nav>
</header>
<ul class="avdelningar-nav">
	<li>
		Bävrarna
	</li>
	<li>
		<a href="avdelningar/sparare/">
			<img src="<?= get_template_directory_uri()."/images/avdelningar/spårare.png"; ?>">
			Spårarna
		</a>
	</li>
	<li>
		<a href="avdelningar/upptackare/">
			<img src="<?= get_template_directory_uri()."/images/avdelningar/upptäckare.png"; ?>">
			upptäckarna
		</a>
	</li>
	<li>
		<a href="avdelningar/aventyrarna/">
			<img src="<?= get_template_directory_uri()."/images/avdelningar/äventyrare.png"; ?>">
			Äventyranra
		</a>
	</li>
	<li>
		<a href="avdelningar/utmanarna/">
			<img src="<?= get_template_directory_uri()."/images/avdelningar/utmanare.png"; ?>">
			Utmanarna
		</a>
	</li>
	<li>
		<a href="avdelningar/rover-19/">
			<img src="<?= get_template_directory_uri()."/images/avdelningar/rover.png"; ?>">
			Rover
		</a>
	</li>
</ul>