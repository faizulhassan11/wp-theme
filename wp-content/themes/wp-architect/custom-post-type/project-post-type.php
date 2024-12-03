<?php

function wp_architec_custom_post_project_init() {
    $labels = array(
        'name'                  => __( 'Projects', 'wp-architech' ),
        'singular_name'         => __( 'Project', 'wp-architech' ),
        'menu_name'             => __( 'Projects', 'wp-architech' ),
        'name_admin_bar'        => __( 'Project', 'wp-architech' ),
        'add_new'               => __( 'Add New', 'wp-architech' ),
        'add_new_item'          => __( 'Add New Project', 'wp-architech' ),
        'new_item'              => __( 'New Project', 'wp-architech' ),
        'edit_item'             => __( 'Edit Project', 'wp-architech' ),
        'view_item'             => __( 'View Project', 'wp-architech' ),
        'all_items'             => __( 'All Projects', 'wp-architech' ),
        'search_items'          => __( 'Search Projects', 'wp-architech' ),
        'parent_item_colon'     => __( 'Parent Projects:', 'wp-architech' ),
        'not_found'             => __( 'No Projects found.', 'wp-architech' ),
        'not_found_in_trash'    => __( 'No Projects found in Trash.', 'wp-architech' ),
        'featured_image'        => __( 'Project Cover Image', 'wp-architech' ),
        'set_featured_image'    => __( 'Set cover image', 'wp-architech' ),
        'remove_featured_image' => __( 'Remove cover image', 'wp-architech' ),
        'use_featured_image'    => __( 'Use as cover image', 'wp-architech' ),
        'archives'              => __( 'Project Archives', 'wp-architech' ),
        'insert_into_item'      => __( 'Insert into Project', 'wp-architech' ),
        'uploaded_to_this_item' => __( 'Uploaded to this Project', 'wp-architech' ),
        'filter_items_list'     => __( 'Filter Projects list', 'wp-architech' ),
        'items_list_navigation' => __( 'Projects list navigation', 'wp-architech' ),
        'items_list'            => __( 'Projects list', 'wp-architech' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'project' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
    );

    register_post_type( 'project', $args );
}
add_action( 'init', 'wp_architec_custom_post_project_init' );

function wp_architec_register_taxonomy_project() {
    $labels = array(
        'name'              => __( 'Project Categories', 'wp-architech' ),
        'singular_name'     => __( 'Project Category', 'wp-architech' ),
        'search_items'      => __( 'Search Project Categories', 'wp-architech' ),
        'all_items'         => __( 'All Project Categories', 'wp-architech' ),
        'parent_item'       => __( 'Parent Project Category', 'wp-architech' ),
        'parent_item_colon' => __( 'Parent Project Category:', 'wp-architech' ),
        'edit_item'         => __( 'Edit Project Category', 'wp-architech' ),
        'update_item'       => __( 'Update Project Category', 'wp-architech' ),
        'add_new_item'      => __( 'Add New Project Category', 'wp-architech' ),
        'new_item_name'     => __( 'New Project Category Name', 'wp-architech' ),
        'menu_name'         => __( 'Project Categories', 'wp-architech' ),
    );
    $args   = array(
        'hierarchical'      => true, // make it hierarchical (like categories)
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'project-category' ),
    );
    register_taxonomy( 'project_category', array( 'project' ), $args );
}
add_action( 'init', 'wp_architec_register_taxonomy_project' );

function project_save_meta( $post_id ) {
    // Check if our nonce is set.
    if( !isset( $_POST['project_nonce'] ) || !wp_verify_nonce( $_POST['project_nonce'], 'project_metabox_nonce') )
        return;

    // Verify that the nonce is valid.
    if ( !wp_verify_nonce( $_POST['project_nonce'], 'project_metabox_nonce' ) )
        return;

    // If this is an autosave, our form has not been submitted, so we don't want to do anything.
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )
        return;

    // Check the user's permissions.
    if ( !current_user_can( 'edit_post', $post_id ) )
        return;

    // Check if our custom field is set.
    if ( isset( $_POST['project'] ) ) {
        update_post_meta( $post_id, 'project', sanitize_text_field( $_POST['project'] ) );
    }
}
add_action( 'save_post', 'project_save_meta' );
