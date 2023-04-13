<?php
/**
 * Display the customizer header scripts.
 *
 * @package wd_s
 */

namespace WebDevStudios\wd_s;

function registerBlocks() {
    // Check function exists.
    if( function_exists('acf_register_block_type') ) { 
        acf_register_block_type(array(
            'name'              => 'radoslav_test',
            'title'             => __('Radoslav Test'),
            'render_template'   => 'template-parts/acf-blocks/radoslav-test.php',
        ));    
    }
}

add_action('acf/init', __NAMESPACE__ . '\registerBlocks');
