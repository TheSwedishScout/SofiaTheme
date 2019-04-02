<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php
?>
    <h1 class="heading"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
    <?php
    
        if(has_post_thumbnail()){
            ?>
            <div class="exerpt">
            <?php
        }else{
            ?>
            <div class="exerpt imageless">
            <?php
        }
            the_excerpt();?>
            <a href="<?php the_permalink(); ?>"><?php echo __('Läs mer', 'sofiascoutkar')?></a>
        </div>
        <?php
        
        if(has_post_thumbnail()){
            the_post_thumbnail('wallsize');
        } 


    ?>

    <!-- template part footer in inc -->
    <?php get_template_part( 'inc/part-post-footer', 'post-footer' ); ?>
</article>