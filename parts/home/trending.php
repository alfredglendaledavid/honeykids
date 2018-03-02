<h6 class="line hide-for-small show-for-medium">
    <span>Trending</span>
</h6>
<div class="row small-up-2 medium-up-4 large-up-2 trending-row show-for-medium">
    <?php 
	$posts = wp_most_popular_get_popular( array( 'limit' => 4, 'post_type' => 'post', 'range' => 'daily' ) ); ?>
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
	global $post;
	if ( count( $posts ) > 0 ): foreach ( $posts as $post ):
		setup_postdata( $post );
		?>
		<div class="column column-block text-center">
			<?php 
                global $post;
                if ( has_post_thumbnail() ) { ?>
                    <a href="<?php the_permalink(); ?>"><div class="css-img" style="background-image:url(<?php the_post_thumbnail_url('hka-thumb'); ?>);"></div></a>
                <?php } else { ?>
                    <a href="<?php the_permalink(); ?>"><div class="css-img" style="background-image:url(http://img.youtube.com/vi/<?php echo $values; ?>/0.jpg);"></div></a>
                <?php }
            ?>
            <p><a href="<?php the_permalink(); ?>"><?php echo short_title(); ?></a></p>
        </div>
		<?php endforeach; endif; ?>
    <?php wp_reset_postdata(); ?>
</div>