<?php
/**
 * Title: Alternative footer
 * Slug: bookshelf/footer-alt
 * Description: A full-width horizontal footer containing a copyright statement and a secondary navigation.
 * Categories: bookshelf-footer
 * Keywords: footer, horizontal, full-width
 * Viewport Width: 1280
 * Block Types: core/template-part/footer
 * Inserter: true
 */
?>
<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--50)">

<!-- wp:bookshelf/dynamic-year-block {"beforeElement":"© 2021-","afterElement":". <?php esc_attr_e( 'All rights reserved', 'bookshelf' ); ?>.","alignment":"center","displaySiteName":true} /-->

<?php echo get_the_privacy_policy_link( '<!-- wp:paragraph --><p>', '</p><!-- /wp:paragraph -->' ); ?></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
