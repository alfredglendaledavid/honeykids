<?php $school_video = get_field('ss_youtube_video_url',$post->ID); ?>
                        
<?php  if (!empty($school_video)) { ?>
	<div class="ss-video">
		<h6 class="line"><span>VIDEO</span></h5>
		<?php echo wp_oembed_get( $school_video );  ?>
	</div>
<?php	} ?>