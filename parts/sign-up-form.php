<form id="login" class="ajax-auth" action="login" method="post">
    <div class="row">
        <div class="column text-center large-10 large-centered medium-12 small-12">
            <div class="login-logo text-center"><img src="<?php the_field('honeykids_login_logo', 'option'); ?>" /></div>
            <h4>Welcome to Honeykids!</h4>
            <p><em>Discover, save and share interesting stories on Honeykids.</em></p>
        </div>

        <div class="login-fb column small-12 text-center clearfix">
            <a href="http://honeykidsasia.com/wp-login.php?loginFacebook=1&redirect=http://honeykidsasia.com/my-profile” onclick=”window.location = \’siteurl/wp-login.php?loginFacebook=1&redirect=\’+window.location.href; return false;">
                <div class="fb-btn"><i class="fa fa-facebook-square" aria-hidden="true"></i>LOGIN VIA FACEBOOK</div>
            </a>
        </div>
        
        <div class="column small-12 or"><h6>OR</h6></div>
        
        <div class="column large-8 large-centered medium-12 small-12">
            <p class="status"></p>  
            <?php wp_nonce_field('ajax-login-nonce', 'security'); ?>  
            <input id="username" type="text" class="required" name="username" placeholder="Username or Email">
            <input id="password" type="password" class="required" name="password" placeholder="Password">
        </div>
        
        <div class="column large-8 large-centered medium-12 small-12">
            <p><em><a id="pop_forgot" >Forgot your password?</a></em></p>
        </div>
    
        <div class="column large-9 large-centered medium-12 small-12 text-center">
            <div class="login-captcha-cont"><div class="g-recaptcha" data-sitekey="6Lf2viYTAAAAAETjQMcbBiGOZrh6d6PQx9HOy5pJ" data-callback="recaptchaLogin" ></div></div>
            <p><input class="submit_button gray" type="submit" id="signin-btn" value="LOG IN" disabled="disabled"></p>
        </div>
        
        <div class="column small-12 text-center">
            <p><em>Don't have an account? <a id="pop_signup" href=""><u>Join here</u></a></em></p>
        </div>
    </div>
    <a class="close" href=""><i class="fa fa-times" aria-hidden="true"></i></a>    
</form>

<form id="register" class="ajax-auth"  action="register" method="post">
    <div class="row">
        <div class="column text-center large-10 large-centered medium-12 small-12">
            <div class="login-logo text-center"><img src="<?php the_field('honeykids_login_logo', 'option'); ?>" /></div>
            <h4>Welcome to Honeykids!</h4>
            <p><em>Discover, save and share interesting stories on Honeykids.</em></p>
        </div>

        <div class="login-fb column small-12 text-center">
            <a href="http://honeykidsasia.com/wp-login.php?loginFacebook=1&redirect=http://honeykidsasia.com/my-profile” onclick=”window.location = \’siteurl/wp-login.php?loginFacebook=1&redirect=\’+window.location.href; return false;">
                <div class="fb-btn"><i class="fa fa-facebook-square" aria-hidden="true"></i>LOGIN VIA FACEBOOK</div>
            </a>
        </div>

        <div class="column small-12 or"><h6>OR</h6></div>
        
        <div class="column large-12 large-centered medium-12 small-12">
            <p class="status"></p>
            <?php wp_nonce_field('ajax-register-nonce', 'signonsecurity'); ?> 
            
            <div class="row">
                <div class="columns large-6 medium-6 small-12">  
                    <input id="firstname" type="text" name="firstname" class="required" placeholder="First Name">
                </div>  
                <div class="columns large-6 medium-6 small-12"> 
                    <input id="lastname" type="text" name="lastname" class="required" placeholder="Last Name"> 
                </div>
                <div class="columns large-6 medium-6 small-12">      
                    <input id="signonname" type="text" name="signonname" class="required" placeholder="Username">
                </div>
                <div class="columns large-6 medium-6 small-12">  
                    <input id="email" type="text" class="required email" name="email" placeholder="Email">
                </div>
                <div class="columns large-6 medium-6 small-12">  
                    <input id="signonpassword" type="password" class="required" name="signonpassword" placeholder="Password">
                </div>
                <div class="columns large-6 medium-6 small-12">  
                    <input type="password" id="password2" class="required" name="password2" placeholder="Confirm Password">
                </div>
            </div>
        </div>
        <div class="column large-9 large-centered medium-12 small-12 text-center">
            <div class="signup-captcha-cont"></div>
            <input class="submit_button gray" type="submit" id="signup-btn" value="SIGNUP" disabled="disabled">
        </div>
        
        <div class="column large-8 large-centered medium-12 small-12 text-center">
            <p><em>Already have an account? <a id="pop_login" href=""><u>Sign in here</u></a></em></p>
        </div>
    </div>
    <a class="close" href=""><i class="fa fa-times" aria-hidden="true"></i></a>    
</form>

<form id="forgot_password" class="ajax-auth" action="forgot_password" method="post">    
    <div class="row">
        <div class="column text-center large-10 large-centered medium-12 small-12">
            <div class="login-logo text-center"><img src="<?php the_field('honeykids_login_logo', 'option'); ?>" /></div>
            <h4>FORGOT YOUR PASSWORD? NO PROBLEM.</h4>
            <p><em>Instructions for resetting your password will be sent to your email.</em></p>
        </div>
        
        <div class="column large-8 large-centered medium-12 small-12">
            <p>&nbsp;</p>
            <p class="status"></p>  
            <?php wp_nonce_field('ajax-forgot-nonce', 'forgotsecurity'); ?>  
            <input id="user_login" type="text" class="required" name="user_login" placeholder="Username or Email">
        </div>
        <div class="column large-9 large-centered medium-12 small-12 text-center ">
            <div class="forgot-captcha-cont"></div>
            <input class="submit_button gray" type="submit" id="forgot-btn" value="SUBMIT" disabled="disabled">
        </div>
        <div class="column large-8 large-centered medium-12 small-12 text-center">
            <p><em><a id="pop_login" href=""><u>Sign in here</u></a></em></p>
        </div>
        <a class="close" href=""><i class="fa fa-times" aria-hidden="true"></i></a>  
    </div>  
</form>