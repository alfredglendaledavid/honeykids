<?php if( get_field('ss_recommended', $post->ID) ): ?>

	<?php  //do not display top schools  ?>
        
	<?php  else: ?>
    
    <div class="ss-toppicks">
        <h6 class="line"><span>TOP PICKS</span></h6>
        
        <?php
    
            $query = new WP_Query(array(
                'post_type'      	=> 'post',
                'posts_per_page'	=> 10,
                'post_status'		=> 'publish',
                'orderby'        	=> 'post__in',
                'cat'				=> 30418,
                'meta_query' => array(
                                        array(
                                            'key' => 'ss_recommended',
                                            'value' => '1',
                                            'compare' => '=='
                                        )
                                    )
        ));
        ?>
        
        <div class="top_picks text-center" id="related">
            <?php while ($query -> have_posts()) : $query -> the_post(); ?>
                <div class="slick-slide">
                    <a href="<?php the_permalink()?>"title="<?php the_title(); ?>">
                    	<div class="css-img" style="height:150px; background:url( <?php the_post_thumbnail_url('medium'); ?> );" ></div>
                    </a>
                    <p><a href="<?php the_permalink()?>"title="<?php the_title(); ?>"><?php echo short_title(); ?></a></p>
                </div>
                <?php  endwhile;  ?>
            <?php wp_reset_postdata(); ?>
        </div>
            
    </div> 

<?php endif; ?>
