<?php
if( have_rows('honeykidsgo_widget','option') ):
    while ( have_rows('honeykidsgo_widget','option') ) : the_row();
?>

<a href="<?php the_sub_field('url') ?>" target="_blank">
	<div id="foot-latest-img"><div class="css-img" style="background:url(<?php the_sub_field('thumbnail') ?>);"></div></div>
</a>

<div id="hk-logo"><img src="<?php the_sub_field('logo'); ?>" /></div>

<?php endwhile; else : endif; ?>