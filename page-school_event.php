<?php 
/* Template Name: Page - School Event */
?>

<?php get_header(); ?>

<?php $current_user = wp_get_current_user(); ?>
	
	<div id="content">
	
		<div id="inner-content" class="">
	
		    <main id="main" class="my-profile" role="main">
                
                <div class="row post-an-event">
                	<div class="columns large-12 medium-12 small-12">
                    	<h3><?php the_title(); ?></h3>
                    
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                                <?php the_content(); ?>
                    
                        <?php endwhile; endif; ?>		
                    </div>					
                </div>
                					
			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->
    


<?php get_footer(); ?>