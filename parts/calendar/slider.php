<div class="orbit" role="region" aria-label="Latest Posts" data-orbit data-options="animInFromLeft:fade-in; animInFromRight:fade-in; animOutToLeft:fade-out; animOutToRight:fade-out;" data-auto-play="true">
<button class="orbit-previous"><span class="show-for-sr">Previous Slide</span><i class="fa fa-angle-left" aria-hidden="true"></i></button>
<button class="orbit-next"><span class="show-for-sr">Next Slide</span><i class="fa fa-angle-right" aria-hidden="true"></i></button>

    <div class="row small-collapse calendar-row">
        <div class="columns large-7 medium-12 small-12 no-padding-right">
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
                
                <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
                	
                    <?php 
						global $post;
						$start_date = get_field('entry_start_date',$post->ID);
						$sdate = new DateTime($start_date);
						$end_date = get_field('entry_end_date',$post->ID);
						$edate = new DateTime($end_date);
						if ($sdate == $edate) {
							$event_date = $sdate->format('j M Y');
						}
						else {
							$event_date = $sdate->format('j M Y').' - ' .$edate->format('j M Y');
						}
					?>  
                    
                     <li class="orbit-slide">
                          <a href="<?php the_permalink() ?>"><div class="css-img" style="background-image:url(<?php the_post_thumbnail_url('full'); ?>);"></div></a>
                          <figcaption class="orbit-caption hide-for-large">
                                <h6><?php echo short_title(); ?></h6>
                                <p><?php echo $event_date; ?></p>
                          </figcaption>
                    </li>
                <?php  endwhile; wp_reset_query();  ?>
            </ul>
        </div>
      
        <div class="columns large-5 medium-12 small-12 no-padding-left show-for-large">
            <nav class="orbit-bullets">
                <?php $count = 0; while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
                
                	<?php 
						global $post;
						$start_date = get_field('entry_start_date',$post->ID);
						$sdate = new DateTime($start_date);
						$end_date = get_field('entry_end_date',$post->ID);
						$edate = new DateTime($end_date);
						if ($sdate == $edate) {
							$event_date = '<div class="date aligner">'.$sdate->format('j M').'</div>';
						}
						else {
							$event_date = '<div class="date"><div>'.$sdate->format('j M').'</div> <div class="clearfix"> - </div> <div>' .$edate->format('j M').'</div></div>';
						}
					?>  

                    <button id="orbit-nav" data-slide="<?php echo $count; ?>">
                        <div class="small-collapse orbit-thumb">
                            <div class="columns large-2 medium-2 small-12 align-self-middle">
                                <?php echo $event_date; ?>
                            </div>
                            <div class="columns large-10 medium-10 small-12 align-self-middle">
                                <div class="css-img" style="background-image:url(<?php the_post_thumbnail_url('large'); ?>);"></div>
                                <div class="event-details">
                                    <p>
                                        <?php $categories = get_the_terms( $post->ID, 'category' );
                                            foreach( $categories as $category ) {  if ($category->term_id != 23069) {
                                                    echo $category->name;
                                                }
                                            } 
                                        ?> 
                                    </p>
                                    <p><?php echo short_title(); ?></p>
                                </div>
                            </div>
                        </div>
                    </button>
                <?php $count++; endwhile;  wp_reset_query();  ?>
            </nav>
        </div>
    
    </div>

    <?php wp_reset_postdata(); ?>
</div>