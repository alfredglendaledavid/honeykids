<?php
	$query = new WP_Query(array(
		'post_type'      	=> 'post',
		'posts_per_page'	=> 10,
		'post_status'		=> 'publish',
		'orderby'        	=> 'date',
		'cat'				=> 30416,
));
?>
<?php if ( $query->have_posts() ) : ?>
<section class="ss-videos">
    <div class="row"><div class="column text-center"><h4 class="line"><span>VIDEO GALLERY</span></h4></div></div>
        <div class="ss-video-gallery">
            <?php while ($query -> have_posts()) : $query -> the_post(); ?>
            
            	<?php get_template_part( 'parts/loop-post' ); ?>
            
            <?php 
       	endwhile; wp_reset_postdata(); else : ?>
        
        <?php endif; ?>
    </div>
</section>