<!doctype html>

<html
    lang="en"
    class="light-style layout-menu-fixed layout-compact"
    dir="ltr"
    data-theme="theme-default"
    data-assets-path="../../assets/"
    data-template="horizontal-menu-template-starter">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>
    <title>Page 1 - Starter Kit | Vuexy - Bootstrap Admin Template</title>
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../../assets/img/favicon/favicon.ico"/>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&ampdisplay=swap"
        rel="stylesheet"/>

    <link rel="stylesheet" href="{{ asset('/assets/vendor/fonts/tabler-icons.css') }}"/>
    <!-- <link rel="stylesheet" href="../../assets/vendor/fonts/fontawesome.css" /> -->
    <!-- <link rel="stylesheet" href="../../assets/vendor/fonts/flag-icons.css" /> -->

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('/assets/vendor/css/rtl/core.css') }}" class="template-customizer-core-css"/>
    <link rel="stylesheet" href="{{ asset('/assets/vendor/css/rtl/theme-default.css') }}" class="template-customizer-theme-css"/>
    <link rel="stylesheet" href="{{ asset('/assets/css/demo.css') }}"/>
    @yield("styles")
    @stack("styles")
    @livewireStyles

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="{{ asset('/assets/vendor/js/helpers.js') }}"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="{{ asset('/assets/vendor/js/template-customizer.js') }}"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('/assets/js/config.js') }}"></script>
</head>

<body>
<!-- Layout wrapper -->
<div class="layout-wrapper layout-navbar-full layout-horizontal layout-without-menu">
    <div class="layout-container">
        @include("layouts.includes.header")

        <!-- Layout container -->
        <div class="layout-page">
            <!-- Content wrapper -->
            <div class="content-wrapper">
                @include("layouts.includes.menu")

                <!-- Content -->

                <div class="container-xxl flex-grow-1 container-p-y">
                    @isset($slot)
                        {{ $slot }}
                    @else
                        @yield("content")
                    @endif
                </div>
                <!--/ Content -->

                <!-- Footer -->
                <footer class="content-footer footer bg-footer-theme">
                    <div class="container-xxl">
                        <div
                            class="footer-container d-flex align-items-center justify-content-between py-2 flex-md-row flex-column">
                            <div>
                                ©
                                <script>
                                    document.write(new Date().getFullYear());
                                </script>
                                , made with ❤️ by
                                <a href="https://pixinvent.com" target="_blank"
                                   class="footer-link text-primary fw-medium"
                                >Pixinvent</a
                                >
                            </div>
                            <div class="d-none d-lg-inline-block">

                            </div>
                        </div>
                    </div>
                </footer>
                <!-- / Footer -->

                <div class="content-backdrop fade"></div>
            </div>
            <!--/ Content wrapper -->
        </div>

        <!--/ Layout container -->
    </div>
</div>

<!-- Overlay -->
<div class="layout-overlay layout-menu-toggle"></div>

<!-- Drag Target Area To SlideIn Menu On Small Screens -->
<div class="drag-target"></div>

<!--/ Layout wrapper -->

<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->

<script src="{{ asset('/assets/vendor/libs/jquery/jquery.js') }}"></script>
<script src="{{ asset('/assets/vendor/libs/popper/popper.js') }}"></script>
<script src="{{ asset('/assets/vendor/js/bootstrap.js') }}"></script>
<script src="{{ asset('/assets/vendor/libs/node-waves/node-waves.js') }}"></script>
<script src="{{ asset('/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
<script src="{{ asset('/assets/vendor/libs/hammer/hammer.js') }}"></script>

<script src="{{ asset('/assets/vendor/js/menu.js') }}"></script>

<!-- endbuild -->

<!-- Vendors JS -->

<!-- Main JS -->
<script src="{{ asset('/assets/js/main.js') }}"></script>

<!-- Page JS -->
@livewireScripts
@yield("scripts")
@stack("scripts")
</body>
</html>
