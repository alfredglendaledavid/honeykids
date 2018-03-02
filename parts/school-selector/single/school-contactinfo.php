<div class="ss-contact-info">
    <h6 class="line"><span>CONTACT INFO</span></h6>
    <?php if( get_field('SS_website') ): ?>
    	<p><b>Website: <a href="<?php the_field('SS_website'); ?>" target="blank"><?php the_field('SS_website'); ?></a></b></p>
    <?php endif; ?>
    <?php if( get_field('SS_telephone') ): ?>
    	<p><b>Contact Number: <?php the_field('SS_telephone'); ?></b></p>
    <?php endif; ?>
     <?php if( get_field('SS_email') ): ?>
    	<p><b>Email Address: <a href="mailto:<?php the_field('SS_email'); ?>" target="blank"><?php the_field('SS_email'); ?></a></b></p>
    <?php endif; ?>
</div>   