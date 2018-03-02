<div class="row"><div class="column text-center"><h4><span>TOP PICKS</span></h4></div></div>
<div class="ss-recommended-slider">
    <?php
    
        $query = new WP_Query(array(
            'post_type'      	=> 'post',
            'posts_per_page'	=> 10,
            'post_status'		=> 'publish',
            'orderby'        	=> 'post__in',
			'cat'				=> 30418,
			'meta_query' => array(
									array(
										'key' => 'ss_recommended',
										'value' => '1',
										'compare' => '=='
									)
								)
    ));
    ?>
    <?php while ($query -> have_posts()) : $query -> the_post(); ?>
    
       <?php get_template_part( 'parts/loop-post' ); ?>
    
    <?php 
    endwhile; wp_reset_postdata();
    ?>
</div>