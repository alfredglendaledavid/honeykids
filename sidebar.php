<div id="sidebar1" class="sidebar large-4 medium-12 small-12 columns" role="complementary">

	<div class="show-for-large" <?php /* data-sticky-container data-sticky-on="" */ ?> >
	
        <div <?php /* class="sticky" data-sticky data-sticky-on="large" data-top-anchor="entry-content:top" data-btm-anchor="article-footer:bottom" data-margin-top="10" */ ?> >
        
            <?php wp_reset_query(); // Restore global post data stomped by the_post(). ?>
    
            <?php  $type = get_field('entry_editorial_type',$post->ID);  if ($type == 'Advertorial') { ?>
                <?php sponsored_mpu(); ?>
            <?php } ?>
            
            <?php  $type = get_field('entry_editorial_type',$post->ID);  if ($type != 'Advertorial' && !in_category('school-profiles')) { ?>
                <div class="ad text-center">
                    <?php mpu_1(); ?>
                </div>
            <?php } ?>
    
            <?php get_template_part( 'parts/widgets/editors-picks' ); ?>
            
            <?php  $type = get_field('entry_editorial_type',$post->ID);  if ($type != 'Advertorial' && !in_category('school-profiles')) { ?>
                <div class="ad text-center">
                    <?php mpu_2(); ?>
                </div>
            <?php } ?>
            
            <?php get_template_part( 'parts/widgets/featured-events' ); ?>
            
            <?php /*
            <div class="pink-border join-us">
				<?php get_template_part( 'parts/home/join-us' ); ?>
            </div>
			*/ ?>
        
        </div>
        
    </div>
    
    <div class="hide-for-large">
    	<?php wp_reset_query(); // Restore global post data stomped by the_post(). ?>
    
		<?php  $type = get_field('entry_editorial_type',$post->ID);  if ($type == 'Advertorial') { ?>
            <?php sponsored_mpu(); ?>
        <?php } ?>
        
        <?php  $type = get_field('entry_editorial_type',$post->ID);  if ($type != 'Advertorial' && !in_category('school-profiles')) { ?>
            <div class="ad text-center">
                <?php mpu_1(); ?>
            </div>
        <?php } ?>

        <?php get_template_part( 'parts/widgets/editors-picks' ); ?>
        
        <?php  $type = get_field('entry_editorial_type',$post->ID);  if ($type != 'Advertorial' && !in_category('school-profiles')) { ?>
            <div class="ad text-center">
                <?php mpu_1(); ?>
            </div>
        <?php } ?>
        
        <?php get_template_part( 'parts/widgets/featured-events' ); ?>
        
        <?php /*
        <div class="pink-border join-us">
			<?php get_template_part( 'parts/home/join-us' ); ?>
        </div>
		
		*/ ?>
        
    </div>

</div>