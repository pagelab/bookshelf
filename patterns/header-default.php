<?php
/**
 * Title: Default header
 * Slug: bookshelf/header-default
 * Description: A full-width horizontal header containing the site title and the navigation.
 * Categories: bookshelf-header
 * Keywords: header, horizontal, full-width
 * Viewport Width: 1280
 * Block Types: core/template-part/header
 * Inserter: true
 */
?>
<!-- wp:group {"tagName":"section","align":"wide","style":{"spacing":{"margin":{"top":"0"},"padding":{"top":"var:preset|spacing|60","right":"var:preset|spacing|50","bottom":"var:preset|spacing|60","left":"var:preset|spacing|50"}}},"className":"is-style-bks-header","layout":{"type":"constrained","contentSize":"rem","wideSize":"85rem"}} -->
<section class="wp-block-group alignwide is-style-bks-header" style="margin-top:0;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"className":"is-style-bks-stack-on-medium-screens","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide is-style-bks-stack-on-medium-screens"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"className":"is-style-bks-animated-logo","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group is-style-bks-animated-logo"><!-- wp:site-logo {"width":50,"shouldSyncIcon":false,"className":"is-style-rounded"} /-->

<!-- wp:site-title {"level":0} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"className":"is-style-bks-reverse-on-small-screens","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
<div class="wp-block-group is-style-bks-reverse-on-small-screens"><!-- wp:navigation {"ref":5612,"icon":"menu"} /-->

<!-- wp:outermost/icon-block {"iconName":"wordpress-searchAlt","iconColor":"primary-800","iconColorValue":"#0073aa","width":"24px"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
