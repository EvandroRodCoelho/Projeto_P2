<!DOCTYPE html>
<html lang="pt-br">
    <head>
<<<<<<< HEAD:laravel-api/resources/views/templates/formPage.blade.php
        <base href='/'>
        <link rel="stylesheet" href="/css/styles.css">
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!--   Fonts   -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
        <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
=======
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
>>>>>>> 0e558089f461e26f39ec9b083483199154e61b02:laravel-api/resources/views/templates/template.blade.php

        {{-- bootstrap --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        
        <title>
            @yield('titlePage')
        </title>
<<<<<<< HEAD:laravel-api/resources/views/templates/formPage.blade.php
    </head>

    <body class="d-flex   h-100 flex-column bg-light">
        @yield('content')
    </body>
    
    <script src="/js/scripts.js"></script>
<html>
=======

        <!--  Fonts and icons -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">

        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/apple-icon.png') }}">
        <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}">

        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/paper-dashboard.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/demo/demo.css') }}">

    </head>

    <body class="">
        @auth
        <div class="wrapper ">
            <div class="sidebar" data-color="white" data-active-color="danger">
                <div class="logo">
                    <a class="simple-text logo-mini">
                    <div class="logo-image-small">
                        <img src="../../assets/img/logo-small.png">
                    </div>
                    </a>
                    <a> Faça seu pedido </a>
                </div>

                <div class="sidebar-wrapper">
                    <ul class="nav">
                        <li>
                            <a href="./dashboard.html">
                            <i class="nc-icon nc-bank"></i>
                            <p>Dashboard</p>
                            </a>
                        </li>
                        <li>
                            <a href="./icons.html">
                            <i class="nc-icon nc-diamond"></i>
                            <p>Meus Pedidos</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>


        <div class="main-panel">
            <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <div class="navbar-toggle">
                        <button type="button" class="navbar-toggler">
                            <span class="navbar-toggler-bar bar1"></span>
                            <span class="navbar-toggler-bar bar2"></span>
                            <span class="navbar-toggler-bar bar3"></span>
                        </button>
                        </div>
                        <a class="navbar-brand" href="javascript:;">Fármacia APP</a>
                    </div>

                    <button
                        class="navbar-toggler"
                        type="button"
                        data-toggle="collapse"
                        data-target="#navigation"
                        aria-controls="navigation-index"
                        aria-expanded="false"
                        aria-label="Toggle navigation"
                    >
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="navbar-nav">
                            <li class="nav-item btn-rotate dropdown">
                                <a
                                    class="nav-link dropdown-toggle"
                                    id="navbarDropdownMenuLink"
                                    data-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="false"
                                >
                                    <i class="nc-icon nc-settings-gear-65"></i>
                                    <p>
                                        <span class="d-lg-none d-md-block">Opções</span>
                                    </p>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Sair</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            @yield('content')
        </div>
        @endauth
    </body>
</html>
>>>>>>> 0e558089f461e26f39ec9b083483199154e61b02:laravel-api/resources/views/templates/template.blade.php
