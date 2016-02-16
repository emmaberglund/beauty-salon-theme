<?php get_header(); ?>
<div class="header-image"><?php the_post_thumbnail(); ?></div>
<div class="container">
    <div class="row">
        <div class="three columns offer">
            <?php dynamic_sidebar('ContentOffer1'); ?>
        </div>
        <div class="three columns offer">
            <?php dynamic_sidebar('ContentOffer2'); ?>
        </div>
        <div class="three columns offer">
            <?php dynamic_sidebar('ContentOffer3'); ?>
        </div>
        <div class="three columns offer">
            <?php dynamic_sidebar('ContentOffer4'); ?>
        </div>
    </div>

    <div class="row">
        <div class="twelve columns introduction">
            <?php dynamic_sidebar('IntroductionFrontPage'); ?>
        </div>
    </div>

    <div class="row">
        <div class="twelve columns introduction">

            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/instagram-icon-green.png" onmouseover="this.src='<?php echo get_template_directory_uri(); ?>/images/instagram-icon-black.png'" onmouseout="this.src='<?php echo get_template_directory_uri(); ?>/images/instagram-icon-green.png'" class="instagram-icon" alt="instagramIcon"></a>
            <?php dynamic_sidebar('Instagram'); ?>
        </div>
    </div>





        <div class="twelve columns">
            <?php
                if(have_posts()) :
                    while (have_posts()) : the_post(); ?>


            <p><?php the_content();?></p>

                <?php
                    endwhile;

                else :
                    echo "No content available!";

                endif;

            ?>
            </div>
        </div>
    </div>



                <?php get_footer(); ?>
