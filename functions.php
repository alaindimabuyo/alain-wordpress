<?php

function alain_setup(){
    wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css2?family=Roboto&display=swap');
    wp_enqueue_style('fontawesome', '//use.fontawesome.com/releases/v5.13.0/css/all.css');
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_script('main', get_theme_file_uri('/js/main.js'), NULL, microtime(), true);
}

add_action('wp_enqueue_scripts', 'alain_setup');

// ADDING THEME SUPPORT

function gt_init(){
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('html5',
        array('comment-list', 'comment-form', 'search-form')    
    );
}

add_action('after_setup_theme', 'gt_init');

//Projects post Type

function alain_custom_post_type(){
    register_post_type('project', 
        array(
            'rewrite' => array('slug' => 'projects'),
            'labels' => array(
                'name' => 'Projects',
                'singular_name' => 'Project',
                'add_new_item' => 'Add New Project',
                'edit_item' => 'Edit Project'
            ),
            'menu-icon' => 'dashicons-clipboard',
            'public' => true,
            'has_archive' => true,
            'supports' => array(
                'title', 'thumbnail', 'editor', 'excerpt', 'comments'
            )
        )
            );
}

add_action('init', 'alain_custom_post_type' );