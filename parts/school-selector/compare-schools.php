<?php
if( have_rows('compare_schools','option') ):
    while ( have_rows('compare_schools','option') ) : the_row();
		$title = get_sub_field('title');
        $thumb = get_sub_field('thumbnail');
		$url = get_sub_field('url');
?>
	<div>
        <a href="<?php echo $url; ?>" target="_blank">
            <div class="css-img" style="background-image:url(<?php echo $thumb; ?>);"></div>
            <h6 class="ss-block-title"><?php echo $title; ?></h6>
        </a> 
    </div> 

<?php
    endwhile;
else :
endif;
?>