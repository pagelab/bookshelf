<?php
/**
 * Title: 404
 * Slug: bookshelf/404
 * Description: 404 page
 * Categories: bookshelf-404
 * Keywords: 404, not found
 * Viewport Width: 1280
 * Template Types: 404
 * Inserter: true
 */
?>
<!-- wp:group {"tagName":"main","align":"full","style":{"spacing":{"padding":{"top":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d70)","bottom":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d70)"}}},"layout":{"inherit":true,"type":"constrained"}} -->
<main class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:group -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","fontSize":"x-large"} -->
<h2 class="wp-block-heading has-text-align-center has-x-large-font-size"><?php esc_html_e( 'Page not found', 'bookshelf' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search?', 'bookshelf' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"Search","showLabel":false,"buttonText":"Search"} /-->

<!-- wp:spacer {"height":"40px"} -->
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"style":{"border":{"style":"none","width":"0px"}},"className":"is-style-default","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group is-style-default" style="border-style:none;border-width:0px"><!-- wp:heading {"textAlign":"left"} -->
<h2 class="wp-block-heading has-text-align-left"><?php esc_html_e( 'Latest posts', 'bookshelf' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:latest-posts {"postsToShow":3,"displayAuthor":true,"displayPostDate":true,"displayFeaturedImage":true,"featuredImageAlign":"left"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"40px"} -->
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></main>
<!-- /wp:group -->
