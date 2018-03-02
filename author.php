<?php get_header(); ?>
			
	<div id="content">

		<div id="inner-content" class="row">
		
		    <main id="main" class="large-8 medium-12 small-12 columns archive" role="main">

                <?php get_template_part( 'parts/author-query' ); ?>
		
			</main> <!-- end #main -->
	
			<?php get_sidebar(); ?>
		
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>
