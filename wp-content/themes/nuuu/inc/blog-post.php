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
        'label' => __( 'Blog', 'nuuu' ),
        'description' => __( '', 'nuuu' ),
        'labels' => $labels,
        'menu_icon' => 'dashicons-clipboard',
        'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'custom-fields'),
        'taxonomies' => array('topics', 'category', 'post_tag'),// 
        'taxonomy'   => 'BlogCategory',
        'hide_empty' => false,
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

    $labels2 = array(
        'name'          => _x( 'Blog Category', 'Taxonomy General Name', 'text_domain' ),
        'singular_name' => _x( 'BlogCategory', 'Taxonomy Singular Name', 'text_domain' ),
        'menu_name'                  => __( 'Blog Category', 'text_domain' ),
        'all_items'                  => __( 'All Items', 'text_domain' ),
        'parent_item'                => __( 'Parent Item', 'text_domain' ),
        'parent_item_colon'          => __( 'Parent Item:', 'text_domain' ),
        'new_item_name'              => __( 'New Item Name', 'text_domain' ),
        'add_new_item'               => __( 'Add New Item', 'text_domain' ),
        'edit_item'                  => __( 'Edit Item', 'text_domain' ),
        'update_item'                => __( 'Update Item', 'text_domain' ),
        'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
        'search_items'               => __( 'Search Items', 'text_domain' ),
        'add_or_remove_items'        => __( 'Add or remove items', 'text_domain' ),
        'choose_from_most_used'      => __( 'Choose from the most used items', 'text_domain' ),
        'not_found'                  => __( 'Not Found', 'text_domain' ),
    );
    $args2 = array(
        'labels'                     => $labels2,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
    );
    register_taxonomy( 'BlogCategory', 'blog', $args2 );
}
add_action( 'init', 'create_blog_cpt', 0 );








?>