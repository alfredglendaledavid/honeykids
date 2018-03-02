<h4 class="related-title">Related Posts</h4>
<?php 
    $args = array(
            'category__in' => primary_term()->term_id,
            'post__not_in' => array($post->ID),
            'posts_per_page'=> 10, // Number of related posts that will be shown.
    );
    $the_query = new WP_Query($args);
?>
<div class="related text-center" id="related">
    <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
        <div class="slick-slide">
            <a href="<?php the_permalink()?>"title="<?php the_title(); ?>"><?php the_post_thumbnail('medium'); ?></a>
            <p><a href="<?php the_permalink()?>"title="<?php the_title(); ?>"><?php echo short_title(); ?></a></p>
        </div>
        <?php  endwhile;  ?>
    <?php wp_reset_postdata(); ?>
</div>