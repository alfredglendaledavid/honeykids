<div class="orbit" role="region" aria-label="Latest from Honeykids" data-orbit >
      <ul class="orbit-container home-slider">
        <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span><i class="fa fa-angle-left" aria-hidden="true"></i></button>
        <button class="orbit-next"><span class="show-for-sr">Next Slide</span><i class="fa fa-angle-right" aria-hidden="true"></i></button>
        <?php 
            $args = array(
                'post_type'=>'post', 
                'post_status' => 'publish', 
                'ignore_sticky_posts' => 0,
                'posts_per_page' => -1,
                'no_found_rows' => true,
                'suppress_filters' => 0,
                'category__not_in'       => array( 23069, 30312, 30320, 30313, 30350, 30351, 30349, 30317, 30318, 30315, 30319, 30543, 30418, 30699 ),
                'date_query' => array(
                    array(
                        'column' => 'post_date_gmt',
                        'after' => '1 week ago',
                    ),
                ),
                'meta_query' => array(
                  'relation' => 'AND',
                  array(
                    'relation' => 'OR',
                    array(
                      'key' => 'hide_on_home_page_slider',
                      'value' => '1',
                      'compare' => '!='
                    ),
                    array(
                      'key' => 'hide_on_home_page_slider',
                      'value' => '1',
                      'compare' => 'NOT EXISTS'
                    )
                  )
                )
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