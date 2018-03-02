<div class="row">
    <div class="columns large-6 medium-6 small-12 align-self-middle"></div>
    <div class="columns large-6 medium-6 small-12 align-self-middle"><h6 class="line"><span>FEATURED EVENTS</span></h6></div>
</div>

<div class="orbit" role="region" aria-label="Latest from Honeykids" data-orbit data-options="animInFromLeft:fade-in; animInFromRight:fade-in; animOutToLeft:fade-out; animOutToRight:fade-out;">
	<button class="orbit-previous hide-for-medium"><span class="show-for-sr">Previous Slide</span><i class="fa fa-angle-left" aria-hidden="true"></i></button>
	<button class="orbit-next hide-for-medium"><span class="show-for-sr">Next Slide</span><i class="fa fa-angle-right" aria-hidden="true"></i></button>
      <ul class="orbit-container clearfix">
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
                <div class="row">
                    <div class="column large-6 medium-6 small-12 align-self-middle">
                        <a href="<?php the_permalink() ?>">
                        	<div class="css-img" style="background-image:url(<?php the_post_thumbnail_url('large'); ?>);"></div>
                        </a>
                        
                    </div>
                    <div class="column large-6 medium-6 small-12 align-self-middle">
                        <a href="<?php the_permalink() ?>"><h5><?php echo short_title(); ?></h5></a>
                        
                        <a href="<?php the_permalink() ?>"><p class="show-for-medium"><?php echo $date->format('j M Y'); ?> - <?php echo $edate; ?> </p></a>
                        
                        <a href="<?php the_permalink() ?>"><p class="show-for-medium"><?php echo excerpt(20); ?></p></a>
                    </div>
                </div>
            </li>
        <?php endwhile;  ?>
        <?php wp_reset_postdata(); ?>
      </ul>
    <div class="row">
        <div class="columns large-6 medium-6 small-12 align-self-middle">
            <nav class="orbit-bullets">
				<?php $count = 0; while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
                    <button id="orbit-nav" data-slide="<?php echo $count; ?>"></button>
                <?php $count++; endwhile;   ?>
            </nav>     
        </div>
        <div class="columns large-6 medium-6 small-12 align-self-middle"></div>
    </div>
	
</div>