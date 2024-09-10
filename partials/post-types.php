<?php 

// Creating Custom Post Types
function trigga_post_types() {

    // Dependencies Post Type
    register_post_type('dependencies', array(
        'public' => true,
        'labels' => array(
            'name' => 'Dependencies',
            'add_new' => 'Add New Dependency',
            'add_new_item' => 'Add New Dependency',
            'edit_item' => 'Edit Dependency',
            'all_items' => 'All Dependencies',
            'singular_name' => 'Dependency',
        ),
        'menu_icon' => 'dashicons-dismiss',
        'rewrite' => array('slug' => 'dependency'),
        'has_arcive' => true,
        'supports' => array('thumbnail', 'title', 'editor'),
        'show_in_rest' => true,
    ));

    // Register category taxonomy for Dependencies post type
    register_taxonomy_for_object_type('category', 'dependencies');

    // Courses Post Type
    register_post_type('courses', array(
        'public' => true,
        'labels' => array(
            'name' => 'Courses',
            'add_new' => 'Add New Course',
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



// Removing default Posts post type from WordPress dashboard
function remove_default_post_type_menu() {
    remove_menu_page('edit.php');
}
add_action('admin_menu', 'remove_default_post_type_menu');