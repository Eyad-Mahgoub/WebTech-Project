<!--
=========================================================
* Material Dashboard 2 - v3.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard
* Copyright 2023 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>
            @yield('title')
        </title>
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <!--     Fonts and icons     -->
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
        <!-- Nucleo Icons -->
        <link href="{{ asset('admin/css/nucleo-icons.css') }}" rel="stylesheet" />
        <link href="{{ asset('admin/css/nucleo-svg.css') }}" rel="stylesheet" />
        <!-- Font Awesome Icons -->
        <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
        <!-- Material Icons -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
        <!-- CSS Files -->
        <link href="{{ asset('admin/css/material-dashboard.css') }}" rel="stylesheet" />
    </head>

    <body class="g-sidenav-show  bg-gray-200">
        @include('Admin.Layout.sidebar')
        <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
            <!-- Navbar -->
            @include('Admin.Layout.navbar')
            <!-- End Navbar -->
            <div class="container-fluid py-4">
                @yield('content')
            </div>
        </main>

        <!--   Core JS Files   -->
        <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
        <script src="{{ asset('admin/js/popper.min.js') }}"></script>
        <script src="{{ asset('admin/js/perfect-scrollbar.min.js') }}"></script>
        <script src="{{ asset('admin/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('admin/js/smooth-scrollbar.min.js') }}"></script>
        <script src="{{ asset('admin/js/material-dashboard.min.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        {{-- Sweet Alert CDN --}}
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        {{-- Custom JS --}}
        {{-- <script src="{{ asset('frontend/js/script.js') }}"></script> --}}
        @if (session('error_message'))
        <script>
            Swal.fire({
                icon: 'error',
                title: "{{ session('error_message') }}",
            });
        </script>
        @endif
        @if (session('message'))
        <script>
            Swal.fire({
                icon: 'success',
                title: "{{ session('message') }}",
            });
        </script>
        @endif
        @yield('script')
    </body>

</html>
