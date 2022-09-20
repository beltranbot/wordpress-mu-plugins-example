<?php

function university_post_types()
{
    // event post type
    register_post_type("event", array(
        "supports" => Array("title" ,"editor", "excerpt"), // editor needs to be added to use new editor
        "rewrite" => Array("slug" => "events"), // overwrites urls
        "has_archive" => true, // restructure permalinks for this to work
        "public" => true, //
        "show_in_rest" => true, // set to true to use the new editor
        "labels" => array(
            "name" => "Events",
            "add_new_item" => "Add New Event",
            "edit_item" => "Edit Event",
            "all_items" => "All Events",
            "singular_name" => "Event"
        ),
        "menu_icon" => "dashicons-calendar" // wordpress dashicons
    ));

    // Program post type
    register_post_type("program", array(
        "supports" => Array("title" ,"editor"), // editor needs to be added to use new editor
        "rewrite" => Array("slug" => "programs"), // overwrites urls
        "has_archive" => true, // restructure permalinks for this to work
        "public" => true, //
        "show_in_rest" => true, // set to true to use the new editor
        "labels" => array(
            "name" => "Programs",
            "add_new_item" => "Add New Program",
            "edit_item" => "Edit Program",
            "all_items" => "All Programs",
            "singular_name" => "Program"
        ),
        "menu_icon" => "dashicons-awards" // wordpress dashicons
    ));
}

add_action("init", "university_post_types");
