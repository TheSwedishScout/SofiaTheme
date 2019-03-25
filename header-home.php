<!DOCTYPE html>
<html <?php language_attributes(); ?>>
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
	<?php 
		wp_nav_menu(array( 'theme_location'=>"main" ));
	?>
	</nav>
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
</header>
<?php
the_avdelningarna();
?>


