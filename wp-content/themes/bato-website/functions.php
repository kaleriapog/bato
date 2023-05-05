<?php

/**
 * bato-website functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package bato-website
 */



/* defines START */
define('_TP_', get_stylesheet_directory_uri()); //theme path
define('_IMAGES_', _TP_ . '/images'); //images path
/* defines END */

function bato_website_setup()
{
    /*
        * Make theme available for translation.
        * Translations can be filed in the /languages/ directory.
        * If you're building a theme based on bato-website, use a find and replace
        * to change 'bato-website' to the name of your theme in all the template files.
        */
    load_theme_textdomain('bato-website', get_template_directory() . '/languages');

    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');

    /*
        * Let WordPress manage the document title.
        * By adding theme support, we declare that this theme does not use a
        * hard-coded <title> tag in the document head, and expect WordPress to
        * provide it for us.
        */
    add_theme_support('title-tag');

    /*
        * Enable support for Post Thumbnails on posts and pages.
        *
        * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
        */
    add_theme_support('post-thumbnails');

    // This theme uses wp_nav_menu() in one location.
    register_nav_menus(
        array(
            'menu-header' => esc_html__('Primary', 'bato-website'),
        )
    );

    register_nav_menus(
        array(
            'social-media' => esc_html__('social', 'bato-website'),
        )
    );

    /*
        * Switch default core markup for search form, comment form, and comments
        * to output valid HTML5.
        */
    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        )
    );

    // Set up the WordPress core custom background feature.
    add_theme_support(
        'custom-background',
        apply_filters(
            'bato_website_custom_background_args',
            array(
                'default-color' => 'ffffff',
                'default-image' => '',
            )
        )
    );

    // Add theme support for selective refresh for widgets.
    add_theme_support('customize-selective-refresh-widgets');

    /**
     * Add support for core custom logo.
     *
     * @link https://codex.wordpress.org/Theme_Logo
     */
    add_theme_support(
        'custom-logo',
        array(
            'height'      => 250,
            'width'       => 250,
            'flex-width'  => true,
            'flex-height' => true,
        )
    );
}
add_action('after_setup_theme', 'bato_website_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function bato_website_content_width()
{
    $GLOBALS['content_width'] = apply_filters('bato_website_content_width', 640);
}
add_action('after_setup_theme', 'bato_website_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function bato_website_widgets_init()
{
    register_sidebar(
        array(
            'name'          => esc_html__('Sidebar', 'bato-website'),
            'id'            => 'sidebar-1',
            'description'   => esc_html__('Add widgets here.', 'bato-website'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
}
add_action('widgets_init', 'bato_website_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function bato_website_scripts()
{
    wp_enqueue_style('bato-website-style', get_stylesheet_uri());
    wp_style_add_data('bato-website-style', 'rtl', 'replace');

    // wp_enqueue_script( 'bato-website-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'bato_website_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
    require get_template_directory() . '/inc/jetpack.php';
}

// add custom color swatches
function my_mce4_options($init)
{

    $custom_colours = '
		"000000", "Black",
		"FF6600", "Orange",
		"008000", "Green",
		"0000FF", "Blue",
		"808080", "Gray",
		"FF0000", "Red",
		"800080", "Purple",
		"FFFF00", "Yellow",
		"FFFFFF", "White",
		"FF99CC", "Pink",
		"06FFFF", "Mark blue",
    ';

    // build colour grid default+custom colors
    $init['textcolor_map'] = '[' . $custom_colours . ']';

    // change the number of rows in the grid if the number of colors changes
    // 8 swatches per row
    $init['textcolor_rows'] = 4;
    $init['textcolor_cols'] = 6;

    return $init;
}
add_filter('tiny_mce_before_init', 'my_mce4_options');

// add svg

add_filter('upload_mimes', 'svg_upload_allow');

function svg_upload_allow($mimes)
{
    $mimes['svg']  = 'image/svg+xml';

    return $mimes;
}

add_filter('wp_check_filetype_and_ext', 'fix_svg_mime_type', 10, 5);

function fix_svg_mime_type($data, $file, $filename, $mimes, $real_mime = '')
{

    if (version_compare($GLOBALS['wp_version'], '5.1.0', '>='))
        $dosvg = in_array($real_mime, ['image/svg', 'image/svg+xml']);
    else
        $dosvg = ('.svg' === strtolower(substr($filename, -4)));

    if ($dosvg) {

        if (current_user_can('manage_options')) {

            $data['ext']  = 'svg';
            $data['type'] = 'image/svg+xml';
        } else {
            $data['ext'] = $type_and_ext['type'] = false;
        }
    }

    return $data;
}
add_action('wp_footer', 'scripts_bato');

function scripts_bato()
{

    wp_enqueue_script('connection_scripts_jquery', 'https://code.jquery.com/jquery-3.6.0.js');
    wp_enqueue_script('connection_scripts_iscroll',  get_template_directory_uri() . '/js/iscroll.js');
//    wp_enqueue_script('connection_scripts_overlayscrollbars',  get_template_directory_uri() . '/js/overlayscrollbars.mjs');
    wp_enqueue_script('connection_scripts_smooth-scrollbar',  get_template_directory_uri() . '/js/smooth-scrollbar.js');

    wp_enqueue_script('connection_scripts_main',  get_template_directory_uri() . '/js/main.js');

    if (!is_admin()) {
        wp_deregister_script('connection_scripts_jquery');
    }

    $template_slug = get_page_template_slug();
    if ($template_slug === 'home.php') {
        wp_enqueue_script('connection_script_splide', get_template_directory_uri() . '/js/splide.min.js');
        wp_enqueue_script('connection_script_tweenLite', get_template_directory_uri() . '/js/TweenLite.min.js');
        wp_enqueue_script('connection_script_tweenMax', get_template_directory_uri() . '/js/TweenMax.min.js');
        wp_enqueue_script('connection_script_splide-extension-grid', get_template_directory_uri() . '/js/splide-extension-grid.min.js');
        wp_enqueue_script('connection_script_splide_auto_scroll', get_template_directory_uri() . '/js/splide-extension-auto-scroll.min.js');
        wp_enqueue_script('connection_scripts-module', get_template_directory_uri() . '/js/home.js');

        //wp_enqueue_script('donation', get_template_directory_uri() . '/js/donation.js');
    }

    if ($template_slug === 'about.php') {
        wp_enqueue_script('connection_script_splide', get_template_directory_uri() . '/js/splide.min.js');
        //        wp_enqueue_script('connection_script_tweenLite', get_template_directory_uri() . '/js/TweenLite.min.js');
        //        wp_enqueue_script('connection_script_tweenMax', get_template_directory_uri() . '/js/TweenMax.min.js');
        wp_enqueue_script('connection_script_splide-extension-grid', get_template_directory_uri() . '/js/splide-extension-grid.min.js');
        // wp_enqueue_script('connection_script_splide_auto_scroll', get_template_directory_uri() . '/js/splide-extension-auto-scroll.min.js');
        wp_enqueue_script('connection_script_gsap', get_template_directory_uri() . '/js/gsap.js');
        wp_enqueue_script('connection_script_scroll-magic', get_template_directory_uri() . '/js/ScrollMagic.min.js');
        wp_enqueue_script('connection_script_scroll-magic_debug', get_template_directory_uri() . '/js/debug.addIndicators.min.js');
        wp_enqueue_script('connection_lottie', get_template_directory_uri() . '/js/lottie.min.js');
        wp_enqueue_script('connection_lottie-player', get_template_directory_uri() . '/js/lottie-player.js');
        wp_enqueue_script('connection_lottie-interactivity', get_template_directory_uri() . '/js/lottie-interactivity.min.js');
        wp_enqueue_script('connection_script_animation_gsap', get_template_directory_uri() . '/js/animation.gsap.js');

        wp_enqueue_script('connection_scripts-module', get_template_directory_uri() . '/js/about-scripts.js');


        //wp_enqueue_script('donation', get_template_directory_uri() . '/js/donation.js');
    }

    if ($template_slug === 'contact.php') {
        wp_enqueue_script('connection_scripts-module', get_template_directory_uri() . '/js/contact-scripts.js');
    }

    if ($template_slug === 'projects.php') {
        wp_enqueue_script('connection_script_gsap', get_template_directory_uri() . '/js/gsap.js');
        wp_enqueue_script('connection_script_scroll-magic', get_template_directory_uri() . '/js/ScrollMagic.min.js');
        wp_enqueue_script('connection_script_animation_gsap', get_template_directory_uri() . '/js/animation.gsap.js');
        wp_enqueue_script('connection_scripts-module', get_template_directory_uri() . '/js/projects-scripts.js');
    }

    if ($template_slug === 'privacy.php') {
        wp_enqueue_script('connection_scripts-module', get_template_directory_uri() . '/js/contact-scripts.js');
    }
}

add_action('wp_enqueue_scripts', 'style_splide');

function style_splide()
{
    wp_enqueue_style('connection_style', get_template_directory_uri() . '/splide.min.css');
    wp_enqueue_style('connection_style', get_template_directory_uri() . '/overlayscrollbars.min.css');

}

// REMOVE EMOJI ICONS
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

/*  DISABLE GUTENBERG STYLE IN HEADER */
function wps_deregister_styles()
{
    wp_dequeue_style('global-styles');
}
add_action('wp_enqueue_scripts', 'wps_deregister_styles', 100);

function wpassist_remove_block_library_css()
{
    wp_dequeue_style('wp-block-library');
}
add_action('wp_enqueue_scripts', 'wpassist_remove_block_library_css');


remove_action('wp_body_open', 'wp_global_styles_render_svg_filters');


/* insert image START */
function insertImage($file, $class = '', $width = 100, $height = 100, $return = 0)
{

    if (!empty($file)) {

        if (!is_array($file)) {
            $file_url = _IMAGES_ . '/' . $file;
            $file_title =  pathinfo($file, PATHINFO_FILENAME);
            $extension = pathinfo($file, PATHINFO_EXTENSION);
        } else {
            $file_url = $file['url'];
            $file_title = $file['alt'] ? $file['alt'] : $file['title'];
            $extension = pathinfo($file['filename'], PATHINFO_EXTENSION);
        }

        $context = stream_context_create(array(
            'http' => [
                'header' => 'Authorization: Basic ' . base64_encode("demo:a30599b78355")
            ],
            'ssl' => [
                'verify_peer' => false,
                'verify_peer_name' => false,
            ],
        ));

        if (!@file_get_contents($file_url, false, $context) === false) {
            if ($extension == 'svg') {
                $content = file_get_contents($file_url, false, $context);
                $content = str_replace('<?xml version="1.0" encoding="UTF-8"?>', '', $content);
                if ($return) {
                    return $content;
                }

                echo $content;
            } else {
                $content = '<img 
                  class="' . $class . '" 
                  src="' . $file_url . '" 
                  alt="' . $file_title . '"
                  width="' . $width . '"
                  height="' . $height . '" 
              />';

                if ($return) {
                    return $content;
                }

                echo $content;
            }
        }
    }
}
/* insert image END */


add_filter('script_loader_tag', 'add_type_attribute', 10, 3);
function add_type_attribute($tag, $handle, $src)
{
    // if not your script, do nothing and return original $tag
    if ('connection_scripts-module' !== $handle && 'connection_scripts_main' !== $handle) {
        return $tag;
    }
    // change the script tag by adding type="module" and return it.
    $tag = '<script type="module" src="' . esc_url($src) . '"></script>';
    return $tag;
}


add_filter('acf/settings/save_json', 'my_acf_json_save_point');

function my_acf_json_save_point($path)
{

    // update path
    $path = get_stylesheet_directory() . '/acf-json';


    // return
    return $path;
}

add_filter('acf/settings/load_json', 'my_acf_json_load_point');

function my_acf_json_load_point($paths)
{

    // remove original path (optional)
    unset($paths[0]);


    // append path
    $paths[] = get_stylesheet_directory() . '/acf-json';


    // return
    return $paths;
}
