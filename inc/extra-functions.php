<?php
/**
 * Extra functions.
 *
 * @package bookshelf
 * @since   2.0.0
 */

namespace Bookshelf;

# ------------------------------------------------------------------------------
# HOOKs
# ------------------------------------------------------------------------------

// Register new block areas.
add_action( 'default_wp_template_part_areas', __NAMESPACE__ . '\\register_block_areas' );

// Show '(No title)' if a post has no title.
add_filter( 'the_title', __NAMESPACE__ . '\\no_title_text' );

// Read More Block: Replace the default [...] excerpt more with a “Continue reading” link.
add_filter( 'excerpt_more', __NAMESPACE__ . '\\excerpt_link' );

// Filters the article counters in the post list by month.
add_filter( 'get_archives_link', __NAMESPACE__ . '\\archive_count_span' );

// Filters the article counters in the category list.
add_filter( 'wp_list_categories', __NAMESPACE__ . '\\cat_count_span' );

// Adds 'wp-block-list' class to List blocks for styling.
add_filter( 'render_block', __NAMESPACE__ . '\\process_block_content', 10, 2 );

// Enqueue block styles conditionally .
array_map(
    '\Bookshelf\enqueue_styles_from_block_classes',
    array_map( 'basename', glob( get_stylesheet_directory() . '/assets/css/shared/block-styles/*.css' ) )
);

# ------------------------------------------------------------------------------
# FUNCTIONs
# ------------------------------------------------------------------------------

/**
 * Register new block areas.
 *
 * @link   https://developer.wordpress.org/reference/hooks/default_wp_template_part_areas/
 * @since  2.0.0
 * @param  array  $areas  Array of template part areas.
 * @return array
 */
function register_block_areas( array $areas ) {

    $areas[] = array(
        'area'        => 'notice',
        'area_tag'    => 'section',
        'label'       => __( 'Notice', 'bookshelf' ),
        'description' => __( 'Notification bar', 'bookshelf' ),
        'icon'        => 'notice' // symbolFilledIcon for now (see Gutenberg issue #36814).
    );

    $areas[] = array(
        'area'        => 'capture',
        'area_tag'    => 'section',
        'label'       => __( 'Capture', 'bookshelf' ),
        'description' => __( 'Lead capture', 'bookshelf' ),
        'icon'        => 'capture' // symbolFilledIcon for now (see Gutenberg issue #36814).
    );

    $areas[] = array(
        'area'        => 'sidebar',
        'area_tag'    => 'section',
        'label'       => __( 'Sidebar', 'bookshelf' ),
        'description' => __( 'Main sidebar', 'bookshelf' ),
        'icon'        => 'sidebar'
    );

    return $areas;
}


/**
 * Show '(No title)' if a post has no title.
 *
 * @link   https://developer.wordpress.org/reference/functions/the_title/
 * @since  2.0.0
 * @param  string  $title  The post title.
 * @return string
*/
function no_title_text( $title ) {

    if ( ! is_admin() && empty( $title ) ) :
        $title = _x( '(No title)', 'Used if post or pages has no title', 'bookshelf' );
    endif;

    return $title;
}


/**
 * Read More block: replace the default [...] excerpt more.
 * Note: this does not affect the inline read more block from the Post Excerpt block
 *
 * @link   https://developer.wordpress.org/reference/hooks/excerpt_more/
 * @since  2.0.0
 * @param  string  $more  The string shown within the more link.
 * @return string
*/
function excerpt_link( $more ) {

    // Cancel on admin.
    if ( is_admin() ) return $more;

    // Change the string.
    $more = '&hellip; &nbsp;' . sprintf( '<a href="%1$s" class="more-link">%2$s <span class="more-arrow">&rarr;</span></a>',
      esc_url( get_permalink( get_the_ID() ) ),
      sprintf( __( 'Continue reading %s', 'bookshelf' ), '<span class="screen-reader-text">' . get_the_title( get_the_ID() ) . '</span>' )
    );

    return $more;
}


/**
 * Filters the article counters in the post list by month.
 *
 * @link   https://developer.wordpress.org/reference/hooks/get_archives_link/
 * @since  2.0.0
 * @param  string  $link_html  The archive HTML link content.
 * @return string
 */
function archive_count_span( $link_html ) {

    $link_html = str_replace( '</a>&nbsp;(', '</a> <span class="counter">&nbsp;', $link_html );
    $link_html = str_replace( ')', '</span>', $link_html );

    return $link_html;
}


/**
 * Filters the article counters in the category list (front-end).
 *
 * @link   https://developer.wordpress.org/reference/hooks/wp_list_categories/
 * @since  2.0.0
 * @param  string  $output  HTML output.
 * @return string
 */
function cat_count_span( $output ) {

    $output = preg_replace( '/(>.+?<\/a>\s+)\((\d+)\)\n/', '$1 <span class="counter">&nbsp;$2</span>', $output );

    return $output;
}


/**
 * Process block content to add 'wp-block-list' class to List blocks.
 *
 * This ensures consistent styling for list blocks on the front-end.
 *
 * @link   https://developer.wordpress.org/reference/hooks/render_block/
 * @since  2.0.0
 * @param  string  $block_content  The block content about to be appended.
 * @param  array   $block          The full block, including name and attributes.
 * @return string
 */
function process_block_content( $block_content, $block ) {

    // Only process List blocks.
    if ( 'core/list' !== $block['blockName'] ) {
        return $block_content;
    }

    // Instantiate the tag processor from core.
    $content = new \WP_HTML_Tag_Processor( $block_content );

    // Find the first tag (either <ul> or <ol>).
    $content->next_tag();

    // Add a custom class.
    $content->add_class( 'wp-block-list' );

    // Return the updated block content.
    return (string) $content;
}


/**
 * Conditionally enqueue stylesheets based on block classes.
 *
 * @link   https://developer.wordpress.org/reference/hooks/render_block/
 * @link   https://developer.wordpress.org/reference/functions/wp_enqueue_block_support_styles/
 * @since  2.0.0
 * @param  string  $filename  The CSS file name.
 * @return void
 */
function enqueue_styles_from_block_classes( string $filename ): void {

    // Parse filename: "blockname--classname.css"
    $parts     = explode( '--', str_replace( '.css', '', $filename ) );
    $blockname = $parts[0];
    $classname = $parts[1] ?? '';

    // Add editor styles.
    add_action( 'after_setup_theme', fn() => add_editor_style( '/assets/css/shared/block-styles/' . $filename ) );

    // Front-end: enqueue only when block uses the class.
    add_filter( "render_block_core/{$blockname}", function( string $content ) use ( $filename, $blockname, $classname ): string {
        static $enqueued = [];

        // Skip if already enqueued.
        if ( isset( $enqueued[ $filename ] ) ) {
            return $content;
        }

        // Check if block has the class.
        $processor = new \WP_HTML_Tag_Processor( $content );
        if ( $processor->next_tag( [ 'class_name' => $classname ] ) ) {
            $css_path = get_stylesheet_directory() . '/assets/css/shared/block-styles/' . $filename;
            wp_enqueue_block_support_styles( file_get_contents( $css_path ) ); // phpcs:ignore WordPress.WP.AlternativeFunctions.file_get_contents_file_get_contents
            $enqueued[ $filename ] = true;
        }

        return $content;
    }, 10 );
}
