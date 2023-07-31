@extends('partials.app')
@section('content')

    <!--  Main Container Starts  -->
   

        <!--  Content Area Starts  -->
        <div id="content" class="main-content">
            <!--  Navbar Starts / Breadcrumb Area  -->
            <div class="sub-header-container">
                <header class="header navbar navbar-expand-sm">
                    <ul class="navbar-nav flex-row">
                        <li>
                            <div class="page-header">
                                <nav class="breadcrumb-one" aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboards</a></li>
                                        <li class="breadcrumb-item active" aria-current="page"><span>Dashboard 3</span></li>
                                    </ol>
                                </nav>
                            </div>
                        </li>
                    </ul>
                    <ul class="navbar-nav d-flex align-center ml-auto right-side-filter">
                        <li class="nav-item more-dropdown">
                            <div class="input-group input-group-sm select-date-range">
                                <input id="rangeCalendarFlatpickr" class="form-control flatpickr flatpickr-input active"
                                    type="text" placeholder="Date Range">
                            </div>
                        </li>
                        <li class="ml-3">
                            <p class="current-time" id="currentTime"></p>
                            <p class="current-date" id="currentDate"></p>
                        </li>
                    </ul>
                </header>
            </div>
            <!--  Navbar Ends / Breadcrumb Area  -->
            <!-- Main Body Starts -->
            <div class="layout-px-spacing">
                <div class="row layout-top-spacing">
                    <!-- 4 Areas -->
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 layout-spacing">
                        <div class="widget 4-areas">
                            <div class="f-100">
                                <div class="card-box">
                                    <i class="las la-info-circle text-muted float-right bs-tooltip" data-toggle="tooltip"
                                        data-placement="bottom" title="" data-original-title="More Info"></i>
                                    <h6 class="mt-0 font-16">Profit Status</h6>
                                    <h2 class="text-primary my-3 text-center">
                                        $<span class="s-counter2 s-counter">710</span>
                                    </h2>
                                    <p class="text-muted mb-0">Income: $22506
                                        <span class="float-right">
                                            <i class="las la-angle-up text-success-teal mr-1"></i>10.25%
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 layout-spacing">
                        <div class="widget 4-areas">
                            <div class="f-100">
                                <div class="card-box">
                                    <i class="las la-info-circle text-muted float-right bs-tooltip" data-toggle="tooltip"
                                        data-placement="bottom" title="" data-original-title="More Info"></i>
                                    <h6 class="mt-0 font-16">Total Sales</h6>
                                    <h2 class="text-primary my-3 text-center">
                                        $<span class="s-counter3 s-counter">510</span>
                                    </h2>
                                    <p class="text-muted mb-0">This Month: $506
                                        <span class="float-right">
                                            <i class="las la-angle-down text-danger mr-1"></i>5.00%
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 layout-spacing">
                        <div class="widget 4-areas">
                            <div class="f-100">
                                <div class="card-box">
                                    <i class="las la-info-circle text-muted float-right bs-tooltip" data-toggle="tooltip"
                                        data-placement="bottom" title="" data-original-title="More Info"></i>
                                    <h6 class="mt-0 font-16">New Users</h6>
                                    <h2 class="text-primary my-3 text-center">
                                        <span class="s-counter4 s-counter">223</span>K
                                    </h2>
                                    <p class="text-muted mb-0">Total: 9.4M
                                        <span class="float-right">
                                            <i class="las la-angle-up text-success-teal mr-1"></i>15.30%
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 layout-spacing">
                        <div class="widget 4-areas">
                            <div class="f-100">
                                <div class="card-box">
                                    <i class="las la-info-circle text-muted float-right bs-tooltip" data-toggle="tooltip"
                                        data-placement="bottom" title="" data-original-title="More Info"></i>
                                    <h6 class="mt-0 font-16">Orders</h6>
                                    <h2 class="text-primary my-3 text-center">
                                        <span class="s-counter5 s-counter">302</span>
                                    </h2>
                                    <p class="text-muted mb-0">Total: 3.2K
                                        <span class="float-right">
                                            <i class="las la-angle-up text-success-teal mr-1"></i>2.30%
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 4 Areas Ends -->
                    <!-- Revenue -->
                    <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 col-12 layout-spacing">
                        <div class="widget widget-chart-one">
                            <div class="widget-heading">
                                <h5 class="">Revenue Comparison</h5>
                                <ul class="tabs tab-pills">
                                    <li>
                                        <div class="dropdown  custom-dropdown-icon">
                                            <a class="dropdown-toggle" href="#" role="button" id="customDropdown"
                                                data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false"><span>Options</span> <i
                                                    class="las la-angle-down"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="customDropdown">
                                                <a class="dropdown-item" data-value="Settings"
                                                    href="javascript:void(0);">Quarterly</a>
                                                <a class="dropdown-item" data-value="Settings"
                                                    href="javascript:void(0);">Half Yearly</a>
                                                <a class="dropdown-item" data-value="Mail"
                                                    href="javascript:void(0);">Mail</a>
                                                <a class="dropdown-item" data-value="Print"
                                                    href="javascript:void(0);">Print</a>
                                                <a class="dropdown-item" data-value="Download"
                                                    href="javascript:void(0);">Download</a>
                                                <a class="dropdown-item" data-value="Share"
                                                    href="javascript:void(0);">Share</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="widget-content">
                                <div class="tabs tab-content">
                                    <div id="content_1" class="tabcontent">
                                        <div id="revenue"></div>
                                        <div class="row mt-3">
                                            <div class="col-md-4">
                                                <div class="widget-rounded-circle card-box">
                                                    <div class="row">
                                                        <div class="col-4 pt-1">
                                                            <div class="avatar-sm rounded-circle bg-primary text-center">
                                                                <i class="las la-chart-line pt-1 font-25"></i>
                                                            </div>
                                                        </div>
                                                        <div class="col-8 pl-0">
                                                            <div class="text-left">
                                                                <h6 class="mt-1 mb-0">$<span
                                                                        data-plugin="counterup">58,947</span></h6>
                                                                <p class="text-muted mb-1 text-truncate">Total Sales</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="widget-rounded-circle card-box">
                                                    <div class="row">
                                                        <div class="col-4 pt-1">
                                                            <div class="avatar-sm rounded-circle bg-success text-center">
                                                                <i class="las la-file-invoice-dollar pt-1 font-25"></i>
                                                            </div>
                                                        </div>
                                                        <div class="col-8 pl-0">
                                                            <div class="text-left">
                                                                <h6 class="mt-1 mb-0">$<span
                                                                        data-plugin="counterup">45,458</span></h6>
                                                                <p class="text-muted mb-1 text-truncate">Total Revenue</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="widget-rounded-circle card-box">
                                                    <div class="row">
                                                        <div class="col-4 pt-1">
                                                            <div class="avatar-sm rounded-circle bg-danger text-center">
                                                                <i class="las la-bullseye pt-1 font-25"></i>
                                                            </div>
                                                        </div>
                                                        <div class="col-8 pl-0">
                                                            <div class="text-left">
                                                                <h6 class="mt-1 mb-0">$<span
                                                                        data-plugin="counterup">58,000</span></h6>
                                                                <p class="text-muted mb-1 text-truncate">Target Revenue</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Revenue Ends-->
                    <!-- Target vs Actual -->
                    <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12 layout-spacing">
                        <div class="widget widget-chart-one">
                            <div class="widget-heading">
                                <h5 class="">Target vs Actual</h5>
                            </div>
                            <div class="widget-content">
                                <div id="targetvsactual" class=""></div>
                                <div class="row mt-0 text-center">
                                    <div class="col-4">
                                        <p class="text-muted font-15 mb-1 text-truncate">Target</p>
                                        <h4><i class="fe-arrow-down text-danger mr-1"></i>$3.8k</h4>
                                    </div>
                                    <div class="col-4">
                                        <p class="text-muted font-15 mb-1 text-truncate">Last week</p>
                                        <h4><i class="fe-arrow-up text-success mr-1"></i>$1.1k</h4>
                                    </div>
                                    <div class="col-4">
                                        <p class="text-muted font-15 mb-1 text-truncate">Last Month</p>
                                        <h4><i class="fe-arrow-down text-danger mr-1"></i>$25k</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Target vs Actual Ends-->
                    <!-- Earnings -->
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
                        <div class="widget widget-activity-four earnings">
                            <div class="widget-heading">
                                <h5>Earnings</h5>
                                <p>JAN,20 - JUL,20</p>
                            </div>
                            <div class="widget-content">
                                <div class="earning-details mb-3">
                                    <h2 class="mb-1">
                                        <span>$4295.36</span>
                                        <i class="las la-arrow-up text-success-teal"></i>
                                    </h2>
                                    <span class="text-muted">Total Earnings</span>
                                </div>
                                <div class="earnings-container">
                                    <div id="earnings"></div>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <button class="btn btn-sm btn-info mr-2">View All</button>
                                    <button class="btn btn-sm btn-danger">Share</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Earnings Ends-->
                    <!-- Product Carousel -->
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing product-carousel">
                        <div class="product-carousel-inner">
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active m"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="d-block w-100" src="assets/img/1.jpg" alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="assets/img/2.jpg" alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="assets/img/3.jpg" alt="Third slide">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                    data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                            <a class="add-product-plus">
                                <i class="las la-plus"></i>
                            </a>
                        </div>
                        <div class="widget card-body">
                            <h4 class="card-title">Our Products</h4>
                            <p>This is a general sub title which can be used as product description or other description.
                            </p>
                            <div>
                                <span class="badge bg-light-primary mr-2">Sales</span>
                                <span class="badge bg-light-success mr-2">Design</span>
                                <span class="badge bg-light-warning mr-2">Developer</span>
                            </div>
                        </div>
                    </div>
                    <!-- Product Carousel Ends-->
                    <!-- Small Profile -->
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing small-profile">
                        <div class="widget widget-chart-one">
                            <div class="d-flex justify-content-end mb-4">
                                <span class="badge bg-light-danger mr-2">Designer</span>
                            </div>
                            <div class="text-center mb-4">
                                <img src="assets/img/profile-21.jpg" alt="Avatar"
                                    class="img-thumbnail rounded-circle mb-3">
                                <h5 class="mb-0 stronger">Oliver Murphy</h5>
                                <a class="text-primary" href="#">@oliver_murphy</a>
                                <div class="d-flex justify-content-center align-items-center mt-4">
                                    <div class="dash-followers mr-4">
                                        <div class="d-flex justify-content-center align-items-center">
                                            <button type="button" class="btn bg-light-secondary px-2">
                                                <i class="lar la-user"></i>
                                            </button>
                                            <div class="ml-2">
                                                <h5 class="mb-0">365k</h5>
                                                <span class="grey">Followers</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dash-ratings">
                                        <div class="d-flex justify-content-center align-items-center">
                                            <button type="button" class="btn bg-light-secondary px-2">
                                                <i class="las la-star"></i>
                                            </button>
                                            <div class="ml-2">
                                                <h5 class="mb-0">4.7</h5>
                                                <span class="grey">Ratings</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h6 class="mt-4">
                                <span>Today's Earnings</span>
                                <small class="ml-1">$25k</small>
                            </h6>
                            <div class="progress mb-0">
                                <div role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"
                                    class="progress-bar bg-light-primary text-primary font-11 strong" style="width: 30%;">
                                    30%</div>
                                <div role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"
                                    class="progress-bar bg-light-success text-success-teal font-11 strong"
                                    style="width: 20%;">20%</div>
                                <div role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"
                                    class="progress-bar bg-light-info text-info font-11 strong" style="width: 35%;">35%
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Small Profile Ends -->
                    <!-- Wallet Balance -->
                    <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                        <div class="widget widget-chart-one wallet-balance">
                            <div class="widget-heading mb-2">
                                <h5 class="">Wallet Balance</h5>
                                <select class="custom-select custom-select-sm ml-2 ">
                                    <option value="1">January</option>
                                    <option value="2">February</option>
                                    <option value="3">March</option>
                                    <option value="4">April</option>
                                </select>
                            </div>
                            <div class="widget-content">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="mt-4">
                                            <p>Available Balance</p>
                                            <h4>$1,212.00</h4>
                                            <p class="text-muted mb-4"> + 123.00 ( 9.2 % )
                                                <i class="las la-arrow-up text-success-teal"></i>
                                            </p>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div>
                                                        <p class="mb-2">Income</p>
                                                        <h5>$6,302</h5>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div>
                                                        <p class="mb-2">Expense</p>
                                                        <h5>$9,204</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-4">
                                                <a class="btn btn-primary btn-sm" href="/dashboard-crypto">View more <i
                                                        class="mdi mdi-arrow-right ml-1"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="wallet-balance-container">
                                            <div id="walletBalance" class=""></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="align-self-center">
                                            <div class="mt-4 pt-2">
                                                <p class="mb-2 text-success-teal">
                                                    <i class="las la-square-full"></i> Income
                                                </p>
                                                <h5>$180
                                                    <span class="text-muted font-11 light">(75%) for the month of
                                                        JAN</span>
                                                </h5>
                                            </div>
                                            <div class="mt-4 pt-2">
                                                <p class="mb-2 text-warning">
                                                    <i class="las la-square-full"></i> Referral
                                                </p>
                                                <h5>$162
                                                    <span class="text-muted font-11 light">(67%) for the month of
                                                        JAN</span>
                                                </h5>
                                            </div>
                                            <div class="mt-4 pt-2">
                                                <p class="mb-2 text-danger">
                                                    <i class="las la-square-full"></i> Expense
                                                </p>
                                                <h5>$200
                                                    <span class="text-muted font-11 light">(83%) for the month of
                                                        JAN</span>
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Wallet Balance Ends -->
                    <!-- User Registration Types -->
                    <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                        <div class="widget widget-activity-four">
                            <div class="widget-heading">
                                <h5 class="text-center">User Registration Types</h5>
                            </div>
                            <div class="widget-content">
                                <div id="registration-types"></div>
                            </div>
                        </div>
                    </div>
                    <!-- User Registration Types Ends-->
                    <!-- 3 Product -->
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 layout-spacing">
                        <div class="widget widget-chart-one wallet-balance bg-light-warning mt-5">
                            <div class="card-content">
                                <div class="card-img overlap text-center">
                                    <img src="assets/img/apple-desktop.png" alt="apple" height="150">
                                </div>
                                <div class="card-body pb-0">
                                    <h4 class="card-title text-warning">Newest Arrival</h4>
                                    <p class="m-0 text-warning">Amazing product with max performance and fast processor</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 layout-spacing">
                        <div class="widget widget-chart-one wallet-balance bg-light-info mt-5">
                            <div class="card-content">
                                <div class="card-img overlap text-center">
                                    <img src="assets/img/apple-phone.png" alt="apple" height="150">
                                </div>
                                <div class="card-body pb-0">
                                    <h4 class="card-title text-primary">Most Popular</h4>
                                    <p class="m-0 text-primary">Best phone in the market. Most popular among youth</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 layout-spacing">
                        <div class="widget widget-chart-one wallet-balance bg-light-danger mt-5">
                            <div class="card-content">
                                <div class="card-img overlap text-center">
                                    <img src="assets/img/apple-watch.png" alt="apple" height="150">
                                </div>
                                <div class="card-body pb-0">
                                    <h4 class="card-title text-danger">Hot Trending</h4>
                                    <p class="m-0 text-danger">Latest technology with heart rate sensor and speedometer.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 3 Product Ends -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                        <div class="widget dashboard-table">
                            <div class="widget-heading">
                                <h5 class="">Top Selling Products</h5>
                                <div class="dropdown custom-dropdown-icon">
                                    <a class="font-17 mr-3 pointer"><i class="las la-sync-alt"></i></a>
                                    <a class="dropdown-toggle" href="#" role="button" id="customDropdown"
                                        data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false"><span>Options</span> <i class="las la-angle-down"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="customDropdown"
                                        style="will-change: transform;">
                                        <a class="dropdown-item" data-value="Mail" href="javascript:void(0);">Mail</a>
                                        <a class="dropdown-item" data-value="Print" href="javascript:void(0);">Print</a>
                                        <a class="dropdown-item" data-value="Download"
                                            href="javascript:void(0);">Download</a>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <div class="th-content">Product Info</div>
                                                </th>
                                                <th>
                                                    <div class="th-content">Price</div>
                                                </th>
                                                <th>
                                                    <div class="th-content">Quantity</div>
                                                </th>
                                                <th>
                                                    <div class="th-content">Amount</div>
                                                </th>
                                                <th>
                                                    <div class="th-content">User Rating</div>
                                                </th>
                                                <th>
                                                    <div class="th-content">Action</div>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    Zen 2389 Mobile
                                                </td>
                                                <td>$999</td>
                                                <td>58</td>
                                                <td>$12,989</td>
                                                <td>
                                                    <div class="d-flex align-center">
                                                        5 <img src="assets/img/star.png" class="avatar-xxs ml-2"
                                                            alt="star">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex">
                                                        <a href="javascript:void(0);"
                                                            class="bs-tooltip font-20 text-muted" title="View"><i
                                                                class="las la-eye"></i></a>
                                                        <a href="javascript:void(0);"
                                                            class="bs-tooltip font-20 text-primary ml-2" title="Edit"><i
                                                                class="las la-pen"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Lenovo G-30 Laptop</td>
                                                <td>$1999</td>
                                                <td>58</td>
                                                <td>$102,989</td>
                                                <td>
                                                    <div class="d-flex align-center">
                                                        5 <img src="assets/img/star.png" class="avatar-xxs ml-2"
                                                            alt="star">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex">
                                                        <a href="javascript:void(0);"
                                                            class="bs-tooltip font-20 text-muted" title="View"><i
                                                                class="las la-eye"></i></a>
                                                        <a href="javascript:void(0);"
                                                            class="bs-tooltip font-20 text-primary ml-2" title="Edit"><i
                                                                class="las la-pen"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Half Sleeve Shirt</td>
                                                <td>$499</td>
                                                <td>50</td>
                                                <td>$25,989</td>
                                                <td>
                                                    <div class="d-flex align-center">
                                                        4 <img src="assets/img/star.png" class="avatar-xxs ml-2"
                                                            alt="star">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex">
                                                        <a href="javascript:void(0);"
                                                            class="bs-tooltip font-20 text-muted" title="View"><i
                                                                class="las la-eye"></i></a>
                                                        <a href="javascript:void(0);"
                                                            class="bs-tooltip font-20 text-primary ml-2" title="Edit"><i
                                                                class="las la-pen"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Leather Shoes</td>
                                                <td>$899</td>
                                                <td>80</td>
                                                <td>$95,989</td>
                                                <td>
                                                    <div class="d-flex align-center">
                                                        5 <img src="assets/img/star.png" class="avatar-xxs ml-2"
                                                            alt="star">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex">
                                                        <a href="javascript:void(0);"
                                                            class="bs-tooltip font-20 text-muted" title="View"><i
                                                                class="las la-eye"></i></a>
                                                        <a href="javascript:void(0);"
                                                            class="bs-tooltip font-20 text-primary ml-2" title="Edit"><i
                                                                class="las la-pen"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="border-bottom border-light">
                                                <td>Lightweight Jacket</td>
                                                <td>$20</td>
                                                <td>184</td>
                                                <td>$5,989</td>
                                                <td>
                                                    <div class="d-flex align-center">
                                                        5 <img src="assets/img/star.png" class="avatar-xxs ml-2"
                                                            alt="star">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex">
                                                        <a href="javascript:void(0);"
                                                            class="bs-tooltip font-20 text-muted" title="View"><i
                                                                class="las la-eye"></i></a>
                                                        <a href="javascript:void(0);"
                                                            class="bs-tooltip font-20 text-primary ml-2" title="Edit"><i
                                                                class="las la-pen"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <p class="font-13 text-center mt-4 mb-1 text-muted">
                                        <a class="text-primary" href="javascript:void(0);">Click here</a> to see the full
                                        product list
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Main Body Ends -->
            <div class="responsive-msg-component">
                <p>
                    <a class="close-msg-component"><i class="las la-times"></i></a>
                    Please reload the page when you change the viewport size to view the responsive functionalities
                    correctly
                </p>
            </div>
            <!-- Copyright Footer Starts -->
            <div class="footer-wrapper">
                <div class="footer-section f-section-1">
                    <p class="">Copyright © 2021 <a target="_blank" href="http://neptuneweb.xyz">NeptuneWeb</a>,
                        All rights reserved.</p>
                </div>
                <div class="footer-section f-section-2">
                    <p class="">Crafted with extra <i class="las la-heart text-danger"></i></p>
                </div>
            </div>
            <!-- Copyright Footer Ends -->
            <!-- Arrow Starts -->
            <div class="scroll-top-arrow" style="display: none;">
                <i class="las la-angle-up"></i>
            </div>
            <!-- Arrow Ends -->
        </div>
        <!--  Content Area Ends  -->
        <!--  Rightbar Area Starts -->
        <div class="right-bar">
            <div class="h-100">
                <div class="simplebar-wrapper" style="margin: 0px;">
                    <div class="simplebar-mask">
                        <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                            <div class="simplebar-content-wrapper" style="height: 100%;">
                                <div class="simplebar-content" style="padding: 0px;">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs nav-bordered nav-justified" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link  active" data-toggle="tab" href="#chat-tab"
                                                role="tab" aria-selected="true">
                                                <i class="las la-sms"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link " data-toggle="tab" href="#status-tab" role="tab"
                                                aria-selected="false">
                                                <i class="las la-tasks"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link " data-toggle="tab" href="#settings-tab" role="tab"
                                                aria-selected="false">
                                                <i class="las la-cog"></i>
                                            </a>
                                        </li>
                                    </ul>
                                    <!-- Tab panes starts -->
                                    <div class="tab-content pt-0 rightbar-tab-container">
                                        <div class="tab-pane active rightbar-tab" id="chat-tab" role="tabpanel">
                                            <form class="search-bar p-3">
                                                <div class="position-relative">
                                                    <input type="text" class="form-control search-form-control"
                                                        placeholder="Search">
                                                    <span class="mdi mdi-magnify"></span>
                                                </div>
                                            </form>
                                            <h6 class="right-bar-heading px-3 mt-2 text-uppercase">Chat Groups</h6>
                                            <div class="p-2">
                                                <a href="javascript: void(0);"
                                                    class="text-reset group-item pl-3 mb-2 d-block">
                                                    <i class="las la-dot-circle mr-1 text-success"></i>
                                                    <span class="mb-0 mt-1 text-success">Backend Team</span>
                                                </a>
                                                <a href="javascript: void(0);"
                                                    class="text-reset group-item pl-3 mb-2 d-block">
                                                    <i class="las la-dot-circle mr-1 text-warning"></i>
                                                    <span class="mb-0 mt-1 text-warning">Frontend Team</span>
                                                </a>
                                                <a href="javascript: void(0);"
                                                    class="text-reset group-item pl-3 mb-2 d-block">
                                                    <i class="las la-dot-circle mr-1 text-danger"></i>
                                                    <span class="mb-0 mt-1 text-danger">Back Office</span>
                                                </a>
                                                <a href="javascript: void(0);" class="text-reset group-item pl-3 d-block">
                                                    <i class="las la-dot-circle mr-1 text-info"></i>
                                                    <span class="mb-0 mt-1 text-info">Personal</span>
                                                </a>
                                            </div>
                                            <h6 class="right-bar-heading px-3 mt-2 text-uppercase">My Favourites <a
                                                    href="javascript: void(0);"><i class="las la-angle-right"></i></i></a>
                                            </h6>
                                            <div class="p-2">
                                                <a href="javascript: void(0);" class="text-reset">
                                                    <div class="media pt-0">
                                                        <div class="position-relative mr-2">
                                                            <img src="assets/img/profile-1.jpg"
                                                                class="rounded-circle avatar-sm ml-2" alt="user-pic">
                                                            <span class="user-status online"></span>
                                                        </div>
                                                        <div class="media-body overflow-hidden mr-2">
                                                            <h6 class="mt-0 mb-1 font-13">Andrew Mackie</h6>
                                                            <div class="font-12">
                                                                <p class="mb-0 text-truncate">It will seem like simplified
                                                                    English.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="javascript: void(0);" class="text-reset">
                                                    <div class="media">
                                                        <div class="position-relative mr-2">
                                                            <img src="assets/img/profile-2.jpg"
                                                                class="rounded-circle avatar-sm ml-2" alt="user-pic">
                                                            <span class="user-status online"></span>
                                                        </div>
                                                        <div class="media-body overflow-hidden mr-2">
                                                            <h6 class="mt-0 mb-1 font-13">Sophia Garner</h6>
                                                            <div class="font-12">
                                                                <p class="mb-0 text-truncate">Nice and amazing.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="javascript: void(0);" class="text-reset">
                                                    <div class="media">
                                                        <div class="position-relative mr-2">
                                                            <img src="assets/img/profile-3.jpg"
                                                                class="rounded-circle avatar-sm ml-2" alt="user-pic">
                                                            <span class="user-status online"></span>
                                                        </div>
                                                        <div class="media-body overflow-hidden mr-2">
                                                            <h6 class="mt-0 mb-1 font-13">Jackie Smith</h6>
                                                            <div class="font-12">
                                                                <p class="mb-0 text-truncate">Send me the .pdf files asap.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <h6 class="right-bar-heading px-3 mt-2 text-uppercase">Chats <a
                                                    href="javascript: void(0);"><i class="las la-angle-right"></i></i></a>
                                            </h6>
                                            <div class="p-2 pb-4">
                                                <a href="javascript: void(0);" class="text-reset">
                                                    <div class="media pt-0">
                                                        <div class="position-relative mr-2">
                                                            <img src="assets/img/profile-3.jpg"
                                                                class="rounded-circle avatar-sm ml-2" alt="user-pic">
                                                            <span class="user-status online"></span>
                                                        </div>
                                                        <div class="media-body overflow-hidden mr-2">
                                                            <h6 class="mt-0 mb-1 font-13">Owen Hargrieves</h6>
                                                            <div class="font-12">
                                                                <p class="mb-0 text-truncate">That's really cool</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="javascript: void(0);" class="text-reset">
                                                    <div class="media">
                                                        <div class="position-relative mr-2">
                                                            <img src="assets/img/profile-4.jpg"
                                                                class="rounded-circle avatar-sm ml-2" alt="user-pic">
                                                            <span class="user-status online"></span>
                                                        </div>
                                                        <div class="media-body overflow-hidden mr-2">
                                                            <h6 class="mt-0 mb-1 font-13">Riyana Giyan</h6>
                                                            <div class="font-12">
                                                                <p class="mb-0 text-truncate">When do you send me those
                                                                    files ?</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="javascript: void(0);" class="text-reset">
                                                    <div class="media">
                                                        <div class="position-relative mr-2">
                                                            <img src="assets/img/profile-5.jpg"
                                                                class="rounded-circle avatar-sm ml-2" alt="user-pic">
                                                            <span class="user-status online"></span>
                                                        </div>
                                                        <div class="media-body overflow-hidden mr-2">
                                                            <h6 class="mt-0 mb-1 font-13">Ryan Timberlake</h6>
                                                            <div class="font-12">
                                                                <p class="mb-0 text-truncate">Invoice has been generated
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="javascript: void(0);" class="text-reset">
                                                    <div class="media">
                                                        <div class="position-relative mr-2">
                                                            <img src="assets/img/profile-6.jpg"
                                                                class="rounded-circle avatar-sm ml-2" alt="user-pic">
                                                            <span class="user-status online"></span>
                                                        </div>
                                                        <div class="media-body overflow-hidden mr-2">
                                                            <h6 class="mt-0 mb-1 font-13">Julie Roman</h6>
                                                            <div class="font-12">
                                                                <p class="mb-0 text-truncate">Thank you so much.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="javascript: void(0);" class="text-reset">
                                                    <div class="media">
                                                        <div class="position-relative mr-2">
                                                            <img src="assets/img/profile-7.jpg"
                                                                class="rounded-circle avatar-sm ml-2" alt="user-pic">
                                                            <span class="user-status online"></span>
                                                        </div>
                                                        <div class="media-body overflow-hidden mr-2">
                                                            <h6 class="mt-0 mb-1 font-13">Gareth Sarkar</h6>
                                                            <div class="font-12">
                                                                <p class="mb-0 text-truncate">Thats was awesome</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="javascript: void(0);" class="text-reset">
                                                    <div class="media">
                                                        <div class="position-relative mr-2">
                                                            <img src="assets/img/profile-8.jpg"
                                                                class="rounded-circle avatar-sm ml-2" alt="user-pic">
                                                            <span class="user-status online"></span>
                                                        </div>
                                                        <div class="media-body overflow-hidden mr-2">
                                                            <h6 class="mt-0 mb-1 font-13">Kylie Roberts</h6>
                                                            <div class="font-12">
                                                                <p class="mb-0 text-truncate">Amazing feature.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <div class="text-center pt-4">
                                                    <a href="javascript:void(0);" class="btn btn-sm btn-primary">
                                                        Load more
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane rightbar-tab" id="status-tab" role="tabpanel">
                                            <h6 class="right-bar-heading p-2 px-3 mt-2 text-uppercase">Order Status </h6>
                                            <div class="px-2">
                                                <a href="javascript: void(0);"
                                                    class="text-reset item-hovered d-block p-2">
                                                    <p class="text-muted mb-0">Order Success<span
                                                            class="float-right">75%</span></p>
                                                    <div class="progress mt-2" style="height: 4px;">
                                                        <div class="progress-bar bg-success" role="progressbar"
                                                            style="width: 75%" aria-valuenow="75" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </a>
                                                <a href="javascript: void(0);"
                                                    class="text-reset item-hovered d-block p-2">
                                                    <p class="text-muted mb-0">Order Processing<span
                                                            class="float-right">37%</span></p>
                                                    <div class="progress mt-2" style="height: 4px;">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            style="width: 37%" aria-valuenow="37" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </a>
                                                <a href="javascript: void(0);"
                                                    class="text-reset item-hovered d-block p-2">
                                                    <p class="text-muted mb-0">Order Initiated<span
                                                            class="float-right">52%</span></p>
                                                    <div class="progress mt-2" style="height: 4px;">
                                                        <div class="progress-bar bg-warning" role="progressbar"
                                                            style="width: 52%" aria-valuenow="52" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </a>
                                            </div>
                                            <h6 class="font-weight-medium px-3 mb-0 mt-4 text-uppercase">Payment Status
                                            </h6>
                                            <div class="p-2">
                                                <a href="javascript: void(0);"
                                                    class="text-reset item-hovered d-block p-2">
                                                    <p class="text-muted mb-0">Payment Failed<span
                                                            class="float-right">12%</span></p>
                                                    <div class="progress mt-2" style="height: 4px;">
                                                        <div class="progress-bar bg-danger" role="progressbar"
                                                            style="width: 12%" aria-valuenow="12" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </a>
                                                <a href="javascript: void(0);"
                                                    class="text-reset item-hovered d-block p-2">
                                                    <p class="text-muted mb-0">Payment on hold<span
                                                            class="float-right">67%</span></p>
                                                    <div class="progress mt-2" style="height: 4px;">
                                                        <div class="progress-bar bg-primary" role="progressbar"
                                                            style="width: 67%" aria-valuenow="67" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </a>
                                                <a href="javascript: void(0);"
                                                    class="text-reset item-hovered d-block p-2">
                                                    <p class="text-muted mb-0">Payment Successful<span
                                                            class="float-right">84%</span></p>
                                                    <div class="progress mt-2" style="height: 4px;">
                                                        <div class="progress-bar bg-success" role="progressbar"
                                                            style="width: 84%" aria-valuenow="84" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="text-center pt-2">
                                                <a href="javascript: void(0);" class="btn btn-primary btn-sm">Show All</a>
                                            </div>
                                        </div>
                                        <div class="tab-pane rightbar-tab" id="settings-tab" role="tabpanel">
                                            <h6 class="right-bar-heading p-2 px-3 mt-2 text-uppercase">Account Setting
                                            </h6>
                                            <div class="px-2">
                                                <div class="switch-container mb-3 pl-2">
                                                    <label class="switch">
                                                        <input type="checkbox" checked>
                                                        <span class="slider round primary-switch"></span>
                                                    </label>
                                                    <p class="ml-3 text-dark">Sync Contacts</p>
                                                </div>
                                                <div class="switch-container mb-3 pl-2">
                                                    <label class="switch">
                                                        <input type="checkbox">
                                                        <span class="slider round primary-switch"></span>
                                                    </label>
                                                    <p class="ml-3 text-dark">Auto Update</p>
                                                </div>
                                                <div class="switch-container mb-3 pl-2">
                                                    <label class="switch">
                                                        <input type="checkbox">
                                                        <span class="slider round primary-switch"></span>
                                                    </label>
                                                    <p class="ml-3 text-dark">Recieve Notifications</p>
                                                </div>
                                            </div>
                                            <h6 class="right-bar-heading p-2 px-3 mt-2 text-uppercase">Mail Setting </h6>
                                            <div class="px-2">
                                                <div class="switch-container mb-3 pl-2">
                                                    <label class="switch">
                                                        <input type="checkbox" checked>
                                                        <span class="slider round primary-switch"></span>
                                                    </label>
                                                    <p class="ml-3 text-dark">Mail Auto Responder</p>
                                                </div>
                                                <div class="switch-container mb-3 pl-2">
                                                    <label class="switch">
                                                        <input type="checkbox" checked>
                                                        <span class="slider round primary-switch"></span>
                                                    </label>
                                                    <p class="ml-3 text-dark">Auto Trash Delete</p>
                                                </div>
                                                <div class="switch-container mb-3 pl-2">
                                                    <label class="switch">
                                                        <input type="checkbox">
                                                        <span class="slider round primary-switch"></span>
                                                    </label>
                                                    <p class="ml-3 text-dark">Custom Signature</p>
                                                </div>
                                            </div>
                                            <h6 class="right-bar-heading p-2 px-3 mt-2 text-uppercase">Chat Setting </h6>
                                            <div class="px-2">
                                                <div class="switch-container mb-3 pl-2">
                                                    <label class="switch">
                                                        <input type="checkbox" checked>
                                                        <span class="slider round primary-switch"></span>
                                                    </label>
                                                    <p class="ml-3 text-dark">Show Online</p>
                                                </div>
                                                <div class="switch-container mb-3 pl-2">
                                                    <label class="switch">
                                                        <input type="checkbox" checked>
                                                        <span class="slider round primary-switch"></span>
                                                    </label>
                                                    <p class="ml-3 text-dark">Chat Notifications</p>
                                                </div>
                                            </div>
                                            <div class="px-2 text-center pt-4">
                                                <a href="javascript:void(0);" class="btn btn-sm btn-danger">
                                                    Set Default
                                                </a>
                                                <button class="ripple-button ripple-button-primary btn-sm" type="button">
                                                    <div class="ripple-ripple js-ripple">
                                                        <span class="ripple-ripple__circle"></span>
                                                    </div>
                                                    Ripple Effect
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Tab panes ends -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--  Rightbar Area Ends -->
    </div>
    <!-- Main Container Ends -->
@endsection