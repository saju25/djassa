<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!-- app -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Djassa</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets') }}/images/tilelogo60.png">
   <link rel="shortcut icon" href="{{ asset('assets') }}/images/favicon.png" />
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/plugins.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/fondawasom-all.min.css">

  @stack('styles')
    <!-- Bootstap CSS -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/bootstrap.min.css">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/style.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/responsive.css">

</head>

<body class="template-index belle template-index-belle">
   <div id="pre-loader">
        <img width="50" height="50" src="{{ asset('assets') }}/images/tilelogo60.png" alt="Loading..." />
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
  <script src="{{ asset('assets') }}/js/costom.js"></script>
<!-- font awesome -->
   <script src="{{ asset('assets') }}/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="{{ asset('assets') }}/js/vendor/jquery.cookie.js"></script>
    <script src="{{ asset('assets') }}/js/vendor/wow.min.js"></script>
    <!-- Including Javascript -->
    <script src="{{ asset('assets') }}/js/popper.min.js"></script>
    <script src="{{ asset('assets') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('assets') }}/js/plugins.js"></script>
     <script src="{{ asset('assets') }}/js/lazysizes.js"></script>
    <script src="{{ asset('assets') }}/js/main.js"></script>
    <script src="{{ asset('assets') }}/js/fondawasom-all.min.js"></script>


         {{-- sweetalert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    @stack('script')
</body>

</html>
