<!doctype html>

<html
    lang="en"
    class="light-style layout-wide customizer-hide"
    dir="ltr"
    data-theme="theme-default"
    data-assets-path="../../assets/"
    data-template="horizontal-menu-template">
<head>
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Gestion de compte - {{ config('app.name') }}</title>


    <link rel="icon" type="image/x-icon" href="{{ asset('/assets/img/favicon/favicon.ico') }}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&ampdisplay=swap"
        rel="stylesheet" />

    @vite(['resources/css/app.css'])

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('/assets/vendor/libs/node-waves/node-waves.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/vendor/libs/typeahead-js/typeahead.css') }}" />
    <!-- Vendor -->
    <link rel="stylesheet" href="{{ asset('/assets/vendor/libs/@form-validation/form-validation.css') }}" />

    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="{{ asset('/assets/vendor/css/pages/page-auth.css') }}" />

   @vite(['resources/css/app.css'])
</head>

<body>
<!-- Content -->

<div class="authentication-wrapper authentication-cover authentication-bg">

    <div class="authentication-inner row">
        <!-- /Left Text -->
        <div class="d-none d-lg-flex col-lg-7 p-0">
            <x-base.background-animated />
            <div class="auth-cover-bg auth-cover-bg-color d-flex justify-content-center align-items-center" style="background: url('{{ Storage::url('other/wall_login.svg') }}'); background-position: center; background-size: cover">

            </div>
        </div>
        <!-- /Left Text -->

        <!-- Login -->
        <div class="d-flex col-12 col-lg-5 align-items-center p-sm-5 p-4 z-1">
            <div class="w-px-600 mx-auto p-5 bg-white rounded-4">
                <!-- Logo -->
                <div class="app-brand mb-4">
                    <a href="{{ route('home') }}" class="app-brand-link gap-2">
                        <span class="app-brand-logo demo">
                          <img src="{{ Storage::url('services/2/logo-seul.png') }}" class="w-px-30" alt="">
                        </span>
                    </a>
                </div>
                <!-- /Logo -->
                <h3 class="mb-1">Bienvenu sur {{ config('app.name') }}! 👋</h3>
                <p class="mb-4">Veuillez vous connecter à votre compte et commencer l'aventure</p>

                <div class="d-flex flex-column justify-content-center">
                    <form action="{{ route('auth.setup-register.submit', [$provider, $email]) }}" method="POST">
                        @csrf
                        <x-form.input
                            name="password"
                            type="password"
                            required="true"
                            label="Définission du nouveau Mot de passe" />

                        <x-form.submit
                            text="Valider" />
                    </form>
                </div>
            </div>
        </div>
        <!-- /Login -->
    </div>
</div>

<!-- / Content -->

<!-- Core JS -->
@vite(['resources/js/plugin.js'])

<!-- Vendors JS -->
<script src="{{ asset('/assets/vendor/libs/@form-validation/popular.js') }}"></script>
<script src="{{ asset('/assets/vendor/libs/@form-validation/bootstrap5.js') }}"></script>
<script src="{{ asset('/assets/vendor/libs/@form-validation/auto-focus.js') }}"></script>

<!-- Main JS -->
<script src="{{ asset('/assets/js/main.js') }}"></script>

<!-- Page JS -->
<script src="{{ asset('/assets/js/pages-auth.js') }}"></script>
</body>
</html>
