<?php
/**
 * Title: Lead capture
 * Slug: bookshelf/capture-classic
 * Description: A full-width responsive section containing a promotional text with an image and an opt-in form.
 * Categories: bookshelf-capture
 * Keywords: optin, horizontal, full-width, capture
 * Viewport Width: 1280
 * Inserter: true
 */
?>
<!-- wp:group {"tagName":"section","style":{"spacing":{"margin":{"top":"0"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group" style="margin-top:0"><!-- wp:group {"align":"full","style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"var:preset|spacing|60","bottom":"4rem"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained","wideSize":"85rem"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--50);padding-bottom:4rem;padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|60","padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"textColor":"base","className":"is-style-bks-stack-up-to-medium-screens","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group alignwide is-style-bks-stack-up-to-medium-screens has-base-color has-text-color" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:heading {"textAlign":"left","level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"300","lineHeight":"1.1","letterSpacing":"-0.5px"},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"top":"0","right":"0","bottom":"0","left":"0"}},"layout":{"selfStretch":"fixed","flexSize":"35%"}},"textColor":"contrast","className":"is-style-bks-min-width-one-third","fontSize":"xx-large"} -->
<h4 class="wp-block-heading has-text-align-left is-style-bks-min-width-one-third has-contrast-color has-text-color has-xx-large-font-size" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;font-style:normal;font-weight:300;letter-spacing:-0.5px;line-height:1.1"><?php esc_html_e( 'Capture, convert, delight: the right theme to skyrocket your marketing potential', 'bookshelf' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"},"blockGap":"0"}},"textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-color has-text-color" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:cover3d/book /--></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"layout":{"selfStretch":"fixed","flexSize":"35%"},"spacing":{"padding":{"top":"0","right":"var:preset|spacing|60","bottom":"0","left":"var:preset|spacing|60"},"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}},"textColor":"contrast"} -->
<p class="has-text-align-center has-contrast-color has-text-color" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:0;padding-right:var(--wp--preset--spacing--60);padding-bottom:0;padding-left:var(--wp--preset--spacing--60)"><?php esc_html_e( 'Discover unparalleled customization possibilities and rely on top-notch services and support to effortlessly build your inbound marketing machine.', 'bookshelf' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"layout":{"selfStretch":"fit"},"dimensions":{"minHeight":"50px"}},"textColor":"primary-800"} -->
<div class="wp-block-group has-primary-800-color has-text-color" style="min-height:50px"><!-- wp:image {"width":"50px","height":"50px","sizeSlug":"full","linkDestination":"none","className":"is-style-bks-big-arrow-down bks-skip-lazy"} -->
<figure class="wp-block-image size-full is-resized is-style-bks-big-arrow-down bks-skip-lazy"><img src="<?php echo esc_url( get_theme_file_uri( '/assets/img/icon-mask.png' ) ); ?>" alt="" style="width:50px;height:50px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"backgroundColor":"base-opacity-20","textColor":"contrast","className":"bks-form","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull bks-form has-contrast-color has-base-opacity-20-background-color has-text-color has-background" id="bks-form" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:group {"align":"wide","layout":{"type":"constrained","contentSize":"70vw","wideSize":"90vw"}} -->
<div class="wp-block-group alignwide"><!-- wp:contact-form-7/contact-form-selector -->
<div class="wp-block-contact-form-7-contact-form-selector">[contact-form-7]</div>
<!-- /wp:contact-form-7/contact-form-selector --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
