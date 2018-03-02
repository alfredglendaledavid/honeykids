<?php 
/* Template Name: Page - Edit Profile */
?>

<?php get_header(); ?>

<?php $current_user = wp_get_current_user(); ?>
	
	<div id="content">
	
		<div id="inner-content" class="row">
	
		    <main id="main" class="small-12 columns edit-profile" role="main">
				
				<?php get_template_part( 'parts/profile/name-bar' ); ?>
                
                <div class="row">
                	<div class="columns small-12">
                        <h5>EDIT PROFILE</h5>
                          
                        <?php global $current_user, $wp_roles; ?>
                            <?php
                                /* If profile was saved, update profile. */
                                if ( 'POST' == $_SERVER['REQUEST_METHOD'] && !empty( $_POST['action'] ) && $_POST['action'] == 'update-user' ) {
                                
                                    /* Update user password. */
                                    if ( !empty($_POST['pass1'] ) && !empty( $_POST['pass2'] ) ) {
                                        if ( $_POST['pass1'] == $_POST['pass2'] )
                                            wp_update_user( array( 'ID' => $current_user->ID, 'user_pass' => esc_attr( $_POST['pass1'] ) ) );
                                        else
                                            $error[] = __('<span class="red">The passwords you entered do not match.  Your password was not updated.</span>', 'profile');
                                    }
                                
                                    /* Update user information. */
                                    if ( !empty( $_POST['url'] ) )
                                       wp_update_user( array ('ID' => $current_user->ID, 'user_url' => esc_attr( $_POST['url'] )));
                                    if ( !empty( $_POST['email'] ) ){
                                        if (!is_email(esc_attr( $_POST['email'] )))
                                            $error[] = __('The Email you entered is not valid.  please try again.', 'profile');
                                        elseif(email_exists(esc_attr( $_POST['email'] )) != $current_user->ID )
                                            $error[] = __('This email is already used by another user.  try a different one.', 'profile');
                                        else{
                                            wp_update_user( array ('ID' => $current_user->ID, 'user_email' => esc_attr( $_POST['email'] )));
                                        }
                                    }
                                
                                    if ( !empty( $_POST['first-name'] ) )
                                        update_user_meta( $current_user->ID, 'first_name', esc_attr( $_POST['first-name'] ) );
                                    if ( !empty( $_POST['last-name'] ) )
                                        update_user_meta($current_user->ID, 'last_name', esc_attr( $_POST['last-name'] ) );
                                    if ( !empty( $_POST['description'] ) )
                                        update_user_meta( $current_user->ID, 'description', esc_attr( $_POST['description'] ) );
                                    if ( !empty( $_POST['photo'] ) )
                                        update_user_meta( $current_user->ID, 'wp_user_avatar', esc_attr( $_POST['photo'] ) );
                                    
                                    do_action('edit_user_profile_update', $current_user->ID);
                                    
                                    
                                }
                                    
                                if ( !is_user_logged_in() ) : ?>
                                        <p class="warning">
                                            <?php _e('You must be logged in to edit your profile.', 'profile'); ?>
                                        </p><!-- .warning -->
                                <?php else : ?>
                                    <?php $error = array(); if ( count($error) > 0 ) { echo '<p class="error">' . implode("<br />",$error) . '</p>'; }?>
                                    <form method="post" id="adduser" action="<?php the_permalink(); ?>" enctype="multipart/form-data">
                                        <div class="row small-up-1 medium-up-2 large-up-3 user-fields">
                                            <div class="column column-block">
                                                <label for="first-name"><?php _e('First Name *', 'profile'); ?></label>
                                                <input class="text-input" name="first-name" type="text" id="first-name" value="<?php the_author_meta( 'first_name', $current_user->ID ); ?>" required="required"/>
                                            </div><!-- .form-username -->
                                            <div class="column column-block">
                                                <label for="last-name"><?php _e('Last Name *', 'profile'); ?></label>
                                                <input class="text-input" name="last-name" type="text" id="last-name" value="<?php the_author_meta( 'last_name', $current_user->ID ); ?>"  required="required"/>
                                            </div><!-- .form-username -->
                                            <div class="column column-block">
                                                <label for="email"><?php _e('E-mail *', 'profile'); ?></label>
                                                <input class="text-input" name="email" type="text" id="email" value="<?php the_author_meta( 'user_email', $current_user->ID ); ?>" required="required"/>
                                            </div><!-- .form-email -->
                                            
                                            <div class="column column-block">
                                                <label for="pass1"><?php _e('Password *', 'profile'); ?> </label>
                                                <input class="text-input" name="pass1" type="password" id="pass1" placeholder="NEW PASSWORD"/>
                                            </div><!-- .form-password -->
                                            <div class="column column-block">
                                                <label for="pass2"><?php _e('Repeat Password *', 'profile'); ?></label>
                                                <input class="text-input" name="pass2" type="password" id="pass2" placeholder="NEW PASSWORD"/>
                                            </div><!-- .form-password -->
                                        </div>
                                        
                                        
                                        <div class="row">
                                            <div class="column edit-profile-image">
                                                <h5>PROFILE IMAGE</h5>	
                                                
                                                <?php do_action('edit_user_avatar', $current_user); ?>
                                                
                                            </div>
                                        </div>
										
        
                                        <h5>SIGN ME UP FOR</h5>	
                                        <div class="row">
                                            <div class="column">
                                            <?php 
                                                    $emailz = $current_user->user_email;
                                                    $firstname = $current_user->first_name;
                                                    $lastname = $current_user->last_name;
        
                                                    $honeykids = isset($_POST['honeykids'])?true:false;
                                                    $hk_hidden = isset($_POST['honeykids_hidden']);
                                                    $monday = isset($_POST['monday'])?true:false;
                                                    $mon_hidden = isset($_POST['mon_hidden']);
                                                    $wednesday = isset($_POST['wednesday'])?true:false;
                                                    $wed_hidden = isset($_POST['wed_hidden']);
                                                    $friday = isset($_POST['friday'])?true:false;
                                                    $fri_hidden = isset($_POST['fri_hidden']);
                                                    $thebuzz = isset($_POST['thebuzz'])?true:false;
                                                    $buzz_hidden = isset($_POST['buzz_hidden']);
                                                    $honeykidsgo = isset($_POST['honeykidsgo'])?true:false;
                                                    $hkgo_hidden = isset($_POST['hkgo_hidden']);
                                                
                                                    require("vendor/autoload.php");
                                                    
                                                    $myapi = '3022cd70e96167405b942327c2b2bbb3-us11';
                                                    
                                                    $MailChimp = new \DrewM\MailChimp\MailChimp($myapi);
                                                    
                                                    $list_id = 'c58efa5dc6';
                                                    $subscriber_hash = $MailChimp->subscriberHash($emailz);
                                                    
                                                    $result = $MailChimp->patch("lists/$list_id/members/$subscriber_hash");
        
                                                    //print_r($result);
                                                    //print_r($interests_group);
                                                    $interests_group = array_values($result)[6]; 
                                                    $hka = array_values($interests_group)[0];
                                                    $mon = array_values($interests_group)[1];
                                                    $wed = array_values($interests_group)[2];
                                                    $fri = array_values($interests_group)[3];
                                                    $buzz = array_values($interests_group)[4];
                                                    $hkgo = array_values($interests_group)[5];
                                                    
                                                    if ( $honeykids == true && (!empty($hk_hidden)) ) {
                                                        $hka = $honeykids;
                                                    } elseif ( $honeykids == false && (!empty($hk_hidden)) ) {
                                                        $hka = false;
                                                    } else  {
                                                        $hka = array_values($interests_group)[0];
                                                    }
                                                    
                                                    
                                                    if ( $monday == true && (!empty($mon_hidden)) ) {
                                                        $mon = $monday;
                                                    } elseif ( $monday == false && (!empty($mon_hidden)) ) {
                                                        $mon = false;
                                                    } else  {
                                                        $mon = array_values($interests_group)[1];
                                                    }
                                                    
                                                    if ( $wednesday == true && (!empty($wednesday)) ) {
                                                        $wed = $wednesday;
                                                    } elseif ( $wednesday == false && (!empty($wed_hidden)) ) {
                                                        $wed = false;
                                                    } else  {
                                                        $wed = array_values($interests_group)[2];
                                                    }
                                                    
                                                    if ( $friday == true && (!empty($fri_hidden)) ) {
                                                        $fri = $friday;
                                                    } elseif ( $friday == false && (!empty($fri_hidden)) ) {
                                                        $fri = false;
                                                    } else  {
                                                        $fri = array_values($interests_group)[3];
                                                    }
                                                    
                                                    if ( $thebuzz == true && (!empty($buzz_hidden)) ) {
                                                        $buzz = $thebuzz;
                                                    } elseif ( $thebuzz == false && (!empty($buzz_hidden)) ) {
                                                        $buzz = false;
                                                    } else  {
                                                        $buzz = array_values($interests_group)[4];
                                                    }
                                                    
                                                    if ( $honeykidsgo == true && (!empty($hkgo_hidden)) ) {
                                                        $hkgo = $honeykidsgo;
                                                    } elseif ( $honeykidsgo == false && (!empty($hkgo_hidden)) ) {
                                                        $hkgo = false;
                                                    } else  {
                                                        $hkgo = array_values($interests_group)[5];
                                                    }
                                                    
                                                    
                                                    $updates = $MailChimp->patch("lists/$list_id/members/$subscriber_hash", [
                                                        'email_address' => 'davy@example.com',
                    'status'        => 'subscribed',
                                                        'merge_fields' => ['FNAME'=>$firstname, 'LNAME'=>$lastname],
                                                        'interests'    => ['aa1b645172' => $hka,
                                                                           '805a17abdb' => $mon,
                                                                           '714f82b467' => $wed,
                                                                           '05e7c3436e' => $fri,
                                                                           '6d99feb857' => $buzz,
                                                                           '6a5eb75dd4' => $hkgo ],
                                                    ]);
                                                    
                                                    ?>
                                               
                                                <p>
                                                    <input type="hidden" value="unchecked" name="honeykids_hidden" />
                                                    <input type="checkbox" name="honeykids" id="honeykids" class="checkbox-custom" value="<?php echo $hka; ?>" <?php if($hka>0) echo "checked='checked'"; ?> />  
                                                    <label for="honeykids" class="checkbox-custom-label"><?php _e('All Newsletters', 'profile'); ?> </label>
                                                </p>
                                                
                                                
                                                <p>
                                                    <input type="hidden" value="unchecked" name="mon_hidden" />
                                                    <input type="checkbox" name="monday" id="monday" class="checkbox-custom" value="<?php echo $mon; ?>" <?php if($mon>0) echo "checked='checked'"; ?> />  
                                                    <label for="monday" class="checkbox-custom-label"><?php _e('What you need to know this week (Monday)', 'profile'); ?> </label>
                                                </p>
                                                
                                                <p>
                                                    <input type="hidden" value="unchecked" name="wed_hidden" />
                                                    <input type="checkbox" name="wednesday" id="wednesday" class="checkbox-custom" value="<?php echo $wed; ?>" <?php if($wed>0) echo "checked='checked'"; ?> />  
                                                    <label for="wednesday" class="checkbox-custom-label"><?php _e("Woohoo it's Wednesday! (Wednesday)", 'profile'); ?> </label>
                                                </p>
                                                
                                                <p>
                                                    <input type="hidden" value="unchecked" name="fri_hidden" />
                                                    <input type="checkbox" name="friday" id="friday" class="checkbox-custom" value="<?php echo $fri; ?>" <?php if($fri>0) echo "checked='checked'"; ?> />  
                                                    <label for="friday" class="checkbox-custom-label"><?php _e('The weekender (Friday)', 'profile'); ?> </label>
                                                </p>
                                                
                                                <p>
                                                    <input type="hidden" value="unchecked" name="buzz_hidden" />
                                                    <input type="checkbox" name="thebuzz" id="thebuzz" class="checkbox-custom" value="<?php echo $buzz; ?>" <?php if($buzz>0) echo "checked='checked'"; ?> />  
                                                    <label for="thebuzz" class="checkbox-custom-label"><?php _e('The buzz (special offers)', 'profile'); ?> </label>
                                                </p>
                                                
                                                <p>
                                                    <input type="hidden" value="unchecked" name="hkgo_hidden" />
                                                    <input type="checkbox" name="honeykidsgo" id="honeykidsgo" class="checkbox-custom" value="<?php echo $hkgo; ?>" <?php if($hkgo>0) echo "checked='checked'"; ?> />  
                                                    <label for="honeykidsgo" class="checkbox-custom-label"><?php _e('HoneyKidsGo', 'profile'); ?> </label>
                                                </p>
                                                
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="column small-12">
                                                <p class="form-submit">
                                                    <input name="updateuser" type="submit" id="updateuser" class="submit button pink-btn" value="<?php _e('Update', 'profile'); ?>" onsubmit="setTimeout(function () { window.location.reload(); }, 10)"/>
                                                    <?php wp_nonce_field( 'update-user' ) ?>
                                                    <input name="action" type="hidden" id="action" value="update-user" />
                                                </p><!-- .form-submit -->
                                            </div>
                                        </div>
                                    </form><!-- #adduser -->
                                    
                                <?php endif; ?>
                                </div><!-- .entry-content -->
                            </div>
                        
                        </div>
                        
                    </div><!-- .hentry .post -->
    			
			    					
			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->
    
    
     <script>
		var frm = jQuery('#updateuser');
		var email_input = '<?php echo $current_user->user_email ?>';
		var firstname = '<?php echo $current_user->first_name ?>';
		var lastname = '<?php echo $current_user->last_name ?>';
		var newsletter = 'FALSE';
		jQuery("#first-name").on("keyup keydown", function() {
		   firstname = this.value;
		});
		jQuery("#last-name").on("keyup keydown", function() {
		   lastname = this.value;
		});
		jQuery("#honeykids").change(function() {
			if (document.getElementById('honeykids').checked == true) {
				newsletter = 'TRUE';
			} else if (document.getElementById('honeykids').checked == false) {
				newsletter = 'FALSE';
			}
		});
		
		frm.submit(function (ev) {
			jQuery.ajax({
				type: frm.attr('method'),
				url: frm.attr('action'),
				data: frm.serialize(),
				success: function (data) {
					jQuery('body').prepend('<div class="login_overlay"></div>',100);
					jQuery('#update-success').fadeIn(500);
					setTimeout(function(){location.href="<?php the_permalink(); ?>"} , 2000);  
				}
			});
		
			ev.preventDefault();
		});
	</script>
    
    <div id="update-success">
        <h5>Profile Updated!</h5>
        <p class="green">Redirecting...</p>
    </div>

<?php get_footer(); ?>