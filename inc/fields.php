<?php

use Vaccaro\Fields;
use Vaccaro\Blocks;

add_action('carbon_fields_register_fields', 'crb_attach_theme_options');
add_action('after_setup_theme', 'crb_load');

if (!function_exists('crb_attach_theme_options')) {
    function crb_attach_theme_options()
    {
        $classes = [
            Fields\ThemeOptions::class
        ];

        foreach($classes as $class)
        {
            new $class;
        }
    }
}

if (!function_exists('crb_load')) {
    function crb_load()
    {
        \Carbon_Fields\Carbon_Fields::boot();
        
        $classes = [
            Blocks\WYSIWYG::class
        ];

        foreach($classes as $class)
        {
            $instance = new $class();
            $instance->build();
        }
    }
}
