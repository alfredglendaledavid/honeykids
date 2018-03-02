<?php get_header(); ?>
			
	<div id="content">
	
		<div id="inner-content" class="row">
	
		    <main id="main" class="large-12 medium-12 columns calendar" role="main">
    
			  <?php get_template_part( 'parts/calendar/slider' ); ?>
																			
		    </main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->
        
        <div class="calendar">
        	<?php get_template_part( 'parts/calendar/categories' ); ?>
        </div>

	</div> <!-- end #content -->

<?php get_footer(); ?>