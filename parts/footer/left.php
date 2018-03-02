<div class="dotted left-foot">
    <?php if ( !wp_is_mobile() ) { ?>
        <h6 class="text-center">LATEST POSTS</h6>
        <div class="orbit" role="region" aria-label="Latest Posts" data-orbit data-use-m-u-i="false">
          <ul class="orbit-container">
            
            <?php 
				$args = array(
					'post_type'      	=> 'post',
					'posts_per_page'	=> 5,
					'category__not_in'  => array( 23069, 28654, 30543, 30699, 30312, 30320, 30313, 30350, 30351, 30349, 30317, 30318, 30315, 30319 ),
					'orderby'        	=> 'date',
					'ignore_sticky_posts'    => 1,
				);
                $the_query = new WP_Query($args);
            ?>
            
            <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
                
                 <li class="orbit-slide">
                  <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('medium'); ?></a>
                  <figcaption class="orbit-caption"><?php echo short_title(); ?></figcaption>
                </li>
            <?php  endwhile;  ?>
           
            
          </ul>
          
          <nav class="orbit-bullets">
            <?php $count = 0; while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
                <button id="orbit-nav" data-slide="<?php echo $count; ?>"></button>
            <?php $count++; endwhile;   ?>
          </nav>

          <?php wp_reset_postdata(); ?>
        </div>

    <?php } ?>
</div>