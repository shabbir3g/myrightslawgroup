<?php 

function mrlg_theme_setup(){

		/* Register Post Type with category */
		
		$labels = array(
            'name'               => __( 'News', 'mrlg' ),
            'singular_name'      => __( 'News', 'mrlg' ),
            'menu_name'          => __( 'News', 'mrlg' ),
            'name_admin_bar'     => __( 'News', 'mrlg' ),
            'add_new'            => __( 'Add News', 'mrlg' ),
            'add_new_item'       => __( 'Add New News', 'mrlg' ),
            'new_item'           => __( 'New News', 'mrlg' ),
            'edit_item'          => __( 'Edit News', 'mrlg' ),
            'view_item'          => __( 'View News', 'mrlg' ),
            'all_items'          => __( 'All News', 'mrlg' ),
            'search_items'       => __( 'Search News', 'mrlg' ),
            'parent_item_colon'  => __( 'Parent News:', 'mrlg' ),
            'not_found'          => __( 'No News found.', 'mrlg' ),
            'not_found_in_trash' => __( 'No News found in Trash.', 'mrlg' )
        );

        $args = array(
            'labels'             => $labels,
            'description'        => __( 'Description.', 'mrlg' ),
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'rewrite'            => array( 'slug' => 'News' ),
            'capability_type'    => 'post',
            'has_archive'        => true,
            'hierarchical'       => false,
            'menu_position'      => null,
            'menu_icon'      	 => 'dashicons-smiley',
            'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
        );

        register_post_type( 'news', $args );
        
        
        
        /* Register New Taxonomy*/ 
        
        $labels = array(
            'name'              => _x( 'News Category', 'mrlg' ),
            'singular_name'     => _x( 'News Category', 'mrlg' ),
            'search_items'      => __( 'Search Category', 'mrlg' ),
            'all_items'         => __( 'All Categories', 'mrlg' ),
            'parent_item'       => __( 'Parent Category', 'mrlg' ),
            'parent_item_colon' => __( 'Parent Category:', 'mrlg' ),
            'edit_item'         => __( 'Edit Category', 'mrlg' ),
            'update_item'       => __( 'Update Category', 'mrlg' ),
            'add_new_item'      => __( 'Add New Category', 'mrlg' ),
            'new_item_name'     => __( 'New Category Name', 'mrlg' ),
            'menu_name'         => __( 'Category', 'mrlg' ),
        );

        $args = array(
            'hierarchical'      => true,
            'labels'            => $labels,
            'show_ui'           => true,
            'show_admin_column' => true,
            'query_var'         => true,
            'rewrite'           => array( 'slug' => 'news-category' ),
        );

        register_taxonomy( 'newscategory', array( 'news' ), $args );
}
add_action('after_setup_theme', 'mrlg_theme_setup');

?>