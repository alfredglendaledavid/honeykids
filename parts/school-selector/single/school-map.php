<?php if( have_rows('ss_locations',$post->ID) ): ?>
    <div class="ss-map">
        <h6 class="line"><span>MAP</span></h6>
        
        <?php
        get_template_part( 'parts/calendar/calendar-map' );  
        ?>
        <div class="acf-map">
            <?php while ( have_rows('ss_locations',$post->ID) ) : the_row(); 
    
                $location = get_sub_field('ss_school_address');
    
                ?>
                <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>">
                    <h6><?php echo $location['address'];; ?></h6>
                    <p class="address"><?php echo $location['address']; ?></p>
                </div>
            <?php endwhile; ?>
        </div>
     </div>   
<?php endif; ?>