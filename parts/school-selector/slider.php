<div class="orbit" role="region" aria-label="Latest from School Selector" data-orbit >
      <ul class="orbit-container ss-slider">
        <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span><i class="fa fa-angle-left" aria-hidden="true"></i></button>
        <button class="orbit-next"><span class="show-for-sr">Next Slide</span><i class="fa fa-angle-right" aria-hidden="true"></i></button>
        <?php 
			$ids = get_field('ss_main_slider', 'option', false);
			$count = get_field('slider_count', 'option', false);
			
            $args = array(
				'post_type'      	=> 'post',
				'posts_per_page'	=> $count,
				'post__in'			=> $ids,
				'post_status'		=> 'publish',
				'orderby'        	=> 'post__in',
				'ignore_sticky_posts'    => 1,
			);
            $the_query = new WP_Query($args);
        ?>
        
        <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
            <?php 
                
            ?>  
             <li class="orbit-slide link-hover <?php echo primary_term()->slug; ?>">
                  <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('large'); ?></a>
                  <figcaption class="orbit-caption text-center">
                  	<div class="cat-icon"></div>
					<?php echo short_title(); ?>
                  </figcaption>
             </li>
        <?php  endwhile;  ?>
        <?php wp_reset_postdata(); ?>
      </ul>
</div>