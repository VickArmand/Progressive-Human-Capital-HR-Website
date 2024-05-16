<?php
/**
 * HR Management Consultancy: Block Patterns
 *
 * @package HR Management Consultancy
 * @since   1.0.0
 */

/**
 * Register Block Pattern Category.
 */
if ( function_exists( 'register_block_pattern_category' ) ) {

	register_block_pattern_category(
		'hr-management-consultancy',
		array( 'label' => __( 'HR Management Consultancy', 'hr-management-consultancy' ) )
	);
}

/**
 * Register Block Patterns.
 */
if ( function_exists( 'register_block_pattern' ) ) {
	register_block_pattern(
		'hr-management-consultancy/banner-section',
		array(
			'title'      => __( 'Banner Section', 'hr-management-consultancy' ),
			'categories' => array( 'hr-management-consultancy' ),
			'content'    => "<!-- wp:cover {\"url\":\"" . esc_url(get_template_directory_uri()) . "/inc/block-patterns/images/banner.png\",\"id\":3370,\"dimRatio\":0,\"overlayColor\":\"white\",\"isDark\":false,\"align\":\"full\",\"className\":\"hr-management-consultancy-banner\"} -->\n<div class=\"wp-block-cover alignfull is-light hr-management-consultancy-banner\"><span aria-hidden=\"true\" class=\"wp-block-cover__background has-white-background-color has-background-dim-0 has-background-dim\"></span><img class=\"wp-block-cover__image-background wp-image-3370\" alt=\"\" src=\"" . esc_url(get_template_directory_uri()) . "/inc/block-patterns/images/banner.png\" data-object-fit=\"cover\"/><div class=\"wp-block-cover__inner-container\"><!-- wp:columns -->\n<div class=\"wp-block-columns\"><!-- wp:column {\"verticalAlignment\":\"center\",\"width\":\"66.66%\",\"className\":\"banner-content\"} -->\n<div class=\"wp-block-column is-vertically-aligned-center banner-content\" style=\"flex-basis:66.66%\"><!-- wp:heading {\"textAlign\":\"left\",\"level\":1,\"style\":{\"typography\":{\"textTransform\":\"capitalize\",\"fontSize\":\"40px\",\"fontStyle\":\"normal\",\"fontWeight\":\"700\"}},\"textColor\":\"black\"} -->\n<h1 class=\"wp-block-heading has-text-align-left has-black-color has-text-color\" style=\"font-size:40px;font-style:normal;font-weight:700;text-transform:capitalize\">find a perfect candidate</h1>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph {\"style\":{\"typography\":{\"fontSize\":\"16px\",\"textTransform\":\"capitalize\",\"fontStyle\":\"normal\",\"fontWeight\":\"400\"},\"color\":{\"text\":\"#6b6a6a\"}}} -->\n<p class=\"has-text-color\" style=\"color:#6b6a6a;font-size:16px;font-style:normal;font-weight:400;text-transform:capitalize\">find jobs, employment &amp; career opportunities</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:buttons {\"layout\":{\"type\":\"flex\",\"justifyContent\":\"left\"}} -->\n<div class=\"wp-block-buttons\"><!-- wp:button {\"textColor\":\"white\",\"style\":{\"typography\":{\"fontSize\":\"16px\",\"fontStyle\":\"normal\",\"fontWeight\":\"700\",\"textTransform\":\"capitalize\"},\"border\":{\"radius\":\"30px\"},\"color\":{\"background\":\"#21286a\"}}} -->\n<div class=\"wp-block-button has-custom-font-size\" style=\"font-size:16px;font-style:normal;font-weight:700;text-transform:capitalize\"><a class=\"wp-block-button__link has-white-color has-text-color has-background wp-element-button\" style=\"border-radius:30px;background-color:#21286a\">search jobs</a></div>\n<!-- /wp:button --></div>\n<!-- /wp:buttons --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"width\":\"33.33%\"} -->\n<div class=\"wp-block-column\" style=\"flex-basis:33.33%\"></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns --></div></div>\n<!-- /wp:cover -->",
		)
	);

	register_block_pattern(
		'hr-management-consultancy/services-section',
		array(
			'title'      => __( 'Services Section', 'hr-management-consultancy' ),
			'categories' => array( 'hr-management-consultancy' ),
			'content'    => "<!-- wp:cover {\"overlayColor\":\"white\",\"contentPosition\":\"center center\",\"isDark\":false,\"align\":\"wide\",\"className\":\"hr-management-consultancy-job-section my-4\"} -->\n<div class=\"wp-block-cover alignwide is-light hr-management-consultancy-job-section my-4\"><span aria-hidden=\"true\" class=\"wp-block-cover__background has-white-background-color has-background-dim-100 has-background-dim\"></span><div class=\"wp-block-cover__inner-container\"><!-- wp:columns {\"align\":\"wide\",\"className\":\"section-heading mx-4\"} -->\n<div class=\"wp-block-columns alignwide section-heading mx-4\"><!-- wp:column {\"width\":\"66.66%\"} -->\n<div class=\"wp-block-column\" style=\"flex-basis:66.66%\"><!-- wp:heading {\"style\":{\"typography\":{\"fontSize\":\"30px\",\"textTransform\":\"capitalize\",\"fontStyle\":\"normal\",\"fontWeight\":\"700\"}},\"textColor\":\"black\"} -->\n<h2 class=\"wp-block-heading has-black-color has-text-color\" style=\"font-size:30px;font-style:normal;font-weight:700;text-transform:capitalize\">most popular job</h2>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph {\"style\":{\"typography\":{\"fontSize\":\"15px\"},\"color\":{\"text\":\"#010101\"}}} -->\n<p class=\"has-text-color\" style=\"color:#010101;font-size:15px\">Lorem Ipsum is that it has a more-or-less normal distribution of letters</p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"width\":\"33.33%\"} -->\n<div class=\"wp-block-column\" style=\"flex-basis:33.33%\"><!-- wp:paragraph {\"align\":\"right\",\"style\":{\"typography\":{\"fontSize\":\"18px\",\"textTransform\":\"capitalize\",\"fontStyle\":\"normal\",\"fontWeight\":\"400\"}},\"textColor\":\"black\",\"className\":\"browse-all\"} -->\n<p class=\"has-text-align-right browse-all has-black-color has-text-color\" style=\"font-size:18px;font-style:normal;font-weight:400;text-transform:capitalize\">browse all</p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns -->\n\n<!-- wp:columns {\"align\":\"wide\",\"className\":\"post-section mx-4\"} -->\n<div class=\"wp-block-columns alignwide post-section mx-4\"><!-- wp:column {\"className\":\"popular-jobs\"} -->\n<div class=\"wp-block-column popular-jobs\"><!-- wp:columns {\"className\":\"job-content\"} -->\n<div class=\"wp-block-columns job-content\"><!-- wp:column {\"width\":\"20%\"} -->\n<div class=\"wp-block-column\" style=\"flex-basis:20%\"><!-- wp:image {\"id\":3372,\"sizeSlug\":\"full\",\"linkDestination\":\"none\"} -->\n<figure class=\"wp-block-image size-full\"><img src=\"" . esc_url(get_template_directory_uri()) . "/inc/block-patterns/images/service-section-1.png\" alt=\"\" class=\"wp-image-3372\"/></figure>\n<!-- /wp:image --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"width\":\"80%\",\"className\":\"content\"} -->\n<div class=\"wp-block-column content\" style=\"flex-basis:80%\"><!-- wp:heading {\"level\":3,\"style\":{\"color\":{\"text\":\"#010101\"},\"typography\":{\"fontSize\":\"25px\",\"fontStyle\":\"normal\",\"fontWeight\":\"500\",\"textTransform\":\"capitalize\"}}} -->\n<h3 class=\"wp-block-heading has-text-color\" style=\"color:#010101;font-size:25px;font-style:normal;font-weight:500;text-transform:capitalize\">general ledger accountant</h3>\n<!-- /wp:heading -->\n\n<!-- wp:columns {\"className\":\"info-section\"} -->\n<div class=\"wp-block-columns info-section\"><!-- wp:column -->\n<div class=\"wp-block-column\"><!-- wp:paragraph {\"style\":{\"typography\":{\"fontSize\":\"16px\",\"textTransform\":\"capitalize\"},\"color\":{\"text\":\"#010101\"}},\"className\":\"marketing\"} -->\n<p class=\"marketing has-text-color\" style=\"color:#010101;font-size:16px;text-transform:capitalize\">marketing</p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column -->\n\n<!-- wp:column -->\n<div class=\"wp-block-column\"><!-- wp:paragraph {\"style\":{\"color\":{\"text\":\"#010101\"},\"typography\":{\"fontSize\":\"16px\",\"textTransform\":\"capitalize\"}},\"className\":\"location\"} -->\n<p class=\"location has-text-color\" style=\"color:#010101;font-size:16px;text-transform:capitalize\">pune</p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column -->\n\n<!-- wp:column -->\n<div class=\"wp-block-column\"><!-- wp:paragraph {\"style\":{\"color\":{\"text\":\"#010101\"},\"typography\":{\"fontSize\":\"16px\"}},\"className\":\"price\"} -->\n<p class=\"price has-text-color\" style=\"color:#010101;font-size:16px\">$120-$140</p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns -->\n\n<!-- wp:separator {\"className\":\"is-style-wide\"} -->\n<hr class=\"wp-block-separator has-alpha-channel-opacity is-style-wide\"/>\n<!-- /wp:separator -->\n\n<!-- wp:columns {\"className\":\"btn-section\"} -->\n<div class=\"wp-block-columns btn-section\"><!-- wp:column -->\n<div class=\"wp-block-column\"><!-- wp:buttons {\"className\":\"full-time\"} -->\n<div class=\"wp-block-buttons full-time\"><!-- wp:button {\"style\":{\"border\":{\"radius\":\"30px\"},\"typography\":{\"textTransform\":\"capitalize\",\"fontSize\":\"16px\",\"fontStyle\":\"normal\",\"fontWeight\":\"700\"},\"color\":{\"text\":\"#74caf9\"}}} -->\n<div class=\"wp-block-button has-custom-font-size\" style=\"font-size:16px;font-style:normal;font-weight:700;text-transform:capitalize\"><a class=\"wp-block-button__link has-text-color wp-element-button\" style=\"border-radius:30px;color:#74caf9\">full time</a></div>\n<!-- /wp:button --></div>\n<!-- /wp:buttons --></div>\n<!-- /wp:column -->\n\n<!-- wp:column -->\n<div class=\"wp-block-column\"><!-- wp:buttons {\"className\":\"urgent\"} -->\n<div class=\"wp-block-buttons urgent\"><!-- wp:button {\"textAlign\":\"left\",\"style\":{\"border\":{\"radius\":\"30px\"},\"typography\":{\"textTransform\":\"capitalize\",\"fontSize\":\"16px\",\"fontStyle\":\"normal\",\"fontWeight\":\"700\"},\"color\":{\"text\":\"#ffa4e6\"}}} -->\n<div class=\"wp-block-button has-custom-font-size\" style=\"font-size:16px;font-style:normal;font-weight:700;text-transform:capitalize\"><a class=\"wp-block-button__link has-text-color has-text-align-left wp-element-button\" style=\"border-radius:30px;color:#ffa4e6\">urgent</a></div>\n<!-- /wp:button --></div>\n<!-- /wp:buttons --></div>\n<!-- /wp:column -->\n\n<!-- wp:column -->\n<div class=\"wp-block-column\"><!-- wp:buttons {\"className\":\"apply-btn\",\"layout\":{\"type\":\"flex\",\"justifyContent\":\"center\",\"verticalAlignment\":\"top\"}} -->\n<div class=\"wp-block-buttons apply-btn\"><!-- wp:button {\"textColor\":\"white\",\"style\":{\"border\":{\"radius\":\"30px\"},\"typography\":{\"textTransform\":\"capitalize\",\"fontSize\":\"16px\",\"fontStyle\":\"normal\",\"fontWeight\":\"700\"},\"color\":{\"background\":\"#21286a\"}}} -->\n<div class=\"wp-block-button has-custom-font-size\" style=\"font-size:16px;font-style:normal;font-weight:700;text-transform:capitalize\"><a class=\"wp-block-button__link has-white-color has-text-color has-background wp-element-button\" style=\"border-radius:30px;background-color:#21286a\">apply now</a></div>\n<!-- /wp:button --></div>\n<!-- /wp:buttons --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"className\":\"popular-jobs\"} -->\n<div class=\"wp-block-column popular-jobs\"><!-- wp:columns {\"className\":\"job-content\"} -->\n<div class=\"wp-block-columns job-content\"><!-- wp:column {\"width\":\"20%\"} -->\n<div class=\"wp-block-column\" style=\"flex-basis:20%\"><!-- wp:image {\"id\":3374,\"sizeSlug\":\"full\",\"linkDestination\":\"none\"} -->\n<figure class=\"wp-block-image size-full\"><img src=\"" . esc_url(get_template_directory_uri()) . "/inc/block-patterns/images/service-section-2.png\" alt=\"\" class=\"wp-image-3374\"/></figure>\n<!-- /wp:image --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"width\":\"80%\",\"className\":\"content\"} -->\n<div class=\"wp-block-column content\" style=\"flex-basis:80%\"><!-- wp:heading {\"level\":3,\"style\":{\"color\":{\"text\":\"#010101\"},\"typography\":{\"fontSize\":\"25px\",\"fontStyle\":\"normal\",\"fontWeight\":\"500\",\"textTransform\":\"capitalize\"}}} -->\n<h3 class=\"wp-block-heading has-text-color\" style=\"color:#010101;font-size:25px;font-style:normal;font-weight:500;text-transform:capitalize\">finance manager &amp; health</h3>\n<!-- /wp:heading -->\n\n<!-- wp:columns {\"className\":\"info-section\"} -->\n<div class=\"wp-block-columns info-section\"><!-- wp:column -->\n<div class=\"wp-block-column\"><!-- wp:paragraph {\"style\":{\"typography\":{\"fontSize\":\"16px\",\"textTransform\":\"capitalize\"},\"color\":{\"text\":\"#010101\"}},\"className\":\"marketing\"} -->\n<p class=\"marketing has-text-color\" style=\"color:#010101;font-size:16px;text-transform:capitalize\">marketing</p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column -->\n\n<!-- wp:column -->\n<div class=\"wp-block-column\"><!-- wp:paragraph {\"style\":{\"color\":{\"text\":\"#010101\"},\"typography\":{\"fontSize\":\"16px\",\"textTransform\":\"capitalize\"}},\"className\":\"location\"} -->\n<p class=\"location has-text-color\" style=\"color:#010101;font-size:16px;text-transform:capitalize\">pune</p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column -->\n\n<!-- wp:column -->\n<div class=\"wp-block-column\"><!-- wp:paragraph {\"style\":{\"color\":{\"text\":\"#010101\"},\"typography\":{\"fontSize\":\"16px\"}},\"className\":\"price\"} -->\n<p class=\"price has-text-color\" style=\"color:#010101;font-size:16px\">$120-$140</p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns -->\n\n<!-- wp:separator {\"className\":\"is-style-wide\"} -->\n<hr class=\"wp-block-separator has-alpha-channel-opacity is-style-wide\"/>\n<!-- /wp:separator -->\n\n<!-- wp:columns {\"className\":\"btn-section\"} -->\n<div class=\"wp-block-columns btn-section\"><!-- wp:column -->\n<div class=\"wp-block-column\"><!-- wp:buttons {\"className\":\"full-time\"} -->\n<div class=\"wp-block-buttons full-time\"><!-- wp:button {\"style\":{\"border\":{\"radius\":\"30px\"},\"typography\":{\"textTransform\":\"capitalize\",\"fontSize\":\"16px\",\"fontStyle\":\"normal\",\"fontWeight\":\"700\"},\"color\":{\"text\":\"#74caf9\"}}} -->\n<div class=\"wp-block-button has-custom-font-size\" style=\"font-size:16px;font-style:normal;font-weight:700;text-transform:capitalize\"><a class=\"wp-block-button__link has-text-color wp-element-button\" style=\"border-radius:30px;color:#74caf9\">full time</a></div>\n<!-- /wp:button --></div>\n<!-- /wp:buttons --></div>\n<!-- /wp:column -->\n\n<!-- wp:column -->\n<div class=\"wp-block-column\"><!-- wp:buttons {\"className\":\"urgent\"} -->\n<div class=\"wp-block-buttons urgent\"><!-- wp:button {\"textAlign\":\"left\",\"style\":{\"border\":{\"radius\":\"30px\"},\"typography\":{\"textTransform\":\"capitalize\",\"fontSize\":\"16px\",\"fontStyle\":\"normal\",\"fontWeight\":\"700\"},\"color\":{\"text\":\"#ffa4e6\"}}} -->\n<div class=\"wp-block-button has-custom-font-size\" style=\"font-size:16px;font-style:normal;font-weight:700;text-transform:capitalize\"><a class=\"wp-block-button__link has-text-color has-text-align-left wp-element-button\" style=\"border-radius:30px;color:#ffa4e6\">urgent</a></div>\n<!-- /wp:button --></div>\n<!-- /wp:buttons --></div>\n<!-- /wp:column -->\n\n<!-- wp:column -->\n<div class=\"wp-block-column\"><!-- wp:buttons {\"className\":\"apply-btn\",\"layout\":{\"type\":\"flex\",\"justifyContent\":\"center\",\"verticalAlignment\":\"top\"}} -->\n<div class=\"wp-block-buttons apply-btn\"><!-- wp:button {\"textColor\":\"white\",\"style\":{\"border\":{\"radius\":\"30px\"},\"typography\":{\"textTransform\":\"capitalize\",\"fontSize\":\"16px\",\"fontStyle\":\"normal\",\"fontWeight\":\"700\"},\"color\":{\"background\":\"#21286a\"}}} -->\n<div class=\"wp-block-button has-custom-font-size\" style=\"font-size:16px;font-style:normal;font-weight:700;text-transform:capitalize\"><a class=\"wp-block-button__link has-white-color has-text-color has-background wp-element-button\" style=\"border-radius:30px;background-color:#21286a\">apply now</a></div>\n<!-- /wp:button --></div>\n<!-- /wp:buttons --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns --></div></div>\n<!-- /wp:cover -->",
		)
	);
}