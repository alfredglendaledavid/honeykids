<?php $current_user = wp_get_current_user(); ?>
<div class="row name-bar">
    <div class="column large-2 medium-3 small-12 align-self-middle user-photo">
        <?php echo get_avatar( $current_user->ID, 150 );  ?>
    </div> 
    <div class="column large-6 medium-5 small-12 align-self-middle user-desc">
        <h6>Welcome</h6>
        <?php if ( is_user_logged_in() ) : ?>
            <h4><a href="<?php echo get_page_link(54867); ?>"><?php echo $current_user->user_firstname. ' '. $current_user->user_lastname; ?></a></h4>
            <div class="edit-user"><a href="<?php echo get_page_link(54862); ?>">Edit Profile</a></div>
        <?php else : ?>
            <h3>Visitor</h3>
            <div class="edit-user"><a href="" id="show_login">Please <span>login</span> to view your profile.</a></div>
        <?php endif; ?>
    </div>
    
    <div class="columns large-4 medium-4 small-12 align-self-middle">
        <a class="instructions" href="<?php the_field('profile_instructions_url','option'); ?>">
            <div class="instruction-box">
                 <p><i class="fa fa-heart-o" aria-hidden="true"></i></p>
                 <?php the_field('profile_instructions','option'); ?>
            </div>
        </a>
    </div> 
</div>	