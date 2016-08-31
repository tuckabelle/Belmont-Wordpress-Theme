<?php
/**
 * Belmont functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Belmont
 */

if ( !function_exists( 'belmont_setup' ) ): /**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */ 
    function belmont_setup()
    {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on Belmont, use a find and replace
         * to change 'belmont' to the name of your theme in all the template files.
         */
        load_theme_textdomain( 'belmont', get_template_directory() . '/languages' );
        
        // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );
        
        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support( 'title-tag' );
        
        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support( 'post-thumbnails' );
        
        // This theme uses wp_nav_menu() in one location.
        register_nav_menus( array(
             'primary' => esc_html__( 'Primary', 'belmont' ) 
        ) );
        
        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support( 'html5', array(
             'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption' 
        ) );
        
        // Set up the WordPress core custom background feature.
        add_theme_support( 'custom-background', apply_filters( 'belmont_custom_background_args', array(
             'default-color' => 'ffffff',
            'default-image' => '' 
        ) ) );
    }
endif;
add_action( 'after_setup_theme', 'belmont_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function belmont_content_width()
{
    $GLOBALS[ 'content_width' ] = apply_filters( 'belmont_content_width', 640 );
}
add_action( 'after_setup_theme', 'belmont_content_width', 0 );



/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function belmont_widgets_init()
{
    register_sidebar( array(
         'name' => esc_html__( 'Sidebar', 'belmont' ),
        'id' => 'sidebar-1',
        'description' => esc_html__( 'Add widgets here.', 'belmont' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>' 
    ) );
}
add_action( 'widgets_init', 'belmont_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function belmont_scripts()
{
    
    wp_register_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(
         'jquery' 
    ), '3.0.0' );
    wp_enqueue_script( 'bootstrap' );
    
    
    wp_register_style( "bootstrap", get_template_directory_uri() . "/css/bootstrap.min.css", array(), "1.0", "all" );
    wp_enqueue_style( 'bootstrap' );
    

    
    //Add Miso font
    wp_enqueue_style( 'belmont-local-fonts', get_template_directory_uri() . '/fonts/Miso.css' );
    
    // Load fontawesome
    wp_enqueue_style( 'belmont-fontawesome', get_template_directory_uri() . '/fonts/font-awesome.min.css' );
    
    //Add Font Awsome icons
    wp_enqueue_style( 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' );
    
    
    //Add Google Fonts
    wp_enqueue_style( 'belmont-google-fonts', 'https://fonts.googleapis.com/css?family=Martel' );
    
    
    wp_enqueue_style( 'belmont-style', get_stylesheet_uri() );
    
    //MagnificPopup 
    
    wp_register_style( 'belmont-magnific_popup_style', get_template_directory_uri() . '/inc/magnific-popup/magnific-popup.css', array(
         'belmont' 
    ) );
    wp_enqueue_style( 'belmont-magnific_popup_style' );
    
    wp_register_script( 'belmont-magnific_popup_script', get_template_directory_uri() . '/inc/magnific-popup/jquery.magnific-popup.min.js', array(
         'jquery' 
    ) );
    wp_enqueue_script( 'belmont-magnific_popup_script' );
    
    wp_register_script( 'belmont-magnific_init_script', get_template_directory_uri() . '/inc/magnific-popup/jquery.magnific-popup-init.js', array(
         'jquery' 
    ) );
    wp_enqueue_script( 'belmont-magnific_init_script' );
    
    
    wp_enqueue_style( 'belmont-style', get_stylesheet_uri() );
    
    
    wp_enqueue_script( 'belmont-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
    
    
    wp_enqueue_script( 'belmont-jsfunctions', get_template_directory_uri() . '/js/functions.js', array( 'jquery' ), '20120206', true );
    
    
    //Smooth scroll
   // wp_enqueue_script( 'belmont-onepagenav', get_template_directory_uri() . '/js/jquery.nav.js', array(
     //    'jquery' 
    //), '3.0.0', true );
    
    
    
    
    
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'belmont_scripts' );




// Register Theme Features
function custom_theme_features()
{
    
    // Add theme support for Custom 
    
    $_args = array(
         'default-image' => '',
        'width' => 1600,
        'height' => 620,
        'flex-width' => true,
        'flex-height' => true,
        'uploads' => true,
        'random-default' => true,
        'header-text' => true,
        'default-text-color' => 'white',
        
        'admin-preview-callback' => 'image' 
    );
    add_theme_support( 'custom-header', $header_args );
}
add_action( 'after_setup_theme', 'custom_theme_features' );


/**
 * Get the bootstrap!
 */
if ( file_exists(  get_template_directory() . '/inc/Custom-Meta-Boxes/init.php' ) ) {
  require_once  get_template_directory() . '/inc/Custom-Meta-Boxes/init.php';
} elseif ( file_exists(  get_template_directory() . '/inc/Custom-Meta-Boxes/init.php' ) ) {
  require_once get_template_directory() . '/inc/Custom-Meta-Boxes/init.php';
}

// Add to functions.php.
require_once( get_template_directory() . '/inc/Custom-Meta-Boxes/example-functions2.php' );


/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';



/* Add default pages on theme install */
add_action( 'after_setup_theme', 'create_pages' );
function create_pages()
{
    
    $default_pages   = array(
         array(
             'title' => 'Menu',
            'content' => 'Here is the menu for today' 
        ),
        array(
             'title' => 'Events',
            'content' => 'This is the place where you learn about events' 
        ),
        array(
             'title' => 'About',
            'content' => 'About the Shop!' 
        ),
        array(
             'title' => 'Gallery',
            'content' => 'Pretty pictures of the food' 
        ),
        array(
             'title' => 'Contact',
            'content' => 'Visit us! Contact us!' 
        ) 
    );
    $existing_pages  = get_pages();
    $existing_titles = array();
    
    foreach ( $existing_pages as $page ) {
        $existing_titles[] = $page->post_title;
    }
    
    foreach ( $default_pages as $new_page ) {
        if ( !in_array( $new_page[ 'title' ], $existing_titles ) ) {
            // create post object
            $add_default_pages = array(
                 'post_title' => $new_page[ 'title' ],
                'post_content' => $new_page[ 'content' ],
                'post_status' => 'publish',
                'post_type' => 'page' 
            );
            
            // insert the post into the database
            $result = wp_insert_post( $add_default_pages, $error );
        }
    }
}


/**
 * Add title back to images
 */
function belmont_add_title_to_attachment( $markup, $id )
{
    $att = get_post( $id );
    return str_replace( '<a ', '<a title="' . $att->post_title . '" ', $markup );
}
add_filter( 'wp_get_attachment_link', 'belmont_add_title_to_attachment', 10, 5 );



add_filter( 'image_send_to_editor', 'wp_image_wrap_init', 10, 8 );
function wp_image_wrap_init( $html, $id, $caption, $title, $align, $url, $size, $alt )
{
    return '<div id="wp-image-wrap-' . $id . '" class="wp-image-wrap">' . $html . '</div>';
}