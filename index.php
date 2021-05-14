<!DOCTYPE html>
<html lang="en" >
    <!-- begin::Head -->
    <head>
        <meta charset="utf-8" />    
        <title>
            DemoProject  | Test
        </title>
        <meta name="description" content="Latest updates and statistic charts">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!--begin::Web font -->
        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
        <script>
            WebFont.load({
                google: {"families": ["Poppins:300,400,500,600,700", "Roboto:300,400,500,600,700"]},
                active: function () {
                    sessionStorage.fonts = true;
                }
            });
        </script>
        <!--end::Web font -->

        <!--begin::Base Styles -->
        <style>
            .leftpad{
                padding-left: 4px !important;
            }
            @media(min-width: 1200px){
                #comodoimg{margin-right: -30%;}
            }
            @media (max-width: 992px){
                .m-grid.m-grid--hor-tablet-and-mobile.m-grid--tablet-and-mobile>.m-grid__item.m-grid__item--order-tablet-and-mobile-1 {
                    order: 2 !important;
                    padding-left: 1rem !important;
                    padding-right: 1rem !important;
                }
                .m-grid__item m-grid__item--order-tablet-and-mobile-2 m-login__aside{
                    padding-left: 0px !important;
                    padding-right: 0px !important;
                }
            }

            /* Change the white to any color ;) */ 
            input:-webkit-autofill { -webkit-box-shadow: 0 0 0 30px white inset; }
            input:-webkit-autofill { -webkit-text-fill-color: #9496a0 !important; }
            m-stack__item m-stack__item--fluid
            div.swal-text{
                padding-right: 20px;
                padding-left: 20px;
                text-align: center !important;
            }
            .swal-title{
                font-size: 18px !important;
            }
            .btn-warning {  
                color: #111;
                background-color: #36a3f7 !important;
                border-color: #36a3f7 !important;    
            }
            .btn-outline-warning.m-btn--air, .btn-warning.m-btn--air, .m-btn--gradient-from-warning.m-btn--air{
                box-shadow: 0 5px 10px 2px #00c5dc ! important;    
            }
              

        </style>
        <link href="metronic/assets/vendors/base/vendors.bundle.css" rel="stylesheet" type="text/css" />
        <link href="metronic/assets/demo/default/base/style.bundle.css" rel="stylesheet" type="text/css" />
      <!--  <link rel="shortcut icon" href="metronic/assets/demo/default/media/img/logo/favicon.ico" />-->


        <!--end::Base Styles -->
    </head>
    <!-- end::Head -->
    <!-- end::Body -->
    <body class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"  >

        <!-- begin:: Page -->
        <div class="m-grid m-grid--hor m-grid--root m-page">
            <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-grid--tablet-and-mobile m-grid--hor-tablet-and-mobile m-login m-login--1 m-login--singin" id="m_login">
                <div class="m-grid__item m-grid__item--order-tablet-and-mobile-2 m-login__aside" style="background-image: url(metronic/assets/app/media/img/bg/bg-login-left.png);">
                    <div class="m-stack m-stack--hor m-stack--desktop">
                        <div class="m-stack__item m-stack__item--fluid">
                            <div class="m-login__wrapper" style="padding-top:25%">
                                <div class="m-login__logo" style="margin-bottom:2rem;">
                                    <a href="#" target="_blank">
                                        <img src="images/icon_logo.png" style="height: 100px;">      
                                    </a>
                                </div>
                                <div class="m-login__signin">
                                    <div class="m-login__head">
                                        <h3 class="m-login__title">
                                            Sign In
                                        </h3>
                                    </div>
                                    <form class="m-login__form m-form" name="loginform" id="loginform" action="login_authentication.php"   method="post" style="margin-top:2rem;">
                                        
                                        <div class="m-alert m-alert--outline alert alert-danger alert-dismissible" role="alert" style="display:none">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
                                                <span> Invalid Username or Password</span>    
                                            </div>
                                        
                                        <div class="form-group m-form__group"> 
                                            <input class="form-control m-input" type="text" placeholder="Username" name="username" autocomplete="off" required>
                                        </div>
                                        <div class="form-group m-form__group">
                                            <input class="form-control m-input m-login__form-input--last" type="password" placeholder="Password" name="password" required>
                                        </div>
                                        <div class="row m-login__form-sub">
<!--                                            <div class="col m--align-left">
                                                <label class="m-checkbox m-checkbox--focus">
                                                    <input type="checkbox" name="remember">
                                                    Remember me
                                                    <span></span>
                                                </label>
                                            </div>-->
                                            <div class="col m--align-left">
                                                <a href="javascript:;" id="m_login_forget_password" class="m-link">
                                                    Forgot Password ?
                                                </a>
                                            </div>
                                        </div>
                                        <div class="m-login__form-action" style="margin:2rem 0 2rem 0">
                                            <button id="m_login_signin_submit" class="btn btn-warning m-btn m-btn--pill m-btn--custom m-btn--air" id="m-login__SignInEmail_Submit">
                                                Sign In
                                            </button>
                                        </div>
                                    </form>
                                </div>
                                
                                <div class="m-login__forget-password">
                                    <div class="m-login__head">
                                        <h3 class="m-login__title">
                                            Forgotten Password ?
                                        </h3>
                                        <div class="m-login__desc">
                                            Enter Your Email To Recover Your Password 
                                        </div>
                                    </div>
                                    
                                    <form class="m-login__form m-form">
                                        <div class="form-group m-form__group">
                                            <input class="form-control m-input" type="text" placeholder="Email" name="f_email" id="f_email" autocomplete="off">
                                        </div>
                                        <div class="m-login__form-action">
                                            <button type="button" onclick="forgotpassword();"  class="btn btn-warning m-btn m-btn--pill m-btn--custom m-btn--air">
                                                Send
                                            </button>
                                            <button id="m_login_forget_password_cancel" class="btn btn-outline-primary m-btn m-btn--pill m-btn--custom">
                                                Back
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="m-grid__item m-grid__item--fluid m-grid m-grid--center m-grid--hor m-grid__item--order-tablet-and-mobile-1	m-login__content" style="background-image: url(metronic/assets/app/media/img/bg/bg-4.jpg);text-align: center;padding-top: 0px;padding-bottom: 0px;">

                    <div class="m-login__logo" style="margin-bottom:3rem;margin-top:3rem;">
                        <a href="#" target="_blank">
                            <img src="images/icon_logo.png" style="height: 100px;">    
                        </a>
                    </div>
                    <div class="m-grid__item m-grid__item--middle">
                        <!--                                                <h6 class="m-login__welcome" style="font-size:1.6rem;margin-bottom: 1rem;">
                                                                                Hyperlocal Delivery Platform
                                                                        </h6>-->
                        <p class="m-login__msg" style="margin-bottom: 1.8rem; font-size:1.3rem;">
                            Crack Your Exams Easily.
                        </p>
                    </div>
                    <div class="m-grid__item m-grid__item--middle">
                        <!--                                                <h6 class="m-login__welcome" style="font-size:1.6rem;margin-bottom: 1rem;">
                                                                                Plug and Play Integration
                                                                        </h6>-->
                        <p class="m-login__msg" style="font-size:1.3rem;">
                            The Apps is Also Available in Android.
                        </p>
                    </div>

                    
                </div>
            </div>

        </div>
        <!-- end:: Page -->
        <!--begin::Base Scripts -->
        <script src="metronic/assets/vendors/base/vendors.bundle.js" type="text/javascript"></script>
        <script src="metronic/assets/demo/default/base/scripts.bundle.js" type="text/javascript"></script>

        <!--end::Base Scripts -->   
        <!--begin::Page Snippets -->
        <script src="metronic/assets/demo/default/custom/components/forms/widgets/sweetalert.min.js" type="text/javascript"></script>
        <script src="js/login.js" type="text/javascript"></script>
        
        <!--end::Page Snippets -->
        <script type="text/javascript">
            $( document ).ready(function() {
                var invalid='<?php echo $_GET['type']?>'; 
                if(invalid!='' && invalid=='invalid'){  
                    $('.alert-dismissible').show();                   
                } else {  
                    $('.alert-dismissible').hide();  
                }
            });
            </script>
        
        <script type="text/javascript">
        validateE = $('form[id="loginform"]').validate({
          focusInvalid: true,  
            rules: {
            username: {
                required: !0,
                noSpace: true
            },
            password: {
                required: !0,
                noSpace: true
            }

        },
         messages: {
            username: {
                required: 'Username required',
                noSpace: 'Space is not required'
            },
            password: {
                required: 'Password is required',
                noSpace: 'Space is not required'
            },
        },
            errorPlacement: function (error, element) { 
                    error.insertAfter(element);  
            },
                submitHandler: function(form) {
        form.submit();
    }
    });
        </script>
        
    </body>
    <!-- end::Body -->
</html>
