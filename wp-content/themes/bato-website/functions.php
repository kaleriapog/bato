<?php

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

function theme_custom_logo_support() {
    add_theme_support('custom-logo');
}
add_action('after_setup_theme', 'theme_custom_logo_support');

/* add js/css START */
add_filter( 'wpcf7_load_css', '__return_false' );
add_action('wp_footer', 'enqueue_js_css');
function enqueue_js_css() {
    
    wp_enqueue_style('bato-website-style', get_stylesheet_uri());

/*     wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', includes_url( '/js/jquery/jquery.js' ), array(), false, true );
    wp_enqueue_script( 'jquery' ); */

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


/* insert image START */
function insertImage($file, $class = '', $lazy = 1, $enable_srcset = 0, $return = 0) {
    if (!empty($file)) {
        if(!is_array($file)) {
            $url = parse_url($file);
            if (!empty($url['scheme'])) {
                $file_url = $file;
            } else {
                $file_url = get_stylesheet_directory_uri().'/images/'.$file;
            }
            $file_title =  pathinfo($file, PATHINFO_FILENAME);
            $file_name =  pathinfo($file, PATHINFO_FILENAME);
            $extension = pathinfo($file, PATHINFO_EXTENSION);
        } else {
            $file_url = $file['url'];
            $file_title = $file['alt'];
            $file_name = $file['filename'];
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

        $lazyload = '';
        if($lazy) {
            $lazyload = 'loading="lazy" decoding="async"';
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
                    width="100"
                    height="100" 
                    alt="status_'.$status_code.'" 
                    '.$lazyload.'
                />';
            } else {
                $content = str_replace('<?xml version="1.0" encoding="UTF-8"?>', '', $content);
            }
        } else {

            $pictureSources = '';
            
            /* srcsets START */
            if ($enable_srcset) {
                $crop_path = wp_get_upload_dir()['baseurl'] . '/bato-cropped';
                $crop_folder = wp_get_upload_dir()['basedir'] . '/bato-cropped';
            
                $mediaQueries = [
                    320,
                    480,
                    768,
                    1024,
                ];

                $image_editor = wp_get_image_editor($file_url);
                $image_size = $image_editor->get_size();
                $image_width = $image_size['width'];
            
                foreach ($mediaQueries as $mediaQuery => $width) {
                    if($image_width > $width) {
                        $imageLocalPath = $crop_folder . '/' . $file_name . '-' . $width . '.' . $extension;
                        $imagePath = $crop_path . '/' . $file_name . '-' . $width . '.' . $extension;
                
                        if (!file_exists($imageLocalPath)) {
                            
                            if (!is_wp_error($image_editor)) {
                                $image_editor->resize($width, 0);
                                $resized_file = $file_name . '-' . $width . '.' . $extension;
                                $saved = $image_editor->save($crop_folder . '/' . $resized_file);
                
                                if (!is_wp_error($saved)) {
                                    $imagePath = $crop_path . '/' . $resized_file;
                                }
                            }
                        }
                
                        if (is_ssl()) {
                            $imagePath = str_replace('http://', 'https://', $imagePath);
                        }
                
                        $pictureSources .= '<source media="(max-width: ' . $width . 'px)" srcset="' . $imagePath . ' 1x" />';
                    }
                }
            
                $pictureSources = rtrim($pictureSources, ', ');
            }
            /* srcsets END */
            
            $content = '<picture>' .
                $pictureSources .
                '<img 
                    class="' . $class . '" 
                    src="' . $file_url . '" 
                    alt="' . $file_title . '"
                    width="100"
                    height="100" 
                    ' . $lazyload . ' 
                />' .
            '</picture>';
            
        }

        if (!empty($content)) {
            if ($return) {
                return $content;
            }
            echo $content;
        }
    }
}
/* insert image END */



/* insert link START */
function insertLink($link, $class = 'button-default', $child_class = '') {
    if(!empty($link['url'])) {
        global $wp;
        $attr = '';
        $title = '';
        $current_link = trailingslashit($link['url']);
        $current_url = trailingslashit(home_url($wp->request));

        $child_parentclass = $class.'__link ';
        if(!empty($class)) {
            $class_arr = explode(' ', $class);
            if(!empty($class_arr[0])) {
                $child_parentclass = $class_arr[0].'__link ';
            }
        }
    
        if(!empty($current_link) && $current_link == $current_url) {
            $class .= ' current';
        }

        $attr .= ' class="'.$class.'"';
        $attr .= ' href="'.$current_link.'"';
    
        if(!empty($link['title'])) {
            $title = $link['title'];
            $attr .= ' title="'.$title.'"';
        }
    
        if(!empty($link['target']) && ($link['target'] == '_blank')) {
            $attr .= ' target="_blank"';
            $attr .= ' rel="nofollow"';
        }
    
        $html = '<a '.$attr.'>';
        $html .= '<span class="'.$child_parentclass.$child_class.'">'.$title.'</span>';
        $html .= '</a>';
        echo $html;
    }
}
/* insert link END */


/* insert title START */
function insertTitle($text = '', $class='title', $tag = 'div', $child = '') {
    if (!empty($text) && !empty(trim($text))) {
        $text = strip_tags($text, '<br><strong><span>');
        $child_class = '';
        
        if(!empty($child)) {
            $child = explode('.', $child);
            if(!empty($child[1])) {
                $child_class = $child[1];
            }
            $text = str_replace($text, "<$child[0] class='".$child_class."'>$text</$child>", $text);
        }

        $title  = '<'.$tag;
        $title .= ' class="'.$class.'"';
        $title .= '>';
        $title .= $text;
        $title .= '</'.$tag.'>';
        echo $title;
    }
}
/* insert title END */


/* insert text START */
function insertText($text = '', $class='') {
    if (!empty($text) && !empty(trim($text))) {
        $html = '';
        $html .= '<div class="'.$class.'">';
        $html .= $text;
        $html .= '</div>';
        echo $html;
    }
}
/* insert text END */



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