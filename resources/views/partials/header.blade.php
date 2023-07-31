<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Admin Dashboard</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <!-- Common Styles Starts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/main.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/structure.css" rel="stylesheet" type="text/css" />
    <link href="plugins/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" type="text/css" />
    <link href="plugins/highlight/styles/monokai-sublime.css" rel="stylesheet" type="text/css" />
    <!-- Common Styles Ends -->
    <!-- Common Icon Starts -->
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <!-- Common Icon Ends -->
    <!-- Page Level Plugin/Style Starts -->
    <link href="assets/css/loader.css" rel="stylesheet" type="text/css" />
    <link href="plugins/apex/apexcharts.css" rel="stylesheet" type="text/css">
    <link href="assets/css/dashboard/dashboard_3.css" rel="stylesheet" type="text/css" />
    <link href="plugins/flatpickr/flatpickr.css" rel="stylesheet" type="text/css">
    <link href="plugins/flatpickr/custom-flatpickr.css" rel="stylesheet" type="text/css">
    <link href="assets/css/elements/tooltip.css" rel="stylesheet" type="text/css" />
    <!-- Page Level Plugin/Style Ends -->
</head>

<body>
    <!-- Loader Starts -->
    <div id="load_screen">
        <div class="boxes">
            <div class="box">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
            <div class="box">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
            <div class="box">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
            <div class="box">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
        <p class="neptune-loader-heading">Neptune</p>
    </div>
    <!--  Loader Ends -->
    <!--  Navbar Starts  -->
    <div class="header-container fixed-top">
        <header class="header navbar navbar-expand-sm">
            <ul class="navbar-item flex-row ml-md-0 ml-auto pl-3">
                <li class="nav-item align-self-center search-animated">
                    <i class="las la-search toggle-search"></i>
                    <form class="form-inline search-full form-inline search" action="pages_search_result.html"
                        role="search">
                        <div class="search-bar">
                            <input type="text" class="form-control search-form-control  ml-lg-auto"
                                placeholder="Search here">
                        </div>
                    </form>
                </li>
                <li class="nav-item dropdown megamenu-dropdown d-none d-lg-flex">
                    <a href="javascript:void(0);" class="nav-link dropdown-toggle d-flex align-center text-primary"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Other Links <i class="las la-angle-down font-11 ml-1"></i>
                    </a>
                    <div class="dropdown-menu megamenu">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h5 class="font-17 mt-0">Applications</h5>
                                        <ul class="list-unstyled megamenu-list">
                                            <li class="font-15 mb-1"><a href="apps_ecommerce.html">Ecommerce</a></li>
                                            <li class="font-15 mb-1"><a href="apps_chat.html">Chat</a></li>
                                            <li class="font-15 mb-1"><a href="apps_mail.html">Email</a></li>
                                            <li class="font-15 mb-1"><a href="apps_file_manager.html">File Manager</a>
                                            </li>
                                            <li class="font-15 mb-1"><a href="apps_calendar.html">Calender</a></li>
                                            <li class="font-15 mb-1"><a href="apps_notes.html">Notes</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <h5 class="font-17 mt-0">Extra Pages</h5>
                                        <ul class="list-unstyled megamenu-list">
                                            <li class="font-15 mb-1"><a href="pages_contact_us.html">Contact Us</a></li>
                                            <li class="font-15 mb-1"><a href="pages_faq.html">FAQ</a></li>
                                            <li class="font-15 mb-1"><a href="pages_helpdesk.html">Helpdesk</a></li>
                                            <li class="font-15 mb-1"><a href="pages_pricing_2.html">Pricing</a></li>
                                            <li class="font-15 mb-1"><a href="pages_search_result.html">Search
                                                    Result</a></li>
                                            <li class="font-15 mb-1"><a href="pages_privacy_policy.html">Privacy
                                                    Policy</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="p-lg-1">
                                    <div class="row no-gutters">
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="assets/img/company-1.jpg" alt="slack">
                                                <span>Cube</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="assets/img/company-2.jpg" alt="Github">
                                                <span>HTech</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="assets/img/company-3.jpg" alt="dribbble">
                                                <span>Inovation</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row no-gutters">
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="assets/img/company-4.jpg" alt="bitbucket">
                                                <span>Circle</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="assets/img/company-5.jpg" alt="dropbox">
                                                <span>Techno</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="assets/img/company-6.jpg" alt="G Suite">
                                                <span>T Logy</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <ul class="navbar-item flex-row ml-md-auto">
                <li class="nav-item dropdown fullscreen-dropdown d-none d-lg-flex">
                    <a class="nav-link full-screen-mode" href="javascript:void(0);">
                        <i class="las la-compress" id="fullScreenIcon"></i>
                    </a>
                </li>
                <li class="nav-item dropdown language-dropdown">
                    <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="language-dropdown"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="las la-language"></i>
                    </a>
                    <div class="dropdown-menu position-absolute" aria-labelledby="language-dropdown">
                        <a class="dropdown-item d-flex" href="javascript:void(0);">
                            <img src="assets/img/flag/usa-flag.png" class="flag-width" alt="flag">
                            <span class="align-self-center">&nbsp;English</span>
                        </a>
                        <a class="dropdown-item d-flex" href="javascript:void(0);">
                            <img src="assets/img/flag/spain-flag.png" class="flag-width" alt="flag">
                            <span class="align-self-center">&nbsp;Spanish</span>
                        </a>
                        <a class="dropdown-item d-flex" href="javascript:void(0);">
                            <img src="assets/img/flag/france-flag.png" class="flag-width" alt="flag">
                            <span class="align-self-center">&nbsp;French</span>
                        </a>
                        <a class="dropdown-item d-flex" href="javascript:void(0);">
                            <img src="assets/img/flag/saudi-arabia-flag.png" class="flag-width" alt="flag">
                            <span class="align-self-center">&nbsp;Arabic</span>
                        </a>
                    </div>
                </li>
            </ul>
            <ul class="navbar-item flex-row">
                <li class="nav-item dropdown header-setting">
                    <a href="javascript:void(0);" class="nav-link dropdown-toggle rightbarCollapse"
                        data-placement="bottom">
                        <i class="las la-sliders-h"></i>
                    </a>
                </li>
            </ul>
        </header>
    </div>
