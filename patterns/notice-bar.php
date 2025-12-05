<?php
/**
 * Title: Notification bar
 * Slug: bookshelf/notice-bar
 * Description: A full-width notification sticky bar containing a paragraph and a CTA.
 * Categories: bookshelf-notification
 * Keywords: notification, cta, sticky
 * Viewport Width: 600
 * Inserter: true
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","right":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30"},"margin":{"top":"0px","bottom":"0px"}}},"backgroundColor":"primary","className":"is-style-default","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group alignfull is-style-default has-primary-background-color has-background" style="margin-top:0px;margin-bottom:0px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)">

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"className":"is-style-bks-stack-on-small-screens","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group is-style-bks-stack-on-small-screens">

<!-- wp:paragraph {"style":{"typography":{"fontSize":"1rem"}},"textColor":"base"} -->
<p class="has-base-color has-text-color" style="font-size:1rem"><?php esc_html_e( 'Explore a new frontier of customization and performance', 'bookshelf' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"layout":{"selfStretch":"fit","flexSize":null}}} -->
<div class="wp-block-buttons">
<!-- wp:button {"backgroundColor":"base","textColor":"primary","style":{"typography":{"textTransform":"uppercase","fontSize":"0.9rem","letterSpacing":"1px"},"border":{"radius":"100px"}},"className":"is-style-bks-button-arrow-right"} -->
<div class="wp-block-button has-custom-font-size is-style-bks-button-arrow-right" style="font-size:0.9rem;letter-spacing:1px;text-transform:uppercase">
<a class="wp-block-button__link has-primary-color has-base-background-color has-text-color has-background wp-element-button" href="<?php echo esc_url( admin_url( 'site-editor.php' ) ); ?>" style="border-radius:100px"><strong><?php esc_html_e( 'Start', 'bookshelf' ); ?></strong><img width="18" height="18" style="width: 18px;" src="<?php echo esc_url( get_theme_file_uri( '/assets/img/icon-mask.png' ) ); ?>" alt=""></a>
</div>
<!-- /wp:button -->

</div>
<!-- /wp:buttons -->

</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
