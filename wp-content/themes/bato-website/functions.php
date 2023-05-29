<?php

require_once(dirname(__FILE__) . '/core/functions-insert.php');

// REMOVE EMOJI ICONS
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');



/* REMOVE GUTENBERG STYLES START */
add_action( 'wp_enqueue_scripts', 'smartwp_remove_wp_block_library_css' );
function smartwp_remove_wp_block_library_css() {
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('wp-block-library-theme');
    wp_dequeue_style('global-styles');
    wp_dequeue_style('classic-theme-styles');
}
/* REMOVE GUTENBERG STYLES END */



/* menus START */
add_action('after_setup_theme', 'bato_website_setup');
function bato_website_setup() {
    register_nav_menus(
        array(
            'menu-header' => esc_html__('Primary', 'bato-website'),
            'social-media' => esc_html__('social', 'bato-website'),
        )
    );
}
/* menus END */



add_filter('script_loader_tag', 'add_type_attribute', 10, 3);
function add_type_attribute($tag, $handle, $src) {
    if ('connection_scripts-module' !== $handle && 'connection_scripts_main' !== $handle) {
        return $tag;
    }
    $tag = '<script type="module" src="' . esc_url($src) . '"></script>';
    return $tag;
}

add_filter('acf/settings/save_json', 'my_acf_json_save_point');
function my_acf_json_save_point($path) {
    $path = get_stylesheet_directory() . '/acf-json';
    return $path;
}

add_filter('acf/settings/load_json', 'my_acf_json_load_point');
function my_acf_json_load_point($paths) {
    unset($paths[0]);
    $paths[] = get_stylesheet_directory() . '/acf-json';
    return $paths;
}

/* add js/css START */
add_filter( 'wpcf7_load_css', '__return_false' );
add_action('wp_footer', 'enqueue_js_css');
function enqueue_js_css() {
    
    wp_enqueue_style('bato-website-style', get_stylesheet_uri());

    wp_enqueue_script('connection_scripts_smooth-scrollbar',  get_template_directory_uri() . '/js/smooth-scrollbar.js',array(),null,true);
    wp_enqueue_script('connection_scripts_main',  get_template_directory_uri() . '/js/main.js',array(),null,true);


    $template_slug = get_page_template_slug();

    if (is_front_page()) {
        wp_enqueue_script('connection_script_tweenLite', get_template_directory_uri() . '/js/TweenLite.min.js',array(),null,true);
        wp_enqueue_script('connection_script_tweenMax', get_template_directory_uri() . '/js/TweenMax.min.js',array(),null,true);
        wp_enqueue_script('connection_scripts-module', get_template_directory_uri() . '/js/home.js',array(),null,true);
    }

    if ($template_slug === 'about.php') {
        wp_enqueue_style('connection_style', get_template_directory_uri() . '/css/swiper-bundle.min.css');

        wp_enqueue_script('connection_script_swiper', get_template_directory_uri() . '/js/swiper-bundle.min.js',array(),null,true);
        wp_enqueue_script('connection_script_gsap', get_template_directory_uri() . '/js/gsap.js',array(),null,true);
        wp_enqueue_script('connection_script_scroll-magic', get_template_directory_uri() . '/js/ScrollMagic.min.js',array(),null,true);
        wp_enqueue_script('connection_script_scroll-magic_debug', get_template_directory_uri() . '/js/debug.addIndicators.min.js',array(),null,true);
        wp_enqueue_script('connection_lottie', get_template_directory_uri() . '/js/lottie.min.js',array(),null,true);
        wp_enqueue_script('connection_lottie-player', get_template_directory_uri() . '/js/lottie-player.js',array(),null,true);
        wp_enqueue_script('connection_lottie-interactivity', get_template_directory_uri() . '/js/lottie-interactivity.min.js',array(),null,true);
        wp_enqueue_script('connection_script_animation_gsap', get_template_directory_uri() . '/js/animation.gsap.js',array(),null,true);
        wp_enqueue_script('connection_scripts-module', get_template_directory_uri() . '/js/about-scripts.js',array(),null,true);
    }

    if ($template_slug === 'contact.php') {
        wp_enqueue_script('connection_scripts-module', get_template_directory_uri() . '/js/contact-scripts.js',array(),null,true);
    }

    if ($template_slug === 'projects.php') {
        wp_enqueue_style('connection_style', get_template_directory_uri() . '/css/swiper-bundle.min.css');

        wp_enqueue_script('connection_script_swiper', get_template_directory_uri() . '/js/swiper-bundle.min.js',array(),null,true);        
        wp_enqueue_script('connection_script_gsap', get_template_directory_uri() . '/js/gsap.js',array(),null,true);
        wp_enqueue_script('connection_script_scroll-magic', get_template_directory_uri() . '/js/ScrollMagic.min.js',array(),null,true);
        wp_enqueue_script('connection_script_animation_gsap', get_template_directory_uri() . '/js/animation.gsap.js',array(),null,true);
        wp_enqueue_script('connection_scripts-module', get_template_directory_uri() . '/js/projects-scripts.js',array(),null,true);
    }

    if ($template_slug === 'privacy.php') {
        wp_enqueue_script('connection_scripts-module', get_template_directory_uri() . '/js/privacy.js',array(),null,true);
    }
}
/* add js/css END */


/* ACF theme options START */
if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(
        array(
            'page_title' => 'Options',
            'menu_title' => 'Options',
            'menu_slug' => 'theme-options',
            'capability' => 'edit_posts',
            'parent_slug' => '',
            'position' => false,
        )
    );
}
/* ACF theme options END */




/* force css to footer START */
function enqueue_css_in_footer() {
    global $wp_styles;

    foreach ($wp_styles->queue as $handle) {
        $style = $wp_styles->registered[$handle];

        if (strpos($style->src, '/plugins/') !== false) {
            $wp_styles->add_data($handle, 'group', 1);
        }
    }
}
add_action('wp_footer', 'enqueue_css_in_footer');
/* force css to footer END */




/* dump START */
function dump($array, $depth = 0, $scripts = false) {
    if (!$scripts) {
        echo '<style>
        .dump-array { background-color: black; padding: 5px; border-left: 1px solid currentColor; margin: 0 20px; position: relative; z-index: 9999; font-family: system-ui; }
        .dump-array__element { padding: 3px 0; color: darkcyan;}
        .dump-array__element > .dump-array {display: none}
        .dump-array__button { display: inline-flex; align-items: center; justify-content: center; width: 15px; height: 15px; padding: 0; color: lime; background-color: black; border: none; cursor: pointer; }
        .dump-array__button::before { content: "+"; }
        .dump-array__element.expanded {color: lime}
        .dump-array__element.expanded > .dump-array { display: block; }
        .dump-array__element.expanded > .dump-array__button::before { content: "-"; }
        .dump-array__space {display: inline-block; width: 15px}
        </style>';

        echo '<script>
        document.addEventListener("DOMContentLoaded", function() {
            const expandButtons = document.querySelectorAll(".dump-array__button");
            expandButtons.forEach(function(button) {
                button.addEventListener("click", function() {
                    const parent = button.parentElement;
                    parent.classList.toggle("expanded");
                });
            });
        });
        </script>';
    }

    echo '<div class="dump-array">';
    if(is_array($array) || is_object($array)) {
        foreach ($array as $key => $value) {
            echo '<div class="dump-array__element">';
            if (is_array($value) || is_object($array)) {
                echo '<button class="dump-array__button"></button>';
                echo '<strong>'.$key.'</strong> => ';
                dump($value, $depth + 1, true);
            } else {
                echo '<span class="dump-array__space"></span>';
                echo '<strong>'.$key.'</strong> => ' . htmlspecialchars($value);
            }
            echo '</div>';
        }
    } else {
        echo '<pre style="color: lime">'.$array.'</pre>';
    }
    echo '</div>';
}
/* dump END */


/* check mobile START */
function is_mobile() {
    $userAgent = $_SERVER['HTTP_USER_AGENT'];
    $mobileKeywords = array('Android', 'iPhone', 'iPad', 'Windows Phone');
    
    foreach ($mobileKeywords as $keyword) {
        if (stripos($userAgent, $keyword) !== false) {
            return true;
        }
    }
    
    return false;
}
/* check mobile END */