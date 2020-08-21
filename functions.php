<?php 

function rdty_option($key,$lang = null)
{
    return $option =  get_theme_mod(''.$key.'');
}


//Add li class for menus
function add_additional_class_on_li($classes, $item, $args) {
        if(isset($args->add_li_class)) {
            $classes[] = $args->add_li_class;
        }
        return $classes;
    }
    add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);
    
    //Add link class for menus
    function add_additional_class_on_links($classes, $item, $args) {
        if(isset($args->add_link_class)) {
            $classes['class'] = $args->add_link_class;
        }
        return $classes;
    }
    add_filter('nav_menu_link_attributes', 'add_additional_class_on_links', 10, 23);

require_once dirname( __FILE__ ) . '/inc/customizer.php';
require_once dirname( __FILE__ ) . '/inc/class-tgm-plugin-activation.php';
require_once dirname( __FILE__ ) . '/inc/tgm-plugins.php';


// Remove WPB CSS & JS on frontend
function remove_wpb_js_css() {
        wp_dequeue_style('js_composer_front');
        wp_deregister_style('js_composer_front');
        wp_dequeue_script('wpb_composer_front_js');
        wp_deregister_script('wpb_composer_front_js');
}
add_action( 'wp_enqueue_scripts', 'remove_wpb_js_css', 99 );

// disable for posts
add_filter('use_block_editor_for_post', '__return_false', 10);

// disable for post types
add_filter('use_block_editor_for_post_type', '__return_false', 10);

//Disable contact form 7 paragraph tags
define( 'WPCF7_AUTOP', false );
//Menus
add_theme_support( '', 'nav-menus' );

function register_my_menus() {
register_nav_menus(
array('primary' => __( 'Header Menu' ) , 'secondary' => __( 'Footer Menu' ))
);
}
add_action( 'init', 'register_my_menus' );

//WPBakery
require_once('inc/elements.php');
//Title
add_theme_support( 'title-tag' );


//addimagesize
add_theme_support( 'post-thumbnails' );

add_image_size( 'works-thumbnail', 679, 447 );
add_image_size( 'clients-thumbnail', 128, 30 );
add_image_size( 'about-thumbnail', 561, 535 );
add_image_size( 'hello-thumbnail', 790, 768 );
add_image_size( 'testimonials-thumbnail', 104, 104 );


?>