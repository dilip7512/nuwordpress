<?php 


function create_home_cpt() {

    $labels = array(
        'name' => _x( 'Home Page', 'Post Type General Name', 'nuuu' ),
        'singular_name' => _x( 'Home Page', 'Post Type Singular Name', 'nuuu' ),
        'menu_name' => _x( 'Home Page', 'Admin Menu text', 'nuuu' ),
        'name_admin_bar' => _x( 'home-page', 'Add New on Toolbar', 'nuuu' ),
        'archives' => __( 'home-page Archives', 'nuuu' ),
        'attributes' => __( 'home-page Attributes', 'nuuu' ),
        'parent_item_colon' => __( 'Parent home-page:', 'nuuu' ),
        'all_items' => __( 'All Home Page', 'nuuu' ),
        'add_new_item' => __( 'Add New home-page', 'nuuu' ),
        'add_new' => __( 'Add New', 'nuuu' ),
        'new_item' => __( 'New home-page', 'nuuu' ),
        'edit_item' => __( 'Edit home-page', 'nuuu' ),
        'update_item' => __( 'Update home-page', 'nuuu' ),
        'view_item' => __( 'View home-page', 'nuuu' ),
        'view_items' => __( 'View home-pages', 'nuuu' ),
        'search_items' => __( 'Search home-page', 'nuuu' ),
        'not_found' => __( 'Not found', 'nuuu' ),
        'not_found_in_trash' => __( 'Not found in Trash', 'nuuu' ),
        'featured_image' => __( 'Featured Image', 'nuuu' ),
        'set_featured_image' => __( 'Set featured image', 'nuuu' ),
        'remove_featured_image' => __( 'Remove featured image', 'nuuu' ),
        'use_featured_image' => __( 'Use as featured image', 'nuuu' ),
        'insert_into_item' => __( 'Insert into home-page', 'nuuu' ),
        'uploaded_to_this_item' => __( 'Uploaded to this home-page', 'nuuu' ),
        'items_list' => __( 'home-pages list', 'nuuu' ),
        'items_list_navigation' => __( 'home-pages list navigation', 'nuuu' ),
        'filter_items_list' => __( 'Filter home-pages list', 'nuuu' ),
    );
    $args = array(
        'label' => __( 'home-page', 'nuuu' ),
        'description' => __( '', 'nuuu' ),
        'labels' => $labels,
        'menu_icon' => 'dashicons-admin-users',
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
    register_post_type( 'home-page', $args );

}
add_action( 'init', 'create_home_cpt', 0 );

?>