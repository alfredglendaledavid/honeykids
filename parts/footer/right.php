<div class="dotted right-foot">
    <?php if ( !wp_is_mobile() ) { ?>
		<script>
			var userFeed = new Instafeed({
			  get: 'user',
			  userId: '<?php the_field('instagram_user_id','option'); ?>',
			  limit: '6',
			  accessToken: '<?php the_field('instagram_access_token','option') ?>',
			  template: '<div class="column column-block"><a class="animation" href="{{link}}"><img src="{{image}}" /></a></div>'
			});
			userFeed.run();
		</script>
		
        <div class="honeykids-ig text-center">
            <a href="<?php the_field('instagram_url','option'); ?>">
                <img src="<?php the_field('honeykids_login_logo', 'option'); ?>" class="instagram" alt="@honeykidsasia" >
                @honeykidsasia
            </a>
        </div>
        
        <div id="instafeed" class="row small-up-3"></div>
        
        <div class="text-center">
        	<a href="<?php the_field('hka_instagram','option'); ?>" class="follow-ig-btn"><i class="fa fa-lg fa-instagram"></i> Follow on Instagram</a>
        </div>
    <?php } ?>
</div>