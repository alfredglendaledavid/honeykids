<!doctype html>

  <html class="no-js"  <?php language_attributes(); ?>>

	<head>
		<meta charset="utf-8">
		
		<!-- Force IE to use the latest rendering engine available -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta class="foundation-mq">
		
		<!-- If Site Icon isn't set in customizer -->
		<?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) { ?>
			<!-- Icons & Favicons -->
			<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
			<link href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-icon-touch.png" rel="apple-touch-icon" />
			<!--[if IE]>
				<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
			<![endif]-->
			<meta name="msapplication-TileColor" content="#f01d4f">
			<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/assets/images/win8-tile-icon.png">
	    	<meta name="theme-color" content="#121212">
	    <?php } ?>

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php wp_head(); ?>
		
        <?php the_field('header_scripts','option'); ?>
        
        <?php
		$primary_cat = new WPSEO_Primary_Term('category', get_the_ID());
		$primary_cat_id = $primary_cat->get_primary_term();
		$primary_cat_name = get_cat_name( $primary_cat_id );
		$page_url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
		
		function gtm_posttype() {
			global $wp_query;
			global $post;
			$term =	$wp_query->queried_object;
			$cat = '(not set)';
		 
			if ( is_page('calendar') ) {
				$cat = 'Calendar';
			} elseif ( is_home() || is_front_page() ) {
				$cat = 'Home Page';
			} elseif ( $wp_query->is_singular('post') ) {
				$primary_cat = new WPSEO_Primary_Term('category', $post->ID);
				$primary_cat_id = $primary_cat->get_primary_term();
				if (!empty($primary_cat_id)) {
					$cat = get_cat_name($primary_cat_id);
				} else {
					$cat = get_the_category($post->ID);
					$cat_parent = $cat[0]->category_parent;
					if($cat_parent) { $cat = get_category($cat_parent);
					$cat = $cat->name; }
					else { $cat = $cat[0]->name; }
				}			
			} elseif ( is_page('about-us') ) {
				$cat = 'About Us Page';
			} elseif ( is_page('post-an-event') ) {
				$cat = 'Event Submission Page';
			} elseif ( is_page('find-schools') ) {
			$cat = 'School Selector';
			} elseif ( is_page('compare-schools-preschool') || is_page('compare-schools-primary')  || is_page('compare-schools-secondary') || is_page('compare-schools-special-education') || is_page('compare-schools-enrichment') ) {
				$cat = 'School Selector';
			} elseif ( is_page('advertise') ) {
				$cat = 'Advertise Page';
			} elseif ( is_page('my-profile') ) {
				$cat = 'Profile Page';
			} elseif ( is_page('edit_myprofile') ) {
				$cat = 'Profile Editor Page';
			} elseif ( is_page('editorial-policy') ) {
				$cat = 'Editorial Policy Page';
			} elseif ( is_page('contact') ) {
				$cat = 'Contact Page';
			} elseif ( $wp_query->is_category ) {
				if ($term->parent > 0) {
					$cat = get_cat_name($term->parent);
					$subcat = $term->name;
				} else {
					$cat = $term->name;
				}
			} elseif ( $wp_query->is_tag ) {
				$cat = single_tag_title("", false);
			} elseif ( $wp_query->is_tax ) {
				$cat = $term->name;
			} elseif ( $wp_query->is_archive ) {
				$cat = 'Archive';
			} elseif ( $wp_query->is_search ) {
				$cat = 'Search';
			} elseif ( $wp_query->is_404 ) {
				$cat = '404 Page';
			}
			return '"Category": "'.$cat.'", "SubCategory": "'.$subcat.'"';
		}
		
		global $post;
		$article_type = get_field('entry_editorial_type',$post->ID);
		if (is_single()) {
			if( $article_type == 'Advertorial' )
				{
					$article = 'Advertorial';
				}
			else if( $article_type == 'Editorial' )
				{
					$article = 'Editorial';
			} else {
					$article = 'Others';
				}
		}



		?>
		<!-- Google Analytics -->
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
		
		  ga('create', 'UA-43956437-1', 'auto');
		  ga('require', 'linkid', 'linkid.js');
		  ga('require', 'displayfeatures');
		  var p = document.location.pathname;
		  setTimeout("ga('send','event','reading','time on page more than 2 minutes',p)",120000);
		  
		  ga('set', 'contentGroup3', '<?php echo $article; ?>'); 
		</script>
		
		<script>
			window.dataLayer = window.dataLayer || [];
			dataLayer.push({<?php echo gtm_posttype(); ?>})
			dataLayer.push({<?php echo '"ArticleType": "'.$article.'"'; ?>})
		</script>
		<!-- End Google Analytics -->

	</head>
	
	<!-- Uncomment this line if using the Off-Canvas Menu --> 
		
	<body <?php body_class(); ?>>
    
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MWRZC2" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

		<div class="off-canvas-wrapper">
							
			<?php get_template_part( 'parts/content', 'offcanvas' ); ?>
			
			<div class="off-canvas-content" data-off-canvas-content>
				
				<header class="header" role="banner">
                	<?php get_template_part( 'parts/nav', 'offcanvas-topbar' ); ?>
                	<?php /*
					<div  data-sticky-container>
                      <div style="width:100%" class="sticky" data-sticky data-sticky-on="small" data-options="marginTop:0;">
                        <?php get_template_part( 'parts/nav', 'offcanvas-topbar' ); ?>
                      </div>
                    </div>	
					*/ ?>
				</header> <!-- end .header -->