<ul class="comments-aria">
    <?php 

        $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
        $number = 5;
        $offset = ($paged-1) * $number;

        //Get only the approved comments 
        $args = array(
            'status' => 'approve',
            'number' => $number,
            'offset' => $offset,
            'paged' => $paged
        );
         
        // The comment Query
        $comments_query = new WP_Comment_Query;
        $comments = $comments_query->query( $args );
         
        // Comment Loop
        if ( $comments ) {
            foreach ( $comments as $comment ) {
                //var_dump($comment);
                echo '<p>' . $comment->comment_content . '</p>';
            }
        } else {
            //echo 'No comments found.';
        }
        var_dump(paginate_comments_links());
        $args = array(
            'base'               => '%_%',
            'format'             => '?paged=%#%',
            'total'              => 1,
            'current'            => 0,
            'show_all'           => false,
            'end_size'           => 1,
            'mid_size'           => 2,
            'prev_next'          => true,
            'prev_text'          => __('« Previous'),
            'next_text'          => __('Next »'),
            'type'               => 'plain',
            'add_args'           => false,
            'add_fragment'       => '',
            'before_page_number' => '',
            'after_page_number'  => ''
        );
        var_dump(paginate_links( $args));
        echo "osj";

        //wp_list_comments();
    ?>
    
</ul>
    <?php
    comment_form(); 
?>