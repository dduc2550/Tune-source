<!DOCTYPE html><!--
    * CoreUI - Free Bootstrap Admin Template
    * @version v4.2.2
    * @link https://coreui.io/product/free-bootstrap-admin-template/
    * Copyright (c) 2023 creativeLabs Łukasz Holeczek
    * Licensed under MIT (https://github.com/coreui/coreui-free-bootstrap-admin-template/blob/main/LICENSE)
    --><!-- Breadcrumb-->
    <html lang="en">
      <head>
        <base href="{{ URL::to('/') }}">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
        <meta name="author" content="Łukasz Holeczek">
        <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
        <title>CoreUI Free Bootstrap Admin Template</title>
        <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('admin/assets/favicon/apple-icon-57x57.png') }}">
        <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('admin/assets/favicon/apple-icon-60x60.png') }}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('admin/assets/favicon/apple-icon-72x72.png') }}">
        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('admin/assets/favicon/apple-icon-76x76.png') }}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('admin/assets/favicon/apple-icon-114x114.png') }}">
        <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('admin/assets/favicon/apple-icon-120x120.png') }}">
        <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('admin/assets/favicon/apple-icon-144x144.png') }}">
        <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('admin/assets/favicon/apple-icon-152x152.png') }}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('admin/assets/favicon/apple-icon-180x180.png') }}">
        <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('admin/assets/favicon/android-icon-192x192.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('admin/assets/favicon/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('admin/assets/favicon/favicon-96x96.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('admin/assets/favicon/favicon-16x16.png') }}">
        <link rel="manifest" href="assets/favicon/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="{{ asset('admin/assets/favicon/ms-icon-144x144.png') }}">
        <meta name="theme-color" content="#ffffff">
        <!-- Vendors styles-->
        <link rel="stylesheet" href="{{ asset('admin/vendors/simplebar/css/simplebar.css') }}">
        <link rel="stylesheet" href="{{ asset('admin/css/vendors/simplebar.css') }}">
        <!-- Main styles for this application-->
        <link href="{{ asset('admin/css/style.css') }}" rel="stylesheet">
        <!-- We use those styles to show code examples, you should remove them in your application.-->
        <link href="{{ asset('admin/css/examples.css') }}"rel="stylesheet">
        <link href="{{ asset('admin/vendors/@coreui/chartjs/css/coreui-chartjs.css') }}" rel="stylesheet">
        @stack('stylesheet')
      </head>
      <body>

        @include('partials.sidebar')

        <div class="wrapper d-flex flex-column min-vh-100 bg-light">
          
            @include('partials.header')

          <div class="body flex-grow-1 px-3">
            <div class="container-lg">
              @yield('content')
            </div>
          </div>
          @include('partials.footer')
        </div>
        <!-- CoreUI and necessary plugins-->
        <script src="{{ asset(("admin/vendors/@coreui/coreui/js/coreui.bundle.min.js")) }}"></script>
        <script src="{{ asset(("admin/vendors/simplebar/js/simplebar.min.js")) }}"></script>
        <!-- Plugins and scripts required by this view-->

        {{-- <script src="{{ asset(("admin/vendors/chart.js/js/chart.min.js")) }}"></script>
        <script src="{{ asset(("admin/vendors/@coreui/chartjs/js/coreui-chartjs.js")) }}"></script>
        <script src="{{ asset(("admin/vendors/@coreui/utils/js/coreui-utils.js")) }}"></script>
        <script src="{{ asset(("admin/js/main.js")) }}"></script> --}}

        @stack('javascripts')
        <script>
        </script>
    
      </body>
    </html>