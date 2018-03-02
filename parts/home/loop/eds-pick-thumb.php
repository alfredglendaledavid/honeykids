<?php
	global $post;
	$post_id = $post->ID;
	$post_type = $post->post_type;
?>
<article id="post-<?php the_ID(); ?>" role="article" class="eds-pick-thumb">
	<?php /* if (is_user_logged_in()) { ?>
	   <?php echo show_cbxbookmark_btn($post_id, $post_type); ?>
    <?php } else { ?>
        <a id="show_login" class="heart"><span></span></a>
    <?php } */ ?>

    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('medium'); ?></a>

	<h6 class="thumb-title">
        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
            <?php echo short_title(); ?>
        </a>
    </h6>
</article>