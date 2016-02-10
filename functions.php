<?php
//adds new css-files
function wpt_theme_styles(){
    wp_enqueue_style( 'skeleton_css', get_template_directory_uri() . '/css/skeleton.css');
    wp_enqueue_style( 'style-new', get_template_directory_uri() . '/css/style-new.css');

}

add_action('wp_enqueue_scripts', 'wpt_theme_styles' );


function our_widgets_init(){
    register_sidebar([
        'name' => 'Sidebar',
        'id' => 'sidebar1',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widget-headline">',
        'after_title' => '</h4>'
    ]);
    register_sidebar([
        'name' => 'Footer',
        'id' => 'footer1'
    ]);
    register_sidebar([
        'name' => 'Footer',
        'id' => 'footer2'
    ]);
    register_sidebar([
        'name' => 'Footer',
        'id' => 'footer3'
    ]);

  
}

add_action('widgets_init', 'our_widgets_init');

//navigation menu

register_nav_menus([
    'primary' => 'Primary Menu',
    'footer' => 'Footer Menu'


]);


//adds image settings in admin-panel
    add_theme_support('post-thumbnails');
    add_image_size('small_thumbnail', 180, 120, true);
    add_image_size('banner_image', 960, 320, true);
    add_image_size('banner_small', 627.188, 150, true);

    
    //till galleri-pluginet
    if ( ! isset( $content_width ) )
    $content_width = 1920;



add_filter( 'the_content_more_link', 'modify_read_more_link' );
function modify_read_more_link() {
return '<a class="more-link" href="' . get_permalink() . '">Läs mer >></a>';
}



?>