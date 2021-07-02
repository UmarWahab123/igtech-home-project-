<!DOCTYPE html>
<html lang="en">

    <!-- begin::Head -->
    <head>
        <meta charset="utf-8" />
        <title>Login</title>
        <meta name="description" content="Latest updates and statistic charts">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

        <!--begin::Web font -->
        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
        <script>
            WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
        </script>

        <!--end::Web font -->

         @include('layout.css')
       
        <link rel="shortcut icon" href="../../../assets/demo/default/media/img/logo/favicon.ico" />
    </head>

    <!-- end::Head -->

    <!-- begin::Body -->
    <body class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">

        <!-- begin:: Page -->
        <div class="m-grid m-grid--hor m-grid--root m-page">
            <div class="m-grid__item m-grid__item--fluid m-grid m-grid--hor m-login m-login--signin m-login--2 m-login-2--skin-3" id="m_login" style="background-image: url({{ asset('images/loginbg.jpg')}});">
                <div class="m-grid__item m-grid__item--fluid    m-login__wrapper">
                    <div class="m-login__container">
                        <div class="m-login__logo">
                            {{-- <a href="#">
                                <img width="150px" src="https://personalitypath.com/wp-content/uploads/Personality-Path-logo-white.svg">
                            </a> --}}
                        </div>
                        <div class="m-login__signin">
                            <div class="m-login__head">
                                <h3 class="m-login__title">Sign In</h3>
                            </div>
                    <form id="form-submit" class="m-login__form m-form" action="{{ url('/login') }}" method="post">
                        {{ csrf_field() }}
                                 @if(Session::has('login_msg'))
                                    <span class="help-block">
                                        <strong>
                                            {{ Session::get('login_msg') }}
                                        </strong>
                                    </span>
                                    <?php
                                    Session::forget('login_msg'); 
                                    Session::forget('message'); 
                                     ?>
                                @endif

                         <div class="form-group m-form__group">
                                    <input class="form-control m-input" type="email" placeholder="Email" name="email"  value="{{ old('email') }}" required>
                                </div>
                         <div class="form-group m-form__group">
                                    <input class="form-control m-input m-login__form-input--last" type="password" placeholder="Password" name="password" required>
                                </div>
                                <div class="row m-login__form-sub">
                                    <div class="col m--align-left m-login__form-left">
                                        <label class="m-checkbox  m-checkbox--light">
                                            <input type="checkbox" name="remember"> Remember me
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="m-login__form-action">
                                    <button id="m_login_signin_submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air  m-login__btn">Sign In</button>
                                </div>

                                    <!-- <input type="submit" id="m_login_signin_submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air  m-login__btn" value="Sign In"> -->
                            </form>
                        </div>
                        
                       
                    </div>
                </div>
            </div>
        </div>

        <!-- end:: Page -->

         <!-- @include('layout.js') -->
       
    </body>

    <!-- end::Body -->
</html>