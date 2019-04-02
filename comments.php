<div id="comments"> 
    <?php
        $default_posts_per_page = get_option( 'posts_per_page' );
    ?>
    <ul class="comments">
        <?php
            wp_list_comments();
        ?>
    </ul>
    <div class="coment-pagenation">
        <?php
            paginate_comments_links( array(
                'prev_text' => '&laquo;&laquo;'.__('Äldre komentarer', 'sofiascoutkar'),
                'next_text' => __('Nyare komentarer', 'sofiascoutkar').'&raquo;&raquo;'
            ));
        ?>
    </div>
    <?php
        comment_form(); 
    ?>
</div>