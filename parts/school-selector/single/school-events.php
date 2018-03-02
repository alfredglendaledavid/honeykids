<?php $ids = get_field('school_events',$post->ID); 

if( $ids ): ?>

<div class="ss-testi">
    <h6 class="line"><span>EVENTS</span></h6>
    
    <?php 
		$args = array(
			'post_type'      	=> 'post',
			'posts_per_page'	=> 4,
			'post__in'			=> $ids,
			'post_status'		=> 'publish',
			'orderby'        	=> 'post__in',
			'ignore_sticky_posts' => 1,
		);
		$the_query = new WP_Query($args);
	?>
    <div class="small-up-2 medium-up-3 large-up-4 row">
		<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
            <div class="column column-block">
                <a href="<?php the_permalink()?>"title="<?php the_title(); ?>"><?php the_post_thumbnail('medium'); ?></a>
                <p><a href="<?php the_permalink()?>"title="<?php the_title(); ?>"><?php echo short_title(); ?></a></p>
            </div>
            <?php  endwhile;  ?>
        <?php wp_reset_postdata(); ?>
    </div>
</div> 

<?php endif; ?>  