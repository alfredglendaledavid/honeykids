<div class="hero clearfix">
    <?php 
        $style = get_field('header_style',$post->ID); 
        $video = get_field('featured_youtube',$post->ID); 
        $pics = get_field('featured_gallery',$post->ID); 
    if ( $style == 'video' ) { ?>
        <?php echo wp_oembed_get( $video );  ?></p>
     <?php } elseif ( $style == 'slider' ) { ?>
        <?php if( $pics ): ?>
            <div class="orbit" role="region" aria-label="Latest from Honeykids" data-orbit >
                <ul class="orbit-container home-slider">
                    <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span><i class="fa fa-angle-left" aria-hidden="true"></i></button>
                    <button class="orbit-next"><span class="show-for-sr">Next Slide</span><i class="fa fa-angle-right" aria-hidden="true"></i></button>
                    <?php foreach( $pics as $pic ): ?>
                        <li class="orbit-slide"><img src="<?php echo $pic['sizes']['large']; ?>" alt="<?php echo $pic['title']; ?>" /></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>
    <?php } else { ?>
        <?php the_post_thumbnail('large'); ?>
    <?php } ?>
</div>