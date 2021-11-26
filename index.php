<!DOCTYPE html>

<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="MOD medical">
    <meta name="keywords" content="medical">
    <meta name="author" content="Mod">
    <title>სამედიცინო</title>
    <?php require_once 'links/header-links.php';?>

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu 2-columns   fixed-navbar" data-open="click" data-menu="vertical-menu"
    data-col="2-columns">

    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar-expand-md navbar navbar-with-menu fixed-top navbar-semi-dark navbar-shadow">
        <div class="navbar-wrapper">
            <div class="navbar-header">
                <ul class="nav navbar-nav flex-row">
                    <li class="nav-item mobile-menu d-md-none mr-auto"><a
                            class="nav-link nav-menu-main menu-toggle hidden-xs" onclick="prevent(event)" href="#"><i
                                class="feather icon-menu font-large-1"></i></a></li>
                    <li class="nav-item"><a class="navbar-brand" href="#" onclick="prevent(event)"><img
                                class="brand-logo" alt="stack admin logo" src="app-assets/images/logo/logo.png">
                        </a></li>
                    <li class="nav-item d-md-none"><a class="nav-link open-navbar-container" onclick="prevent(event)"
                            data-toggle="collapse" data-target="#navbar-mobile"><i class="fa fa-ellipsis-v"></i></a>
                    </li>
                </ul>
            </div>
            <div class="navbar-container content">
                <div class="collapse navbar-collapse" id="navbar-mobile">
                    <ul class="nav navbar-nav mr-auto float-left">
                        <li class="nav-item d-none d-md-block" id="shrink-logo"><a
                                class="nav-link nav-menu-main menu-toggle hidden-xs" id="checkShrink" href="#"><i
                                    class="fa fa-bars"></i></a></li>

                        <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"
                                onclick="prevent(event)"><i class="fa fa-window-maximize"></i></a></li>

                    </ul>
                    <ul class="nav navbar-nav float-right">


                        <li class="dropdown dropdown-user nav-item"><a
                                class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                                <div class="avatar avatar-online"><img
                                        src="app-assets/images/portrait/small/avatar-s-27.png" alt="avatar"><i></i>
                                </div><span class="user-name">მომხმარებელი</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i class="fa fa-power-off"></i> გამოსვლა</a>
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
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

                <li class="navigation-header"><span>მენიუ</span><i class=" " data-toggle="tooltip"
                        data-placement="right" data-original-title="ნავიგაცია"></i>
                </li>



                <li class=" nav-item" id="histories" onclick="getHistory(this.id)"><a href="#"
                        onclick="prevent(event)"><i class="fa fa-history "></i><span
                            class="menu-title">ისტორიები</span></a>
                </li>
                <li class="nav-item" id="visits" onclick="getVisit(this.id)"><a href="#" onclick="prevent(event)"><i
                            class="fa fa-user-md"></i><span class="menu-title" id="visits-link">სამედიცინო
                            ვიზიტები</span></a>
                </li>
                <li class=" nav-item"><a href="#"><i class="fa fa-h-square"></i><span
                            class="menu-title">იმუნიზაცია</span></a>
                    <ul class="menu-content">
                        <li id="require_id" class="nav-item" onclick="getRequire(this.id)"><a class="menu-item"
                                onclick="prevent(event)" id="thisID" href="#">მოთხოვნები</a>
                        </li>
                        <li class="nav-item" id="finished_id" onclick="getFinishedImmunization(this.id)"><a
                                class="menu-item" onclick="prevent(event)" href="#">დასრულებული იმუნიზაცია</a>
                        </li>

                    </ul>
                </li>
                <li class=" nav-item"><a href="#" id="lab_new" onclick="prevent(event)"><i
                            class="fa fa-hospital-o"></i><span class="menu-title">ლაბორატორია</span></a>
                    <ul class="menu-content">
                        <li class="nav-item" id="lab-require" onclick="getLabRequire(this.id)"><a class="menu-item"
                                onclick="prevent(event)" href="#">მოთხოვნები</a>
                        </li>
                        <li class="nav-item" id="lab-finished" onclick="getLabFinished(this.id)"><a class="menu-item"
                                onclick="prevent(event)" href="#" data-toggle="tooltip" data-placement="right"
                                data-original-title="დასრულებული ლაბორატორიული ტესტი">დასრულებული ლაბორატორიული
                                ტესტი</a>
                        </li>

                    </ul>
                </li>

                <li class=" nav-item"><a href="#"><i class="fa fa-heartbeat"></i><span
                            class="menu-title">პროცედურები</span></a>
                    <ul class="menu-content">
                        <li class="nav-item" id="procedure-require" onclick="getProcedureRequire(this.id)"><a
                                class="menu-item" onclick="prevent(event)" href="#">მოთხოვნები</a>
                        </li>
                        <li class="nav-item" id="procedure-finished" onclick="getProcedureFinished(this.id)"><a
                                class="menu-item" onclick="prevent(event)" href="#">დასრულებული</a>
                        </li>

                    </ul>
                </li>
                <!--
                <li class=" nav-item" id="user-info" onclick="VisitUserInfoTop(this.id)"><a href="#"
                        onclick="prevent(event)"><i class="fa fa-bar-chart"></i><span
                            class="menu-title">ანგარიშგება</span></a>
                </li>
-->







            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">

            <div class="content-body">
                <!-- Description -->
                <section id="description" class="card">

                    <div class="card-content">
                        <div class="card-body" id="top-content">

                        </div>
                    </div>
                </section>
                <!--/ Description -->
                <!-- CSS Classes -->
                <section id="css-classes" class="card">
                    <div id="main-load-div">
                        <div id="spinner-div" class="spinner-border text-primary" role="status">
                            <span class="sr-only">Loading...</span>
                        </div>
                    </div>
                    <div class="card-content">
                        <div class="card-body card-dashboard" id="bottom-content">

                        </div>
                    </div>
                </section>
                <!--/ CSS Classes -->

            </div>
        </div>
    </div>
    <script>

    </script>
    <!-- END: Content-->
    <!-- BEGIN: Page JS-->
    <?php require_once 'links/footer-links.php';?>
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>