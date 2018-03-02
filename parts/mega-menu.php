<article id="post-<?php the_ID(); ?>" role="article" class="row">
	<figure class="columns medium-8 self-align-middle">
		<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><div class="css-img" style="background:url(<?php the_post_thumbnail_url('medium'); ?>);"></div></a>
	</figure>
	<div class="post-title entry-header columns medium-4 self-align-middle">
		<p><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php if (get_field('entry_headlinetitle_1')) {the_field('entry_headlinetitle_1'); }  else { the_title(); } ?></a></p>
	</div>
</article>