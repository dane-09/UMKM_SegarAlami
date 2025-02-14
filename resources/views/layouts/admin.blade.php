<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Landing Page')</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/images/logos/favicon.png') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/styles.min.css') }}" />
</head>

<body>

    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
        <!-- Sidebar -->
        @include('components.sidebar')

        <!-- Page Content -->
        <div class="body-wrapper">
          <!-- Topbar -->
          @include('components.topbar')

          <!-- Main Content -->
          <div class="container-fluid">
            @yield('content')
          </div>
        </div>
      </div>

    <script src="{{ asset('assets/lib/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/lib/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/sidebarmenu.js') }}"></script>
    <script src="{{ asset('assets/js/app.min.js') }}"></script>
    <script src="{{ asset('assets/lib/apexcharts/dist/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/lib/simplebar/dist/simplebar.js') }}"></script>
    <script src="{{ asset('assets/js/dashboard.js') }}"></script>



</body>

</html>
