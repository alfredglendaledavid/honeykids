<?php 
/* Template Name: Page - Post an Event */
?>

<?php get_header(); ?>

<?php $current_user = wp_get_current_user(); ?>
	
	<div id="content">
	
		<div id="inner-content" class="row">
	
		    <main id="main" class="small-12 columns my-profile" role="main">
				
				<?php get_template_part( 'parts/profile/name-bar' ); ?>
                
                <div class="row post-an-event">
                	<div class="column">
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    
                            <?php if ( is_user_logged_in() ) : ?>
                                <?php the_content(); ?>
                            <?php else : ?>
                               <p>Please <a href="" id="show_login"><span>login</span></a> to post an event.</p>
                            <?php endif; ?>
                    
                        <?php endwhile; endif; ?>		
                    </div>					
                </div>
                					
			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->
    


<?php get_footer(); ?>