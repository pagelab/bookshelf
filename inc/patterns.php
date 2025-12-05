<?php
/**
 * Block patterns setup.
 *
 * @package bookshelf
 * @since   2.0.0
 */

namespace Bookshelf;

# ------------------------------------------------------------------------------
# HOOKS
# ------------------------------------------------------------------------------

// Registers block pattern categories.
add_action( 'init', __NAMESPACE__ . '\\register_pattern_categories', 9 );

// Remove remote block patterns.
add_filter( 'should_load_remote_block_patterns', '__return_false' );


# ------------------------------------------------------------------------------
# FUNCTIONS
# ------------------------------------------------------------------------------

/**
 * Registers block pattern categories.
 *
 * Block patterns are auto-registered from /patterns/ directory by WordPress.
 *
 * @since 2.0.0
 *
 * @return void
 */
function register_pattern_categories(): void {

    $block_pattern_categories = [
        'bookshelf-404' => [
            'label' => esc_html__( '404', 'bookshelf' ),
        ],
        'bookshelf-branding' => [
            'label' => esc_html__( 'Branding', 'bookshelf' ),
        ],
        'bookshelf-capture' => [
            'label' => esc_html__( 'Lead capture', 'bookshelf' ),
        ],
        'bookshelf-counter' => [
            'label' => esc_html__( 'Counter', 'bookshelf' ),
        ],
        'bookshelf-feature' => [
            'label' => esc_html__( 'Hero', 'bookshelf' ),
        ],
        'bookshelf-footer' => [
            'label' => esc_html__( 'Footer', 'bookshelf' ),
        ],
        'bookshelf-header' => [
            'label' => esc_html__( 'Header', 'bookshelf' ),
        ],
        'bookshelf-hero' => [
            'label' => esc_html__( 'Hero', 'bookshelf' ),
        ],
        'bookshelf-landing' => [
            'label' => esc_html__( 'Landing', 'bookshelf' ),
        ],
        'bookshelf-notification' => [
            'label' => esc_html__( 'Notification', 'bookshelf' ),
        ],
        'bookshelf-pages' => [
            'label' => esc_html__( 'Pages', 'bookshelf' ),
        ],
        'bookshelf-pricing' => [
            'label' => esc_html__( 'Pricing', 'bookshelf' ),
        ],
        'bookshelf-products' => [
            'label' => esc_html__( 'Products', 'bookshelf' ),
        ],
        'bookshelf-search' => [
            'label' => esc_html__( 'Search', 'bookshelf' ),
        ],
        'bookshelf-sections' => [
            'label' => esc_html__( 'Sections', 'bookshelf' ),
        ],
        'bookshelf-specs' => [
            'label' => esc_html__( 'Specifications', 'bookshelf' ),
        ],
        'bookshelf-steps' => [
            'label' => esc_html__( 'Steps', 'bookshelf' ),
        ],
    ];

    /**
     * Filters the theme block pattern categories.
     *
     * @since 2.0.0
     *
     * @param array $block_pattern_categories Array of block pattern categories.
     */
    $block_pattern_categories = apply_filters( 'bookshelf_block_pattern_categories', $block_pattern_categories );

    foreach ( $block_pattern_categories as $name => $properties ) :
        // Check if the category exist before registration.
        if ( ! \WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) :
            register_block_pattern_category( $name, $properties );
        endif;
    endforeach;
}
