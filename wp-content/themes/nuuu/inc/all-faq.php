<?php 


function create_allfaq_cpt() {

    $labels = array(
        'name' => _x( 'All FAQ', 'Post Type General Name', 'nuuu' ),
        'singular_name' => _x( 'All FAQ', 'Post Type Singular Name', 'nuuu' ),
        'menu_name' => _x( 'All FAQ', 'Admin Menu text', 'nuuu' ),
        'name_admin_bar' => _x( 'all-faq', 'Add New on Toolbar', 'nuuu' ),
        'archives' => __( 'all-faq Archives', 'nuuu' ),
        'attributes' => __( 'all-faq Attributes', 'nuuu' ),
        'parent_item_colon' => __( 'Parent all-faq:', 'nuuu' ),
        'all_items' => __( 'All All FAQ', 'nuuu' ),
        'add_new_item' => __( 'Add New all-faq', 'nuuu' ),
        'add_new' => __( 'Add New', 'nuuu' ),
        'new_item' => __( 'New all-faq', 'nuuu' ),
        'edit_item' => __( 'Edit all-faq', 'nuuu' ),
        'update_item' => __( 'Update all-faq', 'nuuu' ),
        'view_item' => __( 'View all-faq', 'nuuu' ),
        'view_items' => __( 'View all-faqs', 'nuuu' ),
        'search_items' => __( 'Search all-faq', 'nuuu' ),
        'not_found' => __( 'Not found', 'nuuu' ),
        'not_found_in_trash' => __( 'Not found in Trash', 'nuuu' ),
        'featured_image' => __( 'Featured Image', 'nuuu' ),
        'set_featured_image' => __( 'Set featured image', 'nuuu' ),
        'remove_featured_image' => __( 'Remove featured image', 'nuuu' ),
        'use_featured_image' => __( 'Use as featured image', 'nuuu' ),
        'insert_into_item' => __( 'Insert into all-faq', 'nuuu' ),
        'uploaded_to_this_item' => __( 'Uploaded to this all-faq', 'nuuu' ),
        'items_list' => __( 'all-faqs list', 'nuuu' ),
        'items_list_navigation' => __( 'all-faqs list navigation', 'nuuu' ),
        'filter_items_list' => __( 'Filter all-faqs list', 'nuuu' ),
    );
    $args = array(
        'label' => __( 'all-faq', 'nuuu' ),
        'description' => __( '', 'nuuu' ),
        'labels' => $labels,
        'menu_icon' => 'dashicons-testimonial',
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
    register_post_type( 'all-faq', $args );

}
add_action( 'init', 'create_allfaq_cpt', 0 );

?>