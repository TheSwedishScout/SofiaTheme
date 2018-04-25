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
	<?php
		if (!empty(get_option( 'bäver' ))){
			?>
			<li>
				<a href="<?= get_option( 'bäver' );?>">
					<img src="<?= get_template_directory_uri()."/images/avdelningar/bäver.png"; ?>">
					Spårarna
				</a>
			</li>
			<?php
			
		}
		if (!empty(get_option( 'spårare' ))){
			?>
			<li>
				<a href="<?= get_option( 'spårare' );?>">
					<img src="<?= get_template_directory_uri()."/images/avdelningar/spårare.png"; ?>">
					Spårarna
				</a>
			</li>
			<?php
			
		}
		if (!empty(get_option( 'upptäckare' ))){
			?>
			<li>
				<a href="<?= get_option( 'upptäckare' );?>">
					<img src="<?= get_template_directory_uri()."/images/avdelningar/upptäckare.png"; ?>">
					Spårarna
				</a>
			</li>
			<?php
			
		}
		if (!empty(get_option( 'äventyrare' ))){
			?>
			<li>
				<a href="<?= get_option( 'äventyrare' );?>">
					<img src="<?= get_template_directory_uri()."/images/avdelningar/äventyrare.png"; ?>">
					Spårarna
				</a>
			</li>
			<?php
			
		}
		if (!empty(get_option( 'utmanare' ))){
			?>
			<li>
				<a href="<?= get_option( 'utmanare' );?>">
			<img src="<?= get_template_directory_uri()."/images/avdelningar/utmanare.png"; ?>">
					Spårarna
				</a>
			</li>
			<?php
			
		}
		if (!empty(get_option( 'rover' ))){
			?>
			<li>
				<a href="<?= get_option( 'rover' );?>">
			<img src="<?= get_template_directory_uri()."/images/avdelningar/rover.png"; ?>">
					Spårarna
				</a>
			</li>
			<?php
			
		}
	?>
</ul>