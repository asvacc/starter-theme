<?php

namespace Vaccaro\Blocks;

use Carbon_Fields\Block as CFBlock;
use Carbon_Fields\Container;
use Carbon_Fields\Field;

abstract class Block{

    public $block;

    public $icon = "image-filter";

    public $fields;

    public $category = "theme";

    public $keywords = array();

    public $description;

    public $title;

    public $template;

    function __construct(){
        if(empty($this->title))
            $this->title =  $this->getFieldTitleFromClass(get_called_class());
       
        if(empty($this->description))
            $this->description = "A " . $this->getFieldTitleFromClass(get_called_class()) . " block.";
    
        if(empty($this->template))
            $this->template = "/template-parts/blocks/" . $this->safeString($this->title) . ".php";

        $this->createBlock();
    }

    public abstract function build();

    private function createBlock(){
        $this->block = CFBlock::make($this->title)
            ->set_description( $this->description )
            ->set_category($this->category)
            ->set_icon($this->icon)
            ->set_keywords($this->keywords)
            ->set_render_callback( function ( $fields, $attributes, $inner_blocks) {
                $classes = !empty($attributes) ? $attributes['className'] : null;
                $slug = $this->safeString($this->title);
                $classes .= strtolower($slug);
                if(file_exists( get_theme_file_path("/template-parts/blocks/{$slug}.php")))
                    include(get_theme_file_path("/template-parts/blocks/Block.php"));
            });
    }

    private function getFieldTitleFromClass($calledClass){
        $name = explode('\\', $calledClass);
        return array_pop($name);
    }

    private function safeString($string){
        return str_replace(" ", "-" , $string);
    }
}