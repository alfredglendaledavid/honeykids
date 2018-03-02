<?php
$categories = get_categories( array(
    'orderby' => 'name',
    'order'   => 'ASC',
	'parent'   => $cat,
	'hide_empty'   => 1,
) );
$count = 1;
?>

<?php foreach( $categories as $category ) { ?>
		
        <header>
        	<h6 class="ridge"><span><?php echo $category->name; ?></span></h6>
        </header>
        
        <div class="row small-up-1 medium-up-2 large-up-2">
           <?php 
                $args = array (
                    'post_type'              => array( 'post' ),
                    'post_status'            => array( 'publish' ),
                    'posts_per_page'         => 2,
                    'order'                  => 'DESC',
                    'orderby'                => 'date',
                    'cat'                    => $category->term_id,
                );
                $featured_post = new WP_Query($args);
            ?>
            <?php if ($featured_post->have_posts()) :  while ($featured_post->have_posts()) : $featured_post->the_post(); ?>
                <?php get_template_part( 'parts/loop-post' ); ?>
            <?php endwhile; else : endif; ?>
        </div>	
        
		<div class="row text-center button-container">
            <div class="load-more-archive">
                <a href="<?php echo get_category_link($category); ?>"><span>LOAD MORE</span></a>
            </div>
        </div>
	   
		<?php if ( $count == 4 ) {  ?>

		<div class="ad text-center">
			<?php get_template_part( 'inc/ads/global-leaderboard-short' ); ?>
		</div>	
		
		<?php } elseif ($category === end($categories) && $count < 4  ) { ?>
		
		<div class="ad text-center">
			<?php get_template_part( 'inc/ads/global-leaderboard-short' ); ?>
		</div>
		
		<?php } ?>
	
	<?php $count++ ?>
<?php    
} 
?>