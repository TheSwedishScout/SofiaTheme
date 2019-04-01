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
//var_dump($post_categories );
// print_categorys($post);
?>
<div class="categorys">
	<?php
	$post_categories = get_the_category($post->id);
	foreach($post_categories as $cat){
		//Loop threw all the categorys
		$category_link = get_category_link( $cat->cat_ID );
		switch ($cat->name){
			case 'Kåren':
			case 'kåren':
			case 'Karen':
			case 'karen':
				//The logo
				if(has_custom_logo()){
					
					$custom_logo_id = get_theme_mod( 'custom_logo' );
					$logo_image = wp_get_attachment_image_src( $custom_logo_id , 'logo_size' );
					
					?>
					<a class="category image" href="<?php echo esc_url( $category_link ); ?>" title="Kategori <?php echo $cat->name;?>">
					<img alt="logo märke" src="<?php echo $logo_image[0] ?>">
					</a>
					<?php
				}else{
					/*echo "Scoutemblem";*/
					?>
					<a class="category image" href="<?php echo esc_url( $category_link ); ?>" title="Kategori <?php echo $cat->name;?>">
					<img alt="Scouterna svenska scouternas symbol" src="<?php echo get_template_directory_uri() . '/images/Scoutsymbolen_rgb.png' ?>">
					</a>
					<?php
					
					
				}
				break;
			case 'Spårare':
			case 'Sparare':
			case 'spårare':
			case 'sparare':
			case 'Spårarna':
			case 'Spararna':
			case 'spårarna':
			case 'spararna':
				?>
				<a class="category image" href="<?php echo esc_url( $category_link ); ?>" title="Kategori <?php echo $cat->name;?>">
				<img alt="Spårar avdelningens märke" src="<?php echo get_template_directory_uri()."/images/avdelningar/spårare.png"; ?>">
				</a>
				<?php
				break;
			case 'Upptäckare':
			case 'Upptackare':
			case 'upptackare':
			case 'Upptäckare':
			case 'Upptäckarna':
			case 'Upptackarna':
			case 'upptackarna':
			case 'Upptäckarna':
				?>
				<a class="category image" href="<?php echo esc_url( $category_link ); ?>" title="Kategori <?php echo $cat->name;?>">
				<img alt="Upptäckar avdelningens märke" src="<?php echo get_template_directory_uri()."/images/avdelningar/upptäckare.png"; ?>">
				</a>
				<?php
				break;
			case 'Äventyrare':
			case 'äventyrare':
			case 'aventyrare':
			case 'Äventyrarna':
			case 'äventyrarna':
			case 'aventyrarna':
				?>
				<a class="category image" href="<?php echo esc_url( $category_link ); ?>" title="Kategori <?php echo $cat->name;?>">
				<img alt="Äventyrar avdelningens märke" src="<?php echo get_template_directory_uri()."/images/avdelningar/äventyrare.png"; ?>">
				</a>
				<?php
				break;
			case 'Utmanare':
			case 'utmanare':
			case 'Utmanarna':
			case 'utmanarna':
				?>
				<a class="category image" href="<?php echo esc_url( $category_link ); ?>" title="Kategori <?php echo $cat->name;?>">
				<img alt="Utmanarnas avdelningens märke" src="<?php echo get_template_directory_uri()."/images/avdelningar/utmanare.png"; ?>">
				</a>
				<?php
				break;
			case 'Rover':
				?>
				<a class="category image" href="<?php echo esc_url( $category_link ); ?>" title="Kategori <?php echo $cat->name;?>">
				<img alt="Rover avdelningens märke" src="<?php echo get_template_directory_uri()."/images/avdelningar/rover.png"; ?>">
				</a>
				<?php
				break;
			default:
				?>
				<a class="category" href="<?php echo esc_url( $category_link ); ?>" title="Kategori <?php echo $cat->name;?>"><?php echo $cat->name;?></a>
				<?php
		}
	}
	?>
	</div>
<?php the_author_link(); the_date( '', ' ', '', true ); ?>
</footer>

