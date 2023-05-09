<?php

/*  DISABLE GUTENBERG STYLE IN HEADER */
add_action('wp_enqueue_scripts', 'wps_deregister_styles', 100);
function wps_deregister_styles() {
    wp_dequeue_style('global-styles');
}

add_action('wp_enqueue_scripts', 'wpassist_remove_block_library_css');
function wpassist_remove_block_library_css() {
    wp_dequeue_style('wp-block-library');
}

// REMOVE EMOJI ICONS
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');


/* defines START */
define('_TP_', get_stylesheet_directory_uri()); //theme path
define('_IMAGES_', _TP_ . '/images'); //images path
/* defines END */


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


/* add js/css START */
add_action('wp_enqueue_scripts', 'enqueue_js_css');
function enqueue_js_css() {

    wp_enqueue_style('bato-website-style', get_stylesheet_uri());

    wp_enqueue_script('jquery');

    wp_enqueue_script('connection_scripts_smooth-scrollbar',  get_template_directory_uri() . '/js/smooth-scrollbar.js');
    wp_enqueue_script('connection_scripts_main',  get_template_directory_uri() . '/js/main.js');


    $template_slug = get_page_template_slug();
    if ($template_slug === 'home.php') {
        wp_enqueue_script('connection_script_tweenLite', get_template_directory_uri() . '/js/TweenLite.min.js');
        wp_enqueue_script('connection_script_tweenMax', get_template_directory_uri() . '/js/TweenMax.min.js');
        wp_enqueue_script('connection_scripts-module', get_template_directory_uri() . '/js/home.js');
    }

    if ($template_slug === 'about.php') {
        wp_enqueue_style('connection_style', get_template_directory_uri() . '/splide.min.css');

        wp_enqueue_script('connection_script_splide', get_template_directory_uri() . '/js/splide.min.js');
        wp_enqueue_script('connection_script_splide-extension-grid', get_template_directory_uri() . '/js/splide-extension-grid.min.js');
        wp_enqueue_script('connection_script_gsap', get_template_directory_uri() . '/js/gsap.js');
        wp_enqueue_script('connection_script_scroll-magic', get_template_directory_uri() . '/js/ScrollMagic.min.js');
        wp_enqueue_script('connection_script_scroll-magic_debug', get_template_directory_uri() . '/js/debug.addIndicators.min.js');
        wp_enqueue_script('connection_lottie', get_template_directory_uri() . '/js/lottie.min.js');
        wp_enqueue_script('connection_lottie-player', get_template_directory_uri() . '/js/lottie-player.js');
        wp_enqueue_script('connection_lottie-interactivity', get_template_directory_uri() . '/js/lottie-interactivity.min.js');
        wp_enqueue_script('connection_script_animation_gsap', get_template_directory_uri() . '/js/animation.gsap.js');
        wp_enqueue_script('connection_scripts-module', get_template_directory_uri() . '/js/about-scripts.js');
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
/* add js/css END */



remove_action('wp_body_open', 'wp_global_styles_render_svg_filters');


/* insert image START */
function insertImage($file, $class = '', $width = 100, $height = 100, $crop = 0, $return = 0) {
    if (!empty($file)) {
        if(!is_array($file)) {
            $url = parse_url($file);
            if (!empty($url['scheme'])) {
                $file_url = $file;
            } else {
                $file_url = _IMAGES_.'/'.$file;
            }
            $file_title =  pathinfo($file, PATHINFO_FILENAME);
            $extension = pathinfo($file, PATHINFO_EXTENSION);
        } else {
            $file_url = $file['url'];
            $file_title = $file['alt'];
            $extension = pathinfo($file['filename'], PATHINFO_EXTENSION);
        }
        if (!str_contains($file_url, "http")) {
            if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
                $protocol = 'https://';
            } else {
                $protocol = 'http://';
            }
            $file_url = $protocol . $_SERVER['HTTP_HOST'] . $file_url;
        }
        if ($extension == 'svg') {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $file_url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
            curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 0);
            curl_setopt($ch, CURLOPT_TIMEOUT, 400);
            if (isset($_SERVER['PHP_AUTH_USER']) && isset($_SERVER['PHP_AUTH_PW'])) {
                $username = $_SERVER['PHP_AUTH_USER'];
                $password = $_SERVER['PHP_AUTH_PW'];
                curl_setopt($ch, CURLOPT_USERPWD, $username . ':' . $password);
            }
            $ip_address = $_SERVER['REMOTE_ADDR'];
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('X-Forwarded-For: '.$ip_address, 'REMOTE_ADDR: '.$ip_address));
            if(FALSE === ($content = curl_exec($ch))) {
                $errno = curl_errno($ch);
                $errmsg = curl_error($ch);
                echo "CURL error $errno: $errmsg";
            }
            $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            curl_close($ch);
            if ($status_code != 200) {
                $content = '<img 
                    class="' . $class . '" 
                    src="' . $file_url . '" 
                    width="' . $width . '"
                    height="' . $height . '" 
                    alt="status_'.$status_code.'" 
                    loading="lazy" 
                />';
            } else {
                $content = str_replace('<?xml version="1.0" encoding="UTF-8"?>', '', $content);
            }
        } else {
            $content = '<img 
                class="'.$class.'" 
                src="'.$file_url. '" 
                alt="'.$file_title.'"
                width="'.$width.'"
                height="'.$height.'" 
                loading="lazy" 
            />';
        }
        if (!empty($content)) {
            if ($return) {
                return $content;
            }
            echo $content;
        }
    }
}
add_action('wp_login', 'create_cropped_folder', 10, 2);
function create_cropped_folder() {
    $dir_path = get_template_directory() . '/images/cropped';
    if (!is_dir($dir_path)) {
        wp_mkdir_p($dir_path);
    }
}
/* insert image END */


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
