<?php   
	$ids = get_field('featured_experts', 'option', false);
	$count = get_field('featured_expert_count', 'option', false);
	$query = new WP_Query(array(
		'post_type'      	=> 'post',
		'posts_per_page'	=> $count,
		'post_status'		=> 'publish',
		'orderby'        	=> 'post__in',
		'cat'           	=> 30699,
		'post__in'			=> $ids,
		'ignore_sticky_posts'    => 1,
)); ?>
<?php if ( $query->have_posts() ) : ?>
	<h4>FEATURED EXPERTS</h4>
		<div class="featured-experts">
			<?php while ($query -> have_posts()) : $query -> the_post(); ?>
			
			   <?php get_template_part( 'parts/loop-post' ); ?>
			
			<?php 
			endwhile; wp_reset_postdata();
			?>
		</div>             
<?php endif; ?>
