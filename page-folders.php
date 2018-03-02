<?php 
/* Template Name: Page - Folders */
?>

<?php get_header(); ?>

<?php $current_user = wp_get_current_user(); ?>
	
	<div id="content">
	
		<div id="inner-content" class="row">
	
		    <main id="main" class="small-12 columns my-profile" role="main">
				
				<?php get_template_part( 'parts/profile/name-bar' ); ?>
                
                <div class="row">
                    <div class="medium-4 small-12  columns bm-left">
                    	<?php echo do_shortcode('[cbxwpbookmark-mycat-hka-sidebar]'); ?>
                        <?php echo do_shortcode('[cbxwpbookmark-mycat]'); ?>
                    </div>
                    <div class="medium-8 small-12  columns bm-right">
                    	<?php echo do_shortcode('[cbxwpbookmark]'); ?>
                    </div>
                </div>
                					
			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->
    


<?php get_footer(); ?>