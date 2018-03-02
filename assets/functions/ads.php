<?php 

function leaderboard_short() {
	if( have_rows('global_leaderboard_short', 'option') ):
		while ( have_rows('global_leaderboard_short', 'option') ) : the_row();
			
			the_sub_field('head_code'); 
			the_sub_field('body_code'); 
            						
		endwhile;
	else :
	endif;
}

function mpu_1() {
	if( have_rows('global_mpu_1', 'option') ):
		while ( have_rows('global_mpu_1', 'option') ) : the_row();
			
			the_sub_field('head_code'); 
			the_sub_field('body_code'); 
							
		endwhile;
	else :
	endif;
}

function mpu_2() {
	if( have_rows('global_mpu_2', 'option') ):
		while ( have_rows('global_mpu_2', 'option') ) : the_row();
			
			the_sub_field('head_code'); 
			the_sub_field('body_code'); 
							
		endwhile;
	else :
	endif;
}

function mpu_3() {
	if( have_rows('global_mpu_3', 'option') ):
		while ( have_rows('global_mpu_3', 'option') ) : the_row();
			
			the_sub_field('head_code'); 
			the_sub_field('body_code'); 
							
		endwhile;
	else :
	endif;
}

function leaderboard_long() {
	if( have_rows('global_leaderboard_long', 'option') ):
		while ( have_rows('global_leaderboard_long', 'option') ) : the_row();
			
			the_sub_field('head_code'); 
			the_sub_field('body_code'); 
            						
		endwhile;
	else :
	endif;
}

function sponsored_mpu() {
	global $post;
	if( have_rows('sponsor_mpu',$post->ID) ):
		while ( have_rows('sponsor_mpu',$post->ID) ) : the_row();
			$image = get_sub_field('image');
			$url = get_sub_field('url'); 
	?>
			<div class="ad text-center">
				<a href="<?php echo $url; ?>" target="_blank"><img src="<?php echo $image; ?>" /></a>
            </div>
				
	<?php
		endwhile;
	else :
	endif;
}

function takeover_bottom() {
	if( get_field('show_all_takeovers','option') ) { $display = 'block'; } else { $display = 'none'; }
                $rows = get_field('global_takeover_bottom', 'option' );
                $first_row = $rows[0];
                $first_row_bg = $first_row['background_color']; 
         ?>
        <div class="takeover bottom-takeover" style="display:<?php echo $display; ?>!important;background-color:<?php echo $first_row_bg ?>;">
            <?php
            if( have_rows('global_takeover_bottom', 'option') ):
                while ( have_rows('global_takeover_bottom', 'option') ) : the_row();
                    
                    the_sub_field('head_code'); 
                    the_sub_field('body_code'); ?>
                    
            <?php endwhile; else : endif; ?>
        </div>
<?php
}

function takeover_top() {
	if( get_field('show_all_takeovers','option') ) { $display = 'block';} else { $display = 'none'; }
                $rows = get_field('global_takeover_top', 'option' );
                $first_row = $rows[0];
                $first_row_bg = $first_row['background_color']; 
         ?>
        <div class="takeover top-takeover <?php echo $display; ?>" style="display:<?php echo $display; ?>!important;background-color:<?php echo $first_row_bg ?>;">
            <?php
            if( have_rows('global_takeover_top', 'option') ):
                while ( have_rows('global_takeover_top', 'option') ) : the_row();
                    
                    the_sub_field('head_code'); 
                    the_sub_field('body_code'); ?>
                    
            <?php endwhile; else : endif; ?>
        </div>
<?php
}


?>