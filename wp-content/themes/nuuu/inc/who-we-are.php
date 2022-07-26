<?php 


function create_whoweare_cpt() {

    $labels = array(
        'name' => _x( 'Who We Ares', 'Post Type General Name', 'nuuu' ),
        'singular_name' => _x( 'who-we-are', 'Post Type Singular Name', 'nuuu' ),
        'menu_name' => _x( 'Who We Ares', 'Admin Menu text', 'nuuu' ),
        'name_admin_bar' => _x( 'who-we-are', 'Add New on Toolbar', 'nuuu' ),
        'archives' => __( 'who-we-are Archives', 'nuuu' ),
        'attributes' => __( 'who-we-are Attributes', 'nuuu' ),
        'parent_item_colon' => __( 'Parent who-we-are:', 'nuuu' ),
        'all_items' => __( 'All Who We Ares', 'nuuu' ),
        'add_new_item' => __( 'Add New who-we-are', 'nuuu' ),
        'add_new' => __( 'Add New', 'nuuu' ),
        'new_item' => __( 'New who-we-are', 'nuuu' ),
        'edit_item' => __( 'Edit who-we-are', 'nuuu' ),
        'update_item' => __( 'Update who-we-are', 'nuuu' ),
        'view_item' => __( 'View who-we-are', 'nuuu' ),
        'view_items' => __( 'View who-we-ares', 'nuuu' ),
        'search_items' => __( 'Search who-we-are', 'nuuu' ),
        'not_found' => __( 'Not found', 'nuuu' ),
        'not_found_in_trash' => __( 'Not found in Trash', 'nuuu' ),
        'featured_image' => __( 'Featured Image', 'nuuu' ),
        'set_featured_image' => __( 'Set featured image', 'nuuu' ),
        'remove_featured_image' => __( 'Remove featured image', 'nuuu' ),
        'use_featured_image' => __( 'Use as featured image', 'nuuu' ),
        'insert_into_item' => __( 'Insert into who-we-are', 'nuuu' ),
        'uploaded_to_this_item' => __( 'Uploaded to this who-we-are', 'nuuu' ),
        'items_list' => __( 'who-we-ares list', 'nuuu' ),
        'items_list_navigation' => __( 'who-we-ares list navigation', 'nuuu' ),
        'filter_items_list' => __( 'Filter who-we-ares list', 'nuuu' ),
    );
    $args = array(
        'label' => __( 'who-we-are', 'nuuu' ),
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
    register_post_type( 'who-we-are', $args );

}
add_action( 'init', 'create_whoweare_cpt', 0 );

?>