<?php

function hero_block() {

    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

        // register a testimonial block.
        acf_register_block_type(array(
            'name'              => 'hero',
            'title'             => __('Hero'),
            'description'       => __('A custom hero block.'),
            'render_template'   => 'acf-templates/hero.php',
            'category'          => 'common-blocks',
            'icon'              => 'admin-comments',
            'keywords'          => array( '' ),
        ));
    }
}
add_action('acf/init', 'hero_block');