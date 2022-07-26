<?php 


function create_oda_cpt() {

    $labels = array(
        'name' => _x( 'Open Demat Account', 'Post Type General Name', 'nuuu' ),
        'singular_name' => _x( 'Open Demat Account', 'Post Type Singular Name', 'nuuu' ),
        'menu_name' => _x( 'Open Demat Account', 'Admin Menu text', 'nuuu' ),
        'name_admin_bar' => _x( 'open-demat-account', 'Add New on Toolbar', 'nuuu' ),
        'archives' => __( 'open-demat-account Archives', 'nuuu' ),
        'attributes' => __( 'open-demat-account Attributes', 'nuuu' ),
        'parent_item_colon' => __( 'Parent open-demat-account:', 'nuuu' ),
        'all_items' => __( 'All Open Demat Account', 'nuuu' ),
        'add_new_item' => __( 'Add New open-demat-account', 'nuuu' ),
        'add_new' => __( 'Add New', 'nuuu' ),
        'new_item' => __( 'New open-demat-account', 'nuuu' ),
        'edit_item' => __( 'Edit open-demat-account', 'nuuu' ),
        'update_item' => __( 'Update open-demat-account', 'nuuu' ),
        'view_item' => __( 'View open-demat-account', 'nuuu' ),
        'view_items' => __( 'View open-demat-accounts', 'nuuu' ),
        'search_items' => __( 'Search open-demat-account', 'nuuu' ),
        'not_found' => __( 'Not found', 'nuuu' ),
        'not_found_in_trash' => __( 'Not found in Trash', 'nuuu' ),
        'featured_image' => __( 'Featured Image', 'nuuu' ),
        'set_featured_image' => __( 'Set featured image', 'nuuu' ),
        'remove_featured_image' => __( 'Remove featured image', 'nuuu' ),
        'use_featured_image' => __( 'Use as featured image', 'nuuu' ),
        'insert_into_item' => __( 'Insert into open-demat-account', 'nuuu' ),
        'uploaded_to_this_item' => __( 'Uploaded to this open-demat-account', 'nuuu' ),
        'items_list' => __( 'open-demat-accounts list', 'nuuu' ),
        'items_list_navigation' => __( 'open-demat-accounts list navigation', 'nuuu' ),
        'filter_items_list' => __( 'Filter open-demat-accounts list', 'nuuu' ),
    );
    $args = array(
        'label' => __( 'open-demat-account', 'nuuu' ),
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
    register_post_type( 'open-demat-account', $args );

}
add_action( 'init', 'create_oda_cpt', 0 );

?>