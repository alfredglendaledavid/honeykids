<h4>Latest Posts</h4>
<div class="row small-up-1 medium-up-2 large-up-3 post-listing">

	<?php 
        $args = array (
            'post_type'              => array( 'post' ),
            'post_status'            => array( 'publish' ),
            'category__not_in'       => array( 23069, 30543, 30699, 30312, 30320, 30313, 30350, 30351, 30349, 30317, 30318, 30315, 30319 ),
            'posts_per_page'         => 6,
            'order'                  => 'DESC',
            'orderby'                => 'date',
			'ignore_sticky_posts'    => 1,
        );
        $query = new WP_Query($args);
    ?>
     
        	
    <?php while ($query->have_posts()) : $query->the_post(); ?>
        
        <?php get_template_part( 'parts/loop-post' ); ?>       
    
    <?php endwhile; wp_reset_postdata();  ?>

</div>

<div class="row text-center button-container">
    <div class="load-more" data-pages="<?php echo $query->max_num_pages; ?>" data-nextpage="2" data-ppp="6" data-hideSticky="1" data-excludeCat="23069,30543,30699,30312,30320,30313,30350,30351,30349,30317,30318,30315,30319">
        <span>LOAD MORE</span>
    </div>
</div>