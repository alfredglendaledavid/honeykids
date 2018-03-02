<h6 class="line">
    <span>Trending</span>
</h6>
<div class="row small-up-2 medium-up-4 large-up-2 trending-row">
    <?php 
    $today = getdate();
    $popularpost = new WP_Query( array( 
        'posts_per_page' => 4, 
		'ignore_sticky_posts' => 1,
		'cat' => 23075,
		'order' => 'DESC',
		'orderby' => 'meta_value_num',
		'category__not_in' => 30699,
		'meta_query' => array(
			array(
				'key'     => 'wpb_post_views_count',
			),
			array(
				'key'     => 'daily',
			),
		),
    ) );
    while ( $popularpost->have_posts() ) : $popularpost->the_post(); ?>	
    <?php 
        $url = get_field('featured_youtube',$post->ID);
        
        if (preg_match('/youtube\.com\/watch\?v=([^\&\?\/]+)/', $url, $id)) {
          $values = $id[1];
        } else if (preg_match('/youtube\.com\/embed\/([^\&\?\/]+)/', $url, $id)) {
          $values = $id[1];
        } else if (preg_match('/youtube\.com\/v\/([^\&\?\/]+)/', $url, $id)) {
          $values = $id[1];
        } else if (preg_match('/youtu\.be\/([^\&\?\/]+)/', $url, $id)) {
          $values = $id[1];
        }
        else if (preg_match('/youtube\.com\/verify_age\?next_url=\/watch%3Fv%3D([^\&\?\/]+)/', $url, $id)) {
            $values = $id[1];
        } else {   
        // not an youtube video
        }
		
		$views = get_post_meta( get_the_ID(), 'wpb_post_views_count', true );
		$dates = get_post_meta( get_the_ID(), 'daily', true );
    ?>
    
    <div class="column column-block text-center" data-views="<?php echo $views; ?>" data-date="<?php echo $dates; ?>">
        <?php 
			global $post;
            if ( has_post_thumbnail() ) { ?>
				<a href="<?php the_permalink(); ?>"><div class="css-img" style="background-image:url(<?php the_post_thumbnail_url('medium'); ?>);"></div></a>
            <?php } else { ?>
                <a href="<?php the_permalink(); ?>"><div class="css-img" style="background-image:url(http://img.youtube.com/vi/<?php echo $values; ?>/0.jpg);"></div></a>
            <?php }
        ?>
        <p><a href="<?php the_permalink(); ?>"><?php echo short_title(); ?></a></p>
    </div>
    
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
</div>