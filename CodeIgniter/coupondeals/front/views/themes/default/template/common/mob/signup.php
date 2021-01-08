<!DOCTYPE html>
<html>


<head>
    <title>Save TakaTak</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="<?=site_url('front/views/themes/default');?>/asset/css/font.css"/>
    <link rel="stylesheet" href="<?=site_url('front/views/themes/default');?>/asset/css/font-awesome.css"/>
    <link rel="stylesheet" href="<?=site_url('front/views/themes/default');?>/asset/css/normalize.css"/>
    <!--css plugin-->
    <link rel="stylesheet" href="<?=site_url('front/views/themes/default');?>/asset/css/flexslider.css"/>
    <link rel="stylesheet" href="<?=site_url('front/views/themes/default');?>/asset/css/jquery.nouislider.css"/>
    <link rel="stylesheet" href="<?=site_url('front/views/themes/default');?>/asset/css/jquery.popupcommon.css"/>

    <link rel="stylesheet" href="<?=site_url('front/views/themes/default');?>/asset/css/style.css"/>
   
    <link rel="stylesheet" href="<?=site_url('front/views/themes/default');?>/asset/css/res-menu.css"/>
    <link rel="stylesheet" href="<?=site_url('front/views/themes/default');?>/asset/css/responsive.css"/>
   
   
   
   
   
   
    <link href="<?=site_url('front/views/themes/default');?>/asset/css/bootstrap.min.css" rel="stylesheet">

       
        <link href="<?=site_url('front/views/themes/default');?>/asset/css/custom.css" rel="stylesheet">

      
        <link rel="stylesheet" href="<?=site_url('front/views/themes/default');?>/asset/font-awesome-4.0.3/css/font-awesome.min.css">


       

      <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
       
    
</head>
<body class="">

<div class="container-page">
    <div class="mp-pusher" id="mp-pusher">
      <?php echo Modules::run('header/header/index'); ?> 
   <?php echo Modules::run('menu/menu/index'); ?>
        <div class="grid_frame page-content">
            <div class="container_grid">
            <!-- message-->
            <?php echo Modules::run('messages/message/index'); ?>
                <div class="mod-register">
                    <h3 class="rs title-mod">Hello Shoppers! Welcome to Savetakatak.com</h3>
                    <div class="desc-reg">Sign up for free and get exclusive access to members-only savings, rewards and special promotions from Savetakatak.com. Enter in an email and a password or sign up with Facebook.</div>
                    <div class="wrap-form-reg clearfix">
                        <?php 
                        $attributes = array('class' => 'form-horizontal', 'id' => 'RegisForm');

                        echo form_open_multipart('login/signupmob', $attributes);  ?>
                            <div class="left-form">
                            <label class="wrap-txt" for="sys_email">
                                    <input class="input-txt" id="sys_email" type="text" name="username" placeholder="your name"/>
                                </label>
                                <label class="wrap-txt" for="sys_email">
                                    <input class="input-txt" id="sys_email" type="email" name="email" placeholder="your@mail.com"/>
                                </label>
                                <label class="wrap-txt" for="sys_pass">
                                    <input class="input-txt" id="sys_pass" type="password" name="password" placeholder="password please!"/>
                                </label>
                                <label class="wrap-txt" for="sys_pass">
                                    <input class="input-txt" id="sys_pass" type="password" name="cpassword" placeholder="confirm password please!"/>
                                </label>
                                <!--<label class="wrap-check" for="sys_chk_news">
                                    <input id="sys_chk_news" class="input-chk" type="checkbox"/> Send me the weekly Couponday.com’s offers.
                                    <i class="icon iUncheck"></i>
                                </label>-->
                                <label class="wrap-check" for="sys_chk_agree">
                                    <input id="sys_chk_agree" class="icon iUncheck" type="checkbox" name="agree" value="yes"/> I agree to the <a href="#">Terms of Use</a> and <a href="#">Privacy Policy</a>.
                                  
                                </label>
                            </div>
                            <div class="right-connect">
                                <button class="btn-flat yellow btn-submit-reg" type="submit">Create an account</button>
                                <div class="sep-connect">
                                    <span>Or</span>
                                </div>
                                <div class="grp-connect">
                                    <p class="rs">Sign up using your account on:</p>
                                    <a class="btn-flat fb" href="<?= site_url('loginfb') ?>">Facebook</a>
                                    <a class="btn-flat gg" href="<?= $authUrl ?>">Google</a>
                                </div>
                            </div>
                        </form>
                    </div>
                    <p class="rs wrap-link-back">
                        <a href="<?=site_url('login/moblogin');?>" class="link-back">
                            <i class="pick-r"></i>
                            Back to login
                        </a>
                    </p>
                </div><!--end: .mod-register -->
            </div>
        </div>
         <?php echo Modules::run('footer/footer/index'); ?> </div>
    </div>
</div>

<script src="<?=site_url('front/views/themes/default');?>/asset/js/bootstrap.min.js"></script>


        <!-- LOOK THE DOCUMENTATION FOR MORE INFORMATIONS -->
        <script type="text/javascript">

            var revapi;

            jQuery(document).ready(function() {
                "use strict";
                revapi = jQuery('.tp-banner').revolution(
                        {
                            delay: 15000,
                            startwidth: 1200,
                            startheight: 278,
                            hideThumbs: 10,
                            fullWidth: "on"
                        });

            });	//ready

        </script>
<script type="text/javascript" src="<?=site_url('front/views/themes/default');?>/asset/js/jquery-1.10.2.js"></script>
<script type="text/javascript" src="<?=site_url('front/views/themes/default');?>/asset/js/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="<?=site_url('front/views/themes/default');?>/asset/js/jquery.nouislider.js"></script>
<script type="text/javascript" src="<?=site_url('front/views/themes/default');?>/asset/js/jquery.popupcommon.js"></script>
<script type="text/javascript" src="<?=site_url('front/views/themes/default');?>/asset/js/html5lightbox.js"></script>

<!--//js for responsive menu-->
<script type="text/javascript" src="<?=site_url('front/views/themes/default');?>/asset/js/modernizr.custom.js"></script>
<script type="text/javascript" src="<?=site_url('front/views/themes/default');?>/asset/js/classie.js"></script>
<script type="text/javascript" src="<?=site_url('front/views/themes/default');?>/asset/js/mlpushmenu.js"></script>

<script type="text/javascript" src="<?=site_url('front/views/themes/default');?>/asset/js/script.js"></script>
</body>

</html>