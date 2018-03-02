<div class="row">
	<div class="column text-center">
    <h4 class="line"><span>SCHOOL TESTIMONIALS</span></h4>
        <div class="row large-up-3 medium-up-2 small-up-1">
        <?php
        
            $query = new WP_Query(array(
                'post_type'      	=> 'post',
                'posts_per_page'	=> 3,
                'post_status'		=> 'publish',
                'orderby'        	=> 'post__in',
                'cat'				=> 28570,
                
        ));
        ?>
        <?php while ($query -> have_posts()) : $query -> the_post(); ?>
        
        	<?php get_template_part( 'parts/loop-post' ); ?>  
        
        <?php 
        endwhile; wp_reset_postdata();
        ?>
        </div>
        
         <?php $category_link = get_category_link( 28570 ); ?>
        
        <div class="row testi-button">
        	<div class="text-center column small-12"><a href="<?php echo esc_url( $category_link ); ?>" class="button">Check out other testimonials</a></div>
        </div>
	</div>
</div>