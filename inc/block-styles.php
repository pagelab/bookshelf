<?php
/**
 * Block styles setup.
 *
 * @package bookshelf
 * @since   2.0.0
 */

namespace Bookshelf;

# ------------------------------------------------------------------------------
# HOOKS
# ------------------------------------------------------------------------------

// Register block styles themselves.
add_action( 'init', __NAMESPACE__ . '\\register_block_styles' );


# ------------------------------------------------------------------------------
# FUNCTIONS
# ------------------------------------------------------------------------------

/**
 * Register block styles.
 *
 * TO-DO: register separate stylesheets for each block style.
 * For now, the CSS for each block style has been added to the respective
 * block style sheet, until https://core.trac.wordpress.org/ticket/55184 is resolved.
 *
 * @link   https://developer.wordpress.org/reference/functions/register_block_style/
 * @since  2.0.0
 * @return void
 */
function register_block_styles() {

    if ( ! function_exists( 'register_block_style' ) ) return;

    $block_styles = array(
        'core/button' => array(
            array(
                'name'         => 'bks-button-flat',
                'label'        => esc_html__( 'Flat', 'bookshelf' ),
            ),
            array(
                'name'         => 'bks-button-arrow-right',
                'label'        => esc_html__( 'Arrow (→)', 'bookshelf' ),
            ),
            array(
                'name'         => 'bks-button-arrow-down',
                'label'        => esc_html__( 'Arrow (↓)', 'bookshelf' ),
            ),
        ),
        'core/column' => array(
            array(
                'name'         => 'bks-03-column-site',
                'label'        => esc_html__( 'Shadow', 'bookshelf' ),
            ),
        ),
        'core/columns' => array(
            array(
                'name'         => 'bks-stack-on-medium-screens',
                'label'        => esc_html__( 'Stack (M)', 'bookshelf' ),
                'inline_style' => '.wp-block-columns.is-style-bks-stack-on-medium-screens{ @media (max-width:1200px) { flex-direction: column }}',
            ),
            array(
                'name'         => 'bks-stack-and-reverse-on-medium-screens',
                'label'        => esc_html__( 'Stack/Rev (M)', 'bookshelf' ),
                'inline_style' => '.wp-block-columns.is-style-bks-stack-and-reverse-on-medium-screens{ @media (max-width:1200px) { flex-direction: column-reverse }}',
            ),
        ),
        'core/group' => array(
            array(
                'name'         => 'bks-hide-on-small-screens',
                'label'        => esc_html__( 'Hide (S)', 'bookshelf' ),
            ),
            array(
                'name'         => 'bks-hide-on-medium-screens',
                'label'        => esc_html__( 'Hide (M)', 'bookshelf' ),
            ),
            array(
                'name'         => 'bks-reverse-on-small-screens',
                'label'        => esc_html__( 'Reverse (S)', 'bookshelf' ),
            ),
            array(
                'name'         => 'bks-reverse-on-medium-screens',
                'label'        => esc_html__( 'Reverse (M)', 'bookshelf' ),
            ),
            array(
                'name'         => 'bks-stack-on-small-screens',
                'label'        => esc_html__( 'Stack (S)', 'bookshelf' ),
            ),
            array(
                'name'         => 'bks-stack-on-medium-screens',
                'label'        => esc_html__( 'Stack (M)', 'bookshelf' ),
            ),
        ),
        'core/heading' => array(
            array(
                'name'         => 'bks-min-width-one-third',
                'label'        => esc_html__( 'Width (1/3)', 'bookshelf' ),
            ),
            array(
                'name'         => 'bks-min-width-two-thirds',
                'label'        => esc_html__( 'Width (2/3)', 'bookshelf' ),
            ),
        ),
        'core/list' => array(
            array(
                'name'         => 'bks-list-underline',
                'label'        => esc_html__( 'Underlined', 'bookshelf' ),
            ),
        ),
        'core/navigation-link' => array(
            array(
                'name'         => 'bks-hide-on-small-screens',
                'label'        => esc_html__( 'Hide (S)', 'bookshelf' ),
            ),
            array(
                'name'         => 'bks-hide-on-medium-screens',
                'label'        => esc_html__( 'Hide (M)', 'bookshelf' ),
            ),
        ),
        'core/template-part' => array(
            array(
                'name'         => 'bks-sticky',
                'label'        => esc_html__( 'Sticky header', 'bookshelf' ),
            ),
        ),
    );

    foreach( $block_styles as $block => $styles ) {
        foreach ( $styles as $style_properties ) {
            if ( is_array( $style_properties ) ) {
                $inline_style = isset( $style_properties['inline_style'] ) ? $style_properties['inline_style'] : '';
                register_block_style(
                    $block,
                    array(
                        'name'  => $style_properties['name'],
                        'label' => $style_properties['label'],
                        'inline_style' => $inline_style,
                    )
                );
            }
        }
    }
}
