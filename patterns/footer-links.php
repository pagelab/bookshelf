<?php
/**
 * Title: Footer links
 * Slug: bookshelf/footer-links
 * Description: Footer with copyright and social links.
 * Categories: bookshelf-footer
 * Keywords: footer, vertical
 * Viewport Width: 1280
 * Block Types: core/template-part/footer
 * Inserter: false
 */
?>
<!-- wp:group {"templateLock": "contentOnly", "align":"full","layout":{"type":"flex","allowOrientation":false,"justifyContent":"space-between"}} -->
<div class="wp-block-group alignfull"><!-- wp:group {"layout":{"type":"flex","allowOrientation":false}} --><div class="wp-block-group">
<!-- wp:paragraph {"fontSize":"x-small"} --><p class="has-x-small-font-size"><?php esc_html_e( 'Copyright', 'bookshelf' ); ?> <?php echo esc_html( date_i18n( _x( 'Y', 'copyright date format', 'bookshelf' ) ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:site-title {"level":0, "fontSize":"x-small"} /-->
<?php echo get_the_privacy_policy_link( '<!-- wp:paragraph {"fontSize":"x-small"} --><p class="has-x-small-font-size">', '</p><!-- /wp:paragraph -->' ); ?>
</div><!-- /wp:group -->
<!-- wp:social-links {"className":"is-style-logos-only"} -->
<ul class="wp-block-social-links is-style-logos-only"><!-- wp:social-link {"url":"https://wordpress.org","service":"wordpress"} /--></ul>
<!-- /wp:social-links -->
</div><!-- /wp:group -->
