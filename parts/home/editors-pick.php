<?php 
	$ids = get_field('editors_picks_articles', 'option', false);
	
	$args = array(
		'post_type'      	=> 'post',
		'posts_per_page'	=> 4,
		'post__in'			=> $ids,
		'post_status'		=> 'publish',
		'orderby'        	=> 'post__in',
		'ignore_sticky_posts' => 1,
	);
	$posts = new WP_Query( $args );
 	$i = 0;
	if ( $posts->have_posts() ) { ?>
    <div class="dotted clearfix">
        <h4>EDITOR'S PICKS</h4>
        <?php while ( $posts->have_posts() ) : $posts->the_post(); ?>
        <?php if ($i == 0) { ?>
            <div class="small-12 columns show-for-medium no-padding-left no-padding-right">
                <?php get_template_part( 'parts/home/loop/eds-pick' ); ?>
            </div>
            <div class="small-12 columns hide-for-medium">
                <?php get_template_part( 'parts/home/loop/eds-pick-thumb' ); ?>
            </div>
        <?php } ?>
        <?php if ($i == 1) { ?>
            <div class="small-12 medium-4 columns">
                <?php get_template_part( 'parts/home/loop/eds-pick-thumb' ); ?>
            </div>
        <?php } ?>
        <?php if ($i == 2) { ?>
            <div class="small-12 medium-4 columns">
                <?php get_template_part( 'parts/home/loop/eds-pick-thumb' ); ?>
            </div>
        <?php } ?>
        <?php if ($i == 3) { ?>
            <div class="small-12 medium-4 columns">
                <?php get_template_part( 'parts/home/loop/eds-pick-thumb' ); ?>
            </div>
        <?php } ?>
        <?php $i++; endwhile; } // end of the loop. ?>
    </div>
	<?php 
   wp_reset_query();
   wp_reset_postdata();
?>

