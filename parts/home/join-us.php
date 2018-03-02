<div class="row">
    <div class="column align-self-middle join-us-content">
        <?php
        if ( is_user_logged_in() ) { ?>
            <h6 class="loggedin"><?php the_field('hka_join_logged_in_title', 'option'); ?></h6>
            <?php the_field('hka_join_logged_in_paragraph', 'option'); ?>
            <div class="pink-btn"><a href="<?php echo wp_logout_url( home_url() ); ?>"><div class="side-log logout">SIGN OUT</div></a></div>
        <?php } else { ?>
            <h6 class="loggedout"><i class="fa fa-envelope-o" aria-hidden="true"></i><?php the_field('hka_join_logged_out_title', 'option'); ?></h6>
            <?php the_field('hka_join_logged_out_paragraph', 'option'); ?>
            <div class="pink-btn"><div id="show_signup">SIGN UP <i class="fa fa-sign-in" aria-hidden="true"></i></div></div>
        <?php }
        ?>
    </div>
    
</div>