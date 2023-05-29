<?php


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

            $pictureSources = generate_soursets($file_url, $enable_srcset);
            
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




/* srcsets START */
function generate_soursets($file_url, $enable_srcset) {
    $pictureSources = '';
    
    if ($enable_srcset && !empty($file_url)) {

        $file_name =  pathinfo($file_url, PATHINFO_FILENAME);
        $file_extension =  pathinfo($file_url, PATHINFO_EXTENSION);
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
                $imageLocalPath = $crop_folder . '/' . $file_name . '-' . $width . '.' . $file_extension;
                $imagePath = $crop_path . '/' . $file_name . '-' . $width . '.' . $file_extension;
        
                if (!file_exists($imageLocalPath)) {
                    
                    if (!is_wp_error($image_editor)) {
                        $image_editor->resize($width, 0);
                        $resized_file = $file_name . '-' . $width . '.' . $file_extension;
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
    return $pictureSources;
}
/* srcsets END */

?>