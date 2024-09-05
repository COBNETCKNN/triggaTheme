<?php 

// Creating Custom Post Types
function trigga_post_types() {

    // Dependencies Post Type
    register_post_type('dependencies', array(
        'public' => true,
        'labels' => array(
            'name' => 'Dependencies',
            'add_new_item' => 'Add New Dependency',
            'edit_item' => 'Edit Dependency',
            'all_items' => 'All Dependencies',
            'singular_name' => 'Dependency',
        ),
        'menu_icon' => 'dashicons-universal-access-alt',
        'rewrite' => array('slug' => 'dependency'),
        'has_arcive' => true,
        'supports' => array('thumbnail', 'title', 'editor'),
        'show_in_rest' => true,
    ));

    // Courses Post Type
    register_post_type('courses', array(
        'public' => true,
        'labels' => array(
            'name' => 'Courses',
            'add_new_item' => 'Add New Course',
            'edit_item' => 'Edit Course',
            'all_items' => 'All Courses',
            'singlar_name' => 'Course',
        ),
        'menu_icon' => 'dashicons-smiley',
        'has_archive' => true,
        'supports' => array('thumbnail', 'title', 'editor'),
        'show_in_rest' => true,
    ));

}
add_action('init', 'trigga_post_types');