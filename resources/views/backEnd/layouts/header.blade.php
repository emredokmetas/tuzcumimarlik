<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="author" content="aekod.com">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield("title")</title>
    <link rel="shortcut icon" href="{{ asset(settings("favicon")) }}" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href={{asset("backend/app-assets/vendors/css/vendors.min.css")}}>
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href={{asset("backend/app-assets/css/bootstrap.css")}}>
    <link rel="stylesheet" type="text/css" href={{asset("backend/app-assets/css/bootstrap-extended.css")}}>
    <link rel="stylesheet" type="text/css" href={{asset("backend/app-assets/css/colors.css")}}>
    <link rel="stylesheet" type="text/css" href={{asset("backend/app-assets/css/components.css")}}>
    <link rel="stylesheet" type="text/css" href={{asset("backend/app-assets/css/themes/dark-layout.css")}}>
    <link rel="stylesheet" type="text/css" href={{asset("backend/app-assets/css/themes/semi-dark-layout.css")}}>
    <!-- END: Theme CSS-->


    <link rel="stylesheet" type="text/css" href="{{ asset("backEnd/app-assets/css/core/menu/menu-types/vertical-menu.min.css") }}">

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href={{asset("backend/assets/css/style.css")}}>
    <!-- END: Custom CSS-->

    @yield("css")

</head>
<body class="vertical-layout vertical-menu-modern semi-dark-layout 2-columns  navbar-sticky footer-static" data-open="click" data-menu="vertical-menu-modern" data-col="2-columns" data-layout="semi-dark-layout">
<!-- BEGIN: Header-->
<div class="header-navbar-shadow"></div>
<nav class="header-navbar main-header-navbar navbar-expand-lg navbar navbar-with-menu fixed-top bg-primary">
    <div class="navbar-wrapper">
        <div class="navbar-container content">
            <div class="navbar-collapse" id="navbar-mobile">
                <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                    <ul class="nav navbar-nav">
                        <li class="nav-item mobile-menu d-xl-none mr-auto">
                            <a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ficon bx bx-menu"></i></a>
                        </li>
                    </ul>
                </div>
                <ul class="nav navbar-nav float-right">
                    <li class="nav-item d-none d-lg-block">
                        <a class="nav-link nav-link-expand"><i class="ficon bx bx-fullscreen"></i></a>
                    </li>
                    <li class="dropdown dropdown-user nav-item">
                        <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                            <div class="user-nav d-sm-flex d-none">
                                <span class="user-name"></span>
                            </div>
                            <span>
                                    <img class="round" src="{{asset("backend/img/user-avatar.svg")}}" alt="avatar" height="40" width="40">
                                </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right pb-0">
                            <a class="dropdown-item" href="{{ route("admin.logout") }}"><i class="bx bx-power-off mr-50"></i> Çıkış</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<!-- END: Header-->

<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto">
                <a class="navbar-brand" href="{{ route("admin.index") }}">
                    <div class="brand-logo">
                        <img class="logo" src="{{ asset(settings("logo")) }}" style="height: 35px !important;" />
                    </div>
                </a>
            </li>
            <li class="nav-item nav-toggle">
                <a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse">
                    <i class="bx bx-x d-block d-xl-none font-medium-4 primary"></i>
                    <i class="toggle-icon bx bx-disc font-medium-4 d-none d-xl-block primary" data-ticon="bx-disc"></i>
                </a>
            </li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation" data-icon-style="lines">
            <li class=" navigation-header"><span>MENÜ</span></li>
            <li class=" nav-item">
                <a href="{{ route("admin.index") }}">
                    <i class="bx bxs-home"></i>
                    <span class="menu-title">Ana Sayfa</span>
                </a>
            </li>
            <li class=" nav-item has-sub">
                <a href="#">
                    <i class="bx bxs-school"></i>
                    <span class="menu-title">Projeler</span>
                </a>
                <ul class="menu-content" style="">
                    <li class="">
                        <a class="d-flex align-items-center" href="{{ route("admin.project.add") }}">
                            <i class="bx bx-right-arrow-alt"></i>
                            <span class="menu-item text-truncate">Ekle</span>
                        </a>
                    </li>
                    <li class="">
                        <a class="d-flex align-items-center" href="{{ route("admin.projects") }}">
                            <i class="bx bx-right-arrow-alt"></i>
                            <span class="menu-item text-truncate">Projeler</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<!-- END: Main Menu-->

<div class="app-content content">
    <div class="content-wrapper">
        <nav aria-label="breadcrumb" style="margin-top: 10px">
            <ol class="breadcrumb bg-white">
                <li class="breadcrumb-item"><a href="{{ route("admin.index") }}"><i class="bx bx-home"></i></a></li>
                <li class="breadcrumb-item active" aria-current="page">@yield("navbar")</li>
            </ol>
        </nav>
        <div class="content-body">
