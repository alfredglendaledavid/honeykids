<?php get_header();  global $cat; ?>
	
	<div id="content">
	
		<div id="inner-content" class="row">
        	
            <div class="row">
                <div class="ad text-center columns small-12">
                    <?php leaderboard_long(); ?>
                </div>
            </div>
	
		    <main id="main" class="large-8 medium-12 small-12 columns archive-list" role="main">
                
                <?php 
                        $category = get_category($cat);
                        
                        $countchildren = count (get_term_children( $category->term_id, 'category' ));
                        
                        if ($category->category_parent === 0 ){
                            get_template_part( 'parts/parent-category' );
                        } else {
                            get_template_part( 'parts/subcategory' );
                        }
                        
                        if ($category->category_parent === 0 && $countchildren === 0 ) {
                            get_template_part( 'parts/subcategory' );
                        }
    
                    ?>
			    					
			</main> <!-- end #main -->

		    <?php get_sidebar(); ?>
		    
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>