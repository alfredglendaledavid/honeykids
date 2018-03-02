<?php 
	$current_user = wp_get_current_user();
	$username = $current_user->display_name;
	$firstname = $current_user->first_name;
?>

<!-- Topbar on scroll -->
<div id="topbar-scroll" class="show-for-large">
    <div class="pink-bar">
        <div class="row">
            <div class="columns small-6 text-left show-for-large"></div>
            <div class="columns small-6 text-right align-self-middle">
                <div class="socialbtns">
                    <ul>
                        <?php get_template_part( 'parts/social-buttons' ); ?>
                        <li><?php if (is_user_logged_in()) {  if(!empty($firstname)) {echo '<div id="name-display">Hello</div>';} else { echo '<div id="name-display">Hello</div>'; }?>
                        <i class="fa fa-angle-down sign-drop hide-for-medium-down" aria-hidden="true"></i>
                        <div class="account-dropdown">
                            <?php /* <a href="<?php echo get_page_link(54867); ?>"><div class="favorite-title"><i class="fa fa-heart-o" aria-hidden="true"></i><span>Favorites List</span></div></a> */ ?>
                            <?php // echo do_shortcode('[cbxwpbookmark-mycat-count]'); ?>
                            <div class="hide-for-large text-center" id="mobile-social">
                                <ul>
                                    <?php get_template_part( 'parts/social-buttons' ); ?>
                                </ul>
                            </div>
                            <div class="account-settings-btn"><a href="<?php echo get_page_link(54862); ?>">ACCOUNT SETTINGS</a></div>
                            <div class="sign-out-topbar"><a href="<?php echo wp_logout_url( home_url() ); ?>" >Sign Out</a></div>
                        </div>
                    <?php } else { ?>
                        <li><a id="show_login" data-open="hka-signin">Sign In <i class="fa fa-sign-in" aria-hidden="true"></i></a></li>
                    <?php } ?></li>
                        <li class="hide-for-large"><button class="menu-icon" type="button" data-toggle="off-canvas"></button></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    <div class="header-pattern show-for-large" id="header-pattern">
        <div class="row">
            <div class="column medium-7 align-self-middle text-left">
                <?php site_logo(); ?>
            </div>
            <div class="column medium-5 align-self-middle">
                <?php get_template_part( 'parts/search-form' ); ?>
            </div>
        </div>
    </div>
    
    <div class="top-bar show-for-large" id="top-bar-menu">
        <?php wp_nav_menu( array( 
            'theme_location' => 'main-nav', 
            'depth' => 3, 
            'container' => false, 
            'menu_class' => 
            'full-menu nav', 
            'walker' => new thb_MegaMenu_tagandcat_Walker 
        ) ); ?>
    </div>
</div>

<div class="takeover-ad text-center">
	<?php takeover_top(); ?>
</div>

<!-- By default, this menu will use off-canvas for small
	 and a topbar for medium-up -->
<div class="pink-bar show-for-large">
	<div class="row">
    	<div class="columns small-8 text-left">
        	<?php joints_topbar_links(); ?>
        </div>
        <div class="columns small-4 text-right align-self-middle">
        	<div class="socialbtns">
                <ul>
                    <?php get_template_part( 'parts/social-buttons' ); ?>
                    
                    <li><?php if (is_user_logged_in()) {  if(!empty($firstname)) {echo '<div id="name-display">Hello</div>';} else { echo '<div id="name-display">Hello</div>'; }?>
                        <i class="fa fa-angle-down sign-drop hide-for-medium-down" aria-hidden="true"></i>
                        <div class="account-dropdown">
                            <?php /* <a href="<?php echo get_page_link(54867); ?>"><div class="favorite-title"><i class="fa fa-heart-o" aria-hidden="true"></i><span>Favorites List</span></div></a> */ ?>
                            <?php // echo do_shortcode('[cbxwpbookmark-mycat-count]'); ?>
                            <div class="hide-for-large text-center" id="mobile-social">
                                <ul>
                                    <?php get_template_part( 'parts/social-buttons' ); ?>
                                </ul>
                            </div>
                            <div class="account-settings-btn"><a href="<?php echo get_page_link(54862); ?>">ACCOUNT SETTINGS</a></div>
                            <div class="sign-out-topbar"><a href="<?php echo wp_logout_url( home_url() ); ?>" >Sign Out</a></div>
                        </div>
                    <?php } else { ?>
                        <li><a id="show_login" data-open="hka-signin">Sign In <i class="fa fa-sign-in" aria-hidden="true"></i></a></li>
                    <?php } ?></li>
                    <li class="hide-for-large"><button class="menu-icon" type="button" data-toggle="off-canvas"></button></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="hide-for-large" data-sticky-container>
	<div style="width:100%" class="sticky" data-sticky data-sticky-on="small" data-options="marginTop:0;">
        <div class="pink-bar">
            <div class="row">
                <div class="column small-2 medium-2 text-left">
                    <?php site_logo(); ?>
                </div>
                <div class="column small-10 medium-10 text-right align-self-middle">
                    <div class="socialbtns">
                        <ul>
                            <?php get_template_part( 'parts/social-buttons' ); ?>
                            <li><?php if (is_user_logged_in()) {  if(!empty($firstname)) {echo '<div id="name-display">Hello';} else { echo '<div id="name-display">Hello'; }?>
                                <i class="fa fa-angle-down sign-drop hide-for-medium-down" aria-hidden="true"></i>
                                <div class="account-dropdown">
                                    <a href="<?php echo get_page_link(54867); ?>"><div class="favorite-title"><i class="fa fa-heart-o" aria-hidden="true"></i><span>Favorites List</span></div></a>
                                    <?php echo do_shortcode('[cbxwpbookmark-mycat-count]'); ?>
                                    <div class="hide-for-large text-center" id="mobile-social">
                                        <ul>
                                            <?php get_template_part( 'parts/social-buttons' ); ?>
                                        </ul>
                                    </div>
                                    <div class="account-settings-btn"><a href="<?php echo get_page_link(54862); ?>">ACCOUNT SETTINGS</a></div>
                                    <div class="sign-out-topbar"><a href="<?php echo wp_logout_url( home_url() ); ?>" >Sign Out</a></div>
                                </div>
                            <?php } else { ?>
                                <li><a id="show_login" data-open="hka-signin">Sign In <i class="fa fa-sign-in" aria-hidden="true"></i></a></li>
                            <?php } ?></li>
                            <li class="hide-for-large"><button class="menu-icon" type="button" data-toggle="off-canvas"></button></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
		<div class="row search-mobile">
            <form method="get" class="searchform" role="search" action="<?php echo home_url(); ?>/">
                <i class="fa fa-search" aria-hidden="true"></i><input name="s" type="text" class="s search-input" value="<?php the_search_query(); ?>" placeholder="Search">
            </form>
		</div>
    </div>
</div>
<div class="header-pattern show-for-large" id="header-pattern" style="background-image:url(<?php header_pattern(); ?>);">
	<div class="row">
    	<div class="column medium-7 align-self-middle text-left">
        	<?php site_logo(); ?>
        </div>
        <div class="column medium-5 align-self-middle">
        	<?php get_template_part( 'parts/search-form' ); ?>
        </div>
    </div>
</div>

<div class="top-bar show-for-large" id="top-bar-menu">
	<?php wp_nav_menu( array( 'theme_location' => 'main-nav', 'depth' => 3, 'container' => false, 'menu_class' => 'full-menu nav', 'walker' => new thb_MegaMenu_tagandcat_Walker ) ); ?>
</div>