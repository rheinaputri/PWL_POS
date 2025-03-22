<!DOCTYPE html>
<html lang="en">

<head>
    <!--  Head -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Judul Halaman -->
    <title>{{ config('app.name', 'PWL Laravel Starter Code') }}</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Tema AdminLTE -->
    <link rel="stylesheet" href="{{ asset('adminlte/dist/css/adminlte.min.css') }}">
    <!--  Head -->
</head>

<body class="hold-transition sidebar-mini">
    <!--  Wrapper -->
    <div class="wrapper">

        <!-- Navbar -->
        @include('layouts.header')
        <!--  Navbar -->

        <!-- Sidebar -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Logo Brand -->
            <a href="{{ url('/') }}" class="brand-link">
                <img src="{{ asset('adminlte/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">PWL - Starter Code</span>
            </a>
            
            <!-- Sidebar Konten -->
            @include('layouts.sidebar')
        </aside>
        <!--  Sidebar -->

        <!-- Content Wrapper -->
        <div class="content-wrapper">
            
            <!-- Breadcrumb / Header Konten -->
            @include('layouts.breadcrumb')

            <!-- Main Content -->
            <section class="content">
                @yield('content')
            </section>
            <!--  Main Content -->
        </div>
        <!--  Content Wrapper -->

        <!-- Footer -->
        @include('layouts.footer')
        <!--  Footer -->
    </div>
    <!--  Wrapper -->

    <!-- Scripts -->
    <!-- jQuery -->
    <script src="{{ asset('adminlte/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('adminlte/dist/js/adminlte.min.js') }}"></script>
    <!-- AdminLTE Demo (Opsional) -->
    <script src="{{ asset('adminlte/dist/js/demo.js') }}"></script>
    <!--  Scripts -->
</body>

</html>
