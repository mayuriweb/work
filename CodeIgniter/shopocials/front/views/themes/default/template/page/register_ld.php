<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from themes.pixelstrap.com/multikart/LTR/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Feb 2019 10:54:11 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="multikart">
    <meta name="keywords" content="multikart">
    <meta name="author" content="multikart">
    <title>Multikart - Multi-purpopse E-commerce Html Template</title>
    <!-- CSS Links -->
<link rel="icon" href="<?php echo base_url();?>front/views/themes/default/img/images/favicon/1.png" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo base_url();?>front/views/themes/default/img/images/logos/favicon.png" type="image/x-icon">
<!--Google font-->
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
<!-- Icons -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>front/views/themes/default/css/fontawesome.css">
<!--Slick slider css-->
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>front/views/themes/default/css/slick.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>front/views/themes/default/css/slick-theme.css">
<!-- Animate icon -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>front/views/themes/default/css/animate.css">
<!-- Themify icon -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>front/views/themes/default/css/themify-icons.css">
<!-- Bootstrap css -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>front/views/themes/default/css/bootstrap.css">
<!-- Theme css -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>front/views/themes/default/css/color1.css" media="screen" id="color">
<!-- Custom CSS -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>front/views/themes/default/css/custom.css">
</head>
<body>

<!-- pre-loader start -->
<div class="loader-wrapper">
    <div class="loader"></div>
</div>
<!-- pre-loader end -->

<!-- header start -->
<?php echo Modules::run('header/header/index'); ?>
<!-- header end -->

<!--Start  About Section Start  -->

<!-- breadcrumb start -->
<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="page-title">
                    <h2>create account</h2></div>
            </div>
            <div class="col-sm-6">
                <nav aria-label="breadcrumb" class="theme-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">create account</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb End -->


<!--section start-->
<section class="register-page section-b-space">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3>create account</h3>
                <div class="theme-card">
                    <form class="theme-form">
                        <div class="form-row">
                            <div class="col-md-6">
                                <label for="email">First Name</label>
                                <input type="text" class="form-control" id="fname" placeholder="First Name" required="">
                            </div>
                            <div class="col-md-6">
                                <label for="review">Last Name</label>
                                <input type="password" class="form-control" id="lname" placeholder="Last Name" required="">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6">
                                <label for="email">email</label>
                                <input type="text" class="form-control" id="email" placeholder="Email" required="">
                            </div>
                            <div class="col-md-6">
                                <label for="review">Password</label>
                                <input type="password" class="form-control" id="review" placeholder="Enter your password" required="">
                            </div><a href="#" class="btn btn-solid">create Account</a></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Section ends-->
<!-- End About Section Start -->


<!--  logo section -->
<section class="section-b-space">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="slide-6 no-arrow">
                    <div>
                        <div class="logo-block">
                            <a href="#"><img src="assets/images/logos/1.png" alt=""></a>
                        </div>
                    </div>
                    <div>
                        <div class="logo-block">
                            <a href="#"><img src="assets/images/logos/2.png" alt=""></a>
                        </div>
                    </div>
                    <div>
                        <div class="logo-block">
                            <a href="#"><img src="assets/images/logos/3.png" alt=""></a>
                        </div>
                    </div>
                    <div>
                        <div class="logo-block">
                            <a href="#"><img src="assets/images/logos/4.png" alt=""></a>
                        </div>
                    </div>
                    <div>
                        <div class="logo-block">
                            <a href="#"><img src="assets/images/logos/5.png" alt=""></a>
                        </div>
                    </div>
                    <div>
                        <div class="logo-block">
                            <a href="#"><img src="assets/images/logos/6.png" alt=""></a>
                        </div>
                    </div>
                    <div>
                        <div class="logo-block">
                            <a href="#"><img src="assets/images/logos/7.png" alt=""></a>
                        </div>
                    </div>
                    <div>
                        <div class="logo-block">
                            <a href="#"><img src="assets/images/logos/8.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--  logo section end-->

<!-- footer -->
<?php echo Modules::run('footer/footer/index'); ?>
<!-- footer end -->

<!-- facebook chat section start -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js#xfbml=1&version=v2.12&autoLogAppEvents=1';
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- Your customer chat code -->
<div class="fb-customerchat"
     attribution=setup_tool
     page_id="2123438804574660"
     theme_color="#0084ff"
     logged_in_greeting="Hi! Welcome to PixelStrap Themes  How can we help you?"
     logged_out_greeting="Hi! Welcome to PixelStrap Themes  How can we help you?">
</div>
<!-- facebook chat section end -->


<!-- cart start -->
<!-- <div class="addcart_btm_popup" id="fixed_cart_icon">
    <a href="#" class="fixed_cart">
        <i class="ti-shopping-cart"></i>
    </a>
</div> -->
<!-- cart end -->


<!-- tap to top -->
<div class="tap-top top-cls">
    <div>
        <i class="fa fa-angle-double-up"></i>
    </div>
</div>
<!-- tap to top end -->

<!-- JSS Links -->
<script src="<?php echo base_url();?>front/views/themes/default/js/jquery-3.3.1.min.js" ></script>
<!-- fly cart ui jquery-->
<script src="<?php echo base_url();?>front/views/themes/default/js/jquery-ui.min.js"></script>
<!-- popper js-->
<script src="<?php echo base_url();?>front/views/themes/default/js/popper.min.js" ></script>
<!-- slick js-->
<script src="<?php echo base_url();?>front/views/themes/default/js/slick.js"></script>
<!-- menu js-->
<script src="<?php echo base_url();?>front/views/themes/default/js/menu.js"></script>
<!-- Bootstrap js-->
<script src="<?php echo base_url();?>front/views/themes/default/js/bootstrap.js" ></script>
<!-- Bootstrap Notification js-->
<script src="<?php echo base_url();?>front/views/themes/default/js/bootstrap-notify.min.js"></script>
<!-- Fly cart js-->
<script src="<?php echo base_url();?>front/views/themes/default/js/fly-cart.js" ></script>
<!-- Theme js-->
<script src="<?php echo base_url();?>front/views/themes/default/js/script.js" ></script>
<script>
    $(window).on('load',function(){
        $('#exampleModal').modal('show');
    });
    function openSearch() {
        document.getElementById("search-overlay").style.display = "block";
    }

    function closeSearch() {
        document.getElementById("search-overlay").style.display = "none";
    }
</script>
</body>
</html>