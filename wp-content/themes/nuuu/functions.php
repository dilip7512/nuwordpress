<?php 


function unnn_theme_setup(){
add_theme_support('menus');
add_theme_support('custom-logo');
add_theme_support('title-tag');
add_theme_support('post-thumbnails');
add_theme_support('editor-styles');
add_theme_support('html5', array('style','script',) );
// add_theme_support('html5',array('search-form'));
add_theme_support('automatic-feed-links');

add_image_size( 'home-featured', 680, 400, array('center','center'));
add_image_size( 'single-img', 600, 550, array('center','center'));

register_nav_menus( array(
    'primary'   => __('Primary Menu', 'unnn')
    // 'secondary' => __( 'Secondary Menu', 'unnn' )
) );

}
add_action('after_theme_setup','unnn_theme_setup');



// logo upload option
function custom_logo() {

    // Add <title> tag support
    add_theme_support( 'title-tag' );  

    // Add custom-logo support
    add_theme_support( 'custom-logo' );

}
add_action( 'after_setup_theme', 'custom_logo');



// CSS & JS call
function unnn_scripts(){
    wp_enqueue_style('style',get_stylesheet_uri() );
    wp_enqueue_style('bootstrap.min',get_stylesheet_uri() );
    wp_enqueue_style('animate',get_stylesheet_uri() );
    wp_enqueue_style('menu',get_stylesheet_uri() );
    wp_enqueue_style('responsive',get_stylesheet_uri() );
    
    wp_enqueue_script('jquery-3.4.1.min', get_template_directory_uri() );
}


add_action('wp_enqueue_scripts','unnn_scripts');



// Footer Code
function unnn_add_sidebar() {

    register_sidebar( array(
            'name'      => __('Footer 1', 'unnn'),
            'id'        => 'sidebar-1',
            'description'   => 'Add one widget, as it will be the 1st widget in the footer.',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>'
    ));
    register_sidebar( array(
            'name'      => __('Footer 2', 'unnn'),
            'id'        => 'sidebar-2',
            'description'   => 'Add one widget, as it will be the 2nd widget in the footer.',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>'
        )
    );
    register_sidebar( array(
            'name'      => 'Footer 3',
            'id'        => 'sidebar-3',
            'description'   => 'Add one widget, as it will be the 3nd widget in the footer',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>'
        )
    );

    register_sidebar( array(
            'name'      => 'Footer 4',
            'id'        => 'sidebar-4',
            'description'   => 'Add one widget, as it will be the 3nd widget in the footer',
            'before_widget' => '<div id="%1$s" class="widget %2$s"><div class="ower_footer_content">',
            'after_widget'  => '</div></div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>'
        )
    );
// Blog Sidebar
    register_sidebar( array(
            'name'      => 'Blog Sidebar',
            'id'        => 'sidebar-5',
            'description'   => 'Add one widget, as it will be the 3nd widget in the footer',
            'before_widget' => '<div id="%1$s" class="widget %2$s"><div class="ower_footer_content">',
            'after_widget'  => '</div></div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>'
        )
    );
// IPO Sidebar
    register_sidebar( array(
            'name'      => 'IPO Sidebar',
            'id'        => 'sidebar-6',
            'description'   => 'Add one widget, as it will be the 3nd widget in the footer',
            'before_widget' => '<div id="%1$s" class="widget %2$s"><div class="ower_footer_content">',
            'after_widget'  => '</div></div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>'
        )
    );
// Archives Sidebar
    //     register_sidebar( array(
    //         'name'      => 'Archives Sidebar',
    //         'id'        => 'sidebar-7',
    //         'description'   => 'Add one widget, as it will be the 3nd widget in the footer',
    //         'before_widget' => '<div id="%1$s" class="widget %2$s"><div class="ower_footer_content">',
    //         'after_widget'  => '</div></div>',
    //         'before_title'  => '<h3 class="widget-title">',
    //         'after_title'   => '</h3>'
    //     )
    // );

}

add_action( 'widgets_init', 'unnn_add_sidebar' );



// pagination Code
function pagination(){
   register_post_type('pagination', array(
            'public'    => 'true',
            'label'     => 'pagination test',
            'supports'  => array('title')
        ));
}
add_action( 'init', 'pagination' ); 


// Form Code (Name and Number)

if (isset($_POST['submitbtn'])) {
   $data = array(
      'name' => $_POST['name'],  
      'number' => $_POST['number'],  
   ); 
   $table_name = 'storedata';

   $result = $wpdb->insert($table_name, $data, $format=NULL);
   $url = site_url().'/thank-you-for-your-interest';
   wp_redirect( $url );
  exit;
   // if ($result==1) {
   //     echo "<script>alert('Book Saved');</script>";
   // }else{
   // echo "<script>alert('Unable to Save');</script>";
   // }
}



// Sub categories
// $args = array(
// 'orderby' => 'id',
// 'hide_empty'=> 0,
// );

// $categories = get_categories($args);
// foreach ($categories as $cat) {
// if ( $cat->category_parent > 0 ){
// echo $cat->name;

// }}

// Allow SVG
add_filter( 'wp_check_filetype_and_ext', function($data, $file, $filename, $mimes) {

  $filetype = wp_check_filetype( $filename, $mimes );

  return [
      'ext'             => $filetype['ext'],
      'type'            => $filetype['type'],
      'proper_filename' => $data['proper_filename']
  ];

}, 10, 4 );

function upload_svg( $mimes ){
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter( 'upload_mimes', 'upload_svg' );

function fix_svg() {
  echo '<style type="text/css">
        .attachment-266x266, .thumbnail img {
             width: 100% !important;
             height: auto !important;
        }
        </style>';
}
add_action( 'admin_head', 'fix_svg' );

// page category
function add_categories_to_pages() {
register_taxonomy_for_object_type( 'category', 'page' );
}
add_action( 'init', 'add_categories_to_pages' );
// page tag
function add_tags_to_pages() {
register_taxonomy_for_object_type( 'post_tag', 'page' );
}
add_action( 'init', 'add_tags_to_pages');

   








require get_template_directory().'/inc/paper-trading.php';
require get_template_directory().'/inc/blog-post.php';
require get_template_directory().'/inc/who-we-are.php';
require get_template_directory().'/inc/all-faq.php';
require get_template_directory().'/inc/open-demat-account.php';
require get_template_directory().'/inc/campaign.php';
require get_template_directory().'/inc/home.php';
// require get_template_directory().'/inc/demo.php';

?>