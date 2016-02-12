<footer>
    <div class="row footer">
        <div class="four columns">
            <?php dynamic_sidebar('Footer1'); ?>
        </div>



        <div class="four columns">
            <?php dynamic_sidebar('Footer2'); ?>
        </div>



        <div class="four columns">
            <?php dynamic_sidebar('Footer3'); ?>

        </div>


    <div class="twelve columns"><p class="center">&copy; <?php bloginfo('author');?> <?php the_time('Y');?></p></div>

        </div>



</footer>




<?php wp_footer([
    'theme_location' => 'footer'


]); ?>

    </body>
</html>
