<?php
	global $post;
	$post_id = $post->ID;
	$post_type = $post->post_type;
?>
<article id="post-<?php the_ID(); ?>" role="article" class="eds-pick clearfix row">
    <div class="columns medium-8 small-12 align-self-middle eds-pick-thumb">
        <?php /* if (is_user_logged_in()) { ?>
           <?php echo show_cbxbookmark_btn($post_id, $post_type); ?>
        <?php } else { ?>
            <a id="show_login" class="heart"><span></span></a>
        <?php } */ ?>
    	
        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('large'); ?></a>
        
    </div>
    
    <div class="columns medium-4 small-12 text-left align-self-middle">
        <aside class="primary-term">
            <?php echo primary_term()->name; ?>
        </aside>
         
        <header class="post-title">
            <h6> 
                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                    <?php echo short_title(); ?>
                </a>
            </h6>
        </header>
       
        <div class="post-content">
            <?php echo excerpt(20); ?>
        </div>
        <aside class="post-author row">
            <div class="columns medium-5 small-12 no-padding-right">
                <section id="authorpage" class="authorpage">
                    <?php global $post; $author_id = $post->post_author; ?>
                    <?php echo get_avatar( $author_id , '164'); ?>
                </section>
            </div>
            <div class="columns medium-7 small-12 align-self-middle">
                <span id="author-by"><?php the_author_posts_link(); ?></span>
            </div>
        </aside>
    </div>
</article>