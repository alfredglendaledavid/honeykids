<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
		
    <aside class="show-for-large" id="breadcrumbs">
         <?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<div class="hka-breadcrumbs">','</div>'); } ?>
    </aside>    
                        
    <header class="article-header">	
        
        <h3 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h3>
        
        <?php get_template_part( 'parts/content', 'byline' ); ?>
        
    </header> <!-- end article header -->
                    
    <section class="entry-content" id="entry-content" itemprop="articleBody">
        <?php get_template_part( 'parts/share-icons' ); ?>
        
        <?php get_template_part( 'parts/single/save-article' ); ?>
        
        <?php get_template_part( 'parts/single/hero' ); ?>
        
        <?php get_template_part( 'parts/school-selector/single/school-links' ); ?>
        
        <?php the_content(); ?>
        
        <?php get_template_part( 'parts/school-selector/single/school-events' ); ?>
        
        <?php get_template_part( 'parts/school-selector/single/school-testi' ); ?>

        <?php get_template_part( 'parts/school-selector/single/school-video' ); ?>
        
        <?php get_template_part( 'parts/school-selector/single/school-info' ); ?>
        
        <?php get_template_part( 'parts/school-selector/single/school-contactinfo' ); ?>
        
        <?php get_template_part( 'parts/school-selector/single/school-links' ); ?>
        
        <?php get_template_part( 'parts/school-selector/single/school-map' ); ?>
        
        <?php get_template_part( 'parts/school-selector/single/schools-recommended' ); ?>
        
    </section> <!-- end article section -->
                        
    <footer class="article-footer" id="article-footer">
        
        <p class="tags"><?php the_tags('<span class="tags-title">' . __( 'Tags:', 'jointswp' ) . '</span> ', ', ', ''); ?></p>	
        
        <?php // single_author(); ?>
         
        <?php // get_template_part( 'parts/single/related' ); ?> 
        
    </footer> <!-- end article footer -->
                        
    <?php // comments_template(); ?>	
                                                    
</article> <!-- end article -->