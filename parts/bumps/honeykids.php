<?php 
    $args = array (
        'post_type'              => array( 'post' ),
        'post_status'            => array( 'publish' ),
        'posts_per_page'         => 1,
        'order'                  => 'DESC',
        'orderby'                => 'date',
		'ignore_sticky_posts'    => 1,
		'category__not_in' => 30699,
    );
    $featured_post = new WP_Query($args);
?>
            
<?php if ($featured_post->have_posts()) :  while ($featured_post->have_posts()) : $featured_post->the_post(); ?>

<a href="<?php the_permalink(); ?>" target="_blank">
    <div id="foot-latest-img"><div class="css-img" style="background:url(<?php the_post_thumbnail_url('medium') ?>);"></div></div>
    <h6><?php the_title(); ?></h6>
</a>           

<?php endwhile; else : endif; ?>

<?php wp_reset_postdata(); ?>

<div id="hk-logo"><img src="<?php the_field('site_logo', 'option'); ?>" /></div>