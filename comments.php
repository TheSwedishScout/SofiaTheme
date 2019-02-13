<div id="comments"> 
<?php
    $default_posts_per_page = get_option( 'posts_per_page' );
    
    ?>
    <ul class="comments">
    <?php
    wp_list_comments();
    paginate_comments_links( array(
        'prev_text' => '&laquo;',
        'next_text' => '&raquo;'
    ));
    ?>
    </ul>
    <?php
    comment_form(); 
?>
</div>