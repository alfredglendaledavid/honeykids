jQuery(document).ready(function($){$('#pop_signup').live('click',function(e){formToFadeOut=$('form#login');formToFadeOut2=$('form#forgot_password');formtoFadeIn=$('form#register');if($(this).attr('id')=='pop_signup'){formToFadeOut=$('form#login');formToFadeOut2=$('form#forgot_password');formtoFadeIn=$('form#register');}formToFadeOut.fadeOut(500,function(){jQuery('.g-recaptcha').detach().appendTo('.signup-captcha-cont');formToFadeOut2.fadeOut();formtoFadeIn.fadeIn();})
return false;});$('#pop_login').live('click',function(e){formToFadeOut=$('form#register');formToFadeOut2=$('form#forgot_password');formtoFadeIn=$('form#login');if($(this).attr('id')=='pop_login'){formToFadeOut=$('form#register');formToFadeOut2=$('form#forgot_password');formtoFadeIn=$('form#login');}formToFadeOut.fadeOut(500,function(){jQuery('.g-recaptcha').detach().appendTo('.login-captcha-cont');formToFadeOut2.fadeOut();formtoFadeIn.fadeIn();})
return false;});$('#pop_forgot').click(function(){formToFadeOut=$('form#login');formToFadeOut2=$('form#register');formtoFadeIn=$('form#forgot_password');formToFadeOut.fadeOut(500,function(){jQuery('.g-recaptcha').detach().appendTo('.forgot-captcha-cont');formToFadeOut2.fadeOut();formtoFadeIn.fadeIn();})
return false;});$(document).on('click','.login_overlay, .close',function(){$('form#login, form#register, form#forgot_password').fadeOut(500,function(){$('.login_overlay').remove();});return false;});$("body").on("click","#show_login, #show_signup",function(e){$('body').prepend('<div class="login_overlay"></div>');if($(this).attr('id')=='show_login')$('form#login').fadeIn(500);else
$('form#register').fadeIn(500);e.preventDefault();});$('#signup-btn').on('click',function(e){var signup_email=$('#email').val();_btn.trackAccountSignup(signup_email,{'newsletter_honeykidsasia':'TRUE','first_name':$('#firstname').val(),'last_name':$('#lastname').val(),});});$('form#register').on('submit',function(e){if(!$(this).valid())return false;$('p.status',this).show().html(ajax_auth_object.loadingmessage);action='ajaxregister';username=$('#signonname').val();password=$('#signonpassword').val();firstname=$('#firstname').val();lastname=$('#lastname').val();email=$('#email').val();security=$('#signonsecurity').val();ctrl=$(this);$.ajax({type:'POST',dataType:'json',url:ajax_auth_object.ajaxurl,data:{'action':action,'username':username,'password':password,'firstname':firstname,'lastname':lastname,'email':email,'security':security},success:function(data){$('p.status',ctrl).html(data.message);if(data.loggedin==true){document.location.href=ajax_auth_object.redirecturl;}}});e.preventDefault();});$('form#login').on('submit',function(e){if(!$(this).valid())return false;$('p.status',this).show().html(ajax_auth_object.loadingmessage);action='ajaxlogin';username=$('form#login #username').val();password=$('form#login #password').val();email='';security=$('form#login #security').val();ctrl=$(this);$.ajax({type:'POST',dataType:'json',url:ajax_auth_object.ajaxurl,data:{'action':action,'username':username,'password':password,'email':email,'security':security},success:function(data){$('p.status',ctrl).html(data.message);if(data.loggedin==true){document.location.href=ajax_auth_object.redirecturl;}}});e.preventDefault();});$('form#forgot_password').on('submit',function(e){if(!$(this).valid())return false;$('p.status',this).show().html(ajax_auth_object.loadingmessage);ctrl=$(this);$.ajax({type:'POST',dataType:'json',url:ajax_auth_object.ajaxurl,data:{'action':'ajaxforgotpassword','user_login':$('#user_login').val(),'security':$('#forgotsecurity').val(),},success:function(data){$('p.status',ctrl).html(data.message);}});e.preventDefault();return false;});if(jQuery("#register").length)jQuery("#register").validate({rules:{password2:{equalTo:'#signonpassword'}}});else if(jQuery("#login").length)jQuery("#login").validate();if(jQuery('#forgot_password').length)jQuery('#forgot_password').validate();});