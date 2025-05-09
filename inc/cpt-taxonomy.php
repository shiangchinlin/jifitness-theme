<?php
//php tag should be line 1


function ji_register_custom_post_types() {
    
    // Register Testimonials CPT
    $labels = array(
        'name'                  => _x( 'Testimonials', 'post type general name' ),
        'singular_name'         => _x( 'Testimonial', 'post type singular name'),
        'menu_name'             => _x( 'Testimonials', 'admin menu' ),
        'name_admin_bar'        => _x( 'Testimonial', 'add new on admin bar' ),
        'add_new'               => _x( 'Add New', 'testimonial' ),
        'add_new_item'          => __( 'Add New Testimonial' ),
        'new_item'              => __( 'New Testimonial' ),
        'edit_item'             => __( 'Edit Testimonial' ),
        'view_item'             => __( 'View Testimonial' ),
        'all_items'             => __( 'All Testimonials' ),
        'search_items'          => __( 'Search Testimonials' ),
        'parent_item_colon'     => __( 'Parent Testimonials:' ),
        'not_found'             => __( 'No Testimonials found.' ),
        'not_found_in_trash'    => __( 'No Testimonials found in Trash.' ),
        'archives'              => __( 'Testimonial Archives'),
        'insert_into_item'      => __( 'Insert into testimonial'),
        'uploaded_to_this_item' => __( 'Uploaded to this testimonial'),
        'filter_item_list'      => __( 'Filter Testimonials list'),
        'items_list_navigation' => __( 'Testimonials list navigation'),
        'items_list'            => __( 'Testimonials list'),
        'featured_image'        => __( 'Testimonials featured image'),
        'set_featured_image'    => __( 'Set testimonial featured image'),
        'remove_featured_image' => __( 'Remove testimonial featured image'),
        'use_featured_image'    => __( 'Use as featured image'),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'show_in_nav_menus'  => true,
        'show_in_admin_bar'  => true,
        'show_in_rest'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'testimonials' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-archive',
        'supports'           => array( 'title', 'thumbnail', 'editor' ),
    );

    register_post_type( 'ji-testimonials', $args );

    //Register 1-on-1 CPT
    $labels = array(
        'name'               => _x( '1-on-1', 'post type general name' ),
        'singular_name'      => _x( '1-on-1', 'post type singular name' ),
        'menu_name'          => _x( '1-on-1', 'admin menu' ),
        'name_admin_bar'     => _x( '1-on-1', 'add new on admin bar' ),
        'add_new'            => _x( 'Add New', '1-on-1'  ),
        'add_new_item'       => __( 'Add New 1-on-1'  ),
        'new_item'           => __( 'New 1-on-1' ),
        'edit_item'          => __( 'Edit 1-on-1' ),
        'view_item'          => __( 'View 1-on-1' ),
        'all_items'          => __( 'All 1-on-1'  ),
        'search_items'       => __( 'Search 1-on-1' ),
        'parent_item_colon'  => __( 'Parent 1-on-1:' ),
        'not_found'          => __( 'No 1-on-1 found.' ),
        'not_found_in_trash' => __( 'No 1-on-1 found in Trash.' ),
    );
     
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'show_in_rest'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => '1-on-1'),
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => 6,
        'menu_icon'          => 'dashicons-forms',
        'supports'           => array( 'title' )
    );
     
    register_post_type( 'ji-1-on-1', $args );


    //Register Small Group CPT
    $labels = array(
        'name'               => _x( 'Small Group', 'post type general name' ),
        'singular_name'      => _x( 'Small Group', 'post type singular name' ),
        'menu_name'          => _x( 'Small Group', 'admin menu' ),
        'name_admin_bar'     => _x( 'Small Group', 'add new on admin bar' ),
        'add_new'            => _x( 'Add New', 'service'  ),
        'add_new_item'       => __( 'Add New Small Group'  ),
        'new_item'           => __( 'New Small Group' ),
        'edit_item'          => __( 'Edit Small Group' ),
        'view_item'          => __( 'View Small Group' ),
        'all_items'          => __( 'All Small Group'  ),
        'search_items'       => __( 'Search Small Group' ),
        'parent_item_colon'  => __( 'Parent Small Group:' ),
        'not_found'          => __( 'No Small Group found.' ),
        'not_found_in_trash' => __( 'No Small Group found in Trash.' ),
    );
     
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'show_in_rest'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'small-group'),
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => 6,
        'menu_icon'          => 'dashicons-forms',
        'supports'           => array( 'title' )
    );
     
    register_post_type( 'ji-small-group', $args );
    
}
add_action( 'init', 'ji_register_custom_post_types' );



function ji_register_taxonomies() {

// Add Featured taxonomy
    $labels = array(
        'name'              => _x( 'Featured', 'taxonomy general name' ),
        'singular_name'     => _x( 'Featured', 'taxonomy singular name' ),
        'search_items'      => __( 'Search Featured' ),
        'all_items'         => __( 'All Featured' ),
        'parent_item'       => __( 'Parent Featured' ),
        'parent_item_colon' => __( 'Parent Featured:' ),
        'edit_item'         => __( 'Edit Featured' ),
        'update_item'       => __( 'Update Featured' ),
        'add_new_item'      => __( 'Add New Featured' ),
        'new_item_name'     => __( 'New Testimonial Featured' ),
        'menu_name'         => __( 'Featured' ),
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'show_in_rest'      => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'featured' ),
    );

    register_taxonomy( 'ji-featured', array( 'ji-testimonials','ji-1-on-1','post1' ), $args );
    //we can use taxonomy array above repeatly on different page. (post type key)


    // Add 1-on-1 Training Goal taxonomy.
    $labels = array(
        'name'              => _x( 'Training Goal', 'taxonomy general name' ),
        'singular_name'     => _x( 'Training Goal', 'taxonomy singular name' ),
        'search_items'      => __( 'Search Training Goal' ),
        'all_items'         => __( 'All Training Goals' ),
        'parent_item'       => __( 'Training Goal Featured' ),
        'parent_item_colon' => __( 'Training Goal Featured:' ),
        'edit_item'         => __( 'Edit Training Goal' ),
        'update_item'       => __( 'Update Training Goal' ),
        'add_new_item'      => __( 'Add New Training Goal' ),
        'new_item_name'     => __( 'New Work Training Goal' ),
        'menu_name'         => __( 'Training Goal' ),
    );
    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'show_in_rest'      => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'training-goal' ),
    );
    register_taxonomy( 'ji-training-goal', array( 'ji-1-on-1','ji-small-group',), $args );

}
add_action( 'init', 'ji_register_taxonomies');


function fwd_rewrite_flush() {
    fwd_register_custom_post_types();
    fwd_register_taxonomies();
    flush_rewrite_rules();
}
add_action( 'after_switch_theme', 'ji_rewrite_flush' );