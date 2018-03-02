<?php /* Template Name: Page - Home */ ?>

<?php get_header(); ?>
	
	<div id="content">
	
		<div id="inner-content" class="row">
	
		    <main id="main" class="large-8 medium-12 small-12 columns" role="main">
                
                <?php get_template_part( 'parts/home/slider' ); ?>
                
                <div class="ad text-center">
					<?php leaderboard_short(); ?>
                </div>	
                
                <div class="editors-pick">
                	<?php get_template_part( 'parts/home/editors-pick' ); ?>	
                </div>	
                
                <section class="featured clearfix">
                    <div class="row">
                        <div class="columns small-12">
                            <div class="featured-events">
                                <?php get_template_part( 'parts/home/featured-events' ); ?>
                                
                            </div>
                        </div>
                    </div>
                </section>	
                
                <section class="video clearfix">
                    <div class="row">
                        <div class="columns small-12">
                        	<?php get_template_part( 'parts/home/video' ); ?>
                        </div>
                    </div>
                </section>		
			    					
			</main> <!-- end #main -->

		    <div class="sidebar large-4 medium-12 small-12 columns">
            
            	<div class="subscribe text-center">
                	<i class="fa fa-envelope-o" aria-hidden="true"></i>
					<?php get_template_part( 'parts/footer/subscribe' ); ?>
                </div>	
            
            	<div class="trending">
                	<?php get_template_part( 'parts/home/trending' ); ?>	
                </div>	
                
                <div class="row">
                	<div class="column no-padding-left no-padding-right text-center">
                    	<div class="columns small-12 medium-6 large-12">
                            <div class="ad text-center">
                                <?php mpu_1(); ?>
                            </div>
                        </div>
                        
                        <div class="columns small-12 medium-6 large-12">
                            <div class="ad text-center">
                                <?php mpu_2(); ?>
                            </div>
                        </div>
                    </div>	
                </div>
                
                <section class="hk-widgets clearfix">
                    <div class="row">
                        <div class="columns small-12 medium-6 large-12">
                            <div class="pink-border honeybumps">
                                <?php get_template_part( 'parts/home/honeybumps' ); ?>
                            </div>
                        </div>
                        <div class="columns small-12 medium-6 large-12">
                            <div class="pink-border school-selector">
                                <?php get_template_part( 'parts/home/school-selector' ); ?>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
		    
		</div> <!-- end #inner-content -->

        <div class="ad text-center">
			<?php leaderboard_long(); ?>
        </div>	
        
        <div class="takeover-ad text-center">
			<?php takeover_bottom(); ?>
        </div>
        
        <section class="latest">
        	<div class="row">
                <div class="column">
                    <?php get_template_part( 'parts/home/latest-posts' ); ?>
                </div>
            </div>
        </section>

	</div> <!-- end #content -->

<?php get_footer(); ?>