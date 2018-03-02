<?php
	$args = array (
		'post_type'              => 'post',
		'post_status'            => 'publish',
		//'order'                  => 'DESC',
		//'orderby'                => 'date',
		'posts_per_page'         => 16,
		//'key' => 'entry_headlinetitle_1',
        //'value' => $query->query_vars['s'] = '',
        //'compare' => 'LIKE',
		
		's'                      => $s
	);
	$search = new WP_Query($args);
	
	$search_args = array (
		'post_type'              => 'post',
		'post_status'            => 'publish',
		//'order'                  => 'DESC',
		//'orderby'                => 'date',
		'posts_per_page'         => 4,
        //'key' => 'entry_headlinetitle_1',
        //'value' => $query->query_vars['s'] = '',
        //'compare' => 'LIKE',

		's'                      => $s
	);
	$search_query = new WP_Query($search_args);

	$NumResults = $search->found_posts;
?>

<header>
	<h5 class="search-title">
		Your search for <span>"<?php echo esc_html( get_search_query( false ) ); ?>"</span> <?php wp_reset_query(); ?> found <?php echo $NumResults ?> results.
	</h5>
</header>

<div class="row small-up-1 medium-up-2 large-up-2 medium-uncollapse small-collapse post-listing">
   <?php if ($search->have_posts()) :  while ($search->have_posts()) : $search->the_post(); ?>
		<?php get_template_part( 'parts/loop-post' ); ?>
	<?php endwhile;  ?>
 </div>
 <?php else : echo''; endif; ?>
 
<div class="row text-center button-container">
	<div class="load-more" data-pages="<?php echo $search_query->max_num_pages; ?>" data-nextpage="5" data-ppp="4" data-searchterm="<?php echo $s; ?>">
		<span>LOAD MORE</span>
	</div>
</div>