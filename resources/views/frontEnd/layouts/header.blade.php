<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="overflow-auto">
    <head>
        <!-- Basic -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>@yield('title') | {{ settings("title") }}</title>

        <meta name="keywords" content="@yield('keywords')" />
        <meta name="description" content="@yield('description')">
        <meta name="author" content="aekod.com">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

        <link rel="shortcut icon" href="{{ asset(settings("favicon")) }}" type="image/x-icon">

        <!-- Web Fonts  -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:100,300,400,500,600,700,900%7COpen+Sans:300,400,600,700,800%7CPermanent+Marker" rel="stylesheet" type="text/css">

        <!-- Vendor CSS -->
        <link rel="stylesheet" href="{{asset("vendor/bootstrap/css/bootstrap.min.css")}}">
        <link rel="stylesheet" href="{{asset("vendor/font-awesome/css/fontawesome-all.min.css")}}">
        <link rel="stylesheet" href="{{asset("vendor/animate/animate.min.css")}}">
        <link rel="stylesheet" href="{{asset("vendor/linear-icons/css/linear-icons.min.css")}}">
        <link rel="stylesheet" href="{{asset("vendor/owl.carousel/assets/owl.carousel.min.css")}}">
        <link rel="stylesheet" href="{{asset("vendor/owl.carousel/assets/owl.theme.default.min.css")}}">
        <link rel="stylesheet" href="{{asset("vendor/magnific-popup/magnific-popup.min.css")}}">

        <!-- Theme CSS -->
        <link rel="stylesheet" href="{{asset("css/theme.css")}}">
        <link rel="stylesheet" href="{{asset("css/theme-elements.css")}}">

        <!-- Current Page CSS -->
        <link rel="stylesheet" href="{{asset("vendor/rs-plugin/css/settings.css")}}">
        <link rel="stylesheet" href="{{asset("vendor/rs-plugin/css/layers.css")}}">
        <link rel="stylesheet" href="{{asset("vendor/rs-plugin/css/navigation.css")}}">

        <!-- Skin CSS -->
        <link rel="stylesheet" href="{{asset("css/default.css")}}">

        <!-- Theme Custom CSS -->
        <link rel="stylesheet" href="{{asset("css/custom.css")}}">

        <!-- Head Libs -->
        <script src="{{asset("vendor/modernizr/modernizr.min.js")}}"></script>

        @yield('css')

    </head>
    <body class="overflow-auto">
        <div class="body">
            <header id="header">
                <div class="header-body">
                    <div class="header-top">
                        <div class="header-top-container container container-lg-custom">
                            <div class="header-row">
                                <div class="header-column justify-content-center">
                                    <ul class="header-top-social-icons social-icons social-icons-transparent social-icons-icon-dark social-icons-2">
                                        @if(!is_null(settings("instagram")))
                                            <li class="social-icons-instagram">
                                                <a href="https://www.instagram.com/{{ settings("instagram") }}" target="_blank" title="Instragram"><i class="fab fa-instagram"></i></a>
                                            </li>
                                        @endif
                                        @if(!is_null(settings("twitter")))
                                            <li class="social-icons-twitter">
                                                <a href="https://www.twitter.com/{{ settings("twitter") }}" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a>
                                            </li>
                                        @endif
                                        @if(!is_null(settings("facebook")))
                                            <li class="social-icons-facebook">
                                                <a href="https://www.facebook.com/{{ settings("facebook") }}" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                                            </li>
                                        @endif
                                        @if(!is_null(settings("email-address")))
                                            <li class="social-icons-email">
                                                <a href="mailto:{{ settings("email-address") }}" target="_blank" title="E-mail"><i class="fa fa-envelope"></i></a>
                                            </li>
                                        @endif
                                    </ul>
                                </div>
                                    @if(is_array(config("app.languages")))
                                    <a href="#" class="nav-link text-white dropdown-menu-toggle py-2" id="dropdownLanguage" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        {{__("general.lang-".app()->getLocale())}}	<i class="fas fa-angle-down fa-sm"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownLanguage" style="">
                                        @foreach(config("app.languages") as $lang)
                                        <li><a href="{{route("language", $lang)}}">{{__("general.lang-".$lang)}}</a></li>
                                        @endforeach
                                    </ul>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="header-container container">
                        <div class="header-row">
                            <div class="header-column justify-content-start">
                                <div class="header-logo border-left-0 px-4 px-lg-3 px-xl-4">
                                    <a href="{{ route("index") }}">
                                        <img alt="@yield('title') | {{ settings("title") }}" height="50" src="{{ asset(settings("logo")) }}">
                                    </a>
                                </div>
                            </div>
                            <div class="header-column justify-content-end w-100">
                                <div class="header-nav">
                                    <div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1">
                                        <nav class="collapse">
                                            <ul class="nav flex-column flex-lg-row" id="mainNav">
                                                <li>
                                                    <a href="{{ route("index") }}">
                                                        {{__("general.menu-home")}}
                                                    </a>
                                                </li>
                                                <li>
                                                    <a  href="{{ route("aboutUs") }}">
                                                        {{__("general.menu-about-us")}}
                                                    </a>
                                                </li>
                                                <li class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle" href="#">
                                                        {{__("general.menu-projects")}}
                                                        <i class="menu-arrow"></i></a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="{{ route("architecturalProjects") }}" class="dropdown-item">{{__("general.menu-architectural-project")}}</a></li>
                                                        <li><a href="{{ route("interiorDesignProjects") }}" class="dropdown-item">{{__("general.menu-interior-design-project")}}</a></li>
                                                        <li><a href="{{ route("applicationProjects") }}" class="dropdown-item">{{__("general.menu-application-projects")}}</a></li>
                                                    </ul>
                                                </li>
                                                <li class="">
                                                    <a class="" href="{{ route("contactUs") }}">
                                                        {{__("general.menu-contact-us")}}
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                                <button class="header-btn-collapse-nav mr-4" data-toggle="collapse" data-target=".header-nav-main nav">
                                    <span class="hamburguer">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </span>
                                    <span class="close">
                                        <span></span>
                                        <span></span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
