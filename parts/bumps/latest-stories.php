<h4>LATEST STORIES</h4>
<div class="row small-up-1 medium-up-2 large-up-3 post-listing">
        <?php 
                $args = array (
                    'post_type'              => array( 'post' ),
                    'post_status'            => array( 'publish' ),
                    'cat'       			 => 23075,
					'category__not_in'       => 30699,
                    'posts_per_page'         => 3,
                    'order'                  => 'DESC',
                    'orderby'                => 'date',
					'ignore_sticky_posts'    => 1,
                );
                $featured_post = new WP_Query($args);
            ?>
            
            <?php if ($featured_post->have_posts()) :  while ($featured_post->have_posts()) : $featured_post->the_post(); ?>
            
                <?php get_template_part( 'parts/loop-post' ); ?>
            
            <?php endwhile; else : endif; ?>

</div>			

<div class="row text-center button-container">
    <div class="load-more" data-pages="<?php echo $featured_post->max_num_pages; ?>" data-nextpage="2" data-ppp="3" data-hideSticky="1" data-category="23075" data-excludeCat="30699">
        <span>LOAD MORE</span>
    </div>
</div>