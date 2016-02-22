<?php
/*
Template Name: Om
*/
get_header();

$thumb_id = get_post_thumbnail_id();
$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
$thumb_url = $thumb_url_array[0];


if(have_posts()) :
    while (have_posts()) : the_post();


        $pages = get_pages(array('child_of'=> $post->ID ,'sort_order'=> 'asc', 'sort_column' => 'menu_order'));
        ?>
        <main>
            <div class="container">
                <div class="row below-header">
                    <h5>Boka tid hos någon av vår personal</h5>
                    <div class="about-us">
                    <?php
                    $count = 1;
                    foreach ($pages as $page) {
                        ?>
                        <div class="three columns workers">
                            <div class="employes">

                            <p><?php echo $page->post_content; ?></p>
                        </div>
                        </div>


                          <?php if($count % 4 == 0) {?>
                                </div>
                                <div class="row">
                                <div class="about-us">
                          <?php }
                        $count++;
                    }
                    ?>
                </div>
                </div>
            </div>
        </main>
    <?php
    endwhile;

else :
    echo "No content available!";

endif;

get_footer();
?>
