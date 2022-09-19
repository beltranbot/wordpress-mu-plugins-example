<?php

function university_post_types()
{
    register_post_type("event", array(
        "public" => true, //
        "show_in_rest" => false, // set to true to use the new editor
        "labels" => array(
            "name" => "Events",
            "add_new_item" => "Add New Event",
            "edit_item" => "Edit Event",
            "all_items" => "All Events",
            "singular_name" => "Event"
        ),
        "menu_icon" => "dashicons-calendar" // wordpress dashicons
    ));
}

add_action("init", "university_post_types");
