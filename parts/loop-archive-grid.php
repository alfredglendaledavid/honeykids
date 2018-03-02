<div class="column column-block">

    <article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article">
    
        <section class="featured-image" itemprop="articleBody">
            <?php the_post_thumbnail('large'); ?>
        </section> <!-- end article section -->
    
        <header class="article-header">
            <p class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></p>				
        </header> <!-- end article header -->	
                                                        
    </article> <!-- end article -->
    
</div>


