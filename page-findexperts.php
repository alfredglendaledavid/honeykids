<?php /* Template Name: Page - Find an Expert */ ?>

<?php get_header(); ?>

<div id="content">
	<div id="inner-content" class="row">
		<main id="main" class="find-schools column small-12" role="main">
			<div class="show_filters hide-for-medium pink-btn"><span>Show / Hide Filters</span></div>
            <div class="row">
                <div class="column large-3 medium-3 small-12 filter-box">
                    <form class="controls" id="Filters">
    
                      <button id="Reset" class="clear-mix">Clear All Filters</button>
                      
                      <fieldset class="filter-group search">
                        <h6><span>Quick Search</span></h6>
                        <input type="text" placeholder="Enter one keyword.." class="searchbox"/>
                      </fieldset>
                      
                      <fieldset class="filter-group checkboxes">
                        <h6><span>Type</span></h6>
						
                        <?php
						$categories = get_categories( array(
							'orderby' => 'name',
							'order'   => 'ASC',
							'parent'  => 30699,
							'hide_empty'  => 0,
							'orderby'  => 'id',
							'order'  => 'ASC',
						) );
						
							foreach( $categories as $category ) { ?>
							
                            <div class="checkbox">
                            
                                <input type="checkbox" value=".<?php echo $category->slug; ?>" data-filter=".<?php echo $category->slug; ?>"/>
                                <label><?php echo $category->name; ?></label>
                            </div>
                            
                        <?php		
							} 
						?>

                      </fieldset>
                      
                      <fieldset class="filter-group checkboxes">
                        <h6><span>Location</span></h6>
                        
                        <?php
                            $location = "field_58e326b44575b";
							$location_field = get_field_object($location);
							
							if( $location_field ) {
								
							foreach( $location_field['choices'] as $k => $v ) : ?>
                            
                            <div class="checkbox">
                                
                                <input type="checkbox" value=".<?php echo $k ?>" data-filter=".<?php echo $k ?>"/>
                                <label><?php echo $v; ?></label>
                            </div>
                            
                        <?php endforeach;  } ?>
                      </fieldset>
                      
                      <fieldset class="filter-group checkboxes">
                        <h6><span>Category</span></h6>
                        <?php
							$category = "field_58e328c021e5e";
							$category_field = get_field_object($category);
							
							if( $category_field ) {
								
							foreach( $category_field['choices'] as $k => $v ) : ?>
							
							<div class="checkbox">
                                
                                <input type="checkbox" value=".<?php echo $k ?>" data-filter=".<?php echo $k ?>"/>
                                <label><?php echo $v; ?></label>
                            </div>
							
						<?php endforeach;  } ?>
                      </fieldset>

    
                    </form>
                    
                </div>
                <div class="column large-9 medium-9 small-12 ">
                    <div id="Container" class="container row small-up-1 medium-up-2 large-up-2">
                    <div class="fail-message column column-block"><span>No items were found matching the selected filters</span></div>
                        
                        <?php
                            $query = new WP_Query(array(
                                'post_type'      	=> 'post',
                                'posts_per_page'	=> -1,
                                'post_status'		=> 'publish',
                                'orderby'        	=> 'title',
                                'order'        		=> 'ASC',
                                'cat'				=> 30699,
                        ));
                        ?>
                        <?php while ($query -> have_posts()) : $query -> the_post(); ?>
                            <?php get_template_part( 'parts/loop-post-expert' ); ?>
                        <?php 
                        endwhile; wp_reset_postdata();
                        ?>
                    </div>
				</div>
            </div>
    	</main>
	</div>
</div>

<?php 
	$location = (isset($_REQUEST['location'])) ? $_REQUEST['location'] : '';
	$mycategory = (isset($_REQUEST['category'])) ? $_REQUEST['category'] : '';
	$search = (isset($_REQUEST['search-term'])) ? $_REQUEST['search-term'] : '';
	
	if (!empty($search)) {
		$searchTerm = '.'.$search;
	} else {
		$searchTerm = '';
	}
?>
<script>
	jQuery(function(){
	  jQuery('#Container').mixItUp({
		controls: {
		  enable: false // we won't be needing these
		},
		load: {
		  <?php if ( ($location || $mycategory || $searchTerm)  != '' ) { ?>
		  	filter: '<?php echo $location; ?><?php echo $mycategory; ?><?php echo $searchTerm; ?>'
		  <?php } else {  } ?>
		},
	  });
	  jQuery(":checkbox[value='<?php echo $location; ?>']").prop("checked","true");
	  jQuery(":checkbox[value='<?php echo $mycategory; ?>']").prop("checked","true");
	  jQuery(".searchbox").val("<?php echo $search; ?>")
	});
</script>


<?php get_footer(); ?>