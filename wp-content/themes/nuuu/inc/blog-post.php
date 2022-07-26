<?php 


function create_blog_cpt() {

    $labels = array(
        'name' => _x( 'blogs', 'Post Type General Name', 'nuuu' ),
        'singular_name' => _x( 'blog', 'Post Type Singular Name', 'nuuu' ),
        'menu_name' => _x( 'blogs', 'Admin Menu text', 'nuuu' ),
        'name_admin_bar' => _x( 'blog', 'Add New on Toolbar', 'nuuu' ),
        'archives' => __( 'blog Archives', 'nuuu' ),
        'attributes' => __( 'blog Attributes', 'nuuu' ),
        'parent_item_colon' => __( 'Parent blog:', 'nuuu' ),
        'all_items' => __( 'All blogs', 'nuuu' ),
        'add_new_item' => __( 'Add New blog', 'nuuu' ),
        'add_new' => __( 'Add New', 'nuuu' ),
        'new_item' => __( 'New blog', 'nuuu' ),
        'edit_item' => __( 'Edit blog', 'nuuu' ),
        'update_item' => __( 'Update blog', 'nuuu' ),
        'view_item' => __( 'View blog', 'nuuu' ),
        'view_items' => __( 'View blogs', 'nuuu' ),
        'search_items' => __( 'Search blog', 'nuuu' ),
        'not_found' => __( 'Not found', 'nuuu' ),
        'not_found_in_trash' => __( 'Not found in Trash', 'nuuu' ),
        'featured_image' => __( 'Featured Image', 'nuuu' ),
        'set_featured_image' => __( 'Set featured image', 'nuuu' ),
        'remove_featured_image' => __( 'Remove featured image', 'nuuu' ),
        'use_featured_image' => __( 'Use as featured image', 'nuuu' ),
        'insert_into_item' => __( 'Insert into blog', 'nuuu' ),
        'uploaded_to_this_item' => __( 'Uploaded to this blog', 'nuuu' ),
        'items_list' => __( 'blogs list', 'nuuu' ),
        'items_list_navigation' => __( 'blogs list navigation', 'nuuu' ),
        'filter_items_list' => __( 'Filter blogs list', 'nuuu' ),
    );
    $args = array(
        'label' => __( 'blog', 'nuuu' ),
        'description' => __( '', 'nuuu' ),
        'labels' => $labels,
        'menu_icon' => 'dashicons-clipboard',
        'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'custom-fields'),
        'taxonomies' => array('category', 'post_tag'),// 
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
    register_post_type( 'blog', $args );

}
add_action( 'init', 'create_blog_cpt', 0 );








?>