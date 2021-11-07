<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.18.0/dist/bootstrap-table.min.css">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @livewireStyles

        <style>

        body{
            margin: 0;
            padding: 0;
            background-color:#2b2b2b;
        }

            @media(min-width: 992px) {
                .dropdown-menu .dropdown-toggle:after {
                    border-top: 0.3em solid transparent;
                    border-right: 0;
                    border-bottom: 0.3em solid transparent;
                    border-left: 0.3em solid;
                }
                .dropdown-menu .dropdown-menu {
                    margin-left: 0;
                    margin-right: 0;
                }
                .dropdown-menu li {
                    position: relative;
                }
                .nav-item .submenu {
                    display: none;
                    position: absolute;
                    left: 100%;
                    top: -7px;
                }
                .nav-item .submenu-left {
                    right: 100%;
                    left: auto;
                }
                .dropdown-menu > li:hover {
                    background-color: #f1f1f1
                }
                .dropdown-menu > li:hover > .submenu {
                    display: block;
                }
            }
            @media(max-width: 992px) {
                .dropdown-menu .dropdown-toggle:after {
                    border-top: 0.3em solid transparent;
                    border-right: 0;
                    border-bottom: 0.3em solid transparent;
                    border-left: 0.3em solid;
                }
                .dropdown-menu .dropdown-menu {
                    margin-left: 0;
                    margin-right: 0;
                }
                .dropdown-menu li {
                    position: relative;
                }
                .nav-item .submenu {
                    display: none;
                    position: flex;
                    left: 0;
                    top: 100%;
                }
                .nav-item .submenu-left {
                    right: 100%;
                    left: auto;
                }
                .dropdown-menu > li:hover {
                    background-color: #f1f1f1
                }
                .dropdown-menu > li:hover > .submenu {
                    display: block;
                }

            }
        </style>

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="min-h-screen">

            <!-- Page Heading -->
            @if (isset($header))
                <header class="shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Navbar -->

            @include('partials.navbar')

            <!-- Page Content -->
            <div class="row">
                <div class="col-lg-1"></div>
                  <div class="col-lg-10">
                    {{ $slot }}
                  </div>
                  <div class="col-lg-1"></div>
              </div>

        </div>

        @stack('modals')

        @livewireScripts
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-table@1.18.0/dist/bootstrap-table.min.js"></script>
    <script>

        // Prevent closing from click inside dropdown
    $(document).on('click', '.dropdown-menu', function (e) {
    e.stopPropagation();
    });

    // make it as accordion for smaller screens
    if ($(window).width() < 992) {
    $('.dropdown-menu a').click(function (e) {
    e.preventDefault();
    if ($(this).next('.submenu').length) {
    $(this).next('.submenu').toggle();
    }
    $('.dropdown').on('hide.bs.dropdown', function () {
    $(this).find('.submenu').hide();
    })
    });
    }
    </script>

    </body>
</html>
