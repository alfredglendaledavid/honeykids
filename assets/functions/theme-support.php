<?php

//add_filter('show_admin_bar', '__return_false');
	
// Adding WP Functions & Theme Support
function joints_theme_support() {

	// Add WP Thumbnail Support
	add_theme_support( 'post-thumbnails' );
	
	add_image_size( 'hka-slider', 743, 550 );
	
	add_image_size( 'hka-slider-mobile', 413, 305 );
	
	add_image_size( 'hka-thumb', 173, 150 );
	
	add_image_size( 'hka-thumb-menu', 220, 108 );
	
	add_image_size( 'hka-post', 356, 265 );
	
	add_image_size( 'hka-headshot', 164, 164 );
	
	// Default thumbnail size
	set_post_thumbnail_size(125, 125, true);

	// Add RSS Support
	add_theme_support( 'automatic-feed-links' );
	
	// Add Support for WP Controlled Title Tag
	add_theme_support( 'title-tag' );
	
	// Add HTML5 Support
	add_theme_support( 'html5', 
	         array( 
	         	'comment-list', 
	         	'comment-form', 
	         	'search-form', 
	         ) 
	);
	
	// Adding post format support
	 add_theme_support( 'post-formats',
		array(
			'aside',             // title less blurb
			'gallery',           // gallery of images
			'link',              // quick link to other site
			'image',             // an image
			'quote',             // a quick quote
			'status',            // a Facebook like status update
			'video',             // video
			'audio',             // audio
			'chat'               // chat transcript
		)
	); 
	
	// Set the maximum allowed width for any content in the theme, like oEmbeds and images added to posts.
	$GLOBALS['content_width'] = apply_filters( 'joints_theme_support', 1200 );	
	
} /* end theme support */

add_action( 'after_setup_theme', 'joints_theme_support' );

//Get Short Title
function short_title() {
	global $post;
    $acf_title = get_field('entry_headlinetitle_1',$post->ID); 
	if (!empty($acf_title)) {
		$post_title = $acf_title;
	} else {
		$post_title = get_the_title();
	}
	return $post_title;
}

//Get Primary Term
function primary_term() {
	global $post;
    $primary_cat = new WPSEO_Primary_Term('category', get_the_ID());
	$primary_cat_id = $primary_cat->get_primary_term();
	
	$id = get_the_ID();
	$post_category = get_the_category($id);
	$ancestors = get_ancestors($primary_cat_id, 'category');
	$root = end($ancestors);
	
	if ( $root == '' ) {
		$parent = $primary_cat_id;
	}
	else {
		$parent = $root;
	}
	
	$primary_cat_name = get_cat_name( $parent );
	$term = get_term($parent, 'category');
	
	return $term;
}


//Add Options Page
if( function_exists('acf_add_options_page') ) { acf_add_options_page(); }

function thb_getIconArray(){
	$icons = array(
		'' => '',
		'fa-glass' => 'fa-glass',
		'fa-music' => 'fa-music',
		'fa-search' => 'fa-search',
		'fa-envelope-o' => 'fa-envelope-o',
		'fa-heart' => 'fa-heart',
		'fa-star' => 'fa-star',
		'fa-star-o' => 'fa-star-o',
		'fa-user' => 'fa-user',
		'fa-film' => 'fa-film',
		'fa-th-large' => 'fa-th-large',
		'fa-th' => 'fa-th',
		'fa-th-list' => 'fa-th-list',
		'fa-check' => 'fa-check',
		'fa-times' => 'fa-times',
		'fa-search-plus' => 'fa-search-plus',
		'fa-search-minus' => 'fa-search-minus',
		'fa-power-off' => 'fa-power-off',
		'fa-signal' => 'fa-signal',
		'fa-cog' => 'fa-cog',
		'fa-trash-o' => 'fa-trash-o',
		'fa-home' => 'fa-home',
		'fa-file-o' => 'fa-file-o',
		'fa-clock-o' => 'fa-clock-o',
		'fa-road' => 'fa-road',
		'fa-download' => 'fa-download',
		'fa-arrow-circle-o-down' => 'fa-arrow-circle-o-down',
		'fa-arrow-circle-o-up' => 'fa-arrow-circle-o-up',
		'fa-inbox' => 'fa-inbox',
		'fa-play-circle-o' => 'fa-play-circle-o',
		'fa-repeat' => 'fa-repeat',
		'fa-refresh' => 'fa-refresh',
		'fa-list-alt' => 'fa-list-alt',
		'fa-lock' => 'fa-lock',
		'fa-flag' => 'fa-flag',
		'fa-headphones' => 'fa-headphones',
		'fa-volume-off' => 'fa-volume-off',
		'fa-volume-down' => 'fa-volume-down',
		'fa-volume-up' => 'fa-volume-up',
		'fa-qrcode' => 'fa-qrcode',
		'fa-barcode' => 'fa-barcode',
		'fa-tag' => 'fa-tag',
		'fa-tags' => 'fa-tags',
		'fa-book' => 'fa-book',
		'fa-bookmark' => 'fa-bookmark',
		'fa-print' => 'fa-print',
		'fa-camera' => 'fa-camera',
		'fa-font' => 'fa-font',
		'fa-bold' => 'fa-bold',
		'fa-italic' => 'fa-italic',
		'fa-text-height' => 'fa-text-height',
		'fa-text-width' => 'fa-text-width',
		'fa-align-left' => 'fa-align-left',
		'fa-align-center' => 'fa-align-center',
		'fa-align-right' => 'fa-align-right',
		'fa-align-justify' => 'fa-align-justify',
		'fa-list' => 'fa-list',
		'fa-outdent' => 'fa-outdent',
		'fa-indent' => 'fa-indent',
		'fa-video-camera' => 'fa-video-camera',
		'fa-picture-o' => 'fa-picture-o',
		'fa-pencil' => 'fa-pencil',
		'fa-map-marker' => 'fa-map-marker',
		'fa-adjust' => 'fa-adjust',
		'fa-tint' => 'fa-tint',
		'fa-pencil-square-o' => 'fa-pencil-square-o',
		'fa-share-square-o' => 'fa-share-square-o',
		'fa-check-square-o' => 'fa-check-square-o',
		'fa-arrows' => 'fa-arrows',
		'fa-step-backward' => 'fa-step-backward',
		'fa-fast-backward' => 'fa-fast-backward',
		'fa-backward' => 'fa-backward',
		'fa-play' => 'fa-play',
		'fa-pause' => 'fa-pause',
		'fa-stop' => 'fa-stop',
		'fa-forward' => 'fa-forward',
		'fa-fast-forward' => 'fa-fast-forward',
		'fa-step-forward' => 'fa-step-forward',
		'fa-eject' => 'fa-eject',
		'fa-chevron-left' => 'fa-chevron-left',
		'fa-chevron-right' => 'fa-chevron-right',
		'fa-plus-circle' => 'fa-plus-circle',
		'fa-minus-circle' => 'fa-minus-circle',
		'fa-times-circle' => 'fa-times-circle',
		'fa-check-circle' => 'fa-check-circle',
		'fa-question-circle' => 'fa-question-circle',
		'fa-info-circle' => 'fa-info-circle',
		'fa-crosshairs' => 'fa-crosshairs',
		'fa-times-circle-o' => 'fa-times-circle-o',
		'fa-check-circle-o' => 'fa-check-circle-o',
		'fa-ban' => 'fa-ban',
		'fa-arrow-left' => 'fa-arrow-left',
		'fa-arrow-right' => 'fa-arrow-right',
		'fa-arrow-up' => 'fa-arrow-up',
		'fa-arrow-down' => 'fa-arrow-down',
		'fa-share' => 'fa-share',
		'fa-expand' => 'fa-expand',
		'fa-compress' => 'fa-compress',
		'fa-plus' => 'fa-plus',
		'fa-minus' => 'fa-minus',
		'fa-asterisk' => 'fa-asterisk',
		'fa-exclamation-circle' => 'fa-exclamation-circle',
		'fa-gift' => 'fa-gift',
		'fa-leaf' => 'fa-leaf',
		'fa-fire' => 'fa-fire',
		'fa-eye' => 'fa-eye',
		'fa-eye-slash' => 'fa-eye-slash',
		'fa-exclamation-triangle' => 'fa-exclamation-triangle',
		'fa-plane' => 'fa-plane',
		'fa-calendar' => 'fa-calendar',
		'fa-random' => 'fa-random',
		'fa-comment' => 'fa-comment',
		'fa-magnet' => 'fa-magnet',
		'fa-chevron-up' => 'fa-chevron-up',
		'fa-chevron-down' => 'fa-chevron-down',
		'fa-retweet' => 'fa-retweet',
		'fa-shopping-cart' => 'fa-shopping-cart',
		'fa-folder' => 'fa-folder',
		'fa-folder-open' => 'fa-folder-open',
		'fa-arrows-v' => 'fa-arrows-v',
		'fa-arrows-h' => 'fa-arrows-h',
		'fa-bar-chart' => 'fa-bar-chart',
		'fa-twitter-square' => 'fa-twitter-square',
		'fa-facebook-square' => 'fa-facebook-square',
		'fa-camera-retro' => 'fa-camera-retro',
		'fa-key' => 'fa-key',
		'fa-cogs' => 'fa-cogs',
		'fa-comments' => 'fa-comments',
		'fa-thumbs-o-up' => 'fa-thumbs-o-up',
		'fa-thumbs-o-down' => 'fa-thumbs-o-down',
		'fa-star-half' => 'fa-star-half',
		'fa-heart-o' => 'fa-heart-o',
		'fa-sign-out' => 'fa-sign-out',
		'fa-linkedin-square' => 'fa-linkedin-square',
		'fa-thumb-tack' => 'fa-thumb-tack',
		'fa-external-link' => 'fa-external-link',
		'fa-sign-in' => 'fa-sign-in',
		'fa-trophy' => 'fa-trophy',
		'fa-github-square' => 'fa-github-square',
		'fa-upload' => 'fa-upload',
		'fa-lemon-o' => 'fa-lemon-o',
		'fa-phone' => 'fa-phone',
		'fa-square-o' => 'fa-square-o',
		'fa-bookmark-o' => 'fa-bookmark-o',
		'fa-phone-square' => 'fa-phone-square',
		'fa-twitter' => 'fa-twitter',
		'fa-facebook' => 'fa-facebook',
		'fa-github' => 'fa-github',
		'fa-unlock' => 'fa-unlock',
		'fa-credit-card' => 'fa-credit-card',
		'fa-rss' => 'fa-rss',
		'fa-hdd-o' => 'fa-hdd-o',
		'fa-bullhorn' => 'fa-bullhorn',
		'fa-bell' => 'fa-bell',
		'fa-certificate' => 'fa-certificate',
		'fa-hand-o-right' => 'fa-hand-o-right',
		'fa-hand-o-left' => 'fa-hand-o-left',
		'fa-hand-o-up' => 'fa-hand-o-up',
		'fa-hand-o-down' => 'fa-hand-o-down',
		'fa-arrow-circle-left' => 'fa-arrow-circle-left',
		'fa-arrow-circle-right' => 'fa-arrow-circle-right',
		'fa-arrow-circle-up' => 'fa-arrow-circle-up',
		'fa-arrow-circle-down' => 'fa-arrow-circle-down',
		'fa-globe' => 'fa-globe',
		'fa-wrench' => 'fa-wrench',
		'fa-tasks' => 'fa-tasks',
		'fa-filter' => 'fa-filter',
		'fa-briefcase' => 'fa-briefcase',
		'fa-arrows-alt' => 'fa-arrows-alt',
		'fa-users' => 'fa-users',
		'fa-link' => 'fa-link',
		'fa-cloud' => 'fa-cloud',
		'fa-flask' => 'fa-flask',
		'fa-scissors' => 'fa-scissors',
		'fa-files-o' => 'fa-files-o',
		'fa-paperclip' => 'fa-paperclip',
		'fa-floppy-o' => 'fa-floppy-o',
		'fa-square' => 'fa-square',
		'fa-bars' => 'fa-bars',
		'fa-list-ul' => 'fa-list-ul',
		'fa-list-ol' => 'fa-list-ol',
		'fa-strikethrough' => 'fa-strikethrough',
		'fa-underline' => 'fa-underline',
		'fa-table' => 'fa-table',
		'fa-magic' => 'fa-magic',
		'fa-truck' => 'fa-truck',
		'fa-pinterest' => 'fa-pinterest',
		'fa-pinterest-square' => 'fa-pinterest-square',
		'fa-google-plus-square' => 'fa-google-plus-square',
		'fa-google-plus' => 'fa-google-plus',
		'fa-money' => 'fa-money',
		'fa-caret-down' => 'fa-caret-down',
		'fa-caret-up' => 'fa-caret-up',
		'fa-caret-left' => 'fa-caret-left',
		'fa-caret-right' => 'fa-caret-right',
		'fa-columns' => 'fa-columns',
		'fa-sort' => 'fa-sort',
		'fa-sort-desc' => 'fa-sort-desc',
		'fa-sort-asc' => 'fa-sort-asc',
		'fa-envelope' => 'fa-envelope',
		'fa-linkedin' => 'fa-linkedin',
		'fa-undo' => 'fa-undo',
		'fa-gavel' => 'fa-gavel',
		'fa-tachometer' => 'fa-tachometer',
		'fa-comment-o' => 'fa-comment-o',
		'fa-comments-o' => 'fa-comments-o',
		'fa-bolt' => 'fa-bolt',
		'fa-sitemap' => 'fa-sitemap',
		'fa-umbrella' => 'fa-umbrella',
		'fa-clipboard' => 'fa-clipboard',
		'fa-lightbulb-o' => 'fa-lightbulb-o',
		'fa-exchange' => 'fa-exchange',
		'fa-cloud-download' => 'fa-cloud-download',
		'fa-cloud-upload' => 'fa-cloud-upload',
		'fa-user-md' => 'fa-user-md',
		'fa-stethoscope' => 'fa-stethoscope',
		'fa-suitcase' => 'fa-suitcase',
		'fa-bell-o' => 'fa-bell-o',
		'fa-coffee' => 'fa-coffee',
		'fa-cutlery' => 'fa-cutlery',
		'fa-file-text-o' => 'fa-file-text-o',
		'fa-building-o' => 'fa-building-o',
		'fa-hospital-o' => 'fa-hospital-o',
		'fa-ambulance' => 'fa-ambulance',
		'fa-medkit' => 'fa-medkit',
		'fa-fighter-jet' => 'fa-fighter-jet',
		'fa-beer' => 'fa-beer',
		'fa-h-square' => 'fa-h-square',
		'fa-plus-square' => 'fa-plus-square',
		'fa-angle-double-left' => 'fa-angle-double-left',
		'fa-angle-double-right' => 'fa-angle-double-right',
		'fa-angle-double-up' => 'fa-angle-double-up',
		'fa-angle-double-down' => 'fa-angle-double-down',
		'fa-angle-left' => 'fa-angle-left',
		'fa-angle-right' => 'fa-angle-right',
		'fa-angle-up' => 'fa-angle-up',
		'fa-angle-down' => 'fa-angle-down',
		'fa-desktop' => 'fa-desktop',
		'fa-laptop' => 'fa-laptop',
		'fa-tablet' => 'fa-tablet',
		'fa-mobile' => 'fa-mobile',
		'fa-circle-o' => 'fa-circle-o',
		'fa-quote-left' => 'fa-quote-left',
		'fa-quote-right' => 'fa-quote-right',
		'fa-spinner' => 'fa-spinner',
		'fa-circle' => 'fa-circle',
		'fa-reply' => 'fa-reply',
		'fa-github-alt' => 'fa-github-alt',
		'fa-folder-o' => 'fa-folder-o',
		'fa-folder-open-o' => 'fa-folder-open-o',
		'fa-smile-o' => 'fa-smile-o',
		'fa-frown-o' => 'fa-frown-o',
		'fa-meh-o' => 'fa-meh-o',
		'fa-gamepad' => 'fa-gamepad',
		'fa-keyboard-o' => 'fa-keyboard-o',
		'fa-flag-o' => 'fa-flag-o',
		'fa-flag-checkered' => 'fa-flag-checkered',
		'fa-terminal' => 'fa-terminal',
		'fa-code' => 'fa-code',
		'fa-reply-all' => 'fa-reply-all',
		'fa-star-half-o' => 'fa-star-half-o',
		'fa-location-arrow' => 'fa-location-arrow',
		'fa-crop' => 'fa-crop',
		'fa-code-fork' => 'fa-code-fork',
		'fa-chain-broken' => 'fa-chain-broken',
		'fa-question' => 'fa-question',
		'fa-info' => 'fa-info',
		'fa-exclamation' => 'fa-exclamation',
		'fa-superscript' => 'fa-superscript',
		'fa-subscript' => 'fa-subscript',
		'fa-eraser' => 'fa-eraser',
		'fa-puzzle-piece' => 'fa-puzzle-piece',
		'fa-microphone' => 'fa-microphone',
		'fa-microphone-slash' => 'fa-microphone-slash',
		'fa-shield' => 'fa-shield',
		'fa-calendar-o' => 'fa-calendar-o',
		'fa-fire-extinguisher' => 'fa-fire-extinguisher',
		'fa-rocket' => 'fa-rocket',
		'fa-maxcdn' => 'fa-maxcdn',
		'fa-chevron-circle-left' => 'fa-chevron-circle-left',
		'fa-chevron-circle-right' => 'fa-chevron-circle-right',
		'fa-chevron-circle-up' => 'fa-chevron-circle-up',
		'fa-chevron-circle-down' => 'fa-chevron-circle-down',
		'fa-html5' => 'fa-html5',
		'fa-css3' => 'fa-css3',
		'fa-anchor' => 'fa-anchor',
		'fa-unlock-alt' => 'fa-unlock-alt',
		'fa-bullseye' => 'fa-bullseye',
		'fa-ellipsis-h' => 'fa-ellipsis-h',
		'fa-ellipsis-v' => 'fa-ellipsis-v',
		'fa-rss-square' => 'fa-rss-square',
		'fa-play-circle' => 'fa-play-circle',
		'fa-ticket' => 'fa-ticket',
		'fa-minus-square' => 'fa-minus-square',
		'fa-minus-square-o' => 'fa-minus-square-o',
		'fa-level-up' => 'fa-level-up',
		'fa-level-down' => 'fa-level-down',
		'fa-check-square' => 'fa-check-square',
		'fa-pencil-square' => 'fa-pencil-square',
		'fa-external-link-square' => 'fa-external-link-square',
		'fa-share-square' => 'fa-share-square',
		'fa-compass' => 'fa-compass',
		'fa-caret-square-o-down' => 'fa-caret-square-o-down',
		'fa-caret-square-o-up' => 'fa-caret-square-o-up',
		'fa-caret-square-o-right' => 'fa-caret-square-o-right',
		'fa-eur' => 'fa-eur',
		'fa-gbp' => 'fa-gbp',
		'fa-usd' => 'fa-usd',
		'fa-inr' => 'fa-inr',
		'fa-jpy' => 'fa-jpy',
		'fa-rub' => 'fa-rub',
		'fa-krw' => 'fa-krw',
		'fa-btc' => 'fa-btc',
		'fa-file' => 'fa-file',
		'fa-file-text' => 'fa-file-text',
		'fa-sort-alpha-asc' => 'fa-sort-alpha-asc',
		'fa-sort-alpha-desc' => 'fa-sort-alpha-desc',
		'fa-sort-amount-asc' => 'fa-sort-amount-asc',
		'fa-sort-amount-desc' => 'fa-sort-amount-desc',
		'fa-sort-numeric-asc' => 'fa-sort-numeric-asc',
		'fa-sort-numeric-desc' => 'fa-sort-numeric-desc',
		'fa-thumbs-up' => 'fa-thumbs-up',
		'fa-thumbs-down' => 'fa-thumbs-down',
		'fa-youtube-square' => 'fa-youtube-square',
		'fa-youtube' => 'fa-youtube',
		'fa-xing' => 'fa-xing',
		'fa-xing-square' => 'fa-xing-square',
		'fa-youtube-play' => 'fa-youtube-play',
		'fa-dropbox' => 'fa-dropbox',
		'fa-stack-overflow' => 'fa-stack-overflow',
		'fa-instagram' => 'fa-instagram',
		'fa-flickr' => 'fa-flickr',
		'fa-adn' => 'fa-adn',
		'fa-bitbucket' => 'fa-bitbucket',
		'fa-bitbucket-square' => 'fa-bitbucket-square',
		'fa-tumblr' => 'fa-tumblr',
		'fa-tumblr-square' => 'fa-tumblr-square',
		'fa-long-arrow-down' => 'fa-long-arrow-down',
		'fa-long-arrow-up' => 'fa-long-arrow-up',
		'fa-long-arrow-left' => 'fa-long-arrow-left',
		'fa-long-arrow-right' => 'fa-long-arrow-right',
		'fa-apple' => 'fa-apple',
		'fa-windows' => 'fa-windows',
		'fa-android' => 'fa-android',
		'fa-linux' => 'fa-linux',
		'fa-dribbble' => 'fa-dribbble',
		'fa-skype' => 'fa-skype',
		'fa-foursquare' => 'fa-foursquare',
		'fa-trello' => 'fa-trello',
		'fa-female' => 'fa-female',
		'fa-male' => 'fa-male',
		'fa-gratipay' => 'fa-gratipay',
		'fa-sun-o' => 'fa-sun-o',
		'fa-moon-o' => 'fa-moon-o',
		'fa-archive' => 'fa-archive',
		'fa-bug' => 'fa-bug',
		'fa-vk' => 'fa-vk',
		'fa-weibo' => 'fa-weibo',
		'fa-renren' => 'fa-renren',
		'fa-pagelines' => 'fa-pagelines',
		'fa-stack-exchange' => 'fa-stack-exchange',
		'fa-arrow-circle-o-right' => 'fa-arrow-circle-o-right',
		'fa-arrow-circle-o-left' => 'fa-arrow-circle-o-left',
		'fa-caret-square-o-left' => 'fa-caret-square-o-left',
		'fa-dot-circle-o' => 'fa-dot-circle-o',
		'fa-wheelchair' => 'fa-wheelchair',

		'fa-vimeo-square' => 'fa-vimeo-square',
		'fa-try' => 'fa-try',
		'fa-plus-square-o' => 'fa-plus-square-o',
		'fa-space-shuttle' => 'fa-space-shuttle',
		'fa-slack' => 'fa-slack',
		'fa-envelope-square' => 'fa-envelope-square',
		'fa-wordpress' => 'fa-wordpress',
		'fa-openid' => 'fa-openid',
		'fa-university' => 'fa-university',
		'fa-graduation-cap' => 'fa-graduation-cap',
		'fa-yahoo' => 'fa-yahoo',
		'fa-google' => 'fa-google',
		'fa-reddit' => 'fa-reddit',
		'fa-reddit-square' => 'fa-reddit-square',
		'fa-stumbleupon-circle' => 'fa-stumbleupon-circle',
		'fa-stumbleupon' => 'fa-stumbleupon',
		'fa-delicious' => 'fa-delicious',
		'fa-digg' => 'fa-digg',
		'fa-pied-piper' => 'fa-pied-piper',
		'fa-pied-piper-alt' => 'fa-pied-piper-alt',
		'fa-drupal' => 'fa-drupal',
		'fa-joomla' => 'fa-joomla',
		'fa-language' => 'fa-language',
		'fa-fax' => 'fa-fax',
		'fa-building' => 'fa-building',
		'fa-child' => 'fa-child',
		'fa-paw' => 'fa-paw',
		'fa-spoon' => 'fa-spoon',
		'fa-cube' => 'fa-cube',
		'fa-cubes' => 'fa-cubes',
		'fa-behance' => 'fa-behance',
		'fa-behance-square' => 'fa-behance-square',
		'fa-steam' => 'fa-steam',
		'fa-steam-square' => 'fa-steam-square',
		'fa-recycle' => 'fa-recycle',
		'fa-car' => 'fa-car',
		'fa-taxi' => 'fa-taxi',
		'fa-tree' => 'fa-tree',
		'fa-spotify' => 'fa-spotify',
		'fa-deviantart' => 'fa-deviantart',
		'fa-soundcloud' => 'fa-soundcloud',
		'fa-database' => 'fa-database',
		'fa-file-pdf-o' => 'fa-file-pdf-o',
		'fa-file-word-o' => 'fa-file-word-o',
		'fa-file-excel-o' => 'fa-file-excel-o',
		'fa-file-powerpoint-o' => 'fa-file-powerpoint-o',
		'fa-file-image-o' => 'fa-file-image-o',
		'fa-file-archive-o' => 'fa-file-archive-o',
		'fa-file-audio-o' => 'fa-file-audio-o',
		'fa-file-video-o' => 'fa-file-video-o',
		'fa-file-code-o' => 'fa-file-code-o',
		'fa-vine' => 'fa-vine',
		'fa-codepen' => 'fa-codepen',
		'fa-jsfiddle' => 'fa-jsfiddle',
		'fa-life-ring' => 'fa-life-ring',
		'fa-circle-o-notch' => 'fa-circle-o-notch',
		'fa-rebel' => 'fa-rebel',
		'fa-empire' => 'fa-empire',
		'fa-git-square' => 'fa-git-square',
		'fa-git' => 'fa-git',
		'fa-hacker-news' => 'fa-hacker-news',
		'fa-tencent-weibo' => 'fa-tencent-weibo',
		'fa-qq' => 'fa-qq',
		'fa-weixin' => 'fa-weixin',
		'fa-paper-plane' => 'fa-paper-plane',
		'fa-paper-plane-o' => 'fa-paper-plane-o',
		'fa-history' => 'fa-history',
		'fa-circle-thin' => 'fa-circle-thin',
		'fa-header' => 'fa-header',
		'fa-paragraph' => 'fa-paragraph',
		'fa-sliders' => 'fa-sliders',
		'fa-share-alt' => 'fa-share-alt',
		'fa-share-alt-square' => 'fa-share-alt-square',
		'fa-bomb' => 'fa-bomb',
		'fa-futbol-o' => 'fa-futbol-o',
		'fa-tty' => 'fa-tty',
		'fa-binoculars' => 'fa-binoculars',
		'fa-plug' => 'fa-plug',
		'fa-slideshare' => 'fa-slideshare',
		'fa-twitch' => 'fa-twitch',
		'fa-yelp' => 'fa-yelp',
		'fa-newspaper-o' => 'fa-newspaper-o',
		'fa-wifi' => 'fa-wifi',
		'fa-calculator' => 'fa-calculator',
		'fa-paypal' => 'fa-paypal',
		'fa-google-wallet' => 'fa-google-wallet',
		'fa-cc-visa' => 'fa-cc-visa',
		'fa-cc-mastercard' => 'fa-cc-mastercard',
		'fa-cc-discover' => 'fa-cc-discover',
		'fa-cc-amex' => 'fa-cc-amex',
		'fa-cc-paypal' => 'fa-cc-paypal',
		'fa-cc-stripe' => 'fa-cc-stripe',
		'fa-bell-slash' => 'fa-bell-slash',
		'fa-bell-slash-o' => 'fa-bell-slash-o',
		'fa-trash' => 'fa-trash',
		'fa-copyright' => 'fa-copyright',
		'fa-at' => 'fa-at',
		'fa-eyedropper' => 'fa-eyedropper',
		'fa-paint-brush' => 'fa-paint-brush',
		'fa-birthday-cake' => 'fa-birthday-cake',
		'fa-area-chart' => 'fa-area-chart',
		'fa-pie-chart' => 'fa-pie-chart',
		'fa-line-chart' => 'fa-line-chart',
		'fa-lastfm' => 'fa-lastfm',
		'fa-lastfm-square' => 'fa-lastfm-square',
		'fa-toggle-off' => 'fa-toggle-off',
		'fa-toggle-on' => 'fa-toggle-on',
		'fa-bicycle' => 'fa-bicycle',
		'fa-bus' => 'fa-bus',
		'fa-ioxhost' => 'fa-ioxhost',
		'fa-angellist' => 'fa-angellist',
		'fa-cc' => 'fa-cc',
		'fa-ils' => 'fa-ils',
		'fa-meanpath' => 'fa-meanpath',

		'fa-buysellads' => 'fa-buysellads',
		'fa-connectdevelop' => 'fa-connectdevelop',
		'fa-dashcube' => 'fa-dashcube',
		'fa-forumbee' => 'fa-forumbee',
		'fa-leanpub' => 'fa-leanpub',
		'fa-sellsy' => 'fa-sellsy',
		'fa-shirtsinbulk' => 'fa-shirtsinbulk',
		'fa-simplybuilt' => 'fa-simplybuilt',
		'fa-skyatlas' => 'fa-skyatlas',
		'fa-cart-plus' => 'fa-cart-plus',
		'fa-cart-arrow-down' => 'fa-cart-arrow-down',
		'fa-diamond' => 'fa-diamond',
		'fa-ship' => 'fa-ship',
		'fa-user-secret' => 'fa-user-secret',
		'fa-motorcycle' => 'fa-motorcycle',
		'fa-street-view' => 'fa-street-view',
		'fa-heartbeat' => 'fa-heartbeat',
		'fa-venus' => 'fa-venus',
		'fa-mars' => 'fa-mars',
		'fa-mercury' => 'fa-mercury',
		'fa-transgender' => 'fa-transgender',
		'fa-transgender-alt' => 'fa-transgender-alt',
		'fa-venus-double' => 'fa-venus-double',
		'fa-mars-double' => 'fa-mars-double',
		'fa-venus-mars' => 'fa-venus-mars',
		'fa-mars-stroke' => 'fa-mars-stroke',
		'fa-mars-stroke-v' => 'fa-mars-stroke-v',
		'fa-mars-stroke-h' => 'fa-mars-stroke-h',
		'fa-neuter' => 'fa-neuter',
		'fa-facebook-official' => 'fa-facebook-official',
		'fa-pinterest-p' => 'fa-pinterest-p',
		'fa-whatsapp' => 'fa-whatsapp',
		'fa-server' => 'fa-server',
		'fa-user-plus' => 'fa-user-plus',
		'fa-user-times' => 'fa-user-times',
		'fa-bed' => 'fa-bed',
		'fa-viacoin' => 'fa-viacoin',
		'fa-train' => 'fa-train',
		'fa-subway' => 'fa-subway',
		'fa-medium' => 'fa-medium',
	);
  return $icons;
}


//Limit excerpt and content 
function excerpt($limit) {
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
  } else {
    $excerpt = implode(" ",$excerpt);
  }	
  $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
  return $excerpt;
}
 
function content($limit) {
  $content = explode(' ', get_the_content(), $limit);
  if (count($content)>=$limit) {
    array_pop($content);
    $content = implode(" ",$content).'...';
  } else {
    $content = implode(" ",$content);
  }	
  $content = preg_replace('/[.+]/','', $content);
  $content = apply_filters('the_content', $content); 
  $content = str_replace(']]>', ']]&gt;', $content);
  return $content;
}


//Get most popular articles
function wpb_set_post_views($postID) {
    $count_key = 'wpb_post_views_count';
	$cur_date  = 'daily';
	$date_today = getdate();
	$dates = $date_today['mon'].'-'.$date_today['mday'].'-'.$date_today['year'];
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
		add_post_meta($postID, $cur_date, $dates);
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
		update_post_meta($postID, $cur_date, $dates);
    }
}
//To keep the count accurate, lets get rid of prefetching
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

function wpb_track_post_views ($post_id) {
    if ( !is_single() ) return;
    if ( empty ( $post_id) ) {
        global $post;
        $post_id = $post->ID;    
    }
    wpb_set_post_views($post_id);
}
add_action( 'wp_head', 'wpb_track_post_views');


//ACF Headline Title on Post Backend
/*
add_filter( 'the_title', 'wpse33385_filter_title', 10, 2 );
function wpse33385_filter_title( $title, $post_id )
{
  if (is_single()) 
  {return $title;}
  else
   {
   if( $new_title = get_post_meta( $post_id, 'entry_headlinetitle_1', true ) )
    {
       return $new_title;
    } else 
    { 
        return $title;
    }}
}
*/

//Single Author Byline
function single_author() {
	$id = get_the_author_meta( 'ID' );
	?>
    
    <?php if( get_field('hide_author_box') ): 
		$author_display= 'hide';
		else :
		$author_display = '';
	endif; ?>
	
	<div class="author-content <?php echo $author_display; ?>">
    	<div class="row">
        	<div class="columns large-3 medium-4 small-12 align-self-middle text-center">
            	<?php echo get_avatar( $id , '164'); ?>
            </div>
            <div class="columns large-9 medium-8 small-12 align-self-middle">
                <h6><a href="<?php echo get_author_posts_url( $id ); ?>"><?php the_author_meta('display_name', $id ); ?></a></h6>
                <p><?php the_author_meta('description', $id ); ?></p>
            </div>
        </div>
	</div>
	<?php
}
add_action( 'single_author', 'single_author',3 );

//hide deprecated widget constructor error
add_filter('deprecated_constructor_trigger_error', '__return_false');

//Clean archive title
add_filter( 'get_the_archive_title', function ($title) {

    if ( is_category() ) {

            $title = single_cat_title( '', false );

        } elseif ( is_tag() ) {

            $title = single_tag_title( '', false );

        } elseif ( is_author() ) {

            $title = '<span class="vcard">' . get_the_author() . '</span>' ;

        }

    return $title;

});


//Ajax Load More 
function be_load_more_js() {

  $query = array( 
    'post__not_in' => array( get_queried_object_id() ), 
    'posts_per_page' => 6 
  );

  $args = array(
    'nonce' => wp_create_nonce( 'be-load-more-nonce' ),
    'url'   => admin_url( 'admin-ajax.php' ),
    'query' => $query,
  );
  
	if ( !is_page(array('find-schools')) ) {
	
		wp_enqueue_script( 'be-load-more', get_template_directory_uri() . '/assets/js/load-more.js', array( 'jquery' ), '1.0', true );
	
	 }

  wp_localize_script( 'be-load-more', 'beloadmore', $args );
	
}
add_action( 'wp_enqueue_scripts', 'be_load_more_js' );

/**
 * AJAX Load More 
 *
 */
function be_ajax_load_more() {
	
	$ppp     = (isset($_POST['ppp'])) ? $_POST['ppp'] : 6;
	$category     = (isset($_POST['category'])) ? $_POST['category'] : '';
	$hideSticky     = (isset($_POST['hideSticky'])) ? $_POST['hideSticky'] : 0;
	$author     = (isset($_POST['author'])) ? $_POST['author'] : '';
	$excludeCat     = (isset($_POST['excludeCat'])) ? $_POST['excludeCat'] : '';
	$exclude_array = explode(",", $excludeCat );
	$searchterm     = (isset($_POST['searchterm'])) ? $_POST['searchterm'] : '';
	$searchstring = (string)$searchterm;

	$args = array (
		'post_type'              => array( 'post' ),
		'post_status'            => array( 'publish' ),
		'category__not_in'       => $exclude_array,
		'order'                  => 'DESC',
		'orderby'                => 'date',
		'cat'                    => $category,
		'posts_per_page'         => $ppp,
		'ignore_sticky_posts'    => $hideSticky,
		's'    					 => $searchterm,
		'author'    			 => $author,
		'paged'                  => esc_attr( $_POST['page'] ),
	);
	
	ob_start();
	$loop = new WP_Query( $args );
	if( $loop->have_posts() ): while( $loop->have_posts() ): $loop->the_post();

	get_template_part( 'parts/loop-post' );
		
	endwhile; endif; wp_reset_postdata();
	$data = ob_get_clean();
	wp_send_json_success( $data );
	wp_die();
}
add_action( 'wp_ajax_be_ajax_load_more', 'be_ajax_load_more' );
add_action( 'wp_ajax_nopriv_be_ajax_load_more', 'be_ajax_load_more' );


//Get the category slug
function get_cat_slug($cat_id) {
	$cat_id = (int) $cat_id;
	$category = get_category($cat_id);
	return $category->slug;
}

// add article-body class
function article_body_class( $classes ) {
	global $post;
	if ( is_single() ) {
		$classes[] = 'article-body';
	}		
	return $classes;
}
add_filter( 'body_class', 'article_body_class' );


//ACF Google Map API
function my_acf_google_map_api( $api ){
	
	$api['key'] = 'AIzaSyCbGCUNgMPfaiM8mXQskXLEg1lnXZsjqtE';
	
	return $api;
	
}

add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');

function ajax_auth_init(){	
	
	wp_register_script('validate-script', get_template_directory_uri() . '/assets/js/jquery.validate.js', array(), '', true );
    wp_enqueue_script('validate-script');

    wp_register_script('ajax-auth-script', get_template_directory_uri() . '/assets/js/ajax-sign-script.js', array(), '', true );
    wp_enqueue_script('ajax-auth-script');

    wp_localize_script( 'ajax-auth-script', 'ajax_auth_object', array( 
        'ajaxurl' => admin_url( 'admin-ajax.php' ),
        'redirecturl' => home_url().'/my-profile/',
        'loadingmessage' => __('Sending user info, please wait...')
    ));

    // Enable the user with no privileges to run ajax_login() in AJAX
    add_action( 'wp_ajax_nopriv_ajaxlogin', 'ajax_login' );
	// Enable the user with no privileges to run ajax_register() in AJAX
	add_action( 'wp_ajax_nopriv_ajaxregister', 'ajax_register' );
	// Enable the user with no privileges to run ajax_forgotPassword() in AJAX
    add_action( 'wp_ajax_nopriv_ajaxforgotpassword', 'ajax_forgotPassword' );
}

// Execute the action only if the user isn't logged in
if (!is_user_logged_in()) {
    add_action('init', 'ajax_auth_init');
}
  
function ajax_login(){

    // First check the nonce, if it fails the function will break
    check_ajax_referer( 'ajax-login-nonce', 'security' );

    // Nonce is checked, get the POST data and sign user on
  	// Call auth_user_login
	auth_user_login($_POST['username'], $_POST['password'], 'Login'); 
	
    die();
}

function ajax_register(){

    // First check the nonce, if it fails the function will break
    check_ajax_referer( 'ajax-register-nonce', 'security' );
		
    // Nonce is checked, get the POST data and sign user on
    $info = array();
  	$info['user_nicename'] = $info['nickname'] = $info['display_name'] = $info['user_login'] = sanitize_user($_POST['username']);
	$info['first_name'] = sanitize_text_field($_POST['firstname']);
	$info['last_name'] = sanitize_text_field($_POST['lastname']);
    $info['user_pass'] = sanitize_text_field($_POST['password']);
	$info['user_email'] = sanitize_email( $_POST['email']);
	
	// Register the user
    $user_register = wp_insert_user( $info );
 	if ( is_wp_error($user_register) ){	
		$error  = $user_register->get_error_codes()	;
		
		if(in_array('empty_user_login', $error))
			echo json_encode(array('loggedin'=>false, 'message'=>__($user_register->get_error_message('empty_user_login'))));
		elseif(in_array('existing_user_login',$error))
			echo json_encode(array('loggedin'=>false, 'message'=>__('<span class="red">This username is already registered.</span>')));
		elseif(in_array('existing_user_email',$error))
        echo json_encode(array('loggedin'=>false, 'message'=>__('<span class="red">This email address is already registered.</span>')));
    } else {
	  auth_user_login($info['nickname'], $info['user_pass'], 'Registration');       
    }

    die();
}

function auth_user_login($user_login, $password, $login)
{
	$info = array();
    $info['user_login'] = $user_login;
    $info['user_password'] = $password;
    $info['remyprofile'] = true;
	
	
	$user_signon = wp_signon( $info, false );
    if ( is_wp_error($user_signon) ){
		echo json_encode(array('loggedin'=>false, 'message'=>__('<span class="red">'.'Wrong username or password.</span>')));
    } else {
		wp_set_current_user($user_signon->ID); 
        echo json_encode(array('loggedin'=>true, 'message'=>__('<span class="green">'.$login.' successful, redirecting...</span>')));
    }
	
	die();
}

function ajax_forgotPassword(){
	 
	// First check the nonce, if it fails the function will break
    check_ajax_referer( 'ajax-forgot-nonce', 'security' );
	
	global $wpdb;
	
	$account = $_POST['user_login'];
	
	if( empty( $account ) ) {
		$error = '<span class="red">Enter an username or e-mail address.</span>';
	} else {
		if(is_email( $account )) {
			if( email_exists($account) ) 
				$get_by = 'email';
			else	
				$error = '<span class="red">There is no user registered with that email address.</span>';			
		}
		else if (validate_username( $account )) {
			if( username_exists($account) ) 
				$get_by = 'login';
			else	
				$error = '<span class="red">There is no user registered with that username.</span>';				
		}
		else
			$error = '<span class="red">Invalid username or e-mail address.</span>';		
	}	
	
	if(empty ($error)) {
		// lets generate our new password
		//$random_password = wp_generate_password( 12, false );
		$random_password = wp_generate_password();

			
		// Get user data by field and data, fields are id, slug, email and login
		$user = get_user_by( $get_by, $account );
			
		$update_user = wp_update_user( array ( 'ID' => $user->ID, 'user_pass' => $random_password ) );
			
		// if  update user return true then lets send user an email containing the new password
		if( $update_user ) {
			
			$from = 'WRITE SENDER EMAIL ADDRESS HERE'; // Set whatever you want like mail@yourdomain.com
			
			if(!(isset($from) && is_email($from))) {		
				$sitename = strtolower( $_SERVER['SERVER_NAME'] );
				if ( substr( $sitename, 0, 4 ) == 'www.' ) {
					$sitename = substr( $sitename, 4 );					
				}
				$from = 'admin@'.$sitename; 
			}
			
			$to = $user->user_email;
			$subject = 'Your new password';
			$sender = 'From: '.get_option('name').' <'.$from.'>' . "\r\n";
			
			$message = 'Your new password is: '.$random_password;
				
			$headers[] = 'MIME-Version: 1.0' . "\r\n";
			$headers[] = 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
			$headers[] = "X-Mailer: PHP \r\n";
			$headers[] = $sender;
				
			$mail = wp_mail( $to, $subject, $message, $headers );
			if( $mail ) 
				$success = '<span class="green">Check your email address for you new password.</span>';
			else
				$error = '<span class="red">System is unable to send you mail containg your new password.</span>';						
		} else {
			$error = '<span class="red">Oops! Something went wrong while updaing your account.</span>';
		}
	}
	
	if( ! empty( $error ) )
		//echo '<div class="error_login"><strong>ERROR:</strong> '. $error .'</div>';
		echo json_encode(array('loggedin'=>false, 'message'=>__($error)));
			
	if( ! empty( $success ) )
		//echo '<div class="updated"> '. $success .'</div>';
		echo json_encode(array('loggedin'=>false, 'message'=>__($success)));
				
	die();
}


//AMP styling
add_action( 'amp_post_template_css', 'ad_amp_styles' );

function ad_amp_styles( $amp_template ) {
    // only CSS here please...
    ?>
    html {
    	background: none;
    }
    .amp-wp-title {
    	font-family: 'Cantarell', sans-serif;
    }
    body p, body ul {
    	font-family: 'Raleway', sans-serif;
    }
    .amp-wp-header > div, .amp-wp-header {

    	background: #fd0088;
    }

    .amp-wp-header > div > a {
    	color: #fff;
    }
    a {
    	color: #fd0088;
        text-decoration: none;
    }
    .amp-wp-byline amp-img {
    	display: none;
    }
    .amp-wp-header > div > a {
		background-image: url(<?php echo get_stylesheet_directory_uri() . '/assets/images/amp-logo.png'; ?>);
        background-repeat: no-repeat;
        background-size: contain;
        display: block;
        text-indent: -9999px;
    }
    .amp-wp-article-footer {
    	margin-top: 2em;
    }
    .amp-wp-footer > div > h2, .amp-wp-footer > div > p {
    	display: none;
    }
    .amp-related-posts ul {
    	margin-left: 0;
        list-style: none;
    }
    .amp-related-posts ul li {
    	width: 49%;
        display: inline-block;
        text-align: center;
    }
    .amp-related-posts ul li a {
    	text-decoration: none;
    }
    .amp-related-posts ul li p {
    	height: 35px;
        min-height: 35px;
        overflow: hidden;
        padding-left: 10px;
    	padding-right: 10px;
        margin-top: 10px;
    }
    .wp-caption .wp-caption-text, .amp-wp-meta {
    	font-size: 11px;
    }
    figure {
		width: calc(100% + 30px);
        margin-left: -15px;
        margin-right: -15px;
    }
    .amp-wp-article-featured-image {
    	width: calc(100% + 30px);
        margin-left: -15px;
        margin-right: -15px;
    }
    .amp-wp-site-icon, .amp-wp-meta.amp-wp-comments-link {
    	display: none;
    }
    .slider-pro {
    	display: none;
    }
    .single-calendar-details {
    	border-top: solid 1px #fd0088;
        border-bottom: solid 1px #fd0088;
        margin-top: 20px;
        margin-bottom: 20px;
        padding-top: 10px;
        padding-bottom: 10px;
    }
    .single-calendar-details table {
    	width: 100%:
    }
    .single-calendar-details table tr td {
    	border: none;
    }
    .single-calendar-details table tr td:first-child {
    	width: 40%;
    }
    <?php
}

add_filter( 'amp_post_template_file', 'xyz_amp_set_custom_tax_meta_template', 10, 3 );

function xyz_amp_set_custom_tax_meta_template( $file, $type, $post ) {
    if ( 'meta-taxonomy' === $type ) {
        $file = dirname( __FILE__ ) . '/t/meta-custom-tax.php';
    }
    return $file;
}

/**
 * Add related posts to AMP amp_post_article_footer_meta
 */
function my_amp_post_article_footer_meta( $parts ) {

	$index = 1;
	
	array_splice( $parts, $index, 0, array( 'my-related-posts' ) );

	return $parts;
}
add_filter( 'amp_post_article_footer_meta', 'my_amp_post_article_footer_meta' );

/**
 * Designate the template file for related posts
 */
function my_amp_related_posts_path( $file, $template_type, $post ) {

	if ( 'my-related-posts' === $template_type ) {
		$file = get_stylesheet_directory() . '/amp/related-posts.php';
	}
	return $file;
}
add_filter( 'amp_post_template_file', 'my_amp_related_posts_path', 10, 3 );

add_filter( 'amp_post_template_analytics', 'xyz_amp_add_custom_analytics' );
function xyz_amp_add_custom_analytics( $analytics ) {
    if ( ! is_array( $analytics ) ) {
        $analytics = array();
    }

    // https://developers.google.com/analytics/devguides/collection/amp-analytics/
    $analytics['xyz-googleanalytics'] = array(
        'type' => 'googleanalytics',
        'attributes' => array(
            // 'data-credentials' => 'include',
        ),
        'config_data' => array(
            'vars' => array(
                'account' => "UA-43956437-1"
            ),
            'triggers' => array(
                'trackPageview' => array(
                    'on' => 'visible',
                    'request' => 'pageview',
                ),
            ),
        ),
    );

    return $analytics;
}

//remove update core email
add_filter( 'auto_core_update_send_email', '__return_false' );

add_action( 'amp_post_template_head', 'custom_fonts' );

function custom_fonts( $amp_template ) {
    $post_id = $amp_template->get( 'post_id' );
    ?>
    <link href="https://fonts.googleapis.com/css?family=Cantarell" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <?php
}

add_filter( 'gform_notification_69', 'change_notification_email', 10, 3 );
function change_notification_email( $notification, $form, $entry ) {

    //There is no concept of admin notifications anymore, so we will need to target notifications based on other criteria, such as name
    if ( $notification['name'] == 'Admin Notification' ) {

        global $post;
        $notification['toType'] = 'email'; 
        $notification['to'] = get_field('SS_email', $post->ID);

    }

    return $notification;
}

//GForms - ACF Date Field
add_filter('gform_post_data', 'custom_update_gf_date', 10, 3);
function custom_update_gf_date($post_data, $form){


	if($form['title'] == 'Event Submission' && $post_data['post_custom_fields']['entry_start_date']){
		$post_data['post_custom_fields']['entry_start_date'] = preg_replace('/[^0-9,.]/', '', $post_data['post_custom_fields']['entry_start_date']);
	}
  	if($form['title'] == 'Event Submission' && $post_data['post_custom_fields']['entry_end_date']){
		$post_data['post_custom_fields']['entry_end_date'] = preg_replace('/[^0-9,.]/', '', $post_data['post_custom_fields']['entry_end_date']);
	}
	return $post_data;
}

// Loads only outside of administration panel
if(!is_admin()) {
  add_action('init','my_avatar_filter');
}

//User Avatar Upload
function my_avatar_filter() {
  // Remove from show_user_profile hook
  remove_action('show_user_profile', array('wp_user_avatar', 'wpua_action_show_user_profile'));
  remove_action('show_user_profile', array('wp_user_avatar', 'wpua_media_upload_scripts'));

  // Remove from edit_user_profile hook
  remove_action('edit_user_profile', array('wp_user_avatar', 'wpua_action_show_user_profile'));
  remove_action('edit_user_profile', array('wp_user_avatar', 'wpua_media_upload_scripts'));

  // Add to edit_user_avatar hook
  add_action('edit_user_avatar', array('wp_user_avatar', 'wpua_action_show_user_profile'));
  add_action('edit_user_avatar', array('wp_user_avatar', 'wpua_media_upload_scripts'));
}

//add category class on single
add_filter( 'body_class', 'ss_class' );
function ss_class( $classes ) {
	global $post;
    if ( is_singular( 'post' ) && has_category(array('singapore-schools', 'school-news', 'school-profiles', 'testimonials', 'school-videos', 'calendar-schools' ), $post->ID) ) {
    	$classes[] = 'category-singapore-schools';
	} else if ( is_singular( 'post' ) && has_category(array('pregnancyandbabies', 'ages-stages', 'babies', 'doctors-hospitals', 'find-an-expert', 'natural-birth', 'postnatal', 'pregnancy', 'pregnancy-stories' ), $post->ID) ) {
    	$classes[] = 'category-pregnancyandbabies';
	} else if (is_archive()) {
			if (is_category(array('singapore-schools', 'school-news', 'school-profiles', 'testimonials', 'school-videos', 'calendar-schools', 'school-profiles', 'preschools', 'primary', 'secondary', 'enrichmennt', 'special-education' ))) {
				$classes[] = 'category-singapore-schools';
			} else if (in_category(array('pregnancyandbabies', 'ages-stages', 'babies', 'doctors-hospitals', 'find-an-expert', 'natural-birth', 'postnatal', 'pregnancy', 'pregnancy-stories', 'pregnancy-ages-stages', 'babies-6months', 'fertility', 'newborn-infants', 'toddlers-12months', 'babies', 'doctors-hospitals', 'doctors', 'postnatal-support', 'pregnancy-support' ))) {
				$classes[] = 'category-pregnancyandbabies';
			} else {
				$classes[] = '';
			}
		 	$classes[] = 'test';
	} else if (is_page_template('page-compare.php') || is_page_template('page-findschools.php')) {
		$classes[] = 'category-singapore-schools';
	} else if (is_page_template('page-expertsubmit.php') || is_page_template('page-findexperts.php')) {
		$classes[] = 'category-pregnancyandbabies';
	} else {
		$classes[] = '';
	}
    return $classes;
}

function footer_pattern() {
	global $post;
    if ( is_singular( 'post' ) && has_category(array('pregnancyandbabies', 'ages-stages', 'babies', 'doctors-hospitals', 'find-an-expert', 'natural-birth', 'postnatal', 'pregnancy', 'pregnancy-stories' ), $post->ID) ) {
    	$footer_pattern = get_field('_bumps_footer_pattern', 'option');
	} else if (is_archive() && in_category(array('pregnancyandbabies', 'ages-stages', 'babies', 'doctors-hospitals', 'find-an-expert', 'natural-birth', 'postnatal', 'pregnancy', 'pregnancy-stories', 'pregnancy-ages-stages', 'babies-6months', 'fertility', 'newborn-infants', 'toddlers-12months', 'babies', 'doctors-hospitals', 'doctors', 'postnatal-support', 'pregnancy-support' ))) {
		$footer_pattern = get_field('_bumps_footer_pattern', 'option');
	} else if (is_page_template('page-expertsubmit.php') || is_page_template('page-findexperts.php')) {
		$footer_pattern = get_field('_bumps_footer_pattern', 'option');
	} else {
		$footer_pattern = get_field('footer_pattern', 'option');
	}
	echo $footer_pattern;
}

function header_pattern() {
	global $post;
    if ( is_singular( 'post' ) && has_category(array('pregnancyandbabies', 'ages-stages', 'babies', 'doctors-hospitals', 'find-an-expert', 'natural-birth', 'postnatal', 'pregnancy', 'pregnancy-stories' ), $post->ID) ) {
    	$header_pattern = get_field('_bumps_header_pattern', 'option');
	} else if (is_archive() && in_category(array('pregnancyandbabies', 'ages-stages', 'babies', 'doctors-hospitals', 'find-an-expert', 'natural-birth', 'postnatal', 'pregnancy', 'pregnancy-stories', 'pregnancy-ages-stages', 'babies-6months', 'fertility', 'newborn-infants', 'toddlers-12months', 'babies', 'doctors-hospitals', 'doctors', 'postnatal-support', 'pregnancy-support' ))) {
		$header_pattern = get_field('_bumps_header_pattern', 'option');
	} else if (is_page_template('page-expertsubmit.php') || is_page_template('page-findexperts.php')) {
		$header_pattern = get_field('_bumps_header_pattern', 'option');
	} else {
		$header_pattern = get_field('header_pattern', 'option');
	}
	echo $header_pattern;
}

function site_logo() {
	global $post;
    if ( is_singular( 'post' )) {
		if ( has_category(array('singapore-schools', 'school-news', 'school-profiles', 'testimonials', 'school-videos', 'calendar-schools' ), $post->ID) ) { ?>        
			<a href="<?php echo get_category_link(28654); ?>" class="show-for-large">
            	<img src="<?php the_field('_school_selector_header_logo','option'); ?>" alt="<?php echo get_bloginfo( 'School Selector' ); ?>" id="header-logo">
            </a>
            <a href="<?php echo get_category_link(28654); ?>" class="hide-for-large">
            	<img src="<?php the_field('mobile_logo','option'); ?>" alt="<?php echo get_bloginfo( 'School Selector' ); ?>" id="mobile-logo">
            </a>
        <?php } else if ( has_category(array('pregnancyandbabies', 'ages-stages', 'babies', 'doctors-hospitals', 'find-an-expert', 'natural-birth', 'postnatal', 'pregnancy', 'pregnancy-stories', 'pregnancy-ages-stages', 'babies-6months', 'fertility', 'newborn-infants', 'toddlers-12months', 'babies', 'doctors-hospitals', 'doctors', 'postnatal-support', 'pregnancy-support' ))) { ?>   
        	<a href="<?php echo get_category_link(23075); ?>" class="show-for-large">
            	<img src="<?php the_field('_bumps_header_logo','option'); ?>" alt="<?php echo get_bloginfo( 'Bumps and Babies' ); ?>" id="header-logo">
            </a>
            <a href="<?php echo get_category_link(23075); ?>" class="hide-for-large">
            	<img src="<?php the_field('mobile_logo','option'); ?>" alt="<?php echo get_bloginfo( 'Bumps and Babies' ); ?>" id="mobile-logo">
            </a>
        <?php } else { ?>
            <a href="<?php echo get_home_url(); ?>" class="show-for-large">
                <img src="<?php the_field('site_logo','option'); ?>" alt="<?php echo get_bloginfo( 'name' ); ?>" id="header-logo">
            </a>
            <a href="<?php echo get_home_url(); ?>" class="hide-for-large">
            	<img src="<?php the_field('mobile_logo','option'); ?>" alt="<?php echo get_bloginfo( 'School Selector' ); ?>" id="mobile-logo">
            </a>
		<?php }?>
        
	<?php } else if (is_archive()) {
		
		if (is_archive() && is_category(array('singapore-schools', 'school-news', 'school-profiles', 'testimonials', 'school-videos', 'calendar-schools', 'school-profiles', 'preschools', 'primary', 'secondary', 'enrichmennt', 'special-education' ))) { ?>        
			<a href="<?php echo get_category_link(28654); ?>" class="show-for-large">
            	<img src="<?php the_field('_school_selector_header_logo','option'); ?>" alt="<?php echo get_bloginfo( 'School Selector' ); ?>" id="header-logo">
            </a>
            <a href="<?php echo get_category_link(28654); ?>" class="hide-for-large">
            	<img src="<?php the_field('mobile_logo','option'); ?>" alt="<?php echo get_bloginfo( 'School Selector' ); ?>" id="mobile-logo">
            </a>
        <?php } else if (is_archive() && in_category(array('pregnancyandbabies', 'ages-stages', 'babies', 'doctors-hospitals', 'find-an-expert', 'natural-birth', 'postnatal', 'pregnancy', 'pregnancy-stories', 'pregnancy-ages-stages', 'babies-6months', 'fertility', 'newborn-infants', 'toddlers-12months', 'babies', 'doctors-hospitals', 'doctors', 'postnatal-support', 'pregnancy-support' ))) { ?>        
			<a href="<?php echo get_category_link(23075); ?>" class="show-for-large">
            	<img src="<?php the_field('_bumps_header_logo','option'); ?>" alt="<?php echo get_bloginfo( 'Bumps and Babies' ); ?>" id="header-logo">
            </a>
            <a href="<?php echo get_category_link(23075); ?>" class="hide-for-large">
            	<img src="<?php the_field('mobile_logo','option'); ?>" alt="<?php echo get_bloginfo( 'Bumps and Babies' ); ?>" id="mobile-logo">
            </a>
        <?php } else { ?>
        	<a href="<?php echo get_home_url(); ?>" class="show-for-large">
                <img src="<?php the_field('site_logo','option'); ?>" alt="<?php echo get_bloginfo( 'name' ); ?>" id="header-logo">
            </a>
            <a href="<?php echo get_home_url(); ?>" class="hide-for-large">
            	<img src="<?php the_field('mobile_logo','option'); ?>" alt="<?php echo get_bloginfo( 'School Selector' ); ?>" id="mobile-logo">
            </a>
		<?php } ?>
        
        
    <?php } else if (is_page_template('page-compare.php') || is_page_template('page-findschools.php')) {
	?>
    	<a href="<?php echo get_category_link(28654); ?>" class="show-for-large">
            	<img src="<?php the_field('_school_selector_header_logo','option'); ?>" alt="<?php echo get_bloginfo( 'School Selector' ); ?>" id="header-logo">
        </a>
        <a href="<?php echo get_category_link(28654); ?>" class="hide-for-large">
            <img src="<?php the_field('mobile_logo','option'); ?>" alt="<?php echo get_bloginfo( 'School Selector' ); ?>" id="mobile-logo">
        </a>
    <?php } else if (is_page_template('page-expertsubmit.php') || is_page_template('page-findexperts.php')) {
	?>
    	<a href="<?php echo get_category_link(23075); ?>" class="show-for-large">
            <img src="<?php the_field('_bumps_header_logo','option'); ?>" alt="<?php echo get_bloginfo( 'Bumps and Babies' ); ?>" id="header-logo">
        </a>
        <a href="<?php echo get_category_link(23075); ?>" class="hide-for-large">
            <img src="<?php the_field('mobile_logo','option'); ?>" alt="<?php echo get_bloginfo( 'Bumps and Babies' ); ?>" id="mobile-logo">
        </a>
    <?php
	} else { 
	?>
		<a href="<?php echo get_home_url(); ?>" class="show-for-large">
            <img src="<?php the_field('site_logo','option'); ?>" alt="<?php echo get_bloginfo( 'name' ); ?>" id="header-logo">
        </a>
        <a href="<?php echo get_home_url(); ?>" class="hide-for-large">
            <img src="<?php the_field('mobile_logo','option'); ?>" alt="<?php echo get_bloginfo( 'School Selector' ); ?>" id="mobile-logo">
        </a>
	<?php
    }
}

add_filter("gform_post_data_71", 'expert_checkboxes', 10, 3);

function ikreativ_async_scripts($url)
{
    if ( strpos( $url, '#asyncload') === false )
        return $url;
    else if ( is_admin() )
        return str_replace( '#asyncload', '', $url );
    else
	return str_replace( '#asyncload', '', $url )."' async='async"; 
    }
add_filter( 'clean_url', 'ikreativ_async_scripts', 11, 1 );

function expert_checkboxes($post_data , $form, $lead) {
	$post_data['post_custom_fields']['exp_location'] = serialize(explode(',', $post_data['post_custom_fields']['exp_location']));
    return $post_data;
}

//remove update core email
add_filter( 'auto_core_update_send_email', '__return_false' );


//Mid Editorial Ad Content
add_filter('the_content', 'mid_ad_content');

function mid_ad_content($content) {
	
	global $post;
	$edAd = get_field('_hka_editorial_ad_article', $post->ID );

    if (!is_single() || empty($edAd)) return $content;
    $paragraphAfter = 2; //Enter number of paragraphs to display ad after.
    $content = explode("</p>", $content);
    $new_content = '';
    for ($i = 0; $i < count($content); $i++) {
        if ($i == $paragraphAfter) {
				
				$short_title = get_field('entry_headlinetitle_1', $edAd);
				if (empty($short_title)) {
					$the_title = get_the_title( $edAd );

				} else {

					$the_title = $short_title;
				}
				
				$primary_cat = new WPSEO_Primary_Term('category',$edAd);
				$primary_cat_id = $primary_cat->get_primary_term();
				$ancestors = get_ancestors($primary_cat_id, 'category');
				$root = end($ancestors);
				
				if ( $root == '' ) {
					$parent = $primary_cat_id;
				}
				else {
					$parent = $root;
				}
				
				$primary_cat_name = get_cat_name( $parent );
				
				global $post;
				$article = get_field('entry_editorial_type',$post->ID);
				
				/*
				if(in_category(array('pregnancyandbabies', 'ages-stages', 'babies', 'doctors-hospitals', 'find-an-expert', 'natural-birth', 'postnatal', 'pregnancy', 'pregnancy-stories', 'pregnancy-ages-stages', 'babies-6months', 'fertility', 'newborn-infants', 'toddlers-12months', 'babies', 'doctors-hospitals', 'doctors', 'postnatal-support', 'pregnancy-support')) && ($article !== 'Advertorial')) {
					
                    if( have_rows('_hka_per_category_mid_banner  ','option') ):
                        while ( have_rows('_hka_per_category_mid_banner','option') ) :
                            the_row();
    
                            $head = get_sub_field('head_code');
                            $body = get_sub_field('body_code');
    
                            if( !empty($head) && !empty($body) )
								
                                $new_content.= "<div class='mid_banner'>";
								$new_content.= $head;
								$new_content.= $body;
								$new_content.= "</div>";
                        endwhile;
                    endif;
					
					

				} elseif(!in_category(array('pregnancyandbabies', 'ages-stages', 'babies', 'doctors-hospitals', 'find-an-expert', 'natural-birth', 'postnatal', 'pregnancy', 'pregnancy-stories', 'pregnancy-ages-stages', 'babies-6months', 'fertility', 'newborn-infants', 'toddlers-12months', 'babies', 'doctors-hospitals', 'doctors', 'postnatal-support', 'pregnancy-support'))) {
					
					*/
					
				if( get_field('_hka_editorial_ad_article') ): 

					$new_content.= '<div class="mid_editorial_ad">';
					$new_content.= '<div class="left"><a href="'.get_permalink($edAd).'" class="mid_ad_link">'.get_the_post_thumbnail( $edAd, 'archive').'</a></div>';
					$new_content.= '<div class="right"><div class="cat"><a href="' . get_category_link( $parent ) . '" class="mid_ad_link">'.$primary_cat_name.'</a></div><a href="'.get_permalink($edAd).'" class="mid_ad_link"><div class="title">'.$the_title.'</a></div></div>';
					$new_content.= '</div>';
				
				endif; 
				
				}

       // }

        $new_content.= $content[$i] . "</p>";
    }

    return $new_content;
}

add_action( 'pre_amp_render_post', 'isa_amp_add_content_filter' );
 
function isa_amp_add_content_filter() {
    add_filter( 'the_content', 'isa_amp_event_above_content' );
}
 
function isa_amp_event_above_content( $content ) {

		$start_acf = get_field('entry_start_date',$post->ID);
		$start = new DateTime(get_field('entry_start_date',$post->ID));
		$start_date = $start->format('l, F j, Y');
		$end_acf = get_field('entry_end_date',$post->ID);
		$end = new DateTime(get_field('entry_end_date',$post->ID));
		$end_date = $end->format('l, F j, Y');
		
		if ( $start_date == $end_date ) {
			$event_date = $start_date;
		} else {
			$event_date = $start_date. ' - ' .$end_date;
		}
		
		$event_time  = get_field('entry_time', $post->ID);
		$venue  = get_field('entry_event_location', $post->ID);
		$price  = get_field('entry_event_cost', $post->ID);
		$website  = get_field('show_website', $post->ID);

        ?>
        
        <?php global $post; if ( has_category(array('calendar','arts-exhibits-culture', 'calendar-editors-pick', 'food-drinks', 'educational-events', 'parties-festivals', 'calendar-schools', 'shopping', 'sports-fitness-wellbeing', 'theatre-performances', 'workshops-camps'), $post->ID)) { ?>
        
			<?php $acf .= '<div class="single-calendar-details"><table>'; ?>
                <?php $acf .= '<tr>'; ?>
                    <?php $acf .= '<td>DATE: </td>'; ?>
                    <?php $acf .= '<td>'.$event_date.'</td>'; ?>
                <?php $acf .= '</tr>'; ?>
                <?php if (!empty($event_time)) { ?>
                <?php $acf .= '<tr>'; ?>
                    <?php $acf .= '<td>TIME: </td>'; ?>
                    <?php $acf .= '<td>'.$event_time.'</td>'; ?>
                <?php $acf .= '</tr>'; ?>
                <?php } ?>
                <?php if (!empty($venue)) { ?>
                    <?php $acf .= '<tr>'; ?>
                        <?php $acf .= '<td>VENUE: </td>'; ?>
                        <?php $acf .= '<td>'.$venue.'</td>'; ?>
                    <?php $acf .= '</tr>'; ?>
                <?php } ?>
                <?php if (!empty($price)) { ?>
                <?php $acf .= '<tr>'; ?>
                    <?php $acf .= '<td>PRICE: </td>'; ?>
                    <?php $acf .= '<td>'.$price.'</td>'; ?>
                <?php $acf .= '</tr>'; ?>
                <?php } ?>
                <?php if (!empty($website)) { ?>
                <?php $acf .= '<tr>'; ?>
                    <?php $acf .= '<td>WEBSITE: </td>'; ?>
                    <?php $acf .= '<td><a href="'.$website.'" target="_blank">'.$website.'</a></td>'; ?>
                <?php $acf .= '</tr>'; ?>
                <?php } ?>
           <?php $acf .= ' </table></div>' ?>
           
       <?php } ?>
       
 	<?php 
 
    return $acf . $content;
}