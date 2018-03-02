<?php 
    $args = array (
        'post_type'              => array( 'post' ),
        'post_status'            => array( 'publish' ),
        'cat'       			 => 23075,
		'category__not_in'       => array( '30699' ),
        'posts_per_page'         => 1,
        'order'                  => 'DESC',
        'orderby'                => 'date',
    );
    $featured_post = new WP_Query($args);
?>
            
<?php if ($featured_post->have_posts()) :  while ($featured_post->have_posts()) : $featured_post->the_post(); ?>

<a href="<?php the_permalink(); ?>" target="_blank">
    <div id="foot-latest-img"><div class="css-img" style="background:url(<?php the_post_thumbnail_url('large') ?>);"></div></div>
    <h6><?php the_title(); ?></h6>
</a>           

<?php endwhile; else : endif; ?>

<?php wp_reset_postdata(); ?>

<?php $logo = get_field('_bumps_header_logo','option'); ?>

<?php if (!empty($logo)) { ?>
    <div id="hk-logo"><img src="<?php echo $logo; ?>" /></div>
<?php } ?>