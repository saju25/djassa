<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Djassa</title>
    <link rel="icon" type="image/x-icon" href="">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <!-- font family -->
    <link rel="shortcut icon" href="{{ asset('assets') }}/images/favicon.png" />
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/plugins.css">
    <!-- Bootstap CSS -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/bootstrap.min.css">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/style.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/responsive.css">
</head>

<body class="template-index belle template-index-belle">
    <div id="pre-loader">
        <img src="{{ asset('assets') }}/images/loader.gif" alt="Loading..." />
    </div>

    <!-- navbar section start  -->
    <div class="pageWrapper">
        @include('user.component.header')
        {{ $slot }}
        {{-- footer section --}}
        @include('user.component.footer')
    </div>
    <!-- login modal start  -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content p-3">
                <div class="modal-header">
                    <h2 class="modal-title" id="exampleModalLabel">{{ Lang::get('login.modal') }}</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body ">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-3 row">
                            <div>
                                <x-input-label class="col-form-label" for="loginname"
                                    :value="__('Email ou numéro de téléphone')" />
                            </div>
                            <div class="">
                                <x-text-input id="loginname" class="form-control" placeholder="Votre e-mail" type="text"
                                    name="loginname" :value="old('loginname')" required />
                            </div>
                        </div>

                        <div class="mb-3">
                            <div>
                                <x-input-label class="col-form-label" for="password"
                                    value="{{ Lang::get('login.page.password') }}" />
                            </div>

                            <div>
                                <x-text-input class="form-control password_log" placeholder="Mot de passe" id="password"
                                    type="password" name="password" />
                                <i onclick="myFunctionlog()" id="password_log" class="fa-regular fa-eye pas-eye"></i>
                            </div>
                        </div>
                        <x-input-error class="text-danger" :messages="$errors->get('password')" class="mt-2" />

                        <div class="mb-3 row">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="flex-1">
                                    <input id="remember_me" type="checkbox" class="checkbox-custom" name="remember">
                                    <label for="remember_me" class="checkbox-custom-label">{{
                                        Lang::get('login.page.rememberme') }}</label>
                                </div>
                                <div class="eltio_k2">
                                    <a href="{{ route('password.request') }}" class="theme-cl">{{
                                        Lang::get('login.page.lost.password') }}</a>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <div class="d-flex align-items-center justify-content-between">
                                <input class="w-100 btn btn-success" type="submit"
                                    value="{{ Lang::get('login.modal') }}">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <div class="d-flex align-items-center justify-content-center">
                                <span>{{ Lang::get('login.page.notamembertext') }} <span><a class="fw-bold register_btn"
                                            href="{{ route('register') }}">{{ Lang::get('login.page.registertext')
                                            }}</a></span></span>
                            </div>
                        </div>
                    </form>

                    <div class="social-login">
                        <a class="d-flex align-items-center justify-content-center bc btn-success mb-3 p-2"
                            href="{{ url('/login/google') }}" class="d-flex social-pd">
                            <span><i class="fa-brands fa-google"></i></span>
                            <span class="mx-3">{{ Lang::get('login.page.continuewithgoogletext') }}</span>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/js/all.min.js"></script>
    <!-- Including Jquery -->
    <script src="{{ asset('assets') }}/js/vendor/jquery-3.3.1.min.js"></script>
    <script src="{{ asset('assets') }}/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="{{ asset('assets') }}/js/vendor/jquery.cookie.js"></script>
    <script src="{{ asset('assets') }}/js/vendor/wow.min.js"></script>
    <!-- Including Javascript -->
    <script src="{{ asset('assets') }}/js/popper.min.js"></script>
    <script src="{{ asset('assets') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('assets') }}/js/plugins.js"></script>

    <script src="{{ asset('assets') }}/js/lazysizes.js"></script>
    <script src="{{ asset('assets') }}/js/main.js"></script>
    <!--For Newsletter Popup-->
    <script>
        jQuery(document).ready(function () {
            jQuery('.closepopup').on('click', function () {
                jQuery('#popup-container').fadeOut();
                jQuery('#modalOverly').fadeOut();
            });

            var visits = jQuery.cookie('visits') || 0;
            visits++;
            jQuery.cookie('visits', visits, { expires: 1, path: '/' });
            console.debug(jQuery.cookie('visits'));
            if (jQuery.cookie('visits') > 1) {
                jQuery('#modalOverly').hide();
                jQuery('#popup-container').hide();
            } else {
                var pageHeight = jQuery(document).height();
                jQuery('<div id="modalOverly"></div>').insertBefore('body');
                jQuery('#modalOverly').css("height", pageHeight);
                jQuery('#popup-container').show();
            }
            if (jQuery.cookie('noShowWelcome')) { jQuery('#popup-container').hide(); jQuery('#active-popup').hide(); }
        });

        jQuery(document).mouseup(function (e) {
            var container = jQuery('#popup-container');
            if (!container.is(e.target) && container.has(e.target).length === 0) {
                container.fadeOut();
                jQuery('#modalOverly').fadeIn(200);
                jQuery('#modalOverly').hide();
            }
        });
    </script>
    <!--End For Newsletter Popup-->


</body>

</html>