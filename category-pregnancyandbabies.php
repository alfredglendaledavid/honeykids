<?php get_header(); ?>
	
	<div id="content">
	
		<div id="inner-content" class="row">
	
		    <main id="main" class="large-8 medium-12 small-12 columns" role="main">
                
                <?php get_template_part( 'parts/bumps/slider' ); ?>

                <?php get_template_part( 'parts/bumps/find-expert' ); ?>
			
			</main> <!-- end #main -->

		    <div class="sidebar large-4 medium-12 small-12 columns">

                <div class="trending">
                	<?php get_template_part( 'parts/bumps/trending' ); ?>	
                </div>	
                
                
                <?php get_template_part( 'parts/bumps/editors-picks' ); ?>	
                	
            	
            </div>
		    
		</div> <!-- end #inner-content -->
        
        <section class="ages-and-stages">
        	<div class="row">
                <div class="column">
                    <?php get_template_part( 'parts/bumps/ages-stages' ); ?>
                </div>
            </div>

        </section>
        
        <section class="latest bumps-latest">
        	<div class="row">
                <div class="column">
                    <?php get_template_part( 'parts/bumps/latest-stories' ); ?>
                </div>
            </div>

            <?php get_template_part( 'parts/bumps/featured-experts' ); ?>

        </section>
        
        <section class="hk-widgets">
            <div class="row" data-equalizer data-equalize-on="large">
                <div class="columns large-4 medium-4 small-12" data-equalizer-watch>
                    <div class="pink-border honeykids">
                        <?php get_template_part( 'parts/bumps/honeykids' ); ?>
                    </div>
                </div>
                <div class="columns large-4 medium-4 small-12" data-equalizer-watch>
                    <div class="pink-border school-selector">
                        <?php get_template_part( 'parts/home/school-selector' ); ?>
                    </div>
                </div>
                <div class="columns large-4 medium-4 small-12" data-equalizer-watch>
                    <div class="pink-border honeykidsgo">
                        <?php get_template_part( 'parts/home/honeykidsgo' ); ?>
                    </div>
                </div>
            </div>
        </section>
        

	</div> <!-- end #content -->
<?php get_footer(); ?>