<?php get_header(); ?>
<?php the_post_thumbnail(); ?>
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
            <img src="images/instagram-icon-green.png">
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
