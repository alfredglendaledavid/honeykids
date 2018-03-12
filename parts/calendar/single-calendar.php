<main id="main" class="large-6 medium-12 small-12 columns event entry-content" role="main">
    
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    
    <div class="calendar-image hide-for-large">
		<?php the_post_thumbnail('large'); ?>
    </div>
    
	<h1 class="entry-title single-title"><?php the_title(); ?></h1>
    
    <div class="single-calendar-details">
		<?php
            $start_acf = get_field('entry_start_date',$post->ID);
            $start = new DateTime(get_field('entry_start_date',$post->ID));
            $start_date = $start->format('l, F j, Y');
            $end_acf = get_field('entry_end_date',$post->ID);
            $end = new DateTime(get_field('entry_end_date',$post->ID));
            $end_date = $end->format('l, F j, Y');
            
            if ( $start_date == $end_date ) {
                $event_date = $start_date;
            } else {
                $event_date = $start_date. ' - ' .$end_date;
            }
            
			$event_time  = get_field('entry_time', $post->ID);
            $venue  = get_field('entry_event_location', $post->ID);
            $price  = get_field('entry_event_cost', $post->ID);
            $website  = get_field('show_website', $post->ID);
			
			$parsed = parse_url($website);
			if (empty($parsed['scheme'])) {
				$website = 'http://' . ltrim($website, '/');
			}

        ?>
        <table>
            <tr>
                <td>DATE: </td>
                <td><?php echo $event_date; ?></td>
            </tr>
            <?php if (!empty($event_time)) { ?>
            <tr>
                <td>TIME: </td>
                <td><?php echo $event_time; ?></td>
            </tr>
            <?php } ?>
            <?php if (!empty($venue)) { ?>
                <tr>
                    <td>VENUE: </td>
                    <td><?php echo $venue; ?></td>
                </tr>
            <?php } ?>
            <?php if (!empty($price)) { ?>
            <tr>
                <td>PRICE: </td>
                <td><?php echo $price; ?></td>
            </tr>
            <?php } ?>
            <?php if (!empty($website)) { ?>
            <tr>
                <td>WEBSITE: </td>
                <td><?php echo '<a href="'.$website.'" target="_blank">'.$website.'</a>'; ?></td>
            </tr>
            <?php } ?>
        </table>
    </div>
    <div class="single-calendar-clicks text-center">
        <?php
            global $post;
            $post_id = $post->ID;
            $post_type = $post->post_type;
        ?>
        <div class="cal-icon cal-share"> share</div>
        
        <?php
            $url = add_query_arg(
                array(
                    'action'   => 'TEMPLATE',
                    'text'     => urlencode( $post->post_title ),
                    'details'  => urlencode( $post->post_excerpt ),
                    'location' => urlencode( $venue ),
                    'dates'    => urlencode( $start_acf . '/' . $end_acf ),
                ),
                'http://www.google.com/calendar/event'
            );
        ?>
        <a href="<?php echo $url; ?>" target="_blank"><div class="cal-icon cal-cal"> + calendar</div></a>

    </div>
    
    <?php the_content(); ?>

	 <?php endwhile; else : ?>
            
		<?php get_template_part( 'parts/content', 'missing' ); ?>

     <?php endif; ?>
    
</main> <!-- end #main -->

<div class="event-sidebar large-6 medium-12 small-12 columns">
	<div class="calendar-image show-for-large">
		<?php the_post_thumbnail('large'); ?>
    </div> 
     
    <?php
    
    get_template_part( 'parts/calendar/calendar-map' );  

    $location = get_field('entry_google_map',$post->ID);
    
    if( !empty($location) ):
    ?>
        <div class="acf-map">
            <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
        </div>
    <?php endif; ?>

</div>