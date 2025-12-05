<?php
/**
 * Theme main function file.
 *
 * "Verba volant, scripta manent"
 *
 * @package    bookshelf
 * @version    0.1.0
 * @since      0.1.0
 * @author     Márcio Duarte <marcio@epico.studio>
 * @copyright  2025, Márcio Duarte
 * @link       https://bookshelf.theme/
 *
 */

namespace Bookshelf;

// Theme version.
define( 'BOOKSHELF_VERSION', wp_get_theme()->get( 'Version' ) );

# ------------------------------------------------------------------------------
# HOOKS
# ------------------------------------------------------------------------------

// Theme setup.
add_action( 'after_setup_theme', __NAMESPACE__ . '\\setup' );

// Enqueue theme styles and scripts in the frontend.
add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\\frontend', 9999 );

// Enqueue styles for the editor that should not be filtered.
add_action( 'enqueue_block_assets', __NAMESPACE__ . '\\enqueue_unfiltered_styles' );


# ------------------------------------------------------------------------------
# ADDITIONAL FILES
# ------------------------------------------------------------------------------

array_map( function( $path ) {
    require_once( get_parent_theme_file_path( "inc/{$path}.php" ) ); // phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound
}, [
    'block-styles',    // Block styles.
    'patterns',        // Block patterns.
    'extra-functions', // Additional theme functions.
] );

# ------------------------------------------------------------------------------
# FUNCTIONS
# ------------------------------------------------------------------------------

/**
 * Add theme support for block styles and editor style.
 *
 * @link   https://developer.wordpress.org/reference/hooks/after_setup_theme/
 * @since  2.0.0
 * @return void
 */
if ( ! function_exists( __NAMESPACE__ . '\setup' ) ) {
    function setup() {

        /*
         * Remove link from homepage logo.
         * @link https://developer.wordpress.org/block-editor/how-to-guides/themes/theme-support/#default-block-styles
         */
        add_theme_support( 'custom-logo', [ 'unlink-homepage-logo' => true ] );

        /*
         * Remove block patterns bundled with WordPress core.
         */
        remove_theme_support( 'core-block-patterns' );

        /*
         * Adds specific styles to the block editor window.
         * @link https://developer.wordpress.org/reference/functions/add_editor_style/
         */
        add_editor_style( [
            '/assets/css/shared/shared.css',
            '/assets/css/editor/editor.css',
        ] );

        /*
         * Increased character limit for inline CSS styles
         * @link https://make.wordpress.org/core/2021/07/01/block-styles-loading-enhancements-in-wordpress-5-8/
         */
        add_filter( 'styles_inline_size_limit', function( $size ) { return 50000; } );

        /*
         * Woocommerce support.
         * @link https://github.com/woocommerce/woocommerce/pull/30013
         */
        add_theme_support( 'woocommerce' );

        /*
         * Conditional enqueuing of block style sheets.
         * @link https://developer.wordpress.org/reference/functions/wp_enqueue_block_style/
         */

        // Get the theme directory.
        $dir = get_parent_theme_file_path();

        // Grab all CSS files in the blocks directory.
        $stylesheets = glob( $dir . '/assets/css/shared/blocks/*.css' );

        foreach ( $stylesheets as $stylesheet ) :

            // Get the block name from the file path.
            $block_name = basename( $stylesheet, '.css' );

            // Sanitize the name to make sure it contains only characters allowed in a block type name.
            $block_name = preg_replace( '/[^a-z0-9-]/', '', strtolower( $block_name ) );

            // Hook arguments.
            $args = [
                'handle' => "bks-block-$block_name",
                'src'    => get_parent_theme_file_uri( "assets/css/shared/blocks/$block_name.css" ),
                'path'   => get_parent_theme_file_path( "assets/css/shared/blocks/$block_name.css" ), // Inline the styles.
                'ver'    => BOOKSHELF_VERSION,
            ];

            // Enqueue each block stylesheet conditionally.
            wp_enqueue_block_style( "core/$block_name", $args );

        endforeach;
    }
}


/**
 * Enqueue assets on the front-end.
 *
 * @link   https://developer.wordpress.org/reference/functions/wp_style_add_data/
 * @since  2.0.0
 * @return void
 */
function frontend() {

    /*
     * Front-end styles.
     */
    wp_enqueue_style(
        'bks-front-end',
        get_theme_file_uri( 'assets/css/front-end/front-end.css' ),
        [ 'global-styles' ],
        BOOKSHELF_VERSION
    );

    // Inline the contents of the front-end.css file, where possible.
    wp_style_add_data( 'bks-front-end', 'path', get_parent_theme_file_path( 'assets/css/front-end/front-end.css' ) );


    /*
     * Shared styles (also enqueued in the editor via `add_editor_style`).
     */
    wp_enqueue_style(
        'bks-shared',
        get_theme_file_uri( 'assets/css/shared/shared.css' ),
        [ 'global-styles' ],
        BOOKSHELF_VERSION
    );

    // Inline the contents of the shared.css file, where possible.
    wp_style_add_data( 'bks-shared', 'path', get_parent_theme_file_path( 'assets/css/shared/shared.css' ) );

}


/**
 * Enqueue unfiltered styles on the editor.
 *
 * @link   https://developer.wordpress.org/reference/hooks/enqueue_block_assets/
 * @since  2.0.0
 * @return void
 */
function enqueue_unfiltered_styles() {

    if ( is_admin() ) {
        wp_enqueue_style(
            'bks-editor-unfiltered',
            get_theme_file_uri( 'assets/css/editor/editor-unfiltered.css' ),
            [],
            BOOKSHELF_VERSION
        );
    }
}
