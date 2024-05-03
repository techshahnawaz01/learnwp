<?php
function learn_post_type()
{    // Event
    register_post_type('event', array(
        'capability_type' => 'enent',
        'map_meta_cap' => true,
        'has_archive' => true,
        'public' => true,
        'show_in_rest' => true,
        'supports' => array('title', 'editor', 'excerpt'),
        'labels' => array(
            'name'                  => 'Events',
            'singular_name'         => 'Event',
            'menu_name'             => 'Events',
            'add_new'               => 'Add New Event',
            'add_new_item'          => 'Add New Event',
            'edit'                  => 'Edit',
            'edit_item'             => 'Edit Event',
            'new_item'              => 'New Event',
            'view'                  => 'View Event',
            'view_item'             => 'View Event',
            'search_items'          => 'Search Events',
            'not_found'             => 'No events found',
            'not_found_in_trash'    => 'No events found in Trash',
            'parent'                => 'Parent Event',
            'all_items'             => 'All events'

        ),
        'menu_icon' => 'dashicons-calendar'
    ));

    //Program
    register_post_type('program', array(
        'has_archive' => true,
        'public' => true,
        'show_in_rest' => true,
        'supports' => array('title'),
        'labels' => array(
            'name'                  => 'programs',
            'singular_name'         => 'program',
            'menu_name'             => 'programs',
            'add_new'               => 'Add New program',
            'add_new_item'          => 'Add New program',
            'edit'                  => 'Edit',
            'edit_item'             => 'Edit program',
            'new_item'              => 'New program',
            'view'                  => 'View program',
            'view_item'             => 'View program',
            'search_items'          => 'Search programs',
            'not_found'             => 'No events found',
            'not_found_in_trash'    => 'No events found in Trash',
            'parent'                => 'Parent program',
            'all_items'             => 'All programs'

        ),
        'menu_icon' => 'dashicons-awards'
    ));

    //professor
    register_post_type('professor', array(
        'public' => true,
        'show_in_rest' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'labels' => array(
            'name'                  => 'professors',
            'singular_name'         => 'professor',
            'menu_name'             => 'professors',
            'add_new'               => 'Add New professor',
            'add_new_item'          => 'Add New professor',
            'edit'                  => 'Edit',
            'edit_item'             => 'Edit professor',
            'new_item'              => 'New professor',
            'view'                  => 'View professor',
            'view_item'             => 'View professor',
            'search_items'          => 'Search professors',
            'not_found'             => 'No professors found',
            'not_found_in_trash'    => 'No professors found in Trash',
            'parent'                => 'Parent professor',
            'all_items'             => 'All professors'

        ),
        'menu_icon' => 'dashicons-welcome-learn-more'
    ));

    // campus
    register_post_type('campus', array(

        'has_archive' => true,
        'public' => true,
        'show_in_rest' => true,
        'supports' => array('title', 'editor', 'excerpt'),
        'labels' => array(
            'name'                  => 'campuses',
            'singular_name'         => 'campus',
            'menu_name'             => 'campuses',
            'add_new'               => 'Add New campus',
            'add_new_item'          => 'Add New campus',
            'edit'                  => 'Edit',
            'edit_item'             => 'Edit campus',
            'new_item'              => 'New campus',
            'view'                  => 'View campus',
            'view_item'             => 'View campus',
            'search_items'          => 'Search campus',
            'not_found'             => 'No campuses found',
            'not_found_in_trash'    => 'No campuses found in Trash',
            'parent'                => 'Parent campus',
            'all_items'             => 'All campuses'

        ),
        'menu_icon' => 'dashicons-location-alt'
    ));


    // My notes
    register_post_type('note', array(
        'public' => false,
        'show_in_rest' => true,
        'show_ui' => true,
        'capability_type' => 'note',
        'map_meta_cap' => true,
        'supports' => array('title', 'editor'),
        'labels' => array(
            'name'                  => 'notes',
            'singular_name'         => 'note',
            'menu_name'             => 'notes',
            'add_new'               => 'Add New note',
            'add_new_item'          => 'Add New note',
            'edit'                  => 'Edit',
            'edit_item'             => 'Edit note',
            'new_item'              => 'New note',
            'view'                  => 'View note',
            'view_item'             => 'View note',
            'search_items'          => 'Search note',
            'not_found'             => 'No notes found',
            'not_found_in_trash'    => 'No notes found in Trash',
            'parent'                => 'Parent note',
            'all_items'             => 'All notes'

        ),
        'menu_icon' => 'dashicons-welcome-write-blog'
    ));

    // Likes
    register_post_type('Like', array(
        'public' => false,
        'show_ui' => true,
        'supports' => array('title'),
        'labels' => array(
            'name'                  => 'Likes',
            'singular_name'         => 'Like',
            'menu_name'             => 'Likes',
            'add_new'               => 'Add New Like',
            'add_new_item'          => 'Add New Like',
            'edit'                  => 'Edit',
            'edit_item'             => 'Edit Like',
            'new_item'              => 'New Like',
            'view'                  => 'View Like',
            'view_item'             => 'View Like',
            'search_items'          => 'Search Like',
            'not_found'             => 'No Likes found',
            'not_found_in_trash'    => 'No Likes found in Trash',
            'parent'                => 'Parent Like',
            'all_items'             => 'All Likes'

        ),
        'menu_icon' => 'dashicons-heart'
    ));
}
add_action('init', 'learn_post_type');
