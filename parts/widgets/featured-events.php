<div class="featured-events">
    <h6><span>FEATURED EVENTS</span></h6>
    <div class="orbit" role="region" aria-label="Latest Posts" data-orbit data-options="animInFromLeft:fade-in; animInFromRight:fade-in; animOutToLeft:fade-out; animOutToRight:fade-out;">
      <ul class="orbit-container">
        
        <?php
			$ids = get_field('featured_events_articles', 'option', false);
			$today = date("Ymd");
		
			$the_query = new WP_Query(array(
				'post_type'      	=> 'post',
				'posts_per_page'	=> 5,
				'post__in'			=> $ids,
				'post_status'		=> 'publish',
				'ignore_sticky_posts' => 1,
				'orderby'        	=> 'post__in',
				'meta_query' 			 => array(
										array(
											'key'			=> 'entry_end_date',
											'compare'		=> '>=',
											'value'			=> $today,
											'type'			=> 'DATE'
										)
									),
									'order'				=> 'ASC',
									'orderby'			=> 'meta_value',
									'meta_key'			=> 'entry_start_date',
									'meta_type'			=> 'DATE'
				
		));
		?>
        
        <?php while ($the_query -> have_posts()) : $the_query -> the_post(); 
				global $post;
				$start_date = get_field('entry_start_date',$post->ID);
				$date = new DateTime($start_date);
				$end_date = get_field('entry_end_date',$post->ID);
				$edate = date("j M Y", strtotime($end_date));
		?>
             <li class="orbit-slide">
              <a href="<?php the_permalink() ?>"><div class="css-img" style="background-image:url(<?php the_post_thumbnail_url('large'); ?>);"></div></a>
              <p><a href="<?php the_permalink() ?>"><?php echo short_title(); ?></a></p>
              <p><a href="<?php the_permalink() ?>"><?php echo $date->format('j M Y'); ?> - <?php echo $edate; ?></a></p>
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

</div>