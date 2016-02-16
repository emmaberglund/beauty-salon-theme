<?php
//adds new css-files
function wpt_theme_styles(){
    wp_enqueue_style( 'skeleton_css', get_template_directory_uri() . '/css/skeleton.css');
    wp_enqueue_style( 'style-new', get_template_directory_uri() . '/css/style-new.css');

}

add_action('wp_enqueue_scripts', 'wpt_theme_styles' );


function add_my_script() {
    wp_enqueue_script(
        'script', // name your script so that you can attach other scripts and de-register, etc.
        get_template_directory_uri() . '/js/script.js', // this is the location of your script file
        array('jquery') // this array lists the scripts upon which your script depends
    );
}

add_action( 'wp_enqueue_scripts', 'add_my_script' );


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
        'name' => 'Footer1',
        'id' => 'footer1'
    ]);
    register_sidebar([
        'name' => 'Footer2',
        'id' => 'footer2'
    ]);
    register_sidebar([
        'name' => 'Footer3',
        'id' => 'footer3'
    ]);
    register_sidebar([
        'name' => 'FooterMap',
        'id' => 'footermap'
    ]);
    register_sidebar([
        'name' => 'ContentOffer1',
        'id' => 'contentoffer1',
        'class' => 'content-offers'
    ]);
    register_sidebar([
        'name' => 'ContentOffer2',
        'id' => 'contentoffer2',
        'class' => 'content-offers'
    ]);
    register_sidebar([
        'name' => 'ContentOffer3',
        'id' => 'contentoffer3',
        'class' => 'content-offers'
    ]);
    register_sidebar([
        'name' => 'ContentOffer4',
        'id' => 'contentoffer4',
        'class' => 'content-offers'
    ]);
    register_sidebar([
        'name' => 'IntroductionFrontPage',
        'id' => 'introductionfrontpage',
        'class' => 'introduction'
    ]);
    register_sidebar([
        'name' => 'Instagram',
        'id' => 'instagram',
        'class' => 'instagram'
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

function logo_customize_register( $wp_customize ) {
    $wp_customize->add_setting( 'logo' ); // Add setting for logo uploader

    // Add control for logo uploader (actual uploader)
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'logo', array(
        'label'    => __( 'Upload Logo (replaces text)', 'logo' ),
        'section'  => 'title_tagline',
        'settings' => 'logo',
    ) ) );
}
add_action( 'customize_register', 'logo_customize_register' );

function tcx_register_theme_customizer( $wp_customize ) {

    $wp_customize->add_setting(
        'tcx_menu_color',
        array(
            'default'     => '#fff'
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'menu_color',
            array(
                'label'      => __( 'Menu Color', 'tcx' ),
                'section'    => 'colors',
                'settings'   => 'tcx_menu_color'
            )
        )
    );

    $wp_customize->add_setting(
        'tcx_menu_color_hover',
        array(
            'default'     => 'pink'
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'menu_color_hover',
            array(
                'label'      => __( 'Menu Color Hover', 'tcx' ),
                'section'    => 'colors',
                'settings'   => 'tcx_menu_color_hover'
            )
        )
    );

    $wp_customize->add_setting(
        'tcx_section_color',
        array(
            'default'     => 'blue'
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'section_color',
            array(
                'label'      => __( 'Section Color', 'tcx' ),
                'section'    => 'colors',
                'settings'   => 'tcx_section_color'
            )
        )
    );

}
add_action( 'customize_register', 'tcx_register_theme_customizer' );


add_action( 'wp_head', 'tcx_customizer_css');
function tcx_customizer_css() {
  ?>
    <style type="text/css">
        nav ul li a { color: <?php echo get_theme_mod( 'tcx_menu_color' ); ?>; }
        nav ul li a:hover { color: <?php echo get_theme_mod( 'tcx_menu_color_hover' ); ?>; }
        .introduction { background-color: <?php echo get_theme_mod( 'tcx_section_color' ); ?>; }
    </style>
  <?php
}
add_action( 'wp_head', 'tcx_customizer_css' );




?>
