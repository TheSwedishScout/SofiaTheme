<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php
?>
    <h1 class="heading"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
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
            the_content();?>
        </div>
        <?php
        
        if(has_post_thumbnail()){
            the_post_thumbnail('wallsize');
        } 
    } else {
        //normal page
        ?><div class="exerpt">
        <?php the_content();
        if(is_singular()){
            comments_template();
        }
        ?>
        </div><?php
    }


    ?>

    <!-- template part footer in inc -->
    <?php get_template_part( 'inc/part-post-footer', 'post-footer' ); ?>
</article>