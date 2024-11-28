<?php

if ( ! class_exists('WP_Architec')) {

class WP_Architec {
    public function __construct() {
        add_action('init', [$this, 'wp_architec_project_post_type']);
        add_action('init', [$this, 'wp_architec_project_category_taxonomy']);
    }

    public function wp_architec_project_post_type() {
        $project_args = [
            'label'  => esc_html__('Projects', 'wp-architec'),
            'labels' => [
                'menu_name'          => esc_html__('Projects', 'wp-architec'),
                'name_admin_bar'     => esc_html__('Project', 'wp-architec'),
                'add_new'            => esc_html__('Add Project', 'wp-architec'),
                'add_new_item'       => esc_html__('Add new Project', 'wp-architec'),
                'new_item'           => esc_html__('New Project', 'wp-architec'),
                'edit_item'          => esc_html__('Edit Project', 'wp-architec'),
                'view_item'          => esc_html__('View Project', 'wp-architec'),
                'update_item'        => esc_html__('Update Project', 'wp-architec'),
                'all_items'          => esc_html__('All Projects', 'wp-architec'),
                'search_items'       => esc_html__('Search Projects', 'wp-architec'),
                'parent_item_colon'  => esc_html__('Parent Project', 'wp-architec'),
                'not_found'          => esc_html__('No Projects found', 'wp-architec'),
                'not_found_in_trash' => esc_html__('No Projects found in Trash', 'wp-architec'),
                'name'               => esc_html__('Projects', 'wp-architec'),
                'singular_name'      => esc_html__('Project', 'wp-architec'),
            ],
            'public'              => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'show_ui'             => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'show_in_rest'        => true,
            'capability_type'     => 'post',
            'hierarchical'        => false,
            'has_archive'         => true,
            'query_var'           => true,
            'can_export'          => true,
            'rewrite_no_front'    => false,
            'show_in_menu'        => true,
            'supports' => [
                'title',
                'editor',
                'thumbnail',
            ],
            'taxonomies' => [
                'project_category', // Custom taxonomy
            ],
            'rewrite' => true
        ];

        register_post_type('project', $project_args);
    }

    public function wp_architec_project_category_taxonomy() {
        $project_category_labels = [
            'name'                       => esc_html__('Project Categories', 'wp-architec'),
            'singular_name'              => esc_html__('Project Category', 'wp-architec'),
            'menu_name'                  => esc_html__('Project Categories', 'wp-architec'),
            'all_items'                  => esc_html__('All Categories', 'wp-architec'),
            'parent_item'                => esc_html__('Parent Category', 'wp-architec'),
            'parent_item_colon'          => esc_html__('Parent Category:', 'wp-architec'),
            'new_item_name'              => esc_html__('New Category Name', 'wp-architec'),
            'add_new_item'               => esc_html__('Add New Category', 'wp-architec'),
            'edit_item'                  => esc_html__('Edit Category', 'wp-architec'),
            'update_item'                => esc_html__('Update Category', 'wp-architec'),
            'view_item'                  => esc_html__('View Category', 'wp-architec'),
            'separate_items_with_commas' => esc_html__('Separate categories with commas', 'wp-architec'),
            'add_or_remove_items'        => esc_html__('Add or remove categories', 'wp-architec'),
            'choose_from_most_used'      => esc_html__('Choose from the most used', 'wp-architec'),
            'popular_items'              => esc_html__('Popular Categories', 'wp-architec'),
            'search_items'               => esc_html__('Search Categories', 'wp-architec'),
            'not_found'                  => esc_html__('Not Found', 'wp-architec'),
            'no_terms'                   => esc_html__('No categories', 'wp-architec'),
            'items_list'                 => esc_html__('Categories list', 'wp-architec'),
            'items_list_navigation'     => esc_html__('Categories list navigation', 'wp-architec'),
        ];

        $project_category_args = [
            'labels'                     => $project_category_labels,
            'hierarchical'               => true,
            'public'                     => true,
            'show_ui'                    => true,
            'show_admin_column'          => true,
            'show_in_nav_menus'          => true,
            'show_tagcloud'              => true,
            'rewrite'                    => true,
        ];

        register_taxonomy('project_category', array('project'), $project_category_args);
    }
}

new WP_Architec();

}
