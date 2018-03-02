<?php get_header(); ?>
			
<div id="content">

	<div id="inner-content" class="row">
    
    	<?php global $post; if ( has_category(array('calendar','arts-exhibits-culture', 'calendar-editors-pick', 'food-drinks', 'educational-events', 'parties-festivals', 'calendar-schools', 'shopping', 'sports-fitness-wellbeing', 'theatre-performances', 'workshops-camps'), $post->ID)) { ?>
        
        	<?php get_template_part( 'parts/calendar/single-calendar' ); ?>
        
        <?php } else if ( has_category(array('school-profiles'), $post->ID) ){ ?>
            
            <main id="main" class="large-12 medium-12 small-12 columns" role="main">
            
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    
                    <?php get_template_part( 'parts/school-selector/single-schools' ); ?>
                    
                <?php endwhile; else : ?>
            
                    <?php get_template_part( 'parts/content', 'missing' ); ?>
    
                <?php endif; ?>
    
            </main> <!-- end #main -->
            
            <?php // get_sidebar(); ?>
        
        <?php } else if ( has_category(array('find-an-expert'), $post->ID) ){ ?>
            
            <main id="main" class="large-8 medium-12 small-12 columns" role="main">
            
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    
                    <?php get_template_part( 'parts/bumps/single-experts' ); ?>
                    
                <?php endwhile; else : ?>
            
                    <?php get_template_part( 'parts/content', 'missing' ); ?>
    
                <?php endif; ?>
    
            </main> <!-- end #main -->
            
            <?php get_sidebar(); ?>
        	
        <?php } else { ?>
        
            <main id="main" class="large-8 medium-12 small-12 columns" role="main">
            
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    
                    <?php get_template_part( 'parts/loop', 'single' ); ?>
                    
                <?php endwhile; else : ?>
            
                    <?php get_template_part( 'parts/content', 'missing' ); ?>
    
                <?php endif; ?>
    
            </main> <!-- end #main -->

			<?php get_sidebar(); ?>

		<?php } ?>

	</div> <!-- end #inner-content -->

</div> <!-- end #content -->

<?php get_footer(); ?>