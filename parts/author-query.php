 <?php
 	global $post;
	$author_id = $post->post_author;
	
	$args = array (
		'post_type'              => 'post',
		'post_status'            => 'publish',
		'order'                  => 'DESC',
		'orderby'                => 'date',
		'posts_per_page'         => 16,
		'author'         		 => $author_id,
	);
	$author = new WP_Query($args);
	
	$author_args = array (
		'post_type'              => 'post',
		'post_status'            => 'publish',
		'order'                  => 'DESC',
		'orderby'                => 'date',
		'posts_per_page'         => 4,
		'author'         		 => $author_id,
	);
	$author_query = new WP_Query($author_args);

?>

<header>
	<?php single_author(); ?>
</header>

<div class="row small-up-1 medium-up-2 large-up-2 medium-uncollapse small-collapse post-listing">
   <?php if ($author->have_posts()) :  while ($author->have_posts()) : $author->the_post(); ?>
		<?php get_template_part( 'parts/loop-post' ); ?>
	<?php endwhile;  ?>
 </div>
 <?php else : echo''; endif; ?>
 
<div class="row text-center button-container">
	<div class="load-more" data-pages="<?php echo $author_query->max_num_pages; ?>" data-nextpage="5" data-ppp="4" data-author="<?php echo $author_id; ?>">
		<span>LOAD MORE</span>
	</div>
</div>