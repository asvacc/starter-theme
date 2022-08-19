<?php

namespace Vaccaro\Fields;

use Carbon_Fields\Container;
use Carbon_Fields\Field;

class ThemeOptions
{
    function __construct()
    {
        $this->register_fields();
    }

    function register_fields()
    {
        $basic_options_container = Container::make('theme_options', __('Theme Options'))
         ->add_fields(array(
            Field::make('header_scripts', 'header_scripts', __('Header Scripts')),
            Field::make('footer_scripts', 'footer_scripts', __('Footer Scripts'))
         ));

        // Add second options page under 'Basic Options'
        Container::make('theme_options', __('Social Links'))
            ->set_page_parent($basic_options_container) // reference to a top level container
            ->add_fields(array(
                Field::make('text', 'facebook', __('Facebook Link')),
                Field::make('text', 'twitter', __('Twitter Link')),
                Field::make('text', 'instagram', __('Instagram Link')),
                Field::make('text', 'linkedin', __('LinkedIn Link')),
        ));

        Container::make('theme_options', __('Contact Information'))
            ->set_page_parent($basic_options_container) // reference to a top level container
            ->add_fields(array(
                Field::make('text', 'email', 'Email'),
                Field::make('text', 'phone', 'Phone'),
                Field::make('text', 'fax', 'Fax'),
                Field::make('textarea', 'address', 'Address'),
        ));
    }
}