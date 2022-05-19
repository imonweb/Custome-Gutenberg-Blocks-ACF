<?php
/**
 * Plugin Name: WP Travel Itenerary Block
 * Plugin URI: https://github.com/imonweb/travel-it-block
 * Description: A boilerplate plugin structure for WP Gutenberg Block Development
 * Author: Imon
 * Author URI: https://www.imonweb.co.uk
 * Version: 0.1.0
 **/
 
defined( 'ABSPATH' ) or die( 'No authorized access!' );

add_action('acf/init', 'techiepress_acf_init_block_types');

function techiepress_acf_init_block_types() {

    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

        // register a testimonial block.
        acf_register_block_type( array(
            'name'              => 'travelitblock',
            'title'             => __('Travel Itinerary Block'),
            'description'       => __('Travel Itinerary Block to add good information for traveller'),
            // 'render_callback'   => function() {
            //   echo '<h3>Our travel block</h3>';
            // },
            'render_template'   => plugin_dir_path( __FILE__ ) . 'template-parts/travel-block.php',
            'category'          => 'media',
            'icon'              => 'format-gallery',
            'keywords'          => array( 'Travel', 'Itinerary', 'Techiepress' ),
            'enqueue_assets'    => function(){
              wp_enqueue_style( 'travel-it-block', plugin_dir_url( __FILE__ ) . 'assets/css/style.css', '', '1.0.0', 'all' );
            }
        ) );
    }
}