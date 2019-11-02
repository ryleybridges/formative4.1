<?php
    // Theme Files
    function addCustomThemeFiles_Embrace(){
        wp_enqueue_style('bootstrapCSSEmbrace', get_template_directory_uri() . '/assests/css/bootstrap.min.css', array(), '4.3.1', 'all');
        wp_enqueue_style('customCSSEmbrace', get_template_directory_uri() . '/assests/css/style.css', array(), '0.0.1', 'all');

        wp_enqueue_script('jquery');
        wp_enqueue_script('bootstrapJSEmbrace', get_template_directory_uri() . '/assests/js/bootstrap.min.js', array('jquery'), '4.3.1', true);
        wp_enqueue_script('customJSEmbrace', get_template_directory_uri() . '/assests/js/script.js', array('jquery'), '0.0.1', true);
    }

    add_action('wp_enqueue_scripts', 'addCustomThemeFiles_Embrace');
    // Menus/Navbar
    function addCustomMenus_Embrace(){
        add_theme_support('menus');
        register_nav_menu('top_navigation',__('Top navigation is at the top of each page', 'EmbraceCustom'));
        register_nav_menu('side_navigation',__('Side navigation is on the side of each page', 'EmbraceCustom'));
        register_nav_menu('bottom_navigation',__('Bottom navigation is at the bottom of each page', 'EmbraceCustom'));
    };

    add_action('after_setup_theme', 'addCustomMenus_Embrace');

    function register_navwalker(){
        require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
    };

    add_action('after_setup_theme', 'register_navwalker');

    if(!file_exists(get_template_directory() . '/class-wp-bootstrap-navwalker.php')){
        return new WP_Error('class-wp-bootstrap-navwalker-missing',__('It appears the class-wp-bootstrap-navwalker.php file may be missing'));
    } else {
        require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
    };

    remove_action('shutdown', 'wp_ob_end_flush_all', 1);

    add_theme_support( 'header' );

    // Logo
    function addCustomLogo_Embrace() {
        add_theme_support( 'custom-logo');
    }
    add_action( 'after_setup_theme', 'addCustomLogo_Embrace' );

    add_image_size('embracedesign-logo', 150, 150);
    add_theme_support('custom-logo', array(
        'size' => 'embracedesign-logo'
    ));

    add_theme_support('post-thumbnails', array('post'));
