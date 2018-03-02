<?php 
/* Template Name: Page - User Profile */
?>

<?php get_header(); ?>

<?php $current_user = wp_get_current_user(); ?>
	
	<div id="content">
	
		<div id="inner-content" class="row">
	
		    <main id="main" class="small-12 columns my-profile" role="main">
				
				<?php get_template_part( 'parts/profile/name-bar-instructions' ); ?>
                
                
                <div class="folder-cont">
                    
                    <?php
                        echo do_shortcode('[cbxwpbookmark-mycat-hka]');
                        echo do_shortcode('[cbxwpbookmark-mycat-edit]');
                    ?>
                    
                </div><!-- .hentry .post -->
                					
			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->
    


<?php get_footer(); ?>