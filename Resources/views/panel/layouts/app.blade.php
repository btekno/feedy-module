<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ config('feedy.assets.favicon') }}" type="image/png">
    <title>@yield('title') | {{ config('feedy.name') }}</title>

    <link href="{{ asset('assets/panel/libs/fontawesome-pro/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/panel/css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/feedy/css/panel.css') }}" rel="stylesheet" />

    @yield('css')

</head>
<body id="js-content">
    <div class="page">
        
        @yield('full-content')

        <div class="page-main">
          @include('feedy::panel.layouts.partials.header')
          
          @yield('content')

        </div>
        @include('feedy::panel.layouts.partials.footer')
    </div>

    <!-- Required scripts -->
   <script src="{{ asset('assets/panel/js/vendors/jquery-3.2.1.min.js') }}"></script>
   <script src="{{ asset('assets/panel/js/vendors/bootstrap.bundle.min.js') }}"></script>
   <script src="{{ asset('assets/panel/js/jscolor.min.js') }}"></script>
   <script src="{{ asset('assets/panel/js/clipboard.min.js') }}"></script>
   <script src="{{ asset('assets/panel/js/dashboard.js') }}"></script>

   @yield('js')

</body>
</html>