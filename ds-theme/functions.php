<?php
function my_theme_setup() {
    // Add theme support
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));

    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'my-theme')
    ));

    // Register sidebars
    function my_theme_widgets_init() {
        register_sidebar(array(
            'name' => __('Main Sidebar', 'my-theme'),
            'id' => 'main-sidebar',
            'description' => __('Widgets in this area will be shown on all posts and pages.', 'my-theme'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widgettitle">',
            'after_title' => '</h2>',
        ));
    }
    add_action('widgets_init', 'my_theme_widgets_init');
}
add_action('after_setup_theme', 'my_theme_setup');