<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Djassa</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('user') }}/img/WhatsApp.png">
      <!-- dropify -->
     <link rel="stylesheet" type="text/css" href="https://jeremyfagis.github.io/dropify/dist/css/dropify.min.css">

    <!-- font awesome -->
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



    <!-- Including Jquery -->
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

 <!-- font awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/js/all.min.js"></script>
    <script src="{{ asset('assets') }}/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="{{ asset('assets') }}/js/vendor/jquery.cookie.js"></script>
    <script src="{{ asset('assets') }}/js/vendor/wow.min.js"></script>
    <!-- Including Javascript -->
    <script src="{{ asset('assets') }}/js/popper.min.js"></script>
    <script src="{{ asset('assets') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('assets') }}/js/plugins.js"></script>
    <script src="{{ asset('assets') }}/js/dropify.js"></script>

    <script src="{{ asset('assets') }}/js/lazysizes.js"></script>
    <script src="{{ asset('assets') }}/js/main.js"></script>

        {{-- sweetalert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    @stack('script')
</body>

</html>
