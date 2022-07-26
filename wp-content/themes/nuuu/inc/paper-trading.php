<?php 


function create_papertrading_cpt() {

    $labels = array(
        'name' => _x( 'Paper Trading', 'Post Type General Name', 'nuuu' ),
        'singular_name' => _x( 'paper-trading', 'Post Type Singular Name', 'nuuu' ),
        'menu_name' => _x( 'Paper Trading', 'Admin Menu text', 'nuuu' ),
        'name_admin_bar' => _x( 'paper-trading', 'Add New on Toolbar', 'nuuu' ),
        'archives' => __( 'paper-trading Archives', 'nuuu' ),
        'attributes' => __( 'paper-trading Attributes', 'nuuu' ),
        'parent_item_colon' => __( 'Parent paper-trading:', 'nuuu' ),
        'all_items' => __( 'All Paper Trading', 'nuuu' ),
        'add_new_item' => __( 'Add New paper-trading', 'nuuu' ),
        'add_new' => __( 'Add New', 'nuuu' ),
        'new_item' => __( 'New paper-trading', 'nuuu' ),
        'edit_item' => __( 'Edit paper-trading', 'nuuu' ),
        'update_item' => __( 'Update paper-trading', 'nuuu' ),
        'view_item' => __( 'View paper-trading', 'nuuu' ),
        'view_items' => __( 'View paper-tradings', 'nuuu' ),
        'search_items' => __( 'Search paper-trading', 'nuuu' ),
        'not_found' => __( 'Not found', 'nuuu' ),
        'not_found_in_trash' => __( 'Not found in Trash', 'nuuu' ),
        'featured_image' => __( 'Featured Image', 'nuuu' ),
        'set_featured_image' => __( 'Set featured image', 'nuuu' ),
        'remove_featured_image' => __( 'Remove featured image', 'nuuu' ),
        'use_featured_image' => __( 'Use as featured image', 'nuuu' ),
        'insert_into_item' => __( 'Insert into paper-trading', 'nuuu' ),
        'uploaded_to_this_item' => __( 'Uploaded to this paper-trading', 'nuuu' ),
        'items_list' => __( 'paper-tradings list', 'nuuu' ),
        'items_list_navigation' => __( 'paper-tradings list navigation', 'nuuu' ),
        'filter_items_list' => __( 'Filter paper-tradings list', 'nuuu' ),
    );
    $args = array(
        'label' => __( 'paper-trading', 'nuuu' ),
        'description' => __( '', 'nuuu' ),
        'labels' => $labels,
        'menu_icon' => 'dashicons-info',
        'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'custom-fields'),
        'taxonomies' => array('category', 'post_tag'),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => true,
        'hierarchical' => false,
        'exclude_from_search' => false,
        'show_in_rest' => true,
        'publicly_queryable' => true,
        'capability_type' => 'post',
    );
    register_post_type( 'paper-trading', $args );

}
add_action( 'init', 'create_papertrading_cpt', 0 );

?>