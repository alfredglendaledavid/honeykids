<header>
    <h6 class="ridge"><span><?php the_archive_title();?></span></h6>
</header>

<div class="row small-up-1 medium-up-2 large-up-2 post-listing">
   <?php 
        $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
		
        $args = array (
            'post_type'              => array( 'post' ),
            'post_status'            => array( 'publish' ),
			'posts_per_page'         => 16,
            'order'                  => 'DESC',
            'orderby'                => 'date',
            'cat'                    => $cat,
        );
		
        $featured_post = new WP_Query($args);
		
		
		$pageargs = array (
            'post_type'              => array( 'post' ),
            'post_status'            => array( 'publish' ),
			'posts_per_page'         => 4,
            'order'                  => 'DESC',
            'orderby'                => 'date',
            'cat'                    => $cat,
        );
		$cat_query = new WP_Query($pageargs);
    ?>
    
    <?php if ($featured_post->have_posts()) :  while ($featured_post->have_posts()) : $featured_post->the_post(); ?>
        
		<?php get_template_part( 'parts/loop-post' ); ?>
        
        <?php if( $featured_post->current_post == 7 && !in_category(array( 'school-selector', 'school-profiles' ) )) { ?>
        
        <div class="ad text-center">
                <?php leaderboard_short(); ?>
        </div>
        
        <?php } ?>
        
    <?php endwhile; ?> <?php else : endif; ?>
</div>

<div class="row text-center button-container">
    <div class="load-more" data-pages="<?php echo $cat_query->max_num_pages; ?>" data-nextpage="5" data-ppp="4" data-category="<?php echo $cat; ?>">
        <span>LOAD MORE</span>
    </div>
</div>



 

            