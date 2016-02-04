<?php

/* Template Name: Small Width */

?>

<?php get_header(); ?>

<?php
    if(have_posts()) :
        while (have_posts()) : the_post(); ?>
    <article class="small-width-content">
   
<h2><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2>
<p><?php the_content();?></p>

    <?php
        endwhile;

    else :
        echo "No content available!";

    endif;

?>
</article>
   
<?php get_footer(); ?>
