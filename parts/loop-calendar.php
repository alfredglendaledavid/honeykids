<?php 
	$start_date = get_field('entry_start_date',$post->ID);
	$sdate = new DateTime($start_date);
	$end_date = get_field('entry_end_date',$post->ID);
	$edate = new DateTime($end_date);
	if ($sdate == $edate) {
		$event_date = $sdate->format('j M');
	}
	else {
		$event_date = $sdate->format('j M').' - ' .$edate->format('j M');
	}
	
	$text = short_title();
	$text = sanitize_text_field($text);
	$text = strtolower($text);
	
	$startdate_unix = strtotime($start_date);
	$enddate_unix = strtotime($end_date);

	$category_ids = array();
	$categories   = wp_get_object_terms( $post->ID, 'category' );
	foreach( $categories as $category )
		$category_ids[] = $category->term_id;
	
?>
<div class="text-center grow slick-slide"
    data-text="<?php echo $text; ?> <?php echo implode( ' ', $category_ids ); ?>"
    data-start_date="<?php echo $startdate_unix; ?>" 
    data-end_date="<?php echo $enddate_unix; ?>">

    <a href="<?php the_permalink(); ?>" title="<?php echo short_title(); ?>">
    	<div class="css-img" style="background-image:url(<?php the_post_thumbnail_url('large'); ?>);">
            <div class="calendar-title">
                <h6><?php echo short_title(); ?></h6>
                <p><?php echo $event_date; ?></p>
            </div>
        </div>
    </a>
    
</div>