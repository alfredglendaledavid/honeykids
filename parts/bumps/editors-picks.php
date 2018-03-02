<div class="text-center bumps-editors-picks">
    <div id="editors-picks-inner">
        <h6>Editor's Pick</h6>
        <?php
        $ids = get_field('bumps_editors_picks', 'option', false);
            $args = array(
                'post_type'      	=> 'post',
                'posts_per_page'	=> 2,
                'post__in'			=> $ids,
                'post_status'		=> 'publish',
                'orderby'        	=> 'post__in',
                'ignore_sticky_posts' => 1,
            );
        ?>
        <?php query_posts($args); ?>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
           <div><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large'); ?></a></div>
           <p><a href="<?php the_permalink(); ?>"><?php echo short_title(); ?></a></p>
        <?php endwhile; endif; ?>
        <?php wp_reset_query(); ?>
    </div>
</div>