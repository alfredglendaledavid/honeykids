<?php
if( have_rows('school_profiles','option') ):
    while ( have_rows('school_profiles','option') ) : the_row();
		$title = get_sub_field('title');
        $thumb = get_sub_field('thumbnail');
		$url = get_sub_field('url');
?>
	<div>
        <a href="<?php echo $url; ?>" >
            <div class="css-img" style="background-image:url(<?php echo $thumb; ?>);"></div>
            <h6 class="ss-block-title"><?php echo $title; ?></h6>
        </a> 
    </div> 

<?php
    endwhile;
else :
endif;
?>

