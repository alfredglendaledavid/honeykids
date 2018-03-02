<?php /* Template Name: Page - Find Schools */ ?>

<?php get_header(); ?>

<div id="content">
	<div id="inner-content" class="row">
		<main id="main" class="find-schools column small-12" role="main">
            <div class="row">
                <div class="column large-3 medium-3 small-12 filter-box">
                    <form class="controls" id="Filters">
    
                      <button id="Reset" class="clear-mix">Clear All Filters</button>
                      
                      <fieldset class="filter-group checkboxes">
                        <h6><span>Type</span></h6>
                        
                        <?php
                            $school_type = "field_55cab31c4c6dd";
                            $school_type_field = get_field_object($school_type);
                            
                            if( $school_type_field ) {
                        ?>
                        <?php 
                            foreach( $school_type_field['choices'] as $k => $v ) :
                        ?>
                            <div class="checkbox">
                                <?php 
                                    $value = strtolower($k);
                                    $slug = preg_replace('/[^A-Za-z0-9-]+/', '-', $value);  
                                ?>
                                <input type="checkbox" value=".<?php echo $slug ?>" data-filter=".<?php echo $slug ?>"/>
                                <label><?php echo $v; ?></label>
                            </div>
                        <?php endforeach;  } ?>
                      </fieldset>
                      
                      <fieldset class="filter-group checkboxes hidden-on-load">
                        <h6><span>Location</span></h6>
                        <?php
                            $location = "field_580ee186011dd";
                            $location_field = get_field_object($location);
                            
                            if( $location_field ) {
                        ?>
                        <?php 
                            foreach( $location_field['choices'] as $k => $v ) :
                        ?>
                            <div class="checkbox">
                                <?php 
                                    $value = strtolower($v);
                                    $slug = preg_replace('/[^A-Za-z0-9-]+/', '-', $value);  
                                ?>
                                <input type="checkbox" value=".<?php echo $slug ?>" data-filter=".<?php echo $slug ?>"/>
                                <label><?php echo $v; ?></label>
                            </div>
                        <?php endforeach;  } ?>
                      </fieldset>
                      
                      <fieldset class="filter-group checkboxes hidden-on-load">
                        <h6><span>Language</span></h6>
                        <?php
                            $language = "field_55cab4634c6df";
                            $language_field = get_field_object($language);
                            
                            if( $language_field ) {
                        ?>
                        <?php 
                            foreach( $language_field['choices'] as $k => $v ) :
                        ?>
                            <div class="checkbox">
                                <?php 
                                    $value = strtolower($v);
                                    $slug = preg_replace('/[^A-Za-z0-9-]+/', '-', $value);  
                                ?>
                                <input type="checkbox" value=".<?php echo $slug ?>"/>
                                <label><?php echo $v; ?></label>
                            </div>
                        <?php endforeach;  } ?>
                      </fieldset>
                      
                      <fieldset class="filter-group checkboxes hidden-on-load">
                        <h6><span>Curriculum</span></h6>
                        <?php
                            $curriculum = "field_55cab3dd4c6de";
                            $curriculum_field = get_field_object($curriculum);
                            
                            if( $curriculum_field ) {
                        ?>
                        <?php 
                            foreach( $curriculum_field['choices'] as $k => $v ) :
                        ?>
                            <div class="checkbox">
                                <?php 
                                    $value = strtolower($v);
                                    $slug = preg_replace('/[^A-Za-z0-9-]+/', '-', $value);  
                                ?>
                                <input type="checkbox" value=".<?php echo $slug ?>"/>
                                <label><?php echo $v; ?></label>
                            </div>
                        <?php endforeach;  } ?>
                      </fieldset>
                      
                      <fieldset class="filter-group checkboxes hidden-on-load">
                        <h6><span>Class Size</span></h6>
                        <?php
                            $class_size = "field_580ee096ac71f";
                            $class_size_field = get_field_object($class_size);
                            
                            if( $class_size_field ) {
                        ?>
                        <?php 
                            foreach( $class_size_field['choices'] as $k => $v ) :
                        ?>
                            <div class="checkbox">
                                <?php 
                                    $value = strtolower($v);
                                    $slug = preg_replace('/[^A-Za-z0-9-]+/', '', $value);  
                                ?>
                                <input type="checkbox" value=".<?php echo $slug ?>"/>
                                <label><?php echo $v; ?></label>
                            </div>
                        <?php endforeach;  } ?>
                      </fieldset>
                      
                      <fieldset class="filter-group checkboxes hidden-on-load">
                        <h6><span>Tuition Fee</span></h6>
                        <?php
                            $tuition_fee = "field_580ee691413d2";
                            $tuition_fee_field = get_field_object($tuition_fee);
                            
                            if( $tuition_fee_field ) {
                        ?>
                        <?php 
                            foreach( $tuition_fee_field['choices'] as $k => $v ) :
                        ?>
                            <div class="checkbox">
                                <?php 
                                    $value = strtolower($v);
                                    $slug = preg_replace('/[^A-Za-z0-9-]+/', '', $value);  
                                ?>
                                <input type="checkbox" value=".<?php echo $slug ?>"/>
                                <label><?php echo $v; ?></label>
                            </div>
                        <?php endforeach;  } ?>
                      </fieldset>
    
                    </form>
                    
                    <div class="show_filters pink-btn" id="show_filters">MORE FILTERS</div>
                    
                </div>
                <div class="column large-9 medium-9 small-12 ">
                    <div id="Container" class="container row small-up-1 medium-up-2 large-up-2">
                    <div class="fail-message column column-block"><span>No items were found matching the selected filters</span></div>
                        <?php /*
                            $query = new WP_Query(array(
                                'post_type'      	=> 'post',
                                'posts_per_page'	=> -1,
                                'post_status'		=> 'publish',
                                'orderby'        	=> 'title',
                                'order'        		=> 'ASC',
                                'cat'				=> 30418,
                                'meta_query' => array(
                                    array(
                                        'key' => 'ss_recommended',
                                        'compare' => '==',
                                        'value' => '1'
                                    )
                                )
                        ));
                        */ ?>
                        <?php // while ($query -> have_posts()) : $query -> the_post(); ?>
                            <?php // get_template_part( 'parts/loop-post-mix' ); ?>
                        <?php 
                       //  endwhile; wp_reset_postdata();
                        ?>
                        
                        <?php
                            $query = new WP_Query(array(
                                'post_type'      	=> 'post',
                                'posts_per_page'	=> -1,
                                'post_status'		=> 'publish',
                                'orderby'        	=> 'title',
                                'order'        		=> 'ASC',
                                'cat'				=> 30418,
								/*
								'meta_query' => array(
                                    array(
                                        'key' => 'ss_recommended',
                                        'compare' => '==',
                                        'value' => '0'
                                    )
                                )
								*/
                        ));
                        ?>
                        <?php while ($query -> have_posts()) : $query -> the_post(); ?>
                            <?php get_template_part( 'parts/loop-post-mix' ); ?>
                        <?php 
                        endwhile; wp_reset_postdata();
                        ?>
                    </div>
				</div>
            </div>
    	</main>
	</div>
</div>

<script>
	/*
	jQuery(function(){
	  jQuery('#Container').mixItUp({
		controls: {
		  enable: false // we won't be needing these
		},
		load: {
		  filter: '.nursery.central'
		},
	  });
	  jQuery(":checkbox[value='.nursery']").prop("checked","true");
	  jQuery(":checkbox[value='.central']").prop("checked","true");
	});
	 */
</script>

<?php get_footer(); ?>