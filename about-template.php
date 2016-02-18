<?php
/*
Template Name: About
*/
get_header();
$thumb_id = get_post_thumbnail_id();
$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
$thumb_url = $thumb_url_array[0];
if(have_posts()) :
    while (have_posts()) : the_post();
        $pages = get_pages(array('child_of'=> $post->ID ,'sort_order'=> 'asc', 'sort_column' => 'menu_order'));
        ?>
        <?php
        $mypages = get_pages( array( 'child_of' => $post->ID, 'sort_column' => 'post_date', 'sort_order' => 'desc' ) );

        foreach( $mypages as $page ) {
            $content = $page->post_content;
            if ( ! $content ) // Check for empty page
                continue;

            $content = apply_filters( 'the_content', $content );
            ?>
            <div class="container">
                <div class="row below-header">
                    <div class="entry"><?php echo $content; ?></div>
                </div>
            </div>
        <?php
        }
        ?>
    <?php
    endwhile;
else :
    echo "No content available!";
endif;
get_footer();
?>
