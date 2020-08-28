<?php
function the_avdelningarna($class=""){
	?>
	<ul class="avdelningar-nav <?php echo $class; ?>">
	<?php
		if (!empty(get_option( 'bäver' ))){
			?>
			<li>
				<a href="<?php echo get_option( 'bäver' );?>">
					<img alt="Bäver avdelningens märke" src="<?php echo get_template_directory_uri()."/images/avdelningar/bäver.png"; ?>">
					<p>Bäver</p>
				</a>
			</li>
			<?php

		}
		if (!empty(get_option( 'minispårare' ))){
			?>
			<li>
				<a href="<?php echo get_option( 'minispårare' );?>">
					<img alt="miinspårarnas avdelningens märke" src="<?php echo get_template_directory_uri()."/images/avdelningar/minispårare.png"; ?>">
					<p>Minispårarna</p>
				</a>
			</li>
			<?php

		}
		if (!empty(get_option( 'spårare' ))){
			?>
			<li>
				<a href="<?php echo get_option( 'spårare' );?>">
					<img alt="Spårar avdelningens märke" src="<?php echo get_template_directory_uri()."/images/avdelningar/spårare.png"; ?>">
					<p>Spårarna</p>
				</a>
			</li>
			<?php

		}
		if (!empty(get_option( 'upptäckare' ))){
			?>
			<li>
				<a href="<?php echo get_option( 'upptäckare' );?>">
					<img alt="Upptäckar avdelningens märke" src="<?php echo get_template_directory_uri()."/images/avdelningar/upptäckare.png"; ?>">
					<p>Upptäckarna</p>
				</a>
			</li>
			<?php

		}
		if (!empty(get_option( 'äventyrare' ))){
			?>
			<li>
				<a href="<?php echo get_option( 'äventyrare' );?>">
					<img alt="Äventyrar avdelningens märke" src="<?php echo get_template_directory_uri()."/images/avdelningar/äventyrare.png"; ?>">
					<p>Äventyrarna</p>
				</a>
			</li>
			<?php

		}
		if (!empty(get_option( 'utmanare' ))){
			?>
			<li>
				<a href="<?php echo get_option( 'utmanare' );?>">
			<img alt="Utmanarnas avdelningens märke" src="<?php echo get_template_directory_uri()."/images/avdelningar/utmanare.png"; ?>">
					<p>Utmanarna</p>
				</a>
			</li>
			<?php

		}
		if (!empty(get_option( 'rover' ))){
			?>
			<li>
				<a href="<?php echo get_option( 'rover' );?>">
			<img alt="Rover avdelningens märke" src="<?php echo get_template_directory_uri()."/images/avdelningar/rover.png"; ?>">
					<p>Rover</p>
				</a>
			</li>
			<?php

		}
	?>
</ul>
<?php
}
?>
