				<footer class="footer" role="contentinfo" style="background-image: url(<?php footer_pattern(); ?>);">
					<div id="inner-footer">
                    	
                        <?php /*
                    
                    	<div class="row" data-equalizer data-equalize-on="large">
                            <div class="columns small-12 medium-12 large-4 show-for-large" data-equalizer>
                                <?php get_template_part( 'parts/footer/left' ); ?>
                            </div>
                            <div class="columns small-12 medium-12 large-4" data-equalizer>
                                <?php get_template_part( 'parts/footer/subscribe' ); ?>
                            </div>
                            <div class="columns small-12 medium-12 large-4 show-for-large" data-equalizer>
                                <?php get_template_part( 'parts/footer/right' ); ?>
                            </div>
                        </div>
						
						*/ ?>
                        
                        <div class="row">
                        	<div class="column small-12 hide-for-large text-center foot-socialbtns">
                                <h6>CONNECT WITH US</h6>
                                <ul>
                                    <?php get_template_part( 'parts/social-buttons-mobile' ); ?>
                                </ul>
                            </div>
                        
                        	<div class="column small-12 text-center">
                                <div class="footer-border"></div>
                                <a href="<?php echo home_url(); ?>" class="logolink" title="<?php bloginfo('name'); ?>" >
                                    <img src="<?php the_field('site_logo', 'option'); ?>" class="logoimg" alt="<?php bloginfo('name'); ?>"/>
                                </a>
                            </div>
                            
                            <div class="large-12 medium-12 small-12 columns text-center">
                                <nav role="navigation">
                                    <?php joints_footer_links(); ?>
                                </nav>
                            </div>
                            <div class="large-12 medium-12 small-12 columns">
                                <p class="source-org copyright text-center">&copy; <?php echo date('Y'); ?> HONEYKIDSASIA PTE LTD . ALL RIGHTS RESERVED.</p>
                            </div>
                        </div>
					</div> <!-- end #inner-footer -->
				</footer> <!-- end .footer -->
                <?php if (!is_front_page()) { ?>
                    <div class="takeover-ad text-center">
                        <?php takeover_bottom(); ?>
                    </div>
                <?php } ?>

                <?php get_template_part( 'parts/sign-up-form' ); ?>
                
                <?php get_template_part( 'parts/school-form' ); ?>
                
			</div>  <!-- end .main-content -->
		</div> <!-- end .off-canvas-wrapper -->
		<?php wp_footer(); ?>
	</body>
</html> <!-- end page -->