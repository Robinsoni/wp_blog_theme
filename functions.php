<?php

require get_template_directory() . '/inc/customizer.php';

function geeta_load_scripts(){
    
    wp_register_style('style',get_template_directory_uri() . '/dist/app.css',[],1,'all');
    wp_enqueue_style('style');
    wp_register_script('app',get_template_directory_uri() . '/src/app.js',['jquery'],1,true);
    wp_enqueue_script('app'); 
    wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css', array(), '5.15.4' );
    
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap', array(), null );
    wp_enqueue_script( 'dropdown', get_template_directory_uri() . '/js/dropdown.js', array(), '1.0', true );
    wp_enqueue_script('jquery');
}
add_action( 'wp_enqueue_scripts', 'geeta_load_scripts' );

function geeta_config(){

    $textdomain = 'geeta';
    load_theme_textdomain( $textdomain, get_template_directory() . '/languages/' );

    register_nav_menus(
        array(
            'geeta_main_menu' => esc_html__( 'Main Menu', 'geeta' ),
            'geeta_footer_menu' => esc_html__( 'Footer Menu', 'geeta' )
        )
    ); 
    $args = array(
        'height'    => 225,
        'width'     => 1920
    );
    add_theme_support( 'custom-header', $args );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-logo', array(
        'width' => 200,
        'height'    => 110,
        'flex-height'   => true,
        'flex-width'    => true
    ) );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ));
    add_theme_support( 'title-tag' );

    add_theme_support( 'align-wide' );
    add_theme_support( 'responsive-embeds' );
    add_theme_support( 'editor-styles' );
    add_editor_style( 'style-editor.css' );
}


/**  ---------------   Set templates for parent category and singl post ---------------------------- */
function custom_template_hierarchy($template) {
   
    if (is_category()) {
        $category = get_queried_object();
        if ($category->parent == 0) {
            // This is a top-level category (chapter)
            $template = locate_template('category-chapter.php');
        }
    } elseif (is_single()) { 
        $categories = get_the_category();
        foreach ($categories as $category) {
            if ($category->parent != 0) {
                // This post belongs to a child category (lesson)
                $template = locate_template('single-verse.php');
                break;
            }
        }
    }
    return $template;
}
add_filter('category_template', 'custom_template_hierarchy');
add_filter('single_template', 'custom_template_hierarchy');

/** --------------------------- ------------------ ------------------------------------------------------- */



add_action( 'after_setup_theme', 'geeta_config', 0 );

add_action( 'widgets_init', 'geeta_sidebars' );

function geeta_sidebars(){
    register_sidebar(
        array(
            'name'  => esc_html__( 'Blog Sidebar', 'geeta' ),
            'id'    => 'sidebar-blog',
            'description'   => esc_html__( 'This is the Blog Sidebar. You can add your widgets here.', 'geeta' ),
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>'
        )
    );
    register_sidebar(
        array(
            'name'  => esc_html__( 'Service 1', 'geeta' ),
            'id'    => 'services-1',
            'description'   => esc_html__( 'First Service Area', 'geeta' ),
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>'
        )
    );
    register_sidebar(
        array(
            'name'  => esc_html__( 'Service 2', 'geeta' ),
            'id'    => 'services-2',
            'description'   => esc_html__( 'Second Service Area', 'geeta' ),
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>'
        )
    );
    register_sidebar(
        array(
            'name'  => esc_html__( 'Service 3', 'geeta' ),
            'id'    => 'services-3',
            'description'   => esc_html__( 'Third Service Area', 'geeta' ),
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>'
        )
    );
}

if ( ! function_exists( 'wp_body_open' ) ){
	function wp_body_open() {
		do_action( 'wp_body_open' );
	}
}