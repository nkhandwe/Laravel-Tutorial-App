 <div class="main-container" id="container">
     <div class="overlay"></div>
     <div class="search-overlay"></div>
     <div class="rightbar-overlay"></div>

     <!--  Sidebar Starts  -->
     <div class="sidebar-wrapper sidebar-theme">
         <div>
             <div class="sc-container">
             </div>
             <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom">
                 <i class="las la-angle-left"></i>
             </a>
         </div>
         <nav id="sidebar">
             <ul class="navbar-item theme-brand flex-row  text-center">
                 {{-- <li class="nav-item theme-logo">
                     <a href="index.html">
                         <img src="assets/img/logo.png" class="navbar-logo" alt="logo">
                     </a>
                 </li> --}}
                 <li class="nav-item theme-text">
                     <a href="" class="nav-link"> Learning App </a>
                 </li>
             </ul>
             <ul class="list-unstyled menu-categories" id="accordionExample">
                 <li class="menu">
                     <a href="/" data-active="true" data-toggle="collapse" aria-expanded="true"
                         class="dropdown-toggle">
                         <div class="">
                             <i class="las la-home"></i>
                             <span>Dashboards</span>
                         </div>
                     </a>

                 </li>

                 <li class="menu-title"></li>
                 <li class="menu">
                     <a href="#category" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                         <div class="">
                             <i class="las la-list"></i>
                             <span>Category</span>
                         </div>
                         <div>
                             <i class="las la-angle-right sidemenu-right-icon"></i>
                         </div>
                     </a>
                     <ul class="collapse submenu list-unstyled" id="category" data-parent="#accordionExample">
                         <li>
                             <a href="{{ route('admin.category.category') }}"> Add New </a>
                         </li>
                         <li>
                             <a href="{{ route('admin.category.list') }}"> List</a>
                         </li>
                     </ul>
                 </li>
                 <li class="menu">
                     <a href="#sub-category" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                         <div class="">
                             <i class="las la-code"></i>
                             <span>Sub Category</span>
                         </div>
                         <div>
                             <i class="las la-angle-right sidemenu-right-icon"></i>
                         </div>
                     </a>
                     <ul class="collapse submenu list-unstyled" id="sub-category" data-parent="#accordionExample">
                         <li>
                             <a href="{{ route('admin.sub-category.sub-category') }}"> Add New </a>
                         </li>
                         <li>
                             <a href="{{ route('admin.sub-category.list') }}"> List</a>
                         </li>
                     </ul>
                 </li>
                 <li class="menu-title"></li>
                 <li class="menu">
                     <a href="#components" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                         <div class="">
                             <i class="las la-drafting-compass"></i>
                             <span>Topics</span>
                         </div>
                         <div>
                             <i class="las la-angle-right sidemenu-right-icon"></i>
                         </div>
                     </a>
                     <ul class="collapse submenu list-unstyled" id="components" data-parent="#accordionExample">
                         <li>
                             <a href="{{ route('admin.topic.topic') }}"> Add New </a>
                         </li>
                         <li>
                             <a href="{{ route('admin.topic.list') }}"> List </a>
                         </li>

                     </ul>
                 </li>
                 <li class="menu">
                     <a href="#elements" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                         <div class="">
                             <i class="lab la-elementor"></i>
                             <span>Post</span>
                         </div>
                         <div>
                             <i class="las la-angle-right sidemenu-right-icon"></i>
                         </div>
                     </a>
                     <ul class="collapse submenu list-unstyled" id="elements" data-parent="#accordionExample">
                         <li>
                             <a href="{{ route('admin.post.post') }}"> Add New </a>
                         </li>
                         <li>
                             <a href="{{ route('admin.post.list') }}"> List </a>
                         </li>

                     </ul>
                 </li>
                 <li class="menu">
                     <a href="{{ route('admin.settings') }}" aria-expanded="false" class="dropdown-toggle">
                         <div class="">
                             <i class="las la-desktop"></i>
                             <span>Web Settings</span>
                         </div>
                     </a>
                 </li>

             </ul>
             <ul class="sidebar-bottom-options">
                 <li class="nav-item dropdown message-dropdown">
                     <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="messageDropdown"
                         data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         <i class="las la-envelope"></i>
                     </a>
                     <div class="dropdown-menu position-absolute" aria-labelledby="messageDropdown">
                         <div class="nav-drop is-notification-dropdown">
                             <div class="inner">
                                 <div class="nav-drop-header mb-2 px-2">
                                     <span class="text-black font-12 strong">Recent mails</span>
                                 </div>
                                 <div class="nav-drop-body account-items pb-0">
                                     <a class="account-item" href="javascript:void(0);">
                                         <div class="media align-items-center">
                                             <div class="user-img mr-2">
                                                 <img class="rounded-circle avatar-xs" src="assets/img/profile-11.jpg"
                                                     alt="profile">
                                             </div>
                                             <div class="media-body">
                                                 <div class="">
                                                     <h6 class="font-12 mb-0 strong">Jennifer Queen</h6>
                                                     <p class="m-0 mt-1 font-10 text-muted">Permission Required</p>
                                                 </div>
                                             </div>
                                         </div>
                                     </a>
                                     <a class="account-item marked-read" href="javascript:void(0);">
                                         <div class="media align-items-center">
                                             <div class="user-img mr-2">
                                                 <img class="rounded-circle avatar-xs" src="assets/img/profile-10.jpg"
                                                     alt="profile">
                                             </div>
                                             <div class="media-body">
                                                 <div class="">
                                                     <h6 class="font-12 mb-0 strong">Lara Smith</h6>
                                                     <p class="m-0 mt-1 font-10 text-muted">Invoice needed</p>
                                                 </div>
                                             </div>
                                         </div>
                                     </a>
                                     <a class="account-item marked-read" href="javascript:void(0);">
                                         <div class="media align-items-center">
                                             <div class="user-img mr-2">
                                                 <img class="rounded-circle avatar-xs" src="assets/img/profile-9.jpg"
                                                     alt="profile">
                                             </div>
                                             <div class="media-body">
                                                 <div class="">
                                                     <h6 class="font-12 mb-0 strong">Victoria Williamson</h6>
                                                     <p class="m-0 mt-1 font-10 text-muted">Account Issue</p>
                                                 </div>
                                             </div>
                                         </div>
                                     </a>
                                     <div class="text-center p-2 m-2">
                                         <a class="text-primary strong font-13" href="apps_mail.html">View All</a>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </li>
                 <li class="nav-item dropdown notification-dropdown">
                     <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="notificationDropdown"
                         data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         <i class="las la-bell"></i>
                         <div class="notification-circle">4</div>
                     </a>
                     <div class="dropdown-menu position-absolute" aria-labelledby="notificationDropdown">
                         <div class="nav-drop is-notification-dropdown">
                             <div class="inner">
                                 <div class="nav-drop-header mb-2 px-2">
                                     <span class="text-black font-12 strong">4 Notifications</span>
                                     <a class="text-muted font-11" href="#">
                                         Clear All
                                     </a>
                                 </div>
                                 <div class="nav-drop-body account-items pb-0">
                                     <a class="account-item" href="apps_ecommerce_orders.html">
                                         <div class="media align-center">
                                             <i class="las la-box font-20"></i>
                                             <div class="media-content ml-3">
                                                 <h6 class="font-12 mb-0 strong">14 Orders placed</h6>
                                             </div>
                                         </div>
                                     </a>
                                     <a class="account-item" href="javascript:void(0)">
                                         <div class="media align-center">
                                             <i class="las la-user-plus font-20"></i>
                                             <div class="media-content ml-3">
                                                 <h6 class="font-12 mb-0 strong">1 User registered</h6>
                                             </div>
                                         </div>
                                     </a>
                                     <a class="account-item" href="apps_tickets.html">
                                         <div class="media align-center">
                                             <i class="las la-grin-beam font-20"></i>
                                             <div class="media-content ml-3">
                                                 <h6 class="font-12 mb-0 strong">29 Queries solved</h6>
                                             </div>
                                         </div>
                                     </a>
                                     <a class="account-item" href="javascript:void(0)">
                                         <div class="media align-center">
                                             <i class="las la-cloud-download-alt font-20"></i>
                                             <div class="media-content ml-3">
                                                 <h6 class="font-12 mb-0 strong">New update</h6>
                                             </div>
                                         </div>
                                     </a>
                                     <div class="text-center p-2 mt-2">
                                         <a class="text-primary strong font-13" href="pages_notifications.html">View
                                             All</a>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </li>
                 <li class="nav-item dropdown user-profile-dropdown">
                     <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown"
                         data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         <img src="{{ url('assets/img/profile-16.jpg') }}" alt="avatar">
                     </a>
                     <div class="dropdown-menu position-absolute" aria-labelledby="userProfileDropdown">
                         <div class="nav-drop is-account-dropdown">
                             <div class="inner">
                                 <div class="nav-drop-header mb-2 px-2">
                                     <span class="text-primary font-13">Welcome Admin !</span>
                                 </div>
                                 <div class="nav-drop-body account-items pb-0">
                                     <a id="profile-link" class="account-item" href="pages_profile.html">
                                         <div class="media align-center">
                                             <div class="media-left">
                                                 <div class="image">
                                                     <img class="rounded-circle avatar-xs"
                                                         src="{{ url('assets/img/profile-16.jpg') }}" alt="">
                                                 </div>
                                             </div>
                                             <div class="media-content ml-2">
                                                 <h6 class="font-12 mb-0 strong">Sara</h6>
                                             </div>
                                             <div class="media-right">
                                                 <i data-feather="check"></i>
                                             </div>
                                         </div>
                                     </a>
                                     <a class="account-item" href="pages_profile.html">
                                         <div class="media align-center">
                                             <i class="las la-user font-20"></i>
                                             <div class="media-content ml-3">
                                                 <h6 class="font-13 mb-0 strong">My Account</h6>
                                             </div>
                                         </div>
                                     </a>
                                     <a class="account-item" href="pages_timeline.html">
                                         <div class="media align-center">
                                             <i class="las la-briefcase font-20"></i>
                                             <div class="media-content ml-3">
                                                 <h6 class="font-13 mb-0 strong">My Activity</h6>
                                             </div>
                                         </div>
                                     </a>

                                     <a class="account-item" href="auth_login_3.html">
                                         <div class="media align-center">
                                             <i class="las la-sign-out-alt font-20"></i>
                                             <div class="media-content ml-3">
                                                 <h6 class="font-13 mb-0 strong ">Logout</h6>
                                             </div>
                                         </div>
                                     </a>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </li>
             </ul>
         </nav>
     </div>
     <!--  Sidebar Ends  -->
