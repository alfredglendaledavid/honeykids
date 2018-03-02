<ul class="row small-up-1 medium-up-2 editors-picks">
	<?php 
            $ids = get_field('editors_picks_ss', 'option', false);
	
			$args = array(
				'post_type'      	=> 'post',
				'posts_per_page'	=> 2,
				'post__in'			=> $ids,
				'post_status'		=> 'publish',
				'orderby'        	=> 'post__in',
				'ignore_sticky_posts'    => 1,
			);
            $featured_post = new WP_Query($args);
        ?>
        
        <?php if ($featured_post->have_posts()) :  while ($featured_post->have_posts()) : $featured_post->the_post(); ?>
        
            <?php get_template_part( 'parts/loop-post' ); ?>
        
        <?php endwhile; else : endif; ?>
        
       
</ul>		