<div class="column column-block">
    <?php
        global $post;
        $post_id = $post->ID;
        $post_type = $post->post_type;
    ?>

    <?php /* if (is_user_logged_in()) { ?>
       <?php echo show_cbxbookmark_btn($post_id, $post_type); ?>
    <?php } else { ?>
        <a id="show_login" class="heart"><span></span></a>
    <?php } */ ?>
    
    <?php /* <div class="overlay-container">
	*/ ?>
        <a href="<?php the_permalink(); ?>">
        	<div class="css-img" style="background-image:url(<?php the_post_thumbnail_url('large'); ?>);"></div>
        </a>
    <?php /*
        <a href="<?php the_permalink(); ?>">
            <div class="overlay"></div>
        </a>
    </div>
	*/ ?>
    
    <?php /*
    <aside class="text-center <?php echo primary_term()->slug; ?>">
        <div id="icon-container" >
            <div class="cat-icon"></div>
        </div>
    </aside>
	
	*/ ?>
    
    <aside class="text-center eds-picks">
        EDITOR'S PICK
    </aside>
    
    <aside class="text-center school-testimonials">
        SCHOOL TESTIMONIALS
    </aside>
    
    <aside class="text-center school-type">
       <?php the_field('SS_type'); ?>
    </aside>
    
    <aside class="text-center expert">
    	<?php 
			$categories = get_the_category();
			foreach( $categories as $category ) {
				if($category->slug !== 'find-an-expert') {
					echo $category->name.' ';
				}
			}
		 ?>
    </aside>

    <h6><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php echo short_title(); ?></a></h6>
    
    <aside class="post-author text-center" >
        <span class="by">by</span> <?php the_author_posts_link(); ?>
    </aside>

</div>