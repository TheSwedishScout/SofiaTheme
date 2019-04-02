<?php
if ( ! isset( $content_width ) ) $content_width = 1362;
include 'inc/admin-function.php';
include 'inc/frontpage.php';
// Add Shortcode
/*function sofia_max_infobar( $atts , $content = null ) {

	// Attributes
	$atts = shortcode_atts(
		array(
			'rubrik' => 'Rubrik',
			'img' => '',
			'color' =>"",
		),
		$atts,
		'Infobar'
	);

	// kåd här

	// KOLLA efter bilder i content och se till att de hamnar för sigkälva så de hamnar i höger 
	$tor = "<div class='clear-action-box'></div>
			<div class='action-box' style='background-color:{$atts['color']}'>
				<div>
					<div>
					<h3>{$atts['rubrik']}</h3>
					<p>{$content}</p>
					</div>
					<img alt='{$atts['rubrik']}' src='{$atts['img']}'>
				</div>
			</div>";
	return $tor;

}
add_shortcode( 'Infobar', 'sofia_max_infobar' );
*/

function sofia_max_additional_custom_styles() {

    /*Enqueue The Styles*/
    wp_enqueue_style( 'Null', get_template_directory_uri() . '/css/null.css' );
    wp_enqueue_style( 'wpcore', get_template_directory_uri() . '/css/wpCore.css' );
    wp_enqueue_style( 'SofiaScoutkårMain', get_template_directory_uri() . '/css/main.css' );
    wp_enqueue_style( 'SofiaScoutkårHeader', get_template_directory_uri() . '/css/header.css' );
    wp_enqueue_style( 'SofiaScoutkårBody', get_template_directory_uri() . '/css/body.css' );
    wp_enqueue_style( 'SofiaScoutkårFooter', get_template_directory_uri() . '/css/footer.css' );
    wp_enqueue_style( 'SofiaScoutkårWidget', get_template_directory_uri() . '/css/widget.css' );
	wp_enqueue_style( 'SofiaScoutkårInput', get_template_directory_uri() . '/css/input.css' );
	wp_enqueue_style( 'SofiaScoutkårcomment', get_template_directory_uri() . '/css/comment.css' );
	wp_enqueue_style( 'SofiaScoutkårCategorysAndTags', get_template_directory_uri() . '/css/catsAndTags.css' );
	wp_enqueue_style( 'SofiaScoutkårBreadbrumbs', get_template_directory_uri() . '/css/breadcrumbs.css' );
    if(is_page_template('parent-page.php')){
		wp_enqueue_style( 'SofiaScoutkårParentPage', get_template_directory_uri() . '/css/parent.css' );
	}
	wp_enqueue_style( 'my-theme-ie', get_template_directory_uri() . "/css/ie.css" );
	wp_style_add_data( 'my-theme-ie', 'conditional', 'IE' );
	
	
    wp_enqueue_script("jquery");
    wp_enqueue_script( 'SofiaScoutkårjs', get_template_directory_uri() . '/js/main.js' );
    wp_enqueue_script( 'commentjs', get_template_directory_uri() . '/js/comments.js' );
	if ( is_singular() ) wp_enqueue_script( "comment-reply" );


}

add_action( 'wp_enqueue_scripts', 'sofia_max_additional_custom_styles' );

/** - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
*
* Add a menu location
*/
add_action( 'after_setup_theme', 'sofia_max_register_primary_menu' );
 
function sofia_max_register_primary_menu() {
    //register_nav_menu( 'primary', __( 'Primary Menu', 'theme-text-domain' ) );
	register_nav_menu('main', 'The Main menu' );
}
/** - - - - - - - - - - - - - - - - - - - - - - - - - - - - -**/
function sofia_max_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Sid panel', 'sofiascoutkar' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Widgets i denna sidpanel visas på alla sidor förutom start sidan', 'sofiascoutkar' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );
    register_sidebar(array(
    	'name' 			=> __('action', 'sofiascoutkar' ),
        'id'            => 'action',
        'description'   => __( 'Action knapp i under kår namn. Ska bara vara en knapp!', 'sofiascoutkar' ),
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ));
    register_sidebar(array(
    	'name' 			=> __('Kontakt foten', 'sofiascoutkar' ),
        'id'            => 'contact',
        'description'   => __( 'kontaktinformation i foten', 'sofiascoutkar' ),
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ));
}
add_action( 'widgets_init', 'sofia_max_widgets_init' );





add_action( 'after_setup_theme', 'sofia_max_theme_setup' );
function sofia_max_theme_setup() {
	add_image_size( 'logo_size', 100, 100, false );
	add_image_size( 'wallsize', 872 );
	add_image_size( 'postits', 665, 300, array('center', 'center') );
	add_image_size( 'pageHeader', 1920, 300, true );


    /* Add theme support for:
	 * automatic title tags
	 * featured images
	 * title-tags
	 * Costum logo
	 * costum header
	*/
	//add_theme_support( 'custom-background');// Enable admin to set custom background images in 'appearance > background'
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
	add_theme_support( 'title-tag' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'custom-logo', array(
	    'height'      => 100,
	    'width'       => 100,
	    'flex-height' => true,
	    'flex-width'  => true,
	    'header-text' => array( 'site-title', 'site-description' ),
	) );
	$defaults = array(
	    'video' => false,
	);
	add_theme_support( 'custom-header', $defaults );
	add_editor_style();
}

function the_kårnamn()
{
	//$karnamn = str_replace("scoutkår", "", get_bloginfo( 'name' ));
	$karnamn = explode("scoutkår", utf8_encode(strtolower(utf8_decode(get_bloginfo( 'name' )))));
	$karnamn2 = utf8_encode(strtolower(utf8_decode(get_bloginfo( 'name' ))));
	?>
	<div class="karnamn logo">
	
	<a href="<?php echo get_home_url(); ?>" >

		<span class="before"><?php echo $karnamn[0]?> </span>
		<?php
		if(has_custom_logo()){

			$custom_logo_id = get_theme_mod( 'custom_logo' );
			$logo_image = wp_get_attachment_image_src( $custom_logo_id , 'logo_size' );

			?><img alt="logo märke" src="<?php echo $logo_image[0] ?>"><?php
		}else{
			/*echo "Scoutemblem";*/
			?><img alt="Scouterna svenska scouternas symbol" src="<?php echo get_template_directory_uri() . '/images/Scoutsymbolen_rgb.png' ?>"><?php


		}
		if (strpos($karnamn2, 'scoutkår') !== false) {
		    echo '<span class="after" > Scoutkår</span>';
		}

	//echo $karnamn[1]; ?></a></div><?php
}

function the_avdelningarna($class=""){
	?>
	<ul class="avdelningar-nav <?php echo$class; ?>">
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

function get_avg_luminance($filename, $num_samples=10) {
		$type = exif_imagetype($filename);
		//var_dump($type);
		//ini_set('memory_limit', '-1');
		switch ($type) {
			case IMAGETYPE_GIF:
				# code...
        		$img = imagecreatefromgif($filename);
				break;
			case IMAGETYPE_JPEG:

        		$img = imagecreatefromjpeg($filename);
				break;
			case IMAGETYPE_PNG:
        		$img = imagecreatefrompng($filename);

				break;
			default:
				var_dump($type);
				break;
		}

        $width = imagesx($img);
        $height = imagesy($img);

        $x_step = intval($width/$num_samples);
        $y_step = intval($height/$num_samples);

        $total_lum = 0;

        $sample_no = 1;

        for ($x=0; $x<$width; $x+=$x_step) {
            for ($y=0; $y<$height; $y+=$y_step) {

                $rgb = imagecolorat($img, $x, $y);
                $r = ($rgb >> 16) & 0xFF;
                $g = ($rgb >> 8) & 0xFF;
                $b = $rgb & 0xFF;

                // choose a simple luminance formula from here
                // http://stackoverflow.com/questions/596216/formula-to-determine-brightness-of-rgb-color
                $lum = ($r+$r+$b+$g+$g+$g)/6;

                $total_lum += $lum;

                // debugging code
     //           echo "$sample_no - XY: $x,$y = $r, $g, $b = $lum<br />";
                $sample_no++;
            }
        }

        // work out the average
        $avg_lum  = $total_lum/$sample_no;

        

        return $avg_lum;
	}
	
	
	?>
