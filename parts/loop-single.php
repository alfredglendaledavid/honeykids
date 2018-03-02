<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

    <?php
		$ed_posts = wp_most_popular_get_popular( array( 'limit' => 1, 'post_type' => 'post', 'range' => 'weekly' ) );

		if ( count( $ed_posts ) > 0 ): foreach ( $ed_posts as $ed_post ):
			setup_postdata( $ed_post );
			$posttitle = get_field('entry_headlinetitle_1',$ed_post);
			?>
            
            <div class="editorial_ad hide-for-large">
                <a href="<?php the_permalink() ?>" class="ed_ad_link">
                    <div class="cat">
                        <span>TRENDING</span>
                    </div>
                </a>
                <a href="<?php the_permalink() ?>" class="ed_ad_link">
                    <div class="title">
                        <?php 
							if (strlen($posttitle) > 43) {
								$posttitle = substr($posttitle, 0, 43);
								echo $posttitle.'..';
							} else {
								$posttitle = get_field('entry_headlinetitle_1',$ed_post);
								echo $posttitle;
							}
						
						 ?>
                    </div>
                </a>
            </div>
			<?php
		endforeach; endif;
		
		wp_reset_postdata();
	?>
		
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
        
        <?php get_template_part( 'parts/single/subtitle' ); ?>
        
		<?php the_content(); ?>
        
	</section> <!-- end article section -->
						
	<footer class="article-footer" id="article-footer">
        
		<p class="tags"><?php the_tags('<span class="tags-title">' . __( 'Tags:', 'jointswp' ) . '</span> ', ', ', ''); ?></p>	
        
        <?php single_author(); ?>
         
        <?php get_template_part( 'parts/single/related' ); ?> 
        
	</footer> <!-- end article footer -->
						
	<?php // comments_template(); ?>	
													
</article> <!-- end article -->