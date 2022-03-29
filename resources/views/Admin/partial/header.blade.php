<!doctype html>
<html lang="en" dir="ltr">
	
<!-- Mirrored from laravel.spruko.com/zanex/ltr/index1 by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Mar 2022 09:28:12 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>

		<!-- META DATA -->
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="Zanex – Laravel Admin & Dashboard Template">
		<meta name="author" content="Spruko Technologies Private Limited">
		<meta name="keywords" content="admin, admin dashboard template, bootstrap 5, dashboard, laravel, laravel admin, laravel admin panel, laravel admin template, laravel blade, laravel dashboard, laravel dashboard template, laravel mvc, laravel php, laravel ui template, ui kit">

        <!-- TITLE -->
        <title>OBC-ALL-INDIA</title>

        		<!-- FAVICON -->
		<link rel="shortcut icon" type="image/x-icon" href="{{asset('images/brand/favicon.ico')}}" />

		<!-- BOOTSTRAP CSS -->
		<link href="{{asset('plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />

		<!-- STYLE CSS -->
		<link href="{{asset('css/style.css')}}" rel="stylesheet"/>
		<link href="{{asset('css/dark-style.css')}}" rel="stylesheet"/>
		<link href="{{asset('css/skin-modes.css')}}" rel="stylesheet" />
        <!-- select 2  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		<!-- SIDE-MENU CSS -->
		<link href="{{asset('css/sidemenu-icontext.css')}}" rel="stylesheet" id="sidemenu-theme">

		<!-- P-scroll bar css-->
		<link href="{{asset('plugins/p-scroll/perfect-scrollbar.css')}}" rel="stylesheet" />

		<!--- FONT-ICONS CSS -->
		<link href="{{asset('plugins/icons/icons.css')}}" rel="stylesheet"/>

		<!-- SIDEBAR CSS -->
		<link href="{{asset('plugins/sidebar/sidebar.css')}}" rel="stylesheet"/>

		<!-- SELECT2 CSS -->
		<link href="{{asset('plugins/select2/select2.min.css')}}" rel="stylesheet"/>

        <!-- INTERNAL Data table css -->
		<link href="{{asset('plugins/datatable/css/dataTables.bootstrap5.css')}}" rel="stylesheet" />
		<link href="{{asset('plugins/datatable/responsive.bootstrap5.css')}}" rel="stylesheet" />
        <link href="{{asset('plugins/datatable/css/buttons.bootstrap5.min.css')}}"  rel="stylesheet">

		<!-- COLOR SKIN CSS -->
		<link id="theme" rel="stylesheet" type="text/css" media="all" href="{{asset('colors/color1.css')}}"/>

		<!-- INTERNAL Switcher css -->
		<link href="{{asset('switcher/css/switcher.css')}}" rel="stylesheet"/>
		<link href="{{asset('switcher/demo.css')}}" rel="stylesheet"/>



	</head>

	<body class="app sidebar-mini">
			

		<!-- GLOBAL-LOADER -->
		<div id="global-loader">
			<img src="{{asset('images/loader.svg')}}" class="loader-img" alt="Loader">
		</div>
		<!-- /GLOBAL-LOADER -->

		<!-- PAGE -->
		<div class="page">
<!-- Mobile Header -->
<div class="app-header header">
        <div class="container-fluid">
            <div class="d-flex">
                <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-bs-toggle="sidebar" href="#"></a><!-- sidebar-toggle-->
                <a class="header-brand1 d-flex d-md-none" href="index.html">
                    <img src="{{asset('images/brand/logo.png')}}" class="header-brand-img desktop-logo" alt="logo">
                    <img src="{{asset('images/brand/logo-1.png')}}" class="header-brand-img toggle-logo" alt="logo">
                    <img src="{{asset('images/brand/logo-2.png')}}" class="header-brand-img light-logo" alt="logo">
                    <img src="{{asset('images/brand/logo-3.png')}}" class="header-brand-img light-logo1" alt="logo">
                </a><!-- LOGO -->
                <div class="main-header-center ms-3 d-none d-md-block">
                    <input class="form-control" placeholder="Search for anything..." type="search"> <button class="btn"><i class="fa fa-search" aria-hidden="true"></i></button>
                </div>
                <div class="d-flex order-lg-2 ms-auto header-right-icons">
                    <div class="dropdown d-lg-none d-md-block d-none">
                        <a href="#" class="nav-link icon" data-bs-toggle="dropdown">
                            <i class="fe fe-search"></i>
                        </a>
                        <div class="dropdown-menu header-search dropdown-menu-start">
                            <div class="input-group w-100 p-2">
                                <input type="text" class="form-control" placeholder="Search....">
                                <div class="input-group-text btn btn-primary">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div><!-- SEARCH -->
                    <button class="navbar-toggler navresponsive-toggler d-md-none ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon fe fe-more-vertical text-dark"></span>
                    </button>
                    <div class="dropdown d-none d-md-flex">
                        <a class="nav-link icon theme-layout nav-link-bg layout-setting">
                            <span class="dark-layout" data-bs-placement="bottom" data-bs-toggle="tooltip" title="Dark Theme"><i class="fe fe-moon"></i></span>
                            <span class="light-layout" data-bs-placement="bottom" data-bs-toggle="tooltip" title="Light Theme"><i class="fe fe-sun"></i></span>
                        </a>
                    </div><!-- Theme-Layout -->
                    <div class="dropdown d-none d-md-flex">
                        <a class="nav-link icon full-screen-link nav-link-bg">
                            <i class="fe fe-minimize fullscreen-button"></i>
                        </a>
                    </div><!-- FULL-SCREEN -->
                    <div class="dropdown d-none d-md-flex notifications">
                        <a class="nav-link icon" data-bs-toggle="dropdown"><i class="fe fe-bell"></i><span class=" pulse"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow ">
                            <div class="drop-heading border-bottom">
                                <div class="d-flex">
                                    <h6 class="mt-1 mb-0 fs-16 fw-semibold">You have Notification</h6>
                                    <div class="ms-auto">
                                        <span class="badge bg-success rounded-pill">3</span>
                                    </div>
                                </div>
                            </div>
                            <div class="notifications-menu">
                                <a class="dropdown-item d-flex" href="chat.html">
                                    <div class="me-3 notifyimg  bg-primary-gradient brround box-shadow-primary">
                                        <i class="fe fe-message-square"></i>
                                    </div>
                                    <div class="mt-1">
                                        <h5 class="notification-label mb-1">New review received</h5>
                                        <span class="notification-subtext">2 hours ago</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex" href="chat.html">
                                    <div class="me-3 notifyimg  bg-secondary-gradient brround box-shadow-primary">
                                        <i class="fe fe-mail"></i>
                                    </div>
                                    <div class="mt-1">
                                        <h5 class="notification-label mb-1">New Mails Received</h5>
                                        <span class="notification-subtext">1 week ago</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex" href="cart.html">
                                    <div class="me-3 notifyimg  bg-success-gradient brround box-shadow-primary">
                                        <i class="fe fe-shopping-cart"></i>
                                    </div>
                                    <div class="mt-1">
                                        <h5 class="notification-label mb-1">New Order Received</h5>
                                        <span class="notification-subtext">1 day ago</span>
                                    </div>
                                </a>
                            </div>
                            <div class="dropdown-divider m-0"></div>
                            <a href="#" class="dropdown-item text-center p-3 text-muted">View all Notification</a>
                        </div>
                    </div><!-- NOTIFICATIONS -->
                    <div class="dropdown  d-none d-md-flex message">
                        <a class="nav-link icon text-center" data-bs-toggle="dropdown">
                            <i class="fe fe-message-square"></i><span class=" pulse-danger"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <div class="drop-heading border-bottom">
                                <div class="d-flex">
                                    <h6 class="mt-1 mb-0 fs-16 fw-semibold">You have Messages</h6>
                                    <div class="ms-auto">
                                        <span class="badge bg-danger rounded-pill">4</span>
                                    </div>
                                </div>
                            </div>
                            <div class="message-menu">
                                <a class="dropdown-item d-flex" href="chat.html">
                                    <span class="avatar avatar-md brround me-3 align-self-center cover-image" data-bs-image-src="{{asset('images/users/1.jpg')}}"></span>
                                    <div class="wd-90p">
                                        <div class="d-flex">
                                            <h5 class="mb-1">Madeleine</h5>
                                            <small class="text-muted ms-auto text-end">
                                                3 hours ago
                                            </small>
                                        </div>
                                        <span>Hey! there I' am available....</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex" href="chat.html">
                                    <span class="avatar avatar-md brround me-3 align-self-center cover-image" data-bs-image-src="{{asset('images/users/12.jpg')}}"></span>
                                    <div class="wd-90p">
                                        <div class="d-flex">
                                            <h5 class="mb-1">Anthony</h5>
                                            <small class="text-muted ms-auto text-end">
                                                5 hour ago
                                            </small>
                                        </div>
                                        <span>New product Launching...</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex" href="chat.html">
                                    <span class="avatar avatar-md brround me-3 align-self-center cover-image" data-bs-image-src="{{asset('images/users/4.jpg')}}"></span>
                                    <div class="wd-90p">
                                        <div class="d-flex">
                                            <h5 class="mb-1">Olivia</h5>
                                            <small class="text-muted ms-auto text-end">
                                                45 mintues ago
                                            </small>
                                        </div>
                                        <span>New Schedule Realease......</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex" href="chat.html">
                                    <span class="avatar avatar-md brround me-3 align-self-center cover-image" data-bs-image-src="{{asset('images/users/15.jpg')}}"></span>
                                    <div class="wd-90p">
                                        <div class="d-flex">
                                            <h5 class="mb-1">Sanderson</h5>
                                            <small class="text-muted ms-auto text-end">
                                                2 days ago
                                            </small>
                                        </div>
                                        <span>New Schedule Realease......</span>
                                    </div>
                                </a>
                            </div>
                            <div class="dropdown-divider m-0"></div>
                            <a href="#" class="dropdown-item text-center p-3 text-muted">See all Messages</a>
                        </div>
                    </div><!-- MESSAGE-BOX -->
                    <div class="dropdown d-none d-md-flex profile-1">
                        <a href="#" data-bs-toggle="dropdown" class="nav-link pe-2 leading-none d-flex">
                            <span>
                                <img src="{{asset('images/users/8.jpg')}}" alt="profile-user" class="avatar  profile-user brround cover-image">
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <div class="drop-heading">
                                <div class="text-center">
                                    <h5 class="text-dark mb-0">{{ Auth::user()->name }}</h5>
                                    <small class="text-muted">Administrator</small>
                                </div>
                            </div>
                            <div class="dropdown-divider m-0"></div>
                            <a class="dropdown-item" href="#">
                                <i class="dropdown-icon fe fe-user"></i> Profile
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="dropdown-icon fe fe-mail"></i> Inbox
                                <span class="badge bg-primary float-end">3</span>
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="dropdown-icon fe fe-settings"></i> Settings
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="dropdown-icon fe fe-alert-triangle"></i> Need help??
                            </a>

                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <i class="dropdown-icon fe fe-alert-circle"></i> Sign out
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                             </form>
                        </div>
                    </div>
                    <div class="dropdown d-none d-md-flex header-settings">
                        <a href="#" class="nav-link icon " data-bs-toggle="sidebar-right" data-target=".sidebar-right">
                            <i class="fe fe-menu"></i>
                        </a>
                    </div><!-- SIDE-MENU -->
                </div>
            </div>
        </div>
    </div>
    <div class="mb-1 navbar navbar-expand-lg  responsive-navbar navbar-dark d-md-none bg-white">
        <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
            <div class="d-flex order-lg-2 ms-auto">
                <div class="dropdown d-sm-flex">
                    <a href="#" class="nav-link icon" data-bs-toggle="dropdown">
                        <i class="fe fe-search"></i>
                    </a>
                    <div class="dropdown-menu header-search dropdown-menu-start">
                        <div class="input-group w-100 p-2">
                            <input type="text" class="form-control" placeholder="Search....">
                            <div class="input-group-text btn btn-primary">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div><!-- SEARCH -->
                <div class="dropdown d-md-flex">
                    <a class="nav-link icon theme-layout nav-link-bg layout-setting">
                        <span class="dark-layout" data-bs-placement="bottom" data-bs-toggle="tooltip" title="Dark Theme"><i class="fe fe-moon"></i></span>
                        <span class="light-layout" data-bs-placement="bottom" data-bs-toggle="tooltip" title="Light Theme"><i class="fe fe-sun"></i></span>
                    </a>
                </div><!-- Theme-Layout -->
                <div class="dropdown d-md-flex">
                    <a class="nav-link icon full-screen-link nav-link-bg">
                        <i class="fe fe-minimize fullscreen-button"></i>
                    </a>
                </div><!-- FULL-SCREEN -->
                <div class="dropdown  d-md-flex notifications">
                    <a class="nav-link icon" data-bs-toggle="dropdown"><i class="fe fe-bell"></i><span class=" pulse"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                        <div class="drop-heading border-bottom">
                            <div class="d-flex">
                                <h6 class="mt-1 mb-0 fs-16 fw-semibold">You have Notification</h6>
                                <div class="ms-auto">
                                    <span class="badge bg-success rounded-pill">3</span>
                                </div>
                            </div>
                        </div>
                        <div class="notifications-menu">
                            <a class="dropdown-item d-flex" href="chat.html">
                                <div class="me-3 notifyimg  bg-primary-gradient brround box-shadow-primary">
                                    <i class="fe fe-message-square"></i>
                                </div>
                                <div class="mt-1">
                                    <h5 class="notification-label mb-1">New review received</h5>
                                    <span class="notification-subtext">2 hours ago</span>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex" href="chat.html">
                                <div class="me-3 notifyimg  bg-secondary-gradient brround box-shadow-primary">
                                    <i class="fe fe-mail"></i>
                                </div>
                                <div class="mt-1">
                                    <h5 class="notification-label mb-1">New Mails Received</h5>
                                    <span class="notification-subtext">1 week ago</span>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex" href="cart.html">
                                <div class="me-3 notifyimg  bg-success-gradient brround box-shadow-primary">
                                    <i class="fe fe-shopping-cart"></i>
                                </div>
                                <div class="mt-1">
                                    <h5 class="notification-label mb-1">New Order Received</h5>
                                    <span class="notification-subtext">1 day ago</span>
                                </div>
                            </a>
                        </div>
                        <div class="dropdown-divider m-0"></div>
                        <a href="#" class="dropdown-item text-center p-3 text-muted">View all Notification</a>
                    </div>
                </div><!-- NOTIFICATIONS -->
                <div class="dropdown d-md-flex message">
                    <a class="nav-link icon text-center" data-bs-toggle="dropdown">
                        <i class="fe fe-message-square"></i><span class=" pulse-danger"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                        <div class="drop-heading border-bottom">
                            <div class="d-flex">
                                <h6 class="mt-1 mb-0 fs-16 fw-semibold">You have Messages</h6>
                                <div class="ms-auto">
                                    <span class="badge bg-danger rounded-pill">4</span>
                                </div>
                            </div>
                        </div>
                        <div class="message-menu">
                            <a class="dropdown-item d-flex" href="chat.html">
                                <span class="avatar avatar-md brround me-3 align-self-center cover-image" data-bs-image-src="{{asset('images/users/1.jpg')}}"></span>
                                <div class="wd-90p">
                                    <div class="d-flex">
                                        <h5 class="mb-1">Madeleine</h5>
                                        <small class="text-muted ms-auto text-end">
                                            3 hours ago
                                        </small>
                                    </div>
                                    <span>Hey! there I' am available....</span>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex" href="chat.html">
                                <span class="avatar avatar-md brround me-3 align-self-center cover-image" data-bs-image-src="{{asset('images/users/12.jpg')}}"></span>
                                <div class="wd-90p">
                                    <div class="d-flex">
                                        <h5 class="mb-1">Anthony</h5>
                                        <small class="text-muted ms-auto text-end">
                                            5 hour ago
                                        </small>
                                    </div>
                                    <span>New product Launching...</span>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex" href="chat.html">
                                <span class="avatar avatar-md brround me-3 align-self-center cover-image" data-bs-image-src="{{asset('images/users/4.jpg')}}"></span>
                                <div class="wd-90p">
                                    <div class="d-flex">
                                        <h5 class="mb-1">Olivia</h5>
                                        <small class="text-muted ms-auto text-end">
                                            45 mintues ago
                                        </small>
                                    </div>
                                    <span>New Schedule Realease......</span>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex" href="chat.html">
                                <span class="avatar avatar-md brround me-3 align-self-center cover-image" data-bs-image-src="{{asset('images/users/15.jpg')}}"></span>
                                <div class="wd-90p">
                                    <div class="d-flex">
                                        <h5 class="mb-1">Sanderson</h5>
                                        <small class="text-muted ms-auto text-end">
                                            2 days ago
                                        </small>
                                    </div>
                                    <span>New Schedule Realease......</span>
                                </div>
                            </a>
                        </div>
                        <div class="dropdown-divider m-0"></div>
                        <a href="#" class="dropdown-item text-center p-3 text-muted">See all Messages</a>
                    </div>
                </div><!-- MESSAGE-BOX -->
                <div class="dropdown d-md-flex profile-1">
                    <a href="#" data-bs-toggle="dropdown" class="nav-link pe-2 leading-none d-flex">
                        <span>
                            <img src="{{asset('images/users/8.jpg')}}" alt="profile-user" class="avatar  profile-user brround cover-image">
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                        <div class="drop-heading">
                            <div class="text-center">
                                <h5 class="text-dark mb-0">Elizabeth Dyer</h5>
                                <small class="text-muted">Administrator</small>
                            </div>
                        </div>
                        <div class="dropdown-divider m-0"></div>
                        <a class="dropdown-item" href="profile.html">
                        <i class="dropdown-icon fe fe-user"></i> Profile
                        </a>
                        <a class="dropdown-item" href="email.html">
                            <i class="dropdown-icon fe fe-mail"></i> Inbox
                            <span class="badge bg-primary float-end">3</span>
                        </a>
                        <a class="dropdown-item" href="emailservices.html">
                            <i class="dropdown-icon fe fe-settings"></i> Settings
                        </a>
                        <a class="dropdown-item" href="faq.html">
                            <i class="dropdown-icon fe fe-alert-triangle"></i> Need help?
                        </a>
                        <a class="dropdown-item" href="login.html">
                            <i class="dropdown-icon fe fe-alert-circle"></i> Sign out
                        </a>
                    </div>
                </div>
                <div class="dropdown d-md-flex header-settings">
                    <a href="#" class="nav-link icon " data-bs-toggle="sidebar-right" data-target=".sidebar-right">
                        <i class="fe fe-menu"></i>
                    </a>
                </div><!-- SIDE-MENU -->
            </div>
        </div>
    </div>
 <!-- /Mobile Header -->

 <!-- Sidebar-right -->
 <div class="sidebar sidebar-right sidebar-animate">
    <div class="panel panel-primary card mb-0 shadow-none border-0">
        <div class="tab-menu-heading border-0 d-flex p-3">
            <div class="card-title mb-0">Notifications</div>
            <div class="card-options ms-auto">
                <a href="#" class="sidebar-icon text-end float-end me-1" data-bs-toggle="sidebar-right" data-target=".sidebar-right"><i class="fe fe-x text-white"></i></a>
            </div>
        </div>
        <div class="panel-body tabs-menu-body latest-tasks p-0 border-0">
            <div class="tabs-menu border-bottom">
                <!-- Tabs -->
                <ul class="nav panel-tabs">
                    <li class=""><a href="#side1" class="active" data-bs-toggle="tab"><i class="fe fe-user me-1"></i> Profile</a></li>
                    <li><a href="#side2" data-bs-toggle="tab"><i class="fe fe-users me-1"></i> Contacts</a></li>
                    <li><a href="#side3" data-bs-toggle="tab"><i class="fe fe-settings me-1"></i> Settings</a></li>
                </ul>
            </div>
            <div class="tab-content">
                <div class="tab-pane active" id="side1">
                    <div class="card-body text-center">
                        <div class="dropdown user-pro-body">
                            <div class="">
                                <img alt="user-img" class="avatar avatar-xl brround mx-auto text-center" src="{{asset('images/faces/6.jpg')}}"><span class="avatar-status profile-status bg-green"></span>
                            </div>
                            <div class="user-info mg-t-20">
                                <h6 class="fw-semibold  mt-2 mb-0">Mintrona Pechon</h6>
                                <span class="mb-0 text-muted fs-12">Premium Member</span>
                            </div>
                        </div>
                    </div>
                    <a class="dropdown-item d-flex border-bottom border-top" href="profile.html">
                        <div class="d-flex"><i class="fe fe-user me-3 tx-20 text-muted"></i>
                            <div class="pt-1">
                                <h6 class="mb-0">My Profile</h6>
                                <p class="tx-12 mb-0 text-muted">Profile Personal information</p>
                            </div>
                        </div>
                    </a>
                    <a class="dropdown-item d-flex border-bottom" href="chat.html">
                        <div class="d-flex"><i class="fe fe-message-square me-3 tx-20 text-muted"></i>
                            <div class="pt-1">
                                <h6 class="mb-0">My Messages</h6>
                                <p class="tx-12 mb-0 text-muted">Person message information</p>
                            </div>
                        </div>
                    </a>
                    <a class="dropdown-item d-flex border-bottom" href="emailservices.html">
                        <div class="d-flex"><i class="fe fe-mail me-3 tx-20 text-muted"></i>
                            <div class="pt-1">
                                <h6 class="mb-0">My Mails</h6>
                                <p class="tx-12 mb-0 text-muted">Persons mail information</p>
                            </div>
                        </div>
                    </a>
                    <a class="dropdown-item d-flex border-bottom" href="editprofile.html">
                        <div class="d-flex"><i class="fe fe-settings me-3 tx-20 text-muted"></i>
                            <div class="pt-1">
                                <h6 class="mb-0">Account Settings</h6>
                                <p class="tx-12 mb-0 text-muted">Settings Information</p>
                            </div>
                        </div>
                    </a>
                    <a class="dropdown-item d-flex border-bottom" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();"
                            >
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                             </form>
                        <div class="d-flex"><i class="fe fe-power me-3 tx-20 text-muted"></i>
                            <div class="pt-1">
                                <h6 class="mb-0">Sign Out</h6>
                                <p class="tx-12 mb-0 text-muted">Account Signout</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="tab-pane" id="side2">
                    <div class="list-group list-group-flush ">
                        <div class="list-group-item d-flex  align-items-center">
                            <div class="me-2">
                                <span class="avatar avatar-md brround cover-image" data-bs-image-src="https://laravel.spruko.com/zanex/ltr/assets/images/faces/9.jpg"><span class="avatar-status bg-success"></span></span>
                            </div>
                            <div class="">
                                <div class="fw-semibold" data-bs-toggle="modal" data-target="#chatmodel">Mozelle Belt</div>
                                <p class="mb-0 tx-12 text-muted">mozellebelt@gmail.com</p>
                            </div>
                        </div>
                        <div class="list-group-item d-flex  align-items-center">
                            <div class="me-2">
                                <span class="avatar avatar-md brround cover-image" data-bs-image-src="https://laravel.spruko.com/zanex/ltr/assets/images/faces/11.jpg"></span>
                            </div>
                            <div class="">
                                <div class="fw-semibold" data-bs-toggle="modal" data-target="#chatmodel">Florinda Carasco</div>
                                <p class="mb-0 tx-12 text-muted">florindacarasco@gmail.com</p>
                            </div>
                        </div>
                        <div class="list-group-item d-flex  align-items-center">
                            <div class="me-2">
                                <span class="avatar avatar-md brround cover-image" data-bs-image-src="https://laravel.spruko.com/zanex/ltr/assets/images/faces/10.jpg"><span class="avatar-status bg-success"></span></span>
                            </div>
                            <div class="">
                                <div class="fw-semibold" data-bs-toggle="modal" data-target="#chatmodel">Alina Bernier</div>
                                <p class="mb-0 tx-12 text-muted">alinaaernier@gmail.com</p>
                            </div>
                        </div>
                        <div class="list-group-item d-flex  align-items-center">
                            <div class="me-2">
                                <span class="avatar avatar-md brround cover-image" data-bs-image-src="https://laravel.spruko.com/zanex/ltr/assets/images/faces/2.jpg"><span class="avatar-status bg-success"></span></span>
                            </div>
                            <div class="">
                                <div class="fw-semibold" data-bs-toggle="modal" data-target="#chatmodel">Zula Mclaughin</div>
                                <p class="mb-0 tx-12 text-muted">zulamclaughin@gmail.com</p>
                            </div>
                        </div>
                        <div class="list-group-item d-flex  align-items-center">
                            <div class="me-2">
                                <span class="avatar avatar-md brround cover-image" data-bs-image-src="https://laravel.spruko.com/zanex/ltr/assets/images/faces/13.jpg"></span>
                            </div>
                            <div class="">
                                <div class="fw-semibold" data-bs-toggle="modal" data-target="#chatmodel">Isidro Heide</div>
                                <p class="mb-0 tx-12 text-muted">isidroheide@gmail.com</p>
                            </div>
                        </div>
                        <div class="list-group-item d-flex  align-items-center">
                            <div class="me-2">
                                <span class="avatar avatar-md brround cover-image" data-bs-image-src="https://laravel.spruko.com/zanex/ltr/assets/images/faces/12.jpg"><span class="avatar-status bg-success"></span></span>
                            </div>
                            <div class="">
                                <div class="fw-semibold" data-bs-toggle="modal" data-target="#chatmodel">Mozelle Belt</div>
                                <p class="mb-0 tx-12 text-muted">mozellebelt@gmail.com</p>
                            </div>
                        </div>
                        <div class="list-group-item d-flex  align-items-center">
                            <div class="me-2">
                                <span class="avatar avatar-md brround cover-image" data-bs-image-src="https://laravel.spruko.com/zanex/ltr/assets/images/faces/4.jpg"></span>
                            </div>
                            <div class="">
                                <div class="fw-semibold" data-bs-toggle="modal" data-target="#chatmodel">Florinda Carasco</div>
                                <p class="mb-0 tx-12 text-muted">florindacarasco@gmail.com</p>
                            </div>
                        </div>
                        <div class="list-group-item d-flex  align-items-center">
                            <div class="me-2">
                                <span class="avatar avatar-md brround cover-image" data-bs-image-src="https://laravel.spruko.com/zanex/ltr/assets/images/faces/7.jpg"></span>
                            </div>
                            <div class="">
                                <div class="fw-semibold" data-bs-toggle="modal" data-target="#chatmodel">Alina Bernier</div>
                                <p class="mb-0 tx-12 text-muted">alinabernier@gmail.com</p>
                            </div>
                        </div>
                        <div class="list-group-item d-flex  align-items-center">
                            <div class="me-2">
                                <span class="avatar avatar-md brround cover-image" data-bs-image-src="https://laravel.spruko.com/zanex/ltr/assets/images/faces/2.jpg"></span>
                            </div>
                            <div class="">
                                <div class="fw-semibold" data-bs-toggle="modal" data-target="#chatmodel">Zula Mclaughin</div>
                                <p class="mb-0 tx-12 text-muted">zulamclaughin@gmail.com</p>
                            </div>
                        </div>
                        <div class="list-group-item d-flex  align-items-center">
                            <div class="me-2">
                                <span class="avatar avatar-md brround cover-image" data-bs-image-src="https://laravel.spruko.com/zanex/ltr/assets/images/faces/14.jpg"><span class="avatar-status bg-success"></span></span>
                            </div>
                            <div class="">
                                <div class="fw-semibold" data-bs-toggle="modal" data-target="#chatmodel">Isidro Heide</div>
                                <p class="mb-0 tx-12 text-muted">isidroheide@gmail.com</p>
                            </div>
                        </div>
                        <div class="list-group-item d-flex  align-items-center">
                            <div class="me-2">
                                <span class="avatar avatar-md brround cover-image" data-bs-image-src="https://laravel.spruko.com/zanex/ltr/assets/images/faces/11.jpg"></span>
                            </div>
                            <div class="">
                                <div class="fw-semibold" data-bs-toggle="modal" data-target="#chatmodel">Florinda Carasco</div>
                                <p class="mb-0 tx-12 text-muted">florindacarasco@gmail.com</p>
                            </div>
                        </div>
                        <div class="list-group-item d-flex  align-items-center">
                            <div class="me-2">
                                <span class="avatar avatar-md brround cover-image" data-bs-image-src="https://laravel.spruko.com/zanex/ltr/assets/images/faces/9.jpg"></span>
                            </div>
                            <div class="">
                                <div class="fw-semibold" data-bs-toggle="modal" data-target="#chatmodel">Alina Bernier</div>
                                <p class="mb-0 tx-12 text-muted">alinabernier@gmail.com</p>
                            </div>
                        </div>
                        <div class="list-group-item d-flex  align-items-center">
                            <div class="me-2">
                                <span class="avatar avatar-md brround cover-image" data-bs-image-src="https://laravel.spruko.com/zanex/ltr/assets/images/faces/15.jpg"><span class="avatar-status bg-success"></span></span>
                            </div>
                            <div class="">
                                <div class="fw-semibold" data-bs-toggle="modal" data-target="#chatmodel">Zula Mclaughin</div>
                                <p class="mb-0 tx-12 text-muted">zulamclaughin@gmail.com</p>
                            </div>
                        </div>
                        <div class="list-group-item d-flex  align-items-center">
                            <div class="me-2">
                                <span class="avatar avatar-md brround cover-image" data-bs-image-src="https://laravel.spruko.com/zanex/ltr/assets/images/faces/4.jpg"></span>
                            </div>
                            <div class="">
                                <div class="fw-semibold" data-bs-toggle="modal" data-target="#chatmodel">Isidro Heide</div>
                                <p class="mb-0 tx-12 text-muted">isidroheide@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="side3">
                    <a class="dropdown-item bg-gray-100 pd-y-10" href="#">
                        Account Settings
                    </a>
                    <div class="card-body">
                        <div class="form-group mg-b-10">
                            <label class="custom-switch ps-0">
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input" checked>
                                <span class="custom-switch-indicator"></span>
                                <span class="custom-switch-description mg-l-10">Updates Automatically</span>
                            </label>
                        </div>
                        <div class="form-group mg-b-10">
                            <label class="custom-switch ps-0">
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input">
                                <span class="custom-switch-indicator"></span>
                                <span class="custom-switch-description mg-l-10">Allow Location Map</span>
                            </label>
                        </div>
                        <div class="form-group mg-b-10">
                            <label class="custom-switch ps-0">
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input" checked>
                                <span class="custom-switch-indicator"></span>
                                <span class="custom-switch-description mg-l-10">Show Contacts</span>
                            </label>
                        </div>
                        <div class="form-group mg-b-10">
                            <label class="custom-switch ps-0">
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input" checked>
                                <span class="custom-switch-indicator"></span>
                                <span class="custom-switch-description mg-l-10">Show Notication</span>
                            </label>
                        </div>
                        <div class="form-group mg-b-10">
                            <label class="custom-switch ps-0">
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input">
                                <span class="custom-switch-indicator"></span>
                                <span class="custom-switch-description mg-l-10">Show Tasks Statistics</span>
                            </label>
                        </div>
                        <div class="form-group mg-b-10">
                            <label class="custom-switch ps-0">
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input" checked>
                                <span class="custom-switch-indicator"></span>
                                <span class="custom-switch-description mg-l-10">Show Email Notification</span>
                            </label>
                        </div>
                    </div>
                    <a class="dropdown-item bg-gray-100 pd-y-10" href="#">
                        General Settings
                    </a>
                    <div class="card-body">
                        <div class="form-group mg-b-10">
                            <label class="custom-switch ps-0">
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input" checked>
                                <span class="custom-switch-indicator"></span>
                                <span class="custom-switch-description mg-l-10">Show User Online</span>
                            </label>
                        </div>
                        <div class="form-group mg-b-10">
                            <label class="custom-switch ps-0">
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input">
                                <span class="custom-switch-indicator"></span>
                                <span class="custom-switch-description mg-l-10">Website Notication</span>
                            </label>
                        </div>
                        <div class="form-group mg-b-10">
                            <label class="custom-switch ps-0">
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input">
                                <span class="custom-switch-indicator"></span>
                                <span class="custom-switch-description mg-l-10">Show Recent activity</span>
                            </label>
                        </div>
                        <div class="form-group mg-b-10">
                            <label class="custom-switch ps-0">
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input">
                                <span class="custom-switch-indicator"></span>
                                <span class="custom-switch-description mg-l-10">Logout Automatically</span>
                            </label>
                        </div>
                        <div class="form-group mg-b-10">
                            <label class="custom-switch ps-0">
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input" checked>
                                <span class="custom-switch-indicator"></span>
                                <span class="custom-switch-description mg-l-10">Aloow All Notifications</span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/Sidebar-right-->