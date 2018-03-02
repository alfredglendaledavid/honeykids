<?php get_header(); ?>
	
	<div id="content">
	
		<div id="inner-content" class="row">
	
		    <main id="main" class="large-8 medium-12 small-12 columns" role="main">
                
                <?php get_template_part( 'parts/school-selector/slider' ); ?>
                
                <?php get_template_part( 'parts/school-selector/editors-picks' ); ?>
			    					
			</main> <!-- end #main -->

		    <div class="sidebar large-4 medium-12 small-12 columns">

                <div class="ss-single-block">
                    <?php get_template_part( 'parts/school-selector/find-schools' ); ?>
                </div>
                
                <div class="ss-single-block">
                    <?php get_template_part( 'parts/school-selector/compare-schools' ); ?>
                </div>
                
                <div class="ss-single-block">
                    <?php get_template_part( 'parts/school-selector/school-events' ); ?>
                </div>
            	
            </div>
		    
		</div> <!-- end #inner-content -->
        
        <section class="recommended-schools">
			<?php get_template_part( 'parts/school-selector/recommended-schools' ); ?>
        </section>
        
        <?php get_template_part( 'parts/school-selector/video-gallery' ); ?>
        
        <section class="ss-testimonials">
			<?php get_template_part( 'parts/school-selector/school-testimonials' ); ?>
        </section>

        <section class="latest ss-latest">
        	<div class="row">
                <div class="column">
                    <?php get_template_part( 'parts/school-selector/latest-stories' ); ?>
                </div>
            </div>
        </section>

	</div> <!-- end #content -->

<?php get_footer(); ?>