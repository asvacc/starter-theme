<?php 

namespace Vaccaro\Blocks;
use Carbon_Fields\Container;
use Carbon_Fields\Field;

class WYSIWYG extends Block
{
    function build()
    {
        $this->block
            ->add_fields([
                Field::make( 'rich_text', 'content', __( 'Block Content' ) ),
            ]);
    }
}