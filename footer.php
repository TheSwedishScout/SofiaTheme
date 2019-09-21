<?php the_avdelningarna('footer-aria'); ?>
<footer>
		<?php if ( is_active_sidebar( 'contact' ) ) : ?>
		    <ul id="footer-sidebar">
		        <?php dynamic_sidebar( 'contact' ); ?>
		    </ul>
		<?php endif; ?>
	<div>
		<?php if ( is_active_sidebar( 'action' ) ) : ?>
	    <div class="action-btn">
	        <?php dynamic_sidebar( 'action' ); ?>
	    </div>
		<?php endif; ?>
	</div>
	<div class="social-aria"><?php
	if (!empty(get_option( 'facebook' ))){
		?>
		<a href="<?php echo esc_attr( get_option( 'facebook' ) )?>"><img src="<?php echo  get_template_directory_uri()."/images/social/facebook.png"; ?>"></a>
		<?php
		
	}
	if (!empty(get_option( 'instagram' ))){
		?>
		<a href="<?php echo esc_attr( get_option( 'instagram' ) )?>"> <img src="<?php echo  get_template_directory_uri()."/images/social/instagram.png"; ?>"></a> 
		<?php
		
	}
	if (!empty(get_option( 'twitter' ))){
		?>
		<a href="<?php echo esc_attr( get_option( 'twitter' ) )?>"> <img src="<?php echo  get_template_directory_uri()."/images/social/twitter.png"; ?>"></a> 
		<?php
		
	}
	if (!empty(get_option( 'googleplus' ))){
		?>
		<a href="<?php echo esc_attr( get_option( 'googleplus' ) )?>"> <img src="<?php echo  get_template_directory_uri()."/images/social/google plus.png"; ?>"></a> 
		<?php
		
	}
	if (!empty(get_option( 'youtube' ))){
		?>
		<a href="<?php echo esc_attr( get_option( 'youtube' ) )?>"> <img src="<?php echo  get_template_directory_uri()."/images/social/youtube.png"; ?>"></a> 
		<?php
		
	}

	?></div>
	<div><?php the_kårnamn() ?></div>
	<div>Tema skapat av Max Timje för Sofia scoutkår</div>
</footer>

<?php
wp_footer();
?>
</body>
</html>
