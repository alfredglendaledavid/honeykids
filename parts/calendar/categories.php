<?php
global $cat;
global $cat_term_id;
$categories = get_categories( array(
    'orderby' => 'name',
    'order'   => 'ASC',
	'parent'   => $cat,
	'hide_empty'   => 1,
) );
?>

<div class="calendar-search-bar">
	<div class="row">
    	<div class="columns small-12 medium-2 align-self-middle">
        	<h5 class="search-events-title">SEARCH EVENTS</h5>
        </div>
    	<div class="columns small-12 medium-4 align-self-middle">
            <input type="search" class="eventtitle" placeholder="What's happening this week…">
        </div>
        <div class="columns small-12 medium-2 select align-self-middle">
        	<select class="category-select">
                <option value="">Category</option>
                <?php foreach( $categories as $category ) {  ?>
                  <option value="<?php echo $category->term_id; ?>"><?php echo $category->name; ?></option>
                <?php    
                } 
                ?>
            </select>
            <i class="fa fa-angle-down" aria-hidden="true"></i>
        </div>
        <div class="columns small-12 medium-2 select align-self-middle">
            <input type="text" class="eventdate" placeholder="Date">
            <i class="fa fa-angle-down" aria-hidden="true"></i>
       	</div>
        <div class="columns small-12 medium-2 post-btn-cont  align-self-middle">
        	<?php if (is_user_logged_in()) {  ?>
            	<a href="<?php echo get_page_link(56159); ?>">
				<?php } else { ?>
                <a href="" id="show_login">
                <?php } ?>
            	<div class="pink-btn post-event-btn">POST AN EVENT</div>
            </a>
        </div>
	</div>
</div>
	<div class="ad text-center">
		<?php leaderboard_short(); ?>
    </div>

<div id="cat-box-calendar" class="cat-box-calendar">
    <h6 class="ridge"><span>Upcoming</span></h6>
    <ul class="category-list">
       <?php 
       
            $start = date("Ymd",strtotime('now'));
            $end = date("Ymd",strtotime('+3 months'));
        
            $args = array (
                'post_type'              => array( 'post' ),
                'post_status'            => array( 'publish' ),
                'posts_per_page'         => -1,
                'order'                  => 'DESC',
                'orderby'                => 'date',
				'ignore_sticky_posts'    => 1,
                'cat'                    => $cat_term_id,
                'meta_query' 			 => array(
                                            array(
                                                'key'			=> 'entry_start_date',
                                                'compare'		=> 'BETWEEN',
                                                'value'			=> array( $start, $end ),
                                                'type'			=> 'DATE'
                                            )
                                        ),
                                        'order'				=> 'ASC',
                                        'orderby'			=> 'meta_value',
                                        'meta_key'			=> 'entry_start_date',
                                        'meta_type'			=> 'DATE'
				
            );
            $this_week = new WP_Query($args);
        ?> 
        
        <div class="events-slider">
            <?php if ($this_week->have_posts()) :  while ($this_week->have_posts()) : $this_week->the_post(); ?>
                <?php get_template_part( 'parts/loop-calendar' ); ?>
            <?php endwhile; else : endif; ?>
        </div>
    </ul>
</div>
<?php foreach( $categories as $category ) { 
    $cat_term_id = $category->term_id;
    $cat_slug = $category->slug;

    $today = date("Ymd");
    $args = array (
        'post_type'              => array( 'post' ),
        'post_status'            => array( 'publish' ),
        'posts_per_page'         => -1,
        'order'                  => 'DESC',
		'ignore_sticky_posts'    => 1,
        'cat'                    => $cat_term_id,
        'meta_query' 			 => array(
                array(
                    'key'			=> 'entry_end_date',
                    'compare'		=> '>=',
                    'value'			=> $today,
                    'type'			=> 'DATE'
                )
            ),
            'order'				=> 'ASC',
            'orderby'			=> 'meta_value',
            'meta_key'			=> 'entry_start_date',
            'meta_type'			=> 'DATE'
    );
    $featured_post = new WP_Query($args);
    if ($featured_post->have_posts()) :  ?>
        <div id="cat-box-calendar" class="<?php echo $category->slug; ?> cat-box-calendar">
            <h6 class="ridge"><span><?php echo $category->name; ?></span></h6>
            <div class="events-slider">   
                <?php while ($featured_post->have_posts()) : $featured_post->the_post(); ?>
                    <?php get_template_part( 'parts/loop-calendar' ); ?>
                    <?php if( $featured_post->current_post == 1 && $cat_term_id == 30312  ) { ?>
                    <div class="text-center slick-slide post-box" data-text="" data-start_date=""  data-end_date="" id="hover">
                        <div class="post-event-box">
                            <div>
                                <a href="<?php echo get_page_link(56159); ?>">
                                    <div class="cat-icon-big"></div>
                                    <div class="pink-btn">POST AN EVENT</div>
                                </a>
                            </div>
                        </div>   
                    </div>
                    <?php } ?>
                <?php endwhile; ?>
    
            </div>
        </div>
        
    <?php endif;  
    } 
?>