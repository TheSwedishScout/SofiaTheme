<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php
$link = get_the_permalink();
if(function_exists( 'get_field' )){

  if(get_field('innehals_sida'))
  {
    $link = get_field('innehals_sida')['url'];
  }
}
?>
  <h1 class="heading"><a href="<?php echo $link; ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
  <?php
  if ( is_home() || is_front_page( ) ) {
    if(has_post_thumbnail()){
      ?>
      <div class="exerpt">
      <?php
    }else{
      ?>
      <div class="exerpt imageless">
      <?php
    }
    the_content();
    ?>
    </div>
    <?php
    
    if(has_post_thumbnail()){
      ?>
      <a class="feture-image" href="<?php echo $link; ?>" title="<?php (!empty(esc_html(get_the_post_thumbnail_caption()))) ? esc_html(get_the_post_thumbnail_caption()) : the_title() ?>">
      <?php the_post_thumbnail('wallsize');?>
    </a>
    <?php
    } 
  } else {
    //normal page
    ?><div class="exerpt">
    <?php the_content();
    // tags
    if(is_singular()){
      comments_template();
    }
    ?>
    </div>
    <?php
  }
  ?>

  <!-- template part footer in inc -->
  <?php get_template_part( 'inc/part-post-footer', 'post-footer' ); ?>
</article>
