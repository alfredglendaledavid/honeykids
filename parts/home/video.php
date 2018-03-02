<?php 
	$url = get_field('_hka_youtube_video', 'option');
	$url = esc_url($url);
	/*
	
	if (preg_match('/youtube\.com\/watch\?v=([^\&\?\/]+)/', $url, $id)) {
	  $values = $id[1];
	} else if (preg_match('/youtube\.com\/embed\/([^\&\?\/]+)/', $url, $id)) {
	  $values = $id[1];
	} else if (preg_match('/youtube\.com\/v\/([^\&\?\/]+)/', $url, $id)) {
	  $values = $id[1];
	} else if (preg_match('/youtu\.be\/([^\&\?\/]+)/', $url, $id)) {
	  $values = $id[1];
	}
	else if (preg_match('/youtube\.com\/verify_age\?next_url=\/watch%3Fv%3D([^\&\?\/]+)/', $url, $id)) {
		$values = $id[1];
	} else {   
	// not an youtube video
	}
	*/
?>

<?php if (!empty($url)) { ?>
	<!-- <div id="youtube_video"></div> -->
    
    <?php
	
		if (strpos($url, 'facebook') !== false) {
	
	?>
    
    <script>window.fbAsyncInit = function() {
	  FB.init({
		xfbml      : true,
		version    : 'v2.5'
	  });
	  }; (function(d, s, id){
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) {return;}
		js = d.createElement(s); js.id = id;
		js.src = "https://connect.facebook.net/en_US/sdk.js";
		fjs.parentNode.insertBefore(js, fjs);
	  }(document, 'script', 'facebook-jssdk'));
    </script>
	<div class="fb-video" data-href="<?php echo $url; ?>" data-allowfullscreen="true" data-autoplay="true"></div>
    
    <?php } else { echo wp_oembed_get($url);  } ?>
    
    <?php $category_link = get_category_link( 30416 ); ?>

    <div class="text-center"><a href="<?php echo esc_url( $category_link ); ?>"><h6 class="line"><span>check out our other videos</span></h6></a></div>
<?php } ?>

<!-- 

<script async src="https://www.youtube.com/iframe_api"></script> 
<script>

function onYouTubeIframeAPIReady() {
		var player;
			player = new YT.Player('youtube_video', {
			videoId: '<?php // echo $values; ?>', // YouTube Video ID
			height: 380, // Player height (in px)
			playerVars: {
			autoplay: 1, // Auto-play the video on load
			controls: 1, // Show pause/play buttons in player
			showinfo: 0, // Hide the video title
			modestbranding: 1, // Hide the Youtube Logo
			loop: 1, // Run the video in a loop
			fs: 0, // Hide the full screen button
			cc_load_policty: 0, // Hide closed captions
			iv_load_policy: 3, // Hide the Video Annotations
			autohide: 0, // Hide video controls when playing
			rel: 0,  // Disable related videos
			origin: 'http://honeykidsasia.com',
		},
			events: {
				onReady: function(e) {
				e.target.mute();
			}
		}
	});
}
</script>

-->