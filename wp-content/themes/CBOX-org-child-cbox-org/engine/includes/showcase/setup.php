<?php

   /*--------------ShowcaseS-----------------*/

function register_cpt_showcase() {

    $labels = array( 
        'name' => __( 'Showcase', 'showcase' ),
        'singular_name' => __( 'Showcase', 'showcase' ),
        'add_new' => __( 'Add New', 'showcase' ),
        'add_new_item' => __( 'Add New Showcase', 'showcase' ),
        'edit_item' => __( 'Edit Showcase', 'showcase' ),
        'new_item' => __( 'New Showcase', 'showcase' ),
        'view_item' => __( 'View Showcase', 'showcase' ),
        'search_items' => __( 'Search Showcases', 'showcase' ),
        'not_found' => __( 'No Showcases found', 'showcase' ),
        'not_found_in_trash' => __( 'No Showcases found in Trash', 'showcase' ),
   
        'menu_name' => __( 'Showcases', 'showcase' ),
       
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => true,
        'public' => true,
        'show_ui' => true,
        'menu_position' => 50,
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'capability_type' => 'post',
        'supports' => array( 'title', 'custom-fields', 'editor', 'excerpt', 'thumbnail' )
    );

    register_post_type( 'Showcase', $args );
}
add_action( 'init', 'register_cpt_showcase' );

?>