<!DOCTYPE html>
<!--
Template Name: Metronic - Bootstrap 4 HTML, React, Angular 9 & VueJS Admin Dashboard Theme
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: https://1.envato.market/EA4JP
Renew Support: https://1.envato.market/EA4JP
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en">
<!--begin::Head-->

<head>
    <base href="../../../">
    <meta charset="utf-8" />
    <title>Dasboard | Get Card</title>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="description" content="Advanced search datatables examples" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->

    <!--begin::Page Vendors Styles(used by this page)-->
    <link href="{{ asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.css?v=7.0.6') }}" rel="stylesheet" type="text/css" />
    <!--end::Page Vendors Styles-->

    <!--begin::Global Theme Styles(used by all pages)-->
    <link href="{{ asset('assets/plugins/global/plugins.bundle.css?v=7.0.6') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins/custom/prismjs/prismjs.bundle.css?v=7.0.6') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/style.bundle.css?v=7.0.6') }}" rel="stylesheet" type="text/css" />
    <!--end::Global Theme Styles-->

    <!--begin::Layout Themes(used by all pages)-->
    <!--end::Layout Themes-->

    <link rel="shortcut icon" href="{{ asset('assets/media/logos/favicon.ico') }}" />

</head>
<!--end::Head-->

<!--begin::Body-->

<body id="kt_body" class="header-fixed header-mobile-fixed sidebar-enabled page-loading">

    <!--begin::Main-->
    <!--begin::Header Mobile-->
    <div id="kt_header_mobile" class="header-mobile  header-mobile-fixed ">
        <!--begin::Logo-->
        <a href="index.html">
            <img alt="Logo" src="{{ asset('assets/media/logos/logo-letter-1.png') }}" class="logo-default max-h-30px" />
        </a>
        <!--end::Logo-->

        <!--begin::Toolbar-->
        <div class="d-flex align-items-center">
            <button class="btn p-0 burger-icon burger-icon-left rounded-0" id="kt_header_mobile_toggle">
                <span></span>
            </button>

            <button class="btn btn-hover-icon-primary p-0 ml-5" id="kt_sidebar_mobile_toggle">
                <span class="svg-icon svg-icon-xl">
                    <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Substract.svg-->
                    <svg
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                        height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24" />
                            <path d="M6,9 L6,15 C6,16.6568542 7.34314575,18 9,18 L15,18 L15,18.8181818 C15,20.2324881 14.2324881,21 12.8181818,21 L5.18181818,21 C3.76751186,21 3,20.2324881 3,18.8181818 L3,11.1818182 C3,9.76751186 3.76751186,9 5.18181818,9 L6,9 Z"
                                fill="#000000" fill-rule="nonzero" />
                            <path d="M10.1818182,4 L17.8181818,4 C19.2324881,4 20,4.76751186 20,6.18181818 L20,13.8181818 C20,15.2324881 19.2324881,16 17.8181818,16 L10.1818182,16 C8.76751186,16 8,15.2324881 8,13.8181818 L8,6.18181818 C8,4.76751186 8.76751186,4 10.1818182,4 Z"
                                fill="#000000" opacity="0.3" />
                        </g>
                    </svg>
                    <!--end::Svg Icon-->
                </span>
            </button>

            <button class="btn btn-hover-icon-primary p-0 ml-2" id="kt_aside_mobile_toggle">
                <span class="svg-icon svg-icon-xl">
                    <!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg-->
                    <svg
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                        height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <polygon points="0 0 24 0 24 24 0 24" />
                            <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z"
                                fill="#000000" fill-rule="nonzero" opacity="0.3" />
                            <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z"
                                fill="#000000" fill-rule="nonzero" />
                        </g>
                    </svg>
                    <!--end::Svg Icon-->
                </span>
            </button>
        </div>
        <!--end::Toolbar-->
    </div>
    <!--end::Header Mobile-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="d-flex flex-row flex-column-fluid page">
            <!--begin::Aside-->
            <div class="aside aside-left d-flex flex-column " id="kt_aside">
                <!--begin::Brand-->
                <div class="aside-brand d-flex flex-column align-items-center flex-column-auto py-9">
                    <!--begin::Logo-->
                    <div class="btn p-0 symbol symbol-40 symbol-success" href="?page=index" id="kt_quick_user_toggle">
                        <div class="symbol-label ">
                            <img alt="Logo" src="assets/media/svg/avatars/007-boy-2.svg" class="h-75 align-self-end" />
                        </div>
                    </div>
                    <!--end::Logo-->
                </div>
                <!--end::Brand-->

                <!--begin::Nav Wrapper-->
                <div class="aside-nav d-flex flex-column align-items-center flex-column-fluid pb-10">
                    <!--begin::Nav-->
                    <ul class="nav flex-column">
                        <!--begin::Item-->
                        <li class="nav-item mb-2" data-toggle="tooltip" data-placement="right" data-container="body" data-boundary="window" title="Dashboard">
                            <a href="/admin" class="nav-link btn btn-icon btn-lg btn-borderless active">
                                <span class="svg-icon svg-icon-xxl">
                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5" />
                                            <path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z"
                                                fill="#000000" opacity="0.3" />
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>
                            </a>
                        </li>
                        <!--end::Item-->

                        <!--begin::Item-->
                        <li class="nav-item mb-2" data-toggle="tooltip" data-placement="right" data-container="body"
                            data-boundary="window" title="Pengguna">
                            <a href="admin/list-pengguna" class="nav-link btn btn-icon btn-lg btn-borderless">
                                <span class="svg-icon svg-icon-xxl">
                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <polygon points="0 0 24 0 24 24 0 24" />
                                            <path d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z"
                                                fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                            <path d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z"
                                                fill="#000000" fill-rule="nonzero" />
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>
                            </a>
                        </li>
                        <!--end::Item-->

                        <!--begin::Item-->
                        <li class="nav-item mb-2" data-toggle="tooltip" data-placement="right" data-container="body"
                            data-boundary="window" title="Perusahaan">
                            <a href="admin/list-lembaga" class="nav-link btn btn-icon btn-lg btn-borderless"                                data-target="#kt_aside_tab_5" role="tab">
                                <span class="svg-icon svg-icon-xxl">
                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Home/Library.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24"/>
                                            <path d="M13.5,21 L13.5,18 C13.5,17.4477153 13.0522847,17 12.5,17 L11.5,17 C10.9477153,17 10.5,17.4477153 10.5,18 L10.5,21 L5,21 L5,4 C5,2.8954305 5.8954305,2 7,2 L17,2 C18.1045695,2 19,2.8954305 19,4 L19,21 L13.5,21 Z M9,4 C8.44771525,4 8,4.44771525 8,5 L8,6 C8,6.55228475 8.44771525,7 9,7 L10,7 C10.5522847,7 11,6.55228475 11,6 L11,5 C11,4.44771525 10.5522847,4 10,4 L9,4 Z M14,4 C13.4477153,4 13,4.44771525 13,5 L13,6 C13,6.55228475 13.4477153,7 14,7 L15,7 C15.5522847,7 16,6.55228475 16,6 L16,5 C16,4.44771525 15.5522847,4 15,4 L14,4 Z M9,8 C8.44771525,8 8,8.44771525 8,9 L8,10 C8,10.5522847 8.44771525,11 9,11 L10,11 C10.5522847,11 11,10.5522847 11,10 L11,9 C11,8.44771525 10.5522847,8 10,8 L9,8 Z M9,12 C8.44771525,12 8,12.4477153 8,13 L8,14 C8,14.5522847 8.44771525,15 9,15 L10,15 C10.5522847,15 11,14.5522847 11,14 L11,13 C11,12.4477153 10.5522847,12 10,12 L9,12 Z M14,12 C13.4477153,12 13,12.4477153 13,13 L13,14 C13,14.5522847 13.4477153,15 14,15 L15,15 C15.5522847,15 16,14.5522847 16,14 L16,13 C16,12.4477153 15.5522847,12 15,12 L14,12 Z" fill="#000000"/>
                                            <rect fill="#FFFFFF" x="13" y="8" width="3" height="3" rx="1"/>
                                            <path d="M4,21 L20,21 C20.5522847,21 21,21.4477153 21,22 L21,22.4 C21,22.7313708 20.7313708,23 20.4,23 L3.6,23 C3.26862915,23 3,22.7313708 3,22.4 L3,22 C3,21.4477153 3.44771525,21 4,21 Z" fill="#000000" opacity="0.3"/>
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>
                            </a>
                        </li>
                        <!--end::Item-->

                        <!--begin::Item-->
                        <li class="nav-item mb-2" data-toggle="tooltip" data-placement="right" data-container="body"
                            data-boundary="window" title="Tambah">
                            <a href="admin/card" class="nav-link btn btn-icon btn-lg btn-borderless">
                                <span class="svg-icon svg-icon-xxl">
                                    <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo10/dist/../src/media/svg/icons/Communication/Adress-book2.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24"/>
                                            <path d="M18,2 L20,2 C21.6568542,2 23,3.34314575 23,5 L23,19 C23,20.6568542 21.6568542,22 20,22 L18,22 L18,2 Z" fill="#000000" opacity="0.3"/>
                                            <path d="M5,2 L17,2 C18.6568542,2 20,3.34314575 20,5 L20,19 C20,20.6568542 18.6568542,22 17,22 L5,22 C4.44771525,22 4,21.5522847 4,21 L4,3 C4,2.44771525 4.44771525,2 5,2 Z M12,11 C13.1045695,11 14,10.1045695 14,9 C14,7.8954305 13.1045695,7 12,7 C10.8954305,7 10,7.8954305 10,9 C10,10.1045695 10.8954305,11 12,11 Z M7.00036205,16.4995035 C6.98863236,16.6619875 7.26484009,17 7.4041679,17 C11.463736,17 14.5228466,17 16.5815,17 C16.9988413,17 17.0053266,16.6221713 16.9988413,16.5 C16.8360465,13.4332455 14.6506758,12 11.9907452,12 C9.36772908,12 7.21569918,13.5165724 7.00036205,16.4995035 Z" fill="#000000"/>
                                        </g>
                                    </svg><!--end::Svg Icon-->
                                </span>
                            </a>
                        </li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Nav-->
                </div>
                <!--end::Nav Wrapper-->
            </div>
            <!--end::Aside-->

            <!--begin::Wrapper-->
            <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
                <!--begin::Header-->
                <div id="kt_header" class="header header-fixed ">
                    <!--begin::Header Wrapper-->
                    <div class="header-wrapper rounded-top-xl d-flex flex-grow-1 align-items-center">
                        <!--begin::Container-->
                        <div
                            class=" container-fluid  d-flex align-items-center justify-content-end justify-content-lg-between flex-wrap">
                            <!--begin::Menu Wrapper-->
                            <div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
                                <!--begin::Menu-->
                                <div id="kt_header_menu"
                                    class="header-menu header-menu-mobile  header-menu-layout-default ">
                                    <!--begin::Nav-->
                                    <ul class="menu-nav ">
                                        <li class="menu-item  menu-item-open menu-item-here menu-item-submenu menu-item-rel menu-item-open menu-item-here"
                                            data-menu-toggle="click" aria-haspopup="true"><a href="javascript:;"
                                                class="menu-link menu-toggle"><span class="menu-text">Dashboard</span><i
                                                    class="menu-arrow"></i></a>
                                        </li>
                                    </ul>
                                    <!--end::Nav-->
                                </div>
                                <!--end::Menu-->
                            </div>
                            <!--end::Menu Wrapper-->

                            <!--begin::Toolbar-->
                            <div class="d-flex align-items-center py-3 py-lg-2">
                                <!--begin::Dropdown-->
                                <div class="dropdown mr-2" data-toggle="tooltip" title="Quick actions"
                                    data-placement="left">
                                    <a href="#" class="btn btn-icon btn-light h-40px w-40px" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <span class="svg-icon svg-icon-lg svg-icon-info">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Clipboard-check.svg--><svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24" />
                                                    <path
                                                        d="M8,3 L8,3.5 C8,4.32842712 8.67157288,5 9.5,5 L14.5,5 C15.3284271,5 16,4.32842712 16,3.5 L16,3 L18,3 C19.1045695,3 20,3.8954305 20,5 L20,21 C20,22.1045695 19.1045695,23 18,23 L6,23 C4.8954305,23 4,22.1045695 4,21 L4,5 C4,3.8954305 4.8954305,3 6,3 L8,3 Z"
                                                        fill="#000000" opacity="0.3" />
                                                    <path
                                                        d="M10.875,15.75 C10.6354167,15.75 10.3958333,15.6541667 10.2041667,15.4625 L8.2875,13.5458333 C7.90416667,13.1625 7.90416667,12.5875 8.2875,12.2041667 C8.67083333,11.8208333 9.29375,11.8208333 9.62916667,12.2041667 L10.875,13.45 L14.0375,10.2875 C14.4208333,9.90416667 14.9958333,9.90416667 15.3791667,10.2875 C15.7625,10.6708333 15.7625,11.2458333 15.3791667,11.6291667 L11.5458333,15.4625 C11.3541667,15.6541667 11.1145833,15.75 10.875,15.75 Z"
                                                        fill="#000000" />
                                                    <path
                                                        d="M11,2 C11,1.44771525 11.4477153,1 12,1 C12.5522847,1 13,1.44771525 13,2 L14.5,2 C14.7761424,2 15,2.22385763 15,2.5 L15,3.5 C15,3.77614237 14.7761424,4 14.5,4 L9.5,4 C9.22385763,4 9,3.77614237 9,3.5 L9,2.5 C9,2.22385763 9.22385763,2 9.5,2 L11,2 Z"
                                                        fill="#000000" />
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span> </a>
                                    <div
                                        class="dropdown-menu p-0 m-0 dropdown-menu-anim-up dropdown-menu-md dropdown-menu-right">
                                        <!--begin::Navigation-->
                                        <ul class="navi navi-hover py-5">
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-icon"><i class="flaticon2-drop"></i></span>
                                                    <span class="navi-text">New Group</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-icon"><i class="flaticon2-list-3"></i></span>
                                                    <span class="navi-text">Contacts</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-icon"><i class="flaticon2-rocket-1"></i></span>
                                                    <span class="navi-text">Groups</span>
                                                    <span class="navi-link-badge">
                                                        <span
                                                            class="label label-light-primary label-inline font-weight-bold">new</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-icon"><i class="flaticon2-bell-2"></i></span>
                                                    <span class="navi-text">Calls</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-icon"><i class="flaticon2-gear"></i></span>
                                                    <span class="navi-text">Settings</span>
                                                </a>
                                            </li>

                                            <li class="navi-separator my-3"></li>

                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-icon"><i
                                                            class="flaticon2-magnifier-tool"></i></span>
                                                    <span class="navi-text">Help</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-icon"><i class="flaticon2-bell-2"></i></span>
                                                    <span class="navi-text">Privacy</span>
                                                    <span class="navi-link-badge">
                                                        <span
                                                            class="label label-light-danger label-rounded font-weight-bold">5</span>
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                        <!--end::Navigation-->
                                    </div>
                                </div>
                                <!--end::Dropdown-->

                                <!--begin::Dropdown-->
                                <div class="dropdown mr-2" data-toggle="tooltip" title="Quick actions"
                                    data-placement="left">
                                    <a href="#" class="btn btn-icon btn-light h-40px w-40px" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <span class="svg-icon svg-icon-lg svg-icon-success">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Files/DownloadedFile.svg--><svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <polygon points="0 0 24 0 24 24 0 24" />
                                                    <path
                                                        d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z"
                                                        fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                    <path
                                                        d="M14.8875071,11.8306874 L12.9310336,11.8306874 L12.9310336,9.82301606 C12.9310336,9.54687369 12.707176,9.32301606 12.4310336,9.32301606 L11.4077349,9.32301606 C11.1315925,9.32301606 10.9077349,9.54687369 10.9077349,9.82301606 L10.9077349,11.8306874 L8.9512614,11.8306874 C8.67511903,11.8306874 8.4512614,12.054545 8.4512614,12.3306874 C8.4512614,12.448999 8.49321518,12.5634776 8.56966458,12.6537723 L11.5377874,16.1594334 C11.7162223,16.3701835 12.0317191,16.3963802 12.2424692,16.2179453 C12.2635563,16.2000915 12.2831273,16.1805206 12.3009811,16.1594334 L15.2691039,12.6537723 C15.4475388,12.4430222 15.4213421,12.1275254 15.210592,11.9490905 C15.1202973,11.8726411 15.0058187,11.8306874 14.8875071,11.8306874 Z"
                                                        fill="#000000" />
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span> </a>
                                    <div
                                        class="dropdown-menu p-0 m-0 dropdown-menu-anim-up dropdown-menu-md dropdown-menu-right">
                                        <!--begin::Navigation-->
                                        <ul class="navi navi-hover">
                                            <li class="navi-header font-weight-bold py-4">
                                                <span class="font-size-lg">Choose Label:</span>
                                                <i class="flaticon2-information icon-md text-muted"
                                                    data-toggle="tooltip" data-placement="right"
                                                    title="Click to learn more..."></i>
                                            </li>
                                            <li class="navi-separator mb-3 opacity-70"></li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-text">
                                                        <span
                                                            class="label label-xl label-inline label-light-success">Customer</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-text">
                                                        <span
                                                            class="label label-xl label-inline label-light-danger">Partner</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-text">
                                                        <span
                                                            class="label label-xl label-inline label-light-warning">Suplier</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-text">
                                                        <span
                                                            class="label label-xl label-inline label-light-primary">Member</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-text">
                                                        <span
                                                            class="label label-xl label-inline label-light-dark">Staff</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="navi-separator mt-3 opacity-70"></li>
                                            <li class="navi-footer py-4">
                                                <a class="btn btn-clean font-weight-bold btn-sm" href="#">
                                                    <i class="ki ki-plus icon-sm"></i>
                                                    Add new
                                                </a>
                                            </li>
                                        </ul>
                                        <!--end::Navigation-->
                                    </div>
                                </div>
                                <!--end::Dropdown-->

                                <!--begin::Dropdown-->
                                <div class="dropdown dropdown-inline" data-toggle="tooltip" title="Quick actions"
                                    data-placement="left">
                                    <a href="#" class="btn btn-icon btn-light h-40px w-40px" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <span class="svg-icon svg-icon-lg svg-icon-warning">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Files/File.svg--><svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <polygon points="0 0 24 0 24 24 0 24" />
                                                    <path
                                                        d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z"
                                                        fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                    <rect fill="#000000" x="6" y="11" width="9" height="2" rx="1" />
                                                    <rect fill="#000000" x="6" y="15" width="5" height="2" rx="1" />
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span> </a>
                                    <div
                                        class="dropdown-menu p-0 m-0 dropdown-menu-anim-up dropdown-menu-md dropdown-menu-right">
                                        <!--begin::Naviigation-->
                                        <ul class="navi">
                                            <li class="navi-header font-weight-bold py-5">
                                                <span class="font-size-lg">Add New:</span>
                                                <i class="flaticon2-information icon-md text-muted"
                                                    data-toggle="tooltip" data-placement="right"
                                                    title="Click to learn more..."></i>
                                            </li>
                                            <li class="navi-separator mb-3 opacity-70"></li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-icon"><i
                                                            class="flaticon2-shopping-cart-1"></i></span>
                                                    <span class="navi-text">Order</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-icon"><i
                                                            class="navi-icon flaticon2-calendar-8"></i></span>
                                                    <span class="navi-text">Members</span>
                                                    <span class="navi-label">
                                                        <span
                                                            class="label label-light-danger label-rounded font-weight-bold">3</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-icon"><i
                                                            class="navi-icon flaticon2-telegram-logo"></i></span>
                                                    <span class="navi-text">Project</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-icon"><i
                                                            class="navi-icon flaticon2-new-email"></i></span>
                                                    <span class="navi-text">Record</span>
                                                    <span class="navi-label">
                                                        <span
                                                            class="label label-light-success label-rounded font-weight-bold">5</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="navi-separator mt-3 opacity-70"></li>
                                            <li class="navi-footer pt-5 pb-4">
                                                <a class="btn btn-light-primary font-weight-bolder btn-sm" href="#">More
                                                    options</a>
                                                <a class="btn btn-clean font-weight-bold btn-sm d-none" href="#"
                                                    data-toggle="tooltip" data-placement="right"
                                                    title="Click to learn more...">Learn more</a>
                                            </li>
                                        </ul>
                                        <!--end::Naviigation-->
                                    </div>
                                </div>
                                <!--end::Dropdown-->
                            </div>
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Container-->
                    </div>
                    <!--end::Header Wrapper-->
                </div>
                <!--end::Header-->

                <!--begin::Content-->
                <div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
                    <!--begin::Entry-->
                    <div class="d-flex flex-column-fluid">
                        <!--begin::Container-->
                        <div class=" container ">
                            <!--begin::Row-->
                            <div class="row mt-0 mt-lg-8">
                                <div class="col-xl-12">
                                    <!--begin::Charts Widget 5-->
                                    <!--begin::Card-->
                                    <div class="card card-custom gutter-b ">
                                        <!--begin::Card header-->
                                        <div class="card-header h-auto border-0">
                                            <div class="card-title py-5">
                                                <h3 class="card-label">
                                                    <span class="d-block text-dark font-weight-bolder">Recent
                                                        Orders</span>
                                                    <span class="d-block text-muted mt-2 font-size-sm">More than 500+
                                                        new orders</span>
                                                </h3>
                                            </div>
                                            <div class="card-toolbar">
                                                <ul class="nav nav-pills nav-pills-sm nav-dark-75" role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link py-2 px-4" data-toggle="tab"
                                                            href="#kt_charts_widget_2_chart_tab_1">
                                                            <span class="nav-text font-size-sm">Month</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link py-2 px-4" data-toggle="tab"
                                                            href="#kt_charts_widget_2_chart_tab_2">
                                                            <span class="nav-text font-size-sm">Week</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link py-2 px-4 active" data-toggle="tab"
                                                            href="#kt_charts_widget_2_chart_tab_3">
                                                            <span class="nav-text font-size-sm">Day</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!--end:: Card header-->

                                        <!--begin::Card body-->
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-8">
                                                    <div id="kt_charts_widget_5_chart"></div>
                                                </div>
                                                <div class="col-4 d-flex flex-column">

                                                    <!--begin::Engage Widget 2-->
                                                    <div class="flex-grow-1 bg-danger p-8 rounded-xl flex-grow-1 bgi-no-repeat"
                                                        style="background-position: calc(100% + 0.5rem) bottom; background-size: auto 70%; background-image: url(assets/media/svg/humans/custom-3.svg)">

                                                        <h4 class="text-inverse-danger mt-2 font-weight-bolder">User
                                                            Confidence</h4>

                                                        <p class="text-inverse-danger my-6">
                                                            Boost marketing & sales<br />through product confidence.
                                                        </p>

                                                        <a href="#"
                                                            class="btn btn-warning font-weight-bold py-2 px-6">Learn</a>
                                                    </div>
                                                    <!--end::Engage Widget 2-->
                                                </div>
                                            </div>
                                        </div>
                                        <!--end:: Card body-->
                                    </div>
                                    <!--end:: Card-->
                                    <!--end:: Charts Widget 5-->
                                </div>
                            </div>
                            <!--end::Row-->

                            <!--begin::Row-->
                            <div class="row">
                                <div class="col-xl-5">
                                    <div class="card-stretch gutter-b">
                                        <!--begin::Stats Widget 11-->
                                        <div class="card card-custom gutter-b">
                                            <!--begin::Body-->
                                            <div class="card-body p-0">
                                                <div
                                                    class="d-flex align-items-center justify-content-between card-spacer flex-grow-1">
                                                    <span class="symbol  symbol-50 symbol-light-success mr-2">
                                                        <span class="symbol-label">
                                                            <span class="svg-icon svg-icon-xl svg-icon-success">
                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg--><svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    width="24px" height="24px" viewBox="0 0 24 24"
                                                                    version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none"
                                                                        fill-rule="evenodd">
                                                                        <rect x="0" y="0" width="24" height="24" />
                                                                        <rect fill="#000000" x="4" y="4" width="7"
                                                                            height="7" rx="1.5" />
                                                                        <path
                                                                            d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z"
                                                                            fill="#000000" opacity="0.3" />
                                                                    </g>
                                                                </svg>
                                                                <!--end::Svg Icon-->
                                                            </span> </span>
                                                    </span>
                                                    <div class="d-flex flex-column text-right">
                                                        <span
                                                            class="text-dark-75 font-weight-bolder font-size-h3">750$</span>
                                                        <span class="text-muted font-weight-bold mt-2">Weekly
                                                            Income</span>
                                                    </div>
                                                </div>
                                                <div id="kt_stats_widget_11_chart" class="card-rounded-bottom"
                                                    data-color="success" style="height: 150px"></div>
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Stats Widget 11-->

                                        <!--begin::Stats Widget 10-->
                                        <div class="card card-custom ">
                                            <!--begin::Body-->
                                            <div class="card-body p-0">
                                                <div
                                                    class="d-flex align-items-center justify-content-between card-spacer flex-grow-1">
                                                    <span class="symbol  symbol-50 symbol-light-info mr-2">
                                                        <span class="symbol-label">
                                                            <span class="svg-icon svg-icon-xl svg-icon-info">
                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Cart3.svg--><svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    width="24px" height="24px" viewBox="0 0 24 24"
                                                                    version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none"
                                                                        fill-rule="evenodd">
                                                                        <rect x="0" y="0" width="24" height="24" />
                                                                        <path
                                                                            d="M12,4.56204994 L7.76822128,9.6401844 C7.4146572,10.0644613 6.7840925,10.1217854 6.3598156,9.76822128 C5.9355387,9.4146572 5.87821464,8.7840925 6.23177872,8.3598156 L11.2317787,2.3598156 C11.6315738,1.88006147 12.3684262,1.88006147 12.7682213,2.3598156 L17.7682213,8.3598156 C18.1217854,8.7840925 18.0644613,9.4146572 17.6401844,9.76822128 C17.2159075,10.1217854 16.5853428,10.0644613 16.2317787,9.6401844 L12,4.56204994 Z"
                                                                            fill="#000000" fill-rule="nonzero"
                                                                            opacity="0.3" />
                                                                        <path
                                                                            d="M3.5,9 L20.5,9 C21.0522847,9 21.5,9.44771525 21.5,10 C21.5,10.132026 21.4738562,10.2627452 21.4230769,10.3846154 L17.7692308,19.1538462 C17.3034221,20.271787 16.2111026,21 15,21 L9,21 C7.78889745,21 6.6965779,20.271787 6.23076923,19.1538462 L2.57692308,10.3846154 C2.36450587,9.87481408 2.60558331,9.28934029 3.11538462,9.07692308 C3.23725479,9.02614384 3.36797398,9 3.5,9 Z M12,17 C13.1045695,17 14,16.1045695 14,15 C14,13.8954305 13.1045695,13 12,13 C10.8954305,13 10,13.8954305 10,15 C10,16.1045695 10.8954305,17 12,17 Z"
                                                                            fill="#000000" />
                                                                    </g>
                                                                </svg>
                                                                <!--end::Svg Icon-->
                                                            </span> </span>
                                                    </span>
                                                    <div class="d-flex flex-column text-right">
                                                        <span
                                                            class="text-dark-75 font-weight-bolder font-size-h3">+259</span>
                                                        <span class="text-muted font-weight-bold mt-2">Sales
                                                            Change</span>
                                                    </div>
                                                </div>
                                                <div id="kt_stats_widget_10_chart" class="card-rounded-bottom"
                                                    data-color="info" style="height: 150px"></div>
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Stats Widget 10-->
                                    </div>
                                </div>

                                <div class="col-xl-7">
                                    <!--begin::Base Table Widget 5-->
                                    <div class="card card-custom card-stretch gutter-b">
                                        <!--begin::Header-->
                                        <div class="card-header border-0 pt-5">
                                            <h3 class="card-title align-items-start flex-column">
                                                <span class="card-label font-weight-bolder text-dark">New
                                                    Arrivals</span>
                                                <span class="text-muted mt-3 font-weight-bold font-size-sm">More than
                                                    400+ new members</span>
                                            </h3>
                                            <div class="card-toolbar">
                                                <ul class="nav nav-pills nav-pills-sm nav-dark-75">
                                                    <li class="nav-item">
                                                        <a class="nav-link py-2 px-4" data-toggle="tab"
                                                            href="#kt_tab_pane_4_1">Month</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link py-2 px-4" data-toggle="tab"
                                                            href="#kt_tab_pane_4_2">Week</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link py-2 px-4 active" data-toggle="tab"
                                                            href="#kt_tab_pane_4_3">Day</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!--end::Header-->

                                        <!--begin::Body-->
                                        <div class="card-body pt-2 pb-0">
                                            <!--begin::Table-->
                                            <div class="table-responsive">
                                                <table class="table table-borderless table-vertical-center">
                                                    <thead>
                                                        <tr>
                                                            <th class="p-0" style="width: 50px"></th>
                                                            <th class="p-0" style="min-width: 150px"></th>
                                                            <th class="p-0" style="min-width: 140px"></th>
                                                            <th class="p-0" style="min-width: 110px"></th>
                                                            <th class="p-0" style="min-width: 50px"></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="py-5 pl-0">
                                                                <div class="symbol symbol-50 symbol-light mr-2">
                                                                    <span class="symbol-label">
                                                                        <img src="assets/media/svg/misc/006-plurk.svg"
                                                                            class="h-50 align-self-center" alt="" />
                                                                    </span>
                                                                </div>
                                                            </td>
                                                            <td class="pl-0">
                                                                <a href="#"
                                                                    class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Top
                                                                    Authors</a>
                                                                <span
                                                                    class="text-muted font-weight-bold d-block">Successful
                                                                    Fellas</span>
                                                            </td>
                                                            <td class="text-right">
                                                                <span class="text-muted font-weight-500">
                                                                    ReactJs, HTML
                                                                </span>
                                                            </td>
                                                            <td class="text-right">
                                                                <span
                                                                    class="label label-lg label-light-primary label-inline">Approved</span>
                                                            </td>
                                                            <td class="text-right pr-0">
                                                                <a href="#" class="btn btn-icon btn-light btn-sm">
                                                                    <span class="svg-icon svg-icon-md svg-icon-success">
                                                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg--><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                            width="24px" height="24px"
                                                                            viewBox="0 0 24 24" version="1.1">
                                                                            <g stroke="none" stroke-width="1"
                                                                                fill="none" fill-rule="evenodd">
                                                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                                                <rect fill="#000000" opacity="0.3"
                                                                                    transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000) "
                                                                                    x="11" y="5" width="2" height="14"
                                                                                    rx="1" />
                                                                                <path
                                                                                    d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z"
                                                                                    fill="#000000" fill-rule="nonzero"
                                                                                    transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997) " />
                                                                            </g>
                                                                        </svg>
                                                                        <!--end::Svg Icon-->
                                                                    </span> </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="pl-0 py-5">
                                                                <div class="symbol symbol-50 symbol-light mr-2">
                                                                    <span class="symbol-label">
                                                                        <img src="assets/media/svg/misc/015-telegram.svg"
                                                                            class="h-50 align-self-center" alt="" />
                                                                    </span>
                                                                </div>
                                                            </td>
                                                            <td class="pl-0">
                                                                <a href="#"
                                                                    class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Popular
                                                                    Authors</a>
                                                                <span class="text-muted font-weight-bold d-block">Most
                                                                    Successful</span>
                                                            </td>
                                                            <td class="text-right">
                                                                <span class="text-muted font-weight-500">
                                                                    Python, MySQL
                                                                </span>
                                                            </td>
                                                            <td class="text-right">
                                                                <span
                                                                    class="label label-lg label-light-warning label-inline">In
                                                                    Progress</span>
                                                            </td>
                                                            <td class="text-right pr-0">
                                                                <a href="#" class="btn btn-icon btn-light btn-sm">
                                                                    <span class="svg-icon svg-icon-md svg-icon-success">
                                                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg--><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                            width="24px" height="24px"
                                                                            viewBox="0 0 24 24" version="1.1">
                                                                            <g stroke="none" stroke-width="1"
                                                                                fill="none" fill-rule="evenodd">
                                                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                                                <rect fill="#000000" opacity="0.3"
                                                                                    transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000) "
                                                                                    x="11" y="5" width="2" height="14"
                                                                                    rx="1" />
                                                                                <path
                                                                                    d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z"
                                                                                    fill="#000000" fill-rule="nonzero"
                                                                                    transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997) " />
                                                                            </g>
                                                                        </svg>
                                                                        <!--end::Svg Icon-->
                                                                    </span> </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="py-5 pl-0">
                                                                <div class="symbol symbol-50 symbol-light mr-2">
                                                                    <span class="symbol-label">
                                                                        <img src="assets/media/svg/misc/003-puzzle.svg"
                                                                            class="h-50 align-self-center" alt="" />
                                                                    </span>
                                                                </div>
                                                            </td>
                                                            <td class="pl-0">
                                                                <a href="#"
                                                                    class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">New
                                                                    Users</a>
                                                                <span
                                                                    class="text-muted font-weight-bold d-block">Awesome
                                                                    Users</span>
                                                            </td>
                                                            <td class="text-right">
                                                                <span class="text-muted font-weight-500">
                                                                    Laravel,Metronic
                                                                </span>
                                                            </td>
                                                            <td class="text-right">
                                                                <span
                                                                    class="label label-lg label-light-success label-inline">Success</span>
                                                            </td>
                                                            <td class="text-right pr-0">
                                                                <a href="#" class="btn btn-icon btn-light btn-sm">
                                                                    <span class="svg-icon svg-icon-md svg-icon-success">
                                                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg--><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                            width="24px" height="24px"
                                                                            viewBox="0 0 24 24" version="1.1">
                                                                            <g stroke="none" stroke-width="1"
                                                                                fill="none" fill-rule="evenodd">
                                                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                                                <rect fill="#000000" opacity="0.3"
                                                                                    transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000) "
                                                                                    x="11" y="5" width="2" height="14"
                                                                                    rx="1" />
                                                                                <path
                                                                                    d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z"
                                                                                    fill="#000000" fill-rule="nonzero"
                                                                                    transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997) " />
                                                                            </g>
                                                                        </svg>
                                                                        <!--end::Svg Icon-->
                                                                    </span> </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="py-5 pl-0">
                                                                <div class="symbol symbol-50 symbol-light mr-2">
                                                                    <span class="symbol-label">
                                                                        <img src="assets/media/svg/misc/005-bebo.svg"
                                                                            class="h-50 align-self-center" alt="" />
                                                                    </span>
                                                                </div>
                                                            </td>
                                                            <td class="pl-0">
                                                                <a href="#"
                                                                    class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Active
                                                                    Customers</a>
                                                                <span class="text-muted font-weight-bold d-block">Best
                                                                    Customers</span>
                                                            </td>
                                                            <td class="text-right">
                                                                <span class="text-muted font-weight-500">
                                                                    AngularJS, C#
                                                                </span>
                                                            </td>
                                                            <td class="text-right">
                                                                <span
                                                                    class="label label-lg label-light-danger label-inline">Rejected</span>
                                                            </td>
                                                            <td class="text-right pr-0">
                                                                <a href="#" class="btn btn-icon btn-light btn-sm">
                                                                    <span class="svg-icon svg-icon-md svg-icon-success">
                                                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg--><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                            width="24px" height="24px"
                                                                            viewBox="0 0 24 24" version="1.1">
                                                                            <g stroke="none" stroke-width="1"
                                                                                fill="none" fill-rule="evenodd">
                                                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                                                <rect fill="#000000" opacity="0.3"
                                                                                    transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000) "
                                                                                    x="11" y="5" width="2" height="14"
                                                                                    rx="1" />
                                                                                <path
                                                                                    d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z"
                                                                                    fill="#000000" fill-rule="nonzero"
                                                                                    transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997) " />
                                                                            </g>
                                                                        </svg>
                                                                        <!--end::Svg Icon-->
                                                                    </span> </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="py-5 pl-0">
                                                                <div class="symbol symbol-50 symbol-light mr-2">
                                                                    <span class="symbol-label">
                                                                        <img src="assets/media/svg/misc/014-kickstarter.svg"
                                                                            class="h-50 align-self-center" alt="" />
                                                                    </span>
                                                                </div>
                                                            </td>
                                                            <td class="pl-0">
                                                                <a href="#"
                                                                    class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Bestseller
                                                                    Theme</a>
                                                                <span
                                                                    class="text-muted font-weight-bold d-block">Amazing
                                                                    Templates</span>
                                                            </td>
                                                            <td class="text-right">
                                                                <span class="text-muted font-weight-500">
                                                                    ReactJS, Ruby
                                                                </span>
                                                            </td>
                                                            <td class="text-right">
                                                                <span
                                                                    class="label label-lg label-light-warning label-inline">In
                                                                    Progress</span>
                                                            </td>
                                                            <td class="text-right pr-0">
                                                                <a href="#" class="btn btn-icon btn-light btn-sm">
                                                                    <span class="svg-icon svg-icon-md svg-icon-success">
                                                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg--><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                            width="24px" height="24px"
                                                                            viewBox="0 0 24 24" version="1.1">
                                                                            <g stroke="none" stroke-width="1"
                                                                                fill="none" fill-rule="evenodd">
                                                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                                                <rect fill="#000000" opacity="0.3"
                                                                                    transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000) "
                                                                                    x="11" y="5" width="2" height="14"
                                                                                    rx="1" />
                                                                                <path
                                                                                    d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z"
                                                                                    fill="#000000" fill-rule="nonzero"
                                                                                    transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997) " />
                                                                            </g>
                                                                        </svg>
                                                                        <!--end::Svg Icon-->
                                                                    </span> </a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!--end::Tablet-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Base Table Widget 5-->
                                </div>
                            </div>
                            <!--end::Row-->

                            <!--begin::Row-->
                            <div class="row">
                                <div class="col-xl-5">
                                    <!--begin::List Widget 4-->
                                    <div class="card card-custom card-stretch gutter-b">
                                        <!--begin::Header-->
                                        <div class="card-header border-0">
                                            <h3 class="card-title font-weight-bolder text-dark">Todo</h3>
                                            <div class="card-toolbar">
                                                <div class="dropdown dropdown-inline">
                                                    <a href="#"
                                                        class="btn btn-light btn-sm font-size-sm font-weight-bolder dropdown-toggle text-dark-75"
                                                        data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        Create
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                        <!--begin::Navigation-->
                                                        <ul class="navi navi-hover">
                                                            <li class="navi-header pb-1">
                                                                <span
                                                                    class="text-primary text-uppercase font-weight-bold font-size-sm">Add
                                                                    new:</span>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-icon"><i
                                                                            class="flaticon2-shopping-cart-1"></i></span>
                                                                    <span class="navi-text">Order</span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-icon"><i
                                                                            class="flaticon2-calendar-8"></i></span>
                                                                    <span class="navi-text">Event</span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-icon"><i
                                                                            class="flaticon2-graph-1"></i></span>
                                                                    <span class="navi-text">Report</span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-icon"><i
                                                                            class="flaticon2-rocket-1"></i></span>
                                                                    <span class="navi-text">Post</span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-icon"><i
                                                                            class="flaticon2-writing"></i></span>
                                                                    <span class="navi-text">File</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <!--end::Navigation-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Header-->

                                        <!--begin::Body-->
                                        <div class="card-body pt-2">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Bullet-->
                                                <span class="bullet bullet-bar bg-success align-self-stretch"></span>
                                                <!--end::Bullet-->

                                                <!--begin::Checkbox-->
                                                <label
                                                    class="checkbox checkbox-lg checkbox-light-success checkbox-inline flex-shrink-0 m-0 mx-4">
                                                    <input type="checkbox" name="select" value="1" />
                                                    <span></span>
                                                </label>
                                                <!--end::Checkbox-->

                                                <!--begin::Text-->
                                                <div class="d-flex flex-column flex-grow-1">
                                                    <a href="#"
                                                        class="text-dark-75 text-hover-primary font-weight-bold font-size-lg mb-1">
                                                        Create FireStone Logo
                                                    </a>
                                                    <span class="text-muted font-weight-bold">
                                                        Due in 2 Days
                                                    </span>
                                                </div>
                                                <!--end::Text-->

                                                <!--begin::Dropdown-->
                                                <div class="dropdown dropdown-inline ml-2" data-toggle="tooltip"
                                                    title="Quick actions" data-placement="left">
                                                    <a href="#" class="btn btn-hover-light-primary btn-sm btn-icon"
                                                        data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="ki ki-bold-more-hor"></i>
                                                    </a>
                                                    <div
                                                        class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
                                                        <!--begin::Navigation-->
                                                        <ul class="navi navi-hover">
                                                            <li class="navi-header font-weight-bold py-4">
                                                                <span class="font-size-lg">Choose Label:</span>
                                                                <i class="flaticon2-information icon-md text-muted"
                                                                    data-toggle="tooltip" data-placement="right"
                                                                    title="Click to learn more..."></i>
                                                            </li>
                                                            <li class="navi-separator mb-3 opacity-70"></li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span
                                                                            class="label label-xl label-inline label-light-success">Customer</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span
                                                                            class="label label-xl label-inline label-light-danger">Partner</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span
                                                                            class="label label-xl label-inline label-light-warning">Suplier</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span
                                                                            class="label label-xl label-inline label-light-primary">Member</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span
                                                                            class="label label-xl label-inline label-light-dark">Staff</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-separator mt-3 opacity-70"></li>
                                                            <li class="navi-footer py-4">
                                                                <a class="btn btn-clean font-weight-bold btn-sm"
                                                                    href="#">
                                                                    <i class="ki ki-plus icon-sm"></i>
                                                                    Add new
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <!--end::Navigation-->
                                                    </div>
                                                </div>
                                                <!--end::Dropdown-->
                                            </div>
                                            <!--end:Item-->

                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mt-10">
                                                <!--begin::Bullet-->
                                                <span class="bullet bullet-bar bg-primary align-self-stretch"></span>
                                                <!--end::Bullet-->

                                                <!--begin::Checkbox-->
                                                <label
                                                    class="checkbox checkbox-lg checkbox-light-primary checkbox-inline flex-shrink-0 m-0 mx-4">
                                                    <input type="checkbox" value="1" />
                                                    <span></span>
                                                </label>
                                                <!--end::Checkbox-->

                                                <!--begin::Text-->
                                                <div class="d-flex flex-column flex-grow-1">
                                                    <a href="#"
                                                        class="text-dark-75 text-hover-primary font-weight-bold font-size-lg mb-1">
                                                        Stakeholder Meeting
                                                    </a>
                                                    <span class="text-muted font-weight-bold">
                                                        Due in 3 Days
                                                    </span>
                                                </div>
                                                <!--end::Text-->

                                                <!--begin::Dropdown-->
                                                <div class="dropdown dropdown-inline ml-2" data-toggle="tooltip"
                                                    title="Quick actions" data-placement="left">
                                                    <a href="#" class="btn btn-hover-light-primary btn-sm btn-icon"
                                                        data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="ki ki-bold-more-hor"></i>
                                                    </a>
                                                    <div
                                                        class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
                                                        <!--begin::Navigation-->
                                                        <ul class="navi navi-hover">
                                                            <li class="navi-header font-weight-bold py-4">
                                                                <span class="font-size-lg">Choose Label:</span>
                                                                <i class="flaticon2-information icon-md text-muted"
                                                                    data-toggle="tooltip" data-placement="right"
                                                                    title="Click to learn more..."></i>
                                                            </li>
                                                            <li class="navi-separator mb-3 opacity-70"></li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span
                                                                            class="label label-xl label-inline label-light-success">Customer</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span
                                                                            class="label label-xl label-inline label-light-danger">Partner</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span
                                                                            class="label label-xl label-inline label-light-warning">Suplier</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span
                                                                            class="label label-xl label-inline label-light-primary">Member</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span
                                                                            class="label label-xl label-inline label-light-dark">Staff</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-separator mt-3 opacity-70"></li>
                                                            <li class="navi-footer py-4">
                                                                <a class="btn btn-clean font-weight-bold btn-sm"
                                                                    href="#">
                                                                    <i class="ki ki-plus icon-sm"></i>
                                                                    Add new
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <!--end::Navigation-->
                                                    </div>
                                                </div>
                                                <!--end::Dropdown-->
                                            </div>
                                            <!--end::Item-->

                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mt-10">
                                                <!--begin::Bullet-->
                                                <span class="bullet bullet-bar bg-warning align-self-stretch"></span>
                                                <!--end::Bullet-->

                                                <!--begin::Checkbox-->
                                                <label
                                                    class="checkbox checkbox-lg checkbox-light-warning checkbox-inline flex-shrink-0 m-0 mx-4">
                                                    <input type="checkbox" value="1" />
                                                    <span></span>
                                                </label>
                                                <!--end::Checkbox-->

                                                <!--begin::Text-->
                                                <div class="d-flex flex-column flex-grow-1">
                                                    <a href="#"
                                                        class="text-dark-75 text-hover-primary font-size-sm font-weight-bold font-size-lg mb-1">
                                                        Scoping & Estimations
                                                    </a>
                                                    <span class="text-muted font-weight-bold">
                                                        Due in 5 Days
                                                    </span>
                                                </div>
                                                <!--end::Text-->

                                                <!--begin: Dropdown-->
                                                <div class="dropdown dropdown-inline ml-2" data-toggle="tooltip"
                                                    title="Quick actions" data-placement="left">
                                                    <a href="#" class="btn btn-hover-light-primary btn-sm btn-icon"
                                                        data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="ki ki-bold-more-hor"></i>
                                                    </a>
                                                    <div
                                                        class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
                                                        <!--begin::Navigation-->
                                                        <ul class="navi navi-hover">
                                                            <li class="navi-header font-weight-bold py-4">
                                                                <span class="font-size-lg">Choose Label:</span>
                                                                <i class="flaticon2-information icon-md text-muted"
                                                                    data-toggle="tooltip" data-placement="right"
                                                                    title="Click to learn more..."></i>
                                                            </li>
                                                            <li class="navi-separator mb-3 opacity-70"></li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span
                                                                            class="label label-xl label-inline label-light-success">Customer</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span
                                                                            class="label label-xl label-inline label-light-danger">Partner</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span
                                                                            class="label label-xl label-inline label-light-warning">Suplier</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span
                                                                            class="label label-xl label-inline label-light-primary">Member</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span
                                                                            class="label label-xl label-inline label-light-dark">Staff</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-separator mt-3 opacity-70"></li>
                                                            <li class="navi-footer py-4">
                                                                <a class="btn btn-clean font-weight-bold btn-sm"
                                                                    href="#">
                                                                    <i class="ki ki-plus icon-sm"></i>
                                                                    Add new
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <!--end::Navigation-->
                                                    </div>
                                                </div>
                                                <!--end::Dropdown-->
                                            </div>
                                            <!--end::Item-->

                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mt-10">
                                                <!--begin::Bullet-->
                                                <span class="bullet bullet-bar bg-info align-self-stretch"></span>
                                                <!--end::Bullet-->

                                                <!--begin::Checkbox-->
                                                <label
                                                    class="checkbox checkbox-lg checkbox-light-info checkbox-inline flex-shrink-0 m-0 mx-4">
                                                    <input type="checkbox" value="1" />
                                                    <span></span>
                                                </label>
                                                <!--end::Checkbox-->

                                                <!--begin::Text-->
                                                <div class="d-flex flex-column flex-grow-1">
                                                    <a href="#"
                                                        class="text-dark-75 text-hover-primary font-weight-bold font-size-lg mb-1">
                                                        Sprint Showcase
                                                    </a>
                                                    <span class="text-muted font-weight-bold">
                                                        Due in 1 Day
                                                    </span>
                                                </div>
                                                <!--end::Text-->

                                                <!--begin::Dropdown-->
                                                <div class="dropdown dropdown-inline ml-2" data-toggle="tooltip"
                                                    title="Quick actions" data-placement="left">
                                                    <a href="#" class="btn btn-hover-light-primary btn-sm btn-icon"
                                                        data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="ki ki-bold-more-hor"></i>
                                                    </a>
                                                    <div
                                                        class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
                                                        <!--begin::Navigation-->
                                                        <ul class="navi navi-hover py-5">
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-icon"><i
                                                                            class="flaticon2-drop"></i></span>
                                                                    <span class="navi-text">New Group</span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-icon"><i
                                                                            class="flaticon2-list-3"></i></span>
                                                                    <span class="navi-text">Contacts</span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-icon"><i
                                                                            class="flaticon2-rocket-1"></i></span>
                                                                    <span class="navi-text">Groups</span>
                                                                    <span class="navi-link-badge">
                                                                        <span
                                                                            class="label label-light-primary label-inline font-weight-bold">new</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-icon"><i
                                                                            class="flaticon2-bell-2"></i></span>
                                                                    <span class="navi-text">Calls</span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-icon"><i
                                                                            class="flaticon2-gear"></i></span>
                                                                    <span class="navi-text">Settings</span>
                                                                </a>
                                                            </li>

                                                            <li class="navi-separator my-3"></li>

                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-icon"><i
                                                                            class="flaticon2-magnifier-tool"></i></span>
                                                                    <span class="navi-text">Help</span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-icon"><i
                                                                            class="flaticon2-bell-2"></i></span>
                                                                    <span class="navi-text">Privacy</span>
                                                                    <span class="navi-link-badge">
                                                                        <span
                                                                            class="label label-light-danger label-rounded font-weight-bold">5</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <!--end::Navigation-->
                                                    </div>
                                                </div>
                                                <!--end::Dropdown-->
                                            </div>
                                            <!--end::Item-->

                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mt-10">
                                                <!--begin::Bullet-->
                                                <span class="bullet bullet-bar bg-danger align-self-stretch"></span>
                                                <!--end::Bullet-->

                                                <!--begin::Checkbox-->
                                                <label
                                                    class="checkbox checkbox-lg checkbox-light-danger checkbox-inline flex-shrink-0 m-0 mx-4">
                                                    <input type="checkbox" value="1" />
                                                    <span></span>
                                                </label>
                                                <!--end::Checkbox:-->

                                                <!--begin::Title-->
                                                <div class="d-flex flex-column flex-grow-1">
                                                    <a href="#"
                                                        class="text-dark-75 text-hover-primary font-weight-bold font-size-lg mb-1">
                                                        Project Retro
                                                    </a>
                                                    <span class="text-muted font-weight-bold">
                                                        Due in 12 Days
                                                    </span>
                                                </div>
                                                <!--end::Text-->

                                                <!--begin: Dropdown-->
                                                <div class="dropdown dropdown-inline ml-2" data-toggle="tooltip"
                                                    title="Quick actions" data-placement="left">
                                                    <a href="#" class="btn btn-hover-light-primary btn-sm btn-icon"
                                                        data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="ki ki-bold-more-hor"></i>
                                                    </a>
                                                    <div
                                                        class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
                                                        <!--begin::Navigation-->
                                                        <ul class="navi navi-hover">
                                                            <li class="navi-header font-weight-bold py-4">
                                                                <span class="font-size-lg">Choose Label:</span>
                                                                <i class="flaticon2-information icon-md text-muted"
                                                                    data-toggle="tooltip" data-placement="right"
                                                                    title="Click to learn more..."></i>
                                                            </li>
                                                            <li class="navi-separator mb-3 opacity-70"></li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span
                                                                            class="label label-xl label-inline label-light-success">Customer</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span
                                                                            class="label label-xl label-inline label-light-danger">Partner</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span
                                                                            class="label label-xl label-inline label-light-warning">Suplier</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span
                                                                            class="label label-xl label-inline label-light-primary">Member</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span
                                                                            class="label label-xl label-inline label-light-dark">Staff</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-separator mt-3 opacity-70"></li>
                                                            <li class="navi-footer py-4">
                                                                <a class="btn btn-clean font-weight-bold btn-sm"
                                                                    href="#">
                                                                    <i class="ki ki-plus icon-sm"></i>
                                                                    Add new
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <!--end::Navigation-->
                                                    </div>
                                                </div>
                                                <!--end::Dropdown-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end:List Widget 4-->
                                </div>

                                <div class="col-xl-7">
                                    <!--begin::List Widget 12-->
                                    <div class="card card-custom card-stretch">
                                        <!--begin::Header-->
                                        <div class="card-header border-0">
                                            <h3 class="card-title font-weight-bolder text-dark">Latest Media</h3>
                                            <div class="card-toolbar">
                                                <div class="dropdown dropdown-inline">
                                                    <a href="#"
                                                        class="btn btn-clean btn-hover-light-primary btn-sm btn-icon"
                                                        data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="ki ki-bold-more-ver"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                        <!--begin::Navigation-->
                                                        <ul class="navi navi-hover">
                                                            <li class="navi-header pb-1">
                                                                <span
                                                                    class="text-primary text-uppercase font-weight-bold font-size-sm">Add
                                                                    new:</span>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-icon"><i
                                                                            class="flaticon2-shopping-cart-1"></i></span>
                                                                    <span class="navi-text">Order</span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-icon"><i
                                                                            class="flaticon2-calendar-8"></i></span>
                                                                    <span class="navi-text">Event</span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-icon"><i
                                                                            class="flaticon2-graph-1"></i></span>
                                                                    <span class="navi-text">Report</span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-icon"><i
                                                                            class="flaticon2-rocket-1"></i></span>
                                                                    <span class="navi-text">Post</span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-icon"><i
                                                                            class="flaticon2-writing"></i></span>
                                                                    <span class="navi-text">File</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <!--end::Navigation-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Header-->

                                        <!--begin::Body-->
                                        <div class="card-body pt-2">
                                            <!--begin::Item-->
                                            <div class="d-flex flex-wrap align-items-center mb-10">
                                                <!--begin::Symbol-->

                                                <div class="symbol symbol-60 symbol-2by3 flex-shrink-0">
                                                    <div class="symbol-label"
                                                        style="background-image: url('assets/media/stock-600x400/img-20.jpg')">
                                                    </div>
                                                </div>
                                                <!--end::Symbol-->

                                                <!--begin::Title-->
                                                <div class="d-flex flex-column ml-4 flex-grow-1 mr-2">
                                                    <a href="#"
                                                        class="text-dark-75 font-weight-bold text-hover-primary font-size-lg mb-1">Cup
                                                        & Green</a>
                                                    <span class="text-muted font-weight-bold">Size: 87KB</span>
                                                </div>
                                                <!--end::Title-->

                                                <!--begin::btn-->
                                                <span
                                                    class="label label-lg label-light-primary label-inline mt-lg-0 mb-lg-0 my-2 font-weight-bold py-4">Approved</span>
                                                <!--end::Btn-->
                                            </div>
                                            <!--end::Item-->

                                            <!--begin::Item-->
                                            <div class="d-flex flex-wrap align-items-center mb-10">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-60 symbol-2by3 flex-shrink-0">
                                                    <div class="symbol-label"
                                                        style="background-image: url('assets/media/stock-600x400/img-19.jpg')">
                                                    </div>
                                                </div>
                                                <!--end::Symbol-->

                                                <!--begin::Title-->
                                                <div class="d-flex flex-column ml-4 flex-grow-1 mr-2">
                                                    <a href="#"
                                                        class="text-dark-75 font-weight-bold text-hover-primary font-size-lg mb-1">Yellow
                                                        Background</a>
                                                    <span class="text-muted font-weight-bold">Size: 1.2MB</span>
                                                </div>
                                                <!--end::Title-->

                                                <!--begin::btn-->
                                                <span
                                                    class="label label-lg label-light-warning label-inline mt-lg-0 mb-lg-0 my-2 font-weight-bold py-4">In
                                                    Progress</span>
                                                <!--end::Btn-->
                                            </div>
                                            <!--end::Item-->

                                            <!--begin::Item-->
                                            <div class="d-flex flex-wrap align-items-center mb-10">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-60 symbol-2by3 flex-shrink-0">
                                                    <div class="symbol-label"
                                                        style="background-image: url('assets/media/stock-600x400/img-25.jpg')">
                                                    </div>
                                                </div>
                                                <!--end::Symbol-->

                                                <!--begin::Title-->
                                                <div class="d-flex flex-column ml-4 flex-grow-1 mr-2">
                                                    <a href="#"
                                                        class="text-dark-75 font-weight-bold text-hover-primary font-size-lg mb-1">Nike
                                                        & Blue</a>
                                                    <span class="text-muted font-weight-bold">Size: 87KB</span>
                                                </div>
                                                <!--end::Title-->

                                                <!--begin::btn-->
                                                <span
                                                    class="label label-lg label-light-success label-inline mt-lg-0 mb-lg-0 my-2 font-weight-bold py-4">Success</span>
                                                <!--end::btn-->
                                            </div>
                                            <!--end::Item-->

                                            <!--begin::Item-->
                                            <div class="d-flex flex-wrap align-items-center">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-60 symbol-2by3 flex-shrink-0">
                                                    <div class="symbol-label"
                                                        style="background-image: url('assets/media/stock-600x400/img-24.jpg')">
                                                    </div>
                                                </div>
                                                <!--end::Symbol-->

                                                <!--begin::Title-->
                                                <div class="d-flex flex-column ml-4 flex-grow-1 mr-2">
                                                    <a href="#"
                                                        class="text-dark-75 font-weight-bold font-size-lg text-hover-primary mb-1">Red
                                                        Boots</a>
                                                    <span class="text-muted font-weight-bold">Size: 345KB</span>
                                                </div>
                                                <!--end::Title-->

                                                <!--begin::btn-->
                                                <span
                                                    class="label label-lg label-light-danger label-inline mt-lg-0 mb-lg-0 my-2 font-weight-bold py-4">Rejected</span>
                                                <!--end::btn-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::List Widget 12-->
                                </div>
                            </div>
                            <!--end::Row-->
                        </div>
                        <!--end::Container-->
                    </div>
                    <!--end::Entry-->
                </div>
                <!--end::Content-->

                <!--begin::Footer-->
                <div class="footer py-2 py-lg-0 my-5 d-flex flex-lg-column " id="kt_footer">
                    <!--begin::Container-->
                    <div
                        class=" container-fluid  d-flex flex-column flex-md-row align-items-center justify-content-between">
                        <!--begin::Copyright-->
                        <div class="text-dark order-2 order-md-1">
                            <span class="text-muted font-weight-bold mr-2">2022&copy;</span>
                            <a href="http://keenthemes.com/metronic" target="_blank"
                                class="text-dark-75 text-hover-primary">Get Card</a>
                        </div>
                        <!--end::Copyright-->

                        <!--begin::Nav-->
                        <div class="nav nav-dark order-1 order-md-2">
                            <a href="http://keenthemes.com/metronic" target="_blank"
                                class="nav-link pr-3 pl-0">About</a>
                            <a href="http://keenthemes.com/metronic" target="_blank" class="nav-link px-3">Team</a>
                            <a href="http://keenthemes.com/metronic" target="_blank"
                                class="nav-link pl-3 pr-0">Contact</a>
                        </div>
                        <!--end::Nav-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Footer-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>
    <!--end::Main-->

    <!-- begin::User Panel-->
    <div id="kt_quick_user" class="offcanvas offcanvas-left p-10">
        <!--begin::Header-->
        <div class="offcanvas-header d-flex align-items-center justify-content-between pb-5">
            <h3 class="font-weight-bold m-0">
                User Profile
                <small class="text-muted font-size-sm ml-2"></small>
            </h3>
            <a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_quick_user_close">
                <i class="ki ki-close icon-xs text-muted"></i>
            </a>
        </div>
        <!--end::Header-->

        <!--begin::Content-->
        <div class="offcanvas-content pr-5 mr-n5">
            <!--begin::Header-->
            <div class="d-flex align-items-center mt-5">
                <div class="symbol symbol-100 mr-5">
                    <div class="symbol-label" id="kt_image_5"
                    style="background-image: url(assets/media/users/blank.png)"></div>
                    <i class="symbol-badge bg-success"></i>
                </div>
                <div class="d-flex flex-column">
                    <a href="#" class="font-weight-bold font-size-h5 text-dark-75 text-hover-primary">
                        {{ Auth::user()->name }}
                    </a>
                    <div class="text-muted mt-1">
                        Application Developer
                    </div>
                    <div class="navi mt-2">
                        <a href="#" class="navi-item">
                            <span class="navi-link p-0 pb-2">
                                <span class="navi-icon mr-1">
                                    <span class="svg-icon svg-icon-lg svg-icon-primary">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Mail-notification.svg--><svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                            viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24" />
                                                <path
                                                    d="M21,12.0829584 C20.6747915,12.0283988 20.3407122,12 20,12 C16.6862915,12 14,14.6862915 14,18 C14,18.3407122 14.0283988,18.6747915 14.0829584,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,8 C3,6.8954305 3.8954305,6 5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,12.0829584 Z M18.1444251,7.83964668 L12,11.1481833 L5.85557487,7.83964668 C5.4908718,7.6432681 5.03602525,7.77972206 4.83964668,8.14442513 C4.6432681,8.5091282 4.77972206,8.96397475 5.14442513,9.16035332 L11.6444251,12.6603533 C11.8664074,12.7798822 12.1335926,12.7798822 12.3555749,12.6603533 L18.8555749,9.16035332 C19.2202779,8.96397475 19.3567319,8.5091282 19.1603533,8.14442513 C18.9639747,7.77972206 18.5091282,7.6432681 18.1444251,7.83964668 Z"
                                                    fill="#000000" />
                                                <circle fill="#000000" opacity="0.3" cx="19.5" cy="17.5" r="2.5" />
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                    </span> </span>
                                <span class="navi-text text-muted text-hover-primary"> {{ Auth::user()->email }}</span>
                            </span>
                        </a>

                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-sm btn-light-primary font-weight-bolder py-2 px-5">Keluar</button>
                        </form>
                    </div>
                </div>
            </div>
            <!--end::Header-->

            <!--begin::Separator-->
            <div class="separator separator-dashed mt-8 mb-5"></div>
            <!--end::Separator-->

        </div>
        <!--end::Content-->
    </div>
    <!-- end::User Panel-->


    <!--begin::Quick Panel-->
    <div id="kt_quick_panel" class="offcanvas offcanvas-left pt-5 pb-10">
        <!--begin::Header-->
        <div class="offcanvas-header offcanvas-header-navs d-flex align-items-center justify-content-between mb-5">
            <ul class="nav nav-bold nav-tabs nav-tabs-line nav-tabs-line-3x nav-tabs-primary flex-grow-1 px-10"
                role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#kt_quick_panel_logs">Audit Logs</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#kt_quick_panel_notifications">Notifications</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#kt_quick_panel_settings">Settings</a>
                </li>
            </ul>
            <div class="offcanvas-close mt-n1 pr-5">
                <a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_quick_panel_close">
                    <i class="ki ki-close icon-xs text-muted"></i>
                </a>
            </div>
        </div>
        <!--end::Header-->

        <!--begin::Content-->
        <div class="offcanvas-content px-10">
            <div class="tab-content">
                <!--begin::Tabpane-->
                <div class="tab-pane fade show pt-3 pr-5 mr-n5 active" id="kt_quick_panel_logs" role="tabpanel">
                    <!--begin::Section-->
                    <div class="mb-15">
                        <h5 class="font-weight-bold mb-5">System Messages</h5>
                        <!--begin: Item-->
                        <div class="d-flex align-items-center flex-wrap mb-5">
                            <div class="symbol symbol-50 symbol-light mr-5">
                                <span class="symbol-label">
                                    <img src="assets/media/svg/misc/006-plurk.svg" class="h-50 align-self-center"
                                        alt="" />
                                </span>
                            </div>
                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                <a href="#"
                                    class="font-weight-bolder text-dark-75 text-hover-primary font-size-lg mb-1">Top
                                    Authors</a>
                                <span class="text-muted font-weight-bold">Most Successful Fellas</span>
                            </div>
                            <span
                                class="btn btn-sm btn-light font-weight-bolder py-1 my-lg-0 my-2 text-dark-50">+82$</span>
                        </div>
                        <!--end: Item-->

                        <!--begin: Item-->
                        <div class="d-flex align-items-center flex-wrap mb-5">
                            <div class="symbol symbol-50 symbol-light mr-5">
                                <span class="symbol-label">
                                    <img src="assets/media/svg/misc/015-telegram.svg" class="h-50 align-self-center"
                                        alt="" />
                                </span>
                            </div>
                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                <a href="#"
                                    class="font-weight-bolder text-dark-75 text-hover-primary font-size-lg mb-1">Popular
                                    Authors</a>
                                <span class="text-muted font-weight-bold">Most Successful Fellas</span>
                            </div>
                            <span
                                class="btn btn-sm btn-light font-weight-bolder  my-lg-0 my-2 py-1 text-dark-50">+280$</span>
                        </div>
                        <!--end: Item-->

                        <!--begin: Item-->
                        <div class="d-flex align-items-center flex-wrap mb-5">
                            <div class="symbol symbol-50 symbol-light mr-5">
                                <span class="symbol-label">
                                    <img src="assets/media/svg/misc/003-puzzle.svg" class="h-50 align-self-center"
                                        alt="" />
                                </span>
                            </div>
                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                <a href="#"
                                    class="font-weight-bolder text-dark-75 text-hover-primary font-size-lg mb-1">New
                                    Users</a>
                                <span class="text-muted font-weight-bold">Most Successful Fellas</span>
                            </div>
                            <span
                                class="btn btn-sm btn-light font-weight-bolder  my-lg-0 my-2 py-1 text-dark-50">+4500$</span>
                        </div>
                        <!--end: Item-->

                        <!--begin: Item-->
                        <div class="d-flex align-items-center flex-wrap mb-5">
                            <div class="symbol symbol-50 symbol-light mr-5">
                                <span class="symbol-label">
                                    <img src="assets/media/svg/misc/005-bebo.svg" class="h-50 align-self-center"
                                        alt="" />
                                </span>
                            </div>
                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                <a href="#"
                                    class="font-weight-bolder text-dark-75 text-hover-primary font-size-lg mb-1">Active
                                    Customers</a>
                                <span class="text-muted font-weight-bold">Most Successful Fellas</span>
                            </div>
                            <span
                                class="btn btn-sm btn-light font-weight-bolder my-lg-0 my-2 py-1 text-dark-50">+4500$</span>
                        </div>
                        <!--end: Item-->

                        <!--begin: Item-->
                        <div class="d-flex align-items-center flex-wrap">
                            <div class="symbol symbol-50 symbol-light mr-5">
                                <span class="symbol-label">
                                    <img src="assets/media/svg/misc/014-kickstarter.svg" class="h-50 align-self-center"
                                        alt="" />
                                </span>
                            </div>
                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                <a href="#"
                                    class="font-weight-bolder text-dark-75 text-hover-primary font-size-lg mb-1">Bestseller
                                    Theme</a>
                                <span class="text-muted font-weight-bold">Most Successful Fellas</span>
                            </div>
                            <span
                                class="btn btn-sm btn-light font-weight-bolder my-lg-0 my-2 py-1 text-dark-50">+4500$</span>
                        </div>
                        <!--end: Item-->
                    </div>
                    <!--end::Section-->

                    <!--begin::Section-->
                    <div class="mb-5">
                        <h5 class="font-weight-bold mb-5">Notifications</h5>

                        <!--begin: Item-->
                        <div class="d-flex align-items-center bg-light-warning rounded p-5 mb-5">
                            <span class="svg-icon svg-icon-warning mr-5">
                                <span class="svg-icon svg-icon-lg">
                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Home/Library.svg--><svg
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path
                                                d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z"
                                                fill="#000000" />
                                            <rect fill="#000000" opacity="0.3"
                                                transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519) "
                                                x="16.3255682" y="2.94551858" width="3" height="18" rx="1" />
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span> </span>

                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                <a href="#"
                                    class="font-weight-normal text-dark-75 text-hover-primary font-size-lg mb-1">Another
                                    purpose persuade</a>
                                <span class="text-muted font-size-sm">Due in 2 Days</span>
                            </div>

                            <span class="font-weight-bolder text-warning py-1 font-size-lg">+28%</span>
                        </div>
                        <!--end: Item-->

                        <!--begin: Item-->
                        <div class="d-flex align-items-center bg-light-success rounded p-5 mb-5">
                            <span class="svg-icon svg-icon-success mr-5">
                                <span class="svg-icon svg-icon-lg">
                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg--><svg
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path
                                                d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z"
                                                fill="#000000" fill-rule="nonzero"
                                                transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953) " />
                                            <path
                                                d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z"
                                                fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span> </span>
                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                <a href="#"
                                    class="font-weight-normal text-dark-75 text-hover-primary font-size-lg mb-1">Would
                                    be to people</a>
                                <span class="text-muted font-size-sm">Due in 2 Days</span>
                            </div>

                            <span class="font-weight-bolder text-success py-1 font-size-lg">+50%</span>
                        </div>
                        <!--end: Item-->

                        <!--begin: Item-->
                        <div class="d-flex align-items-center bg-light-danger rounded p-5 mb-5">
                            <span class="svg-icon svg-icon-danger mr-5">
                                <span class="svg-icon svg-icon-lg">
                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group-chat.svg--><svg
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path
                                                d="M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z"
                                                fill="#000000" />
                                            <path
                                                d="M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z"
                                                fill="#000000" opacity="0.3" />
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span> </span>
                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                <a href="#"
                                    class="font-weight-normel text-dark-75 text-hover-primary font-size-lg mb-1">Purpose
                                    would be to persuade</a>
                                <span class="text-muted font-size-sm">Due in 2 Days</span>
                            </div>

                            <span class="font-weight-bolder text-danger py-1 font-size-lg">-27%</span>
                        </div>
                        <!--end: Item-->

                        <!--begin: Item-->
                        <div class="d-flex align-items-center bg-light-info rounded p-5">
                            <span class="svg-icon svg-icon-info mr-5">
                                <span class="svg-icon svg-icon-lg">
                                    <!--begin::Svg Icon | path:assets/media/svg/icons/General/Attachment2.svg--><svg
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path
                                                d="M11.7573593,15.2426407 L8.75735931,15.2426407 C8.20507456,15.2426407 7.75735931,15.6903559 7.75735931,16.2426407 C7.75735931,16.7949254 8.20507456,17.2426407 8.75735931,17.2426407 L11.7573593,17.2426407 L11.7573593,18.2426407 C11.7573593,19.3472102 10.8619288,20.2426407 9.75735931,20.2426407 L5.75735931,20.2426407 C4.65278981,20.2426407 3.75735931,19.3472102 3.75735931,18.2426407 L3.75735931,14.2426407 C3.75735931,13.1380712 4.65278981,12.2426407 5.75735931,12.2426407 L9.75735931,12.2426407 C10.8619288,12.2426407 11.7573593,13.1380712 11.7573593,14.2426407 L11.7573593,15.2426407 Z"
                                                fill="#000000" opacity="0.3"
                                                transform="translate(7.757359, 16.242641) rotate(-45.000000) translate(-7.757359, -16.242641) " />
                                            <path
                                                d="M12.2426407,8.75735931 L15.2426407,8.75735931 C15.7949254,8.75735931 16.2426407,8.30964406 16.2426407,7.75735931 C16.2426407,7.20507456 15.7949254,6.75735931 15.2426407,6.75735931 L12.2426407,6.75735931 L12.2426407,5.75735931 C12.2426407,4.65278981 13.1380712,3.75735931 14.2426407,3.75735931 L18.2426407,3.75735931 C19.3472102,3.75735931 20.2426407,4.65278981 20.2426407,5.75735931 L20.2426407,9.75735931 C20.2426407,10.8619288 19.3472102,11.7573593 18.2426407,11.7573593 L14.2426407,11.7573593 C13.1380712,11.7573593 12.2426407,10.8619288 12.2426407,9.75735931 L12.2426407,8.75735931 Z"
                                                fill="#000000"
                                                transform="translate(16.242641, 7.757359) rotate(-45.000000) translate(-16.242641, -7.757359) " />
                                            <path
                                                d="M5.89339828,3.42893219 C6.44568303,3.42893219 6.89339828,3.87664744 6.89339828,4.42893219 L6.89339828,6.42893219 C6.89339828,6.98121694 6.44568303,7.42893219 5.89339828,7.42893219 C5.34111353,7.42893219 4.89339828,6.98121694 4.89339828,6.42893219 L4.89339828,4.42893219 C4.89339828,3.87664744 5.34111353,3.42893219 5.89339828,3.42893219 Z M11.4289322,5.13603897 C11.8194565,5.52656326 11.8194565,6.15972824 11.4289322,6.55025253 L10.0147186,7.96446609 C9.62419433,8.35499039 8.99102936,8.35499039 8.60050506,7.96446609 C8.20998077,7.5739418 8.20998077,6.94077682 8.60050506,6.55025253 L10.0147186,5.13603897 C10.4052429,4.74551468 11.0384079,4.74551468 11.4289322,5.13603897 Z M0.600505063,5.13603897 C0.991029355,4.74551468 1.62419433,4.74551468 2.01471863,5.13603897 L3.42893219,6.55025253 C3.81945648,6.94077682 3.81945648,7.5739418 3.42893219,7.96446609 C3.0384079,8.35499039 2.40524292,8.35499039 2.01471863,7.96446609 L0.600505063,6.55025253 C0.209980772,6.15972824 0.209980772,5.52656326 0.600505063,5.13603897 Z"
                                                fill="#000000" opacity="0.3"
                                                transform="translate(6.014719, 5.843146) rotate(-45.000000) translate(-6.014719, -5.843146) " />
                                            <path
                                                d="M17.9142136,15.4497475 C18.4664983,15.4497475 18.9142136,15.8974627 18.9142136,16.4497475 L18.9142136,18.4497475 C18.9142136,19.0020322 18.4664983,19.4497475 17.9142136,19.4497475 C17.3619288,19.4497475 16.9142136,19.0020322 16.9142136,18.4497475 L16.9142136,16.4497475 C16.9142136,15.8974627 17.3619288,15.4497475 17.9142136,15.4497475 Z M23.4497475,17.1568542 C23.8402718,17.5473785 23.8402718,18.1805435 23.4497475,18.5710678 L22.0355339,19.9852814 C21.6450096,20.3758057 21.0118446,20.3758057 20.6213203,19.9852814 C20.2307961,19.5947571 20.2307961,18.9615921 20.6213203,18.5710678 L22.0355339,17.1568542 C22.4260582,16.76633 23.0592232,16.76633 23.4497475,17.1568542 Z M12.6213203,17.1568542 C13.0118446,16.76633 13.6450096,16.76633 14.0355339,17.1568542 L15.4497475,18.5710678 C15.8402718,18.9615921 15.8402718,19.5947571 15.4497475,19.9852814 C15.0592232,20.3758057 14.4260582,20.3758057 14.0355339,19.9852814 L12.6213203,18.5710678 C12.2307961,18.1805435 12.2307961,17.5473785 12.6213203,17.1568542 Z"
                                                fill="#000000" opacity="0.3"
                                                transform="translate(18.035534, 17.863961) scale(1, -1) rotate(45.000000) translate(-18.035534, -17.863961) " />
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span> </span>

                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                <a href="#"
                                    class="font-weight-normel text-dark-75 text-hover-primary font-size-lg mb-1">The
                                    best product</a>
                                <span class="text-muted font-size-sm">Due in 2 Days</span>
                            </div>

                            <span class="font-weight-bolder text-info py-1 font-size-lg">+8%</span>
                        </div>
                        <!--end: Item-->
                    </div>

                    <!--end::Section-->
                </div>
                <!--end::Tabpane-->

                <!--begin::Tabpane-->
                <div class="tab-pane fade pt-2 pr-5 mr-n5" id="kt_quick_panel_notifications" role="tabpanel">
                    <!--begin::Nav-->
                    <div class="navi navi-icon-circle navi-spacer-x-0">
                        <!--begin::Item-->
                        <a href="#" class="navi-item">
                            <div class="navi-link rounded">
                                <div class="symbol symbol-50 mr-3">
                                    <div class="symbol-label"><i class="flaticon-bell text-success icon-lg"></i></div>
                                </div>
                                <div class="navi-text">
                                    <div class="font-weight-bold font-size-lg">
                                        5 new user generated report
                                    </div>
                                    <div class="text-muted">
                                        Reports based on sales
                                    </div>
                                </div>
                            </div>
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <a href="#" class="navi-item">
                            <div class="navi-link rounded">
                                <div class="symbol symbol-50 mr-3">
                                    <div class="symbol-label"><i class="flaticon2-box text-danger icon-lg"></i></div>
                                </div>
                                <div class="navi-text">
                                    <div class="font-weight-bold  font-size-lg">
                                        2 new items submited
                                    </div>
                                    <div class="text-muted">
                                        by Grog John
                                    </div>
                                </div>
                            </div>
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <a href="#" class="navi-item">
                            <div class="navi-link rounded">
                                <div class="symbol symbol-50 mr-3">
                                    <div class="symbol-label"><i class="flaticon-psd text-primary icon-lg"></i></div>
                                </div>
                                <div class="navi-text">
                                    <div class="font-weight-bold  font-size-lg">
                                        79 PSD files generated
                                    </div>
                                    <div class="text-muted">
                                        Reports based on sales
                                    </div>
                                </div>
                            </div>
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <a href="#" class="navi-item">
                            <div class="navi-link rounded">
                                <div class="symbol symbol-50 mr-3">
                                    <div class="symbol-label"><i class="flaticon2-supermarket text-warning icon-lg"></i>
                                    </div>
                                </div>
                                <div class="navi-text">
                                    <div class="font-weight-bold  font-size-lg">
                                        $2900 worth producucts sold
                                    </div>
                                    <div class="text-muted">
                                        Total 234 items
                                    </div>
                                </div>
                            </div>
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <a href="#" class="navi-item">
                            <div class="navi-link rounded">
                                <div class="symbol symbol-50 mr-3">
                                    <div class="symbol-label"><i
                                            class="flaticon-paper-plane-1 text-success icon-lg"></i></div>
                                </div>
                                <div class="navi-text">
                                    <div class="font-weight-bold  font-size-lg">
                                        4.5h-avarage response time
                                    </div>
                                    <div class="text-muted">
                                        Fostest is Barry
                                    </div>
                                </div>
                            </div>
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <a href="#" class="navi-item">
                            <div class="navi-link rounded">
                                <div class="symbol symbol-50 mr-3">
                                    <div class="symbol-label"><i
                                            class="flaticon-safe-shield-protection text-danger icon-lg"></i></div>
                                </div>
                                <div class="navi-text">
                                    <div class="font-weight-bold  font-size-lg">
                                        3 Defence alerts
                                    </div>
                                    <div class="text-muted">
                                        40% less alerts thar last week
                                    </div>
                                </div>
                            </div>
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <a href="#" class="navi-item">
                            <div class="navi-link rounded">
                                <div class="symbol symbol-50 mr-3">
                                    <div class="symbol-label"><i class="flaticon-notepad text-primary icon-lg"></i>
                                    </div>
                                </div>
                                <div class="navi-text">
                                    <div class="font-weight-bold  font-size-lg">
                                        Avarage 4 blog posts per author
                                    </div>
                                    <div class="text-muted">
                                        Most posted 12 time
                                    </div>
                                </div>
                            </div>
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <a href="#" class="navi-item">
                            <div class="navi-link rounded">
                                <div class="symbol symbol-50 mr-3">
                                    <div class="symbol-label"><i class="flaticon-users-1 text-warning icon-lg"></i>
                                    </div>
                                </div>
                                <div class="navi-text">
                                    <div class="font-weight-bold  font-size-lg">
                                        16 authors joined last week
                                    </div>
                                    <div class="text-muted">
                                        9 photodrapehrs, 7 designer
                                    </div>
                                </div>
                            </div>
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <a href="#" class="navi-item">
                            <div class="navi-link rounded">
                                <div class="symbol symbol-50 mr-3">
                                    <div class="symbol-label"><i class="flaticon2-box text-info icon-lg"></i></div>
                                </div>
                                <div class="navi-text">
                                    <div class="font-weight-bold  font-size-lg">
                                        2 new items have been submited
                                    </div>
                                    <div class="text-muted">
                                        by Grog John
                                    </div>
                                </div>
                            </div>
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <a href="#" class="navi-item">
                            <div class="navi-link rounded">
                                <div class="symbol symbol-50 mr-3">
                                    <div class="symbol-label"><i class="flaticon2-download text-success icon-lg"></i>
                                    </div>
                                </div>
                                <div class="navi-text">
                                    <div class="font-weight-bold  font-size-lg">
                                        2.8 GB-total downloads size
                                    </div>
                                    <div class="text-muted">
                                        Mostly PSD end AL concepts
                                    </div>
                                </div>
                            </div>
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <a href="#" class="navi-item">
                            <div class="navi-link rounded">
                                <div class="symbol symbol-50 mr-3">
                                    <div class="symbol-label"><i class="flaticon2-supermarket text-danger icon-lg"></i>
                                    </div>
                                </div>
                                <div class="navi-text">
                                    <div class="font-weight-bold  font-size-lg">
                                        $2900 worth producucts sold
                                    </div>
                                    <div class="text-muted">
                                        Total 234 items
                                    </div>
                                </div>
                            </div>
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <a href="#" class="navi-item">
                            <div class="navi-link rounded">
                                <div class="symbol symbol-50 mr-3">
                                    <div class="symbol-label"><i class="flaticon-bell text-primary icon-lg"></i></div>
                                </div>
                                <div class="navi-text">
                                    <div class="font-weight-bold  font-size-lg">
                                        7 new user generated report
                                    </div>
                                    <div class="text-muted">
                                        Reports based on sales
                                    </div>
                                </div>
                            </div>
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <a href="#" class="navi-item">
                            <div class="navi-link rounded">
                                <div class="symbol symbol-50 mr-3">
                                    <div class="symbol-label"><i
                                            class="flaticon-paper-plane-1 text-success icon-lg"></i></div>
                                </div>
                                <div class="navi-text">
                                    <div class="font-weight-bold  font-size-lg">
                                        4.5h-avarage response time
                                    </div>
                                    <div class="text-muted">
                                        Fostest is Barry
                                    </div>
                                </div>
                            </div>
                        </a>
                        <!--end::Item-->
                    </div>
                    <!--end::Nav-->
                </div>
                <!--end::Tabpane-->

                <!--begin::Tabpane-->
                <div class="tab-pane fade pt-3 pr-5 mr-n5" id="kt_quick_panel_settings" role="tabpanel">
                    <form class="form">
                        <!--begin::Section-->
                        <div>
                            <h5 class="font-weight-bold mb-3">Customer Care</h5>
                            <div class="form-group mb-0 row align-items-center">
                                <label class="col-8 col-form-label">Enable Notifications:</label>
                                <div class="col-4 d-flex justify-content-end">
                                    <span class="switch switch-success switch-sm">
                                        <label>
                                            <input type="checkbox" checked="checked" name="select" />
                                            <span></span>
                                        </label>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group mb-0 row align-items-center">
                                <label class="col-8 col-form-label">Enable Case Tracking:</label>
                                <div class="col-4 d-flex justify-content-end">
                                    <span class="switch switch-success switch-sm">
                                        <label>
                                            <input type="checkbox" name="quick_panel_notifications_2" />
                                            <span></span>
                                        </label>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group mb-0 row align-items-center">
                                <label class="col-8 col-form-label">Support Portal:</label>
                                <div class="col-4 d-flex justify-content-end">
                                    <span class="switch switch-success switch-sm">
                                        <label>
                                            <input type="checkbox" checked="checked" name="select" />
                                            <span></span>
                                        </label>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!--end::Section-->

                        <div class="separator separator-dashed my-6"></div>

                        <!--begin::Section-->
                        <div class="pt-2">
                            <h5 class="font-weight-bold mb-3">Reports</h5>
                            <div class="form-group mb-0 row align-items-center">
                                <label class="col-8 col-form-label">Generate Reports:</label>
                                <div class="col-4 d-flex justify-content-end">
                                    <span class="switch switch-sm switch-danger">
                                        <label>
                                            <input type="checkbox" checked="checked" name="select" />
                                            <span></span>
                                        </label>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group mb-0 row align-items-center">
                                <label class="col-8 col-form-label">Enable Report Export:</label>
                                <div class="col-4 d-flex justify-content-end">
                                    <span class="switch switch-sm switch-danger">
                                        <label>
                                            <input type="checkbox" name="select" />
                                            <span></span>
                                        </label>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group mb-0 row align-items-center">
                                <label class="col-8 col-form-label">Allow Data Collection:</label>
                                <div class="col-4 d-flex justify-content-end">
                                    <span class="switch switch-sm switch-danger">
                                        <label>
                                            <input type="checkbox" checked="checked" name="select" />
                                            <span></span>
                                        </label>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!--end::Section-->

                        <div class="separator separator-dashed my-6"></div>

                        <!--begin::Section-->
                        <div class="pt-2">
                            <h5 class="font-weight-bold mb-3">Memebers</h5>
                            <div class="form-group mb-0 row align-items-center">
                                <label class="col-8 col-form-label">Enable Member singup:</label>
                                <div class="col-4 d-flex justify-content-end">
                                    <span class="switch switch-sm switch-primary">
                                        <label>
                                            <input type="checkbox" checked="checked" name="select" />
                                            <span></span>
                                        </label>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group mb-0 row align-items-center">
                                <label class="col-8 col-form-label">Allow User Feedbacks:</label>
                                <div class="col-4 d-flex justify-content-end">
                                    <span class="switch switch-sm switch-primary">
                                        <label>
                                            <input type="checkbox" name="select" />
                                            <span></span>
                                        </label>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group mb-0 row align-items-center">
                                <label class="col-8 col-form-label">Enable Customer Portal:</label>
                                <div class="col-4 d-flex justify-content-end">
                                    <span class="switch switch-sm switch-primary">
                                        <label>
                                            <input type="checkbox" checked="checked" name="select" />
                                            <span></span>
                                        </label>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!--end::Section-->
                    </form>
                </div>
                <!--end::Tabpane-->
            </div>
        </div>
        <!--end::Content-->
    </div>
    <!--end::Quick Panel-->

    <!--begin::Chat Panel-->
    <div class="modal modal-sticky modal-sticky-bottom-right" id="kt_chat_modal" role="dialog" data-backdrop="false">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <!--begin::Card-->
                <div class="card card-custom">
                    <!--begin::Header-->
                    <div class="card-header align-items-center px-4 py-3">
                        <div class="text-left flex-grow-1">
                            <!--begin::Dropdown Menu-->
                            <div class="dropdown dropdown-inline">
                                <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="svg-icon svg-icon-lg">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Add-user.svg--><svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                            viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                <path
                                                    d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z"
                                                    fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                <path
                                                    d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z"
                                                    fill="#000000" fill-rule="nonzero" />
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                    </span> </button>
                                <div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-md">
                                    <!--begin::Navigation-->
                                    <ul class="navi navi-hover py-5">
                                        <li class="navi-item">
                                            <a href="#" class="navi-link">
                                                <span class="navi-icon"><i class="flaticon2-drop"></i></span>
                                                <span class="navi-text">New Group</span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a href="#" class="navi-link">
                                                <span class="navi-icon"><i class="flaticon2-list-3"></i></span>
                                                <span class="navi-text">Contacts</span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a href="#" class="navi-link">
                                                <span class="navi-icon"><i class="flaticon2-rocket-1"></i></span>
                                                <span class="navi-text">Groups</span>
                                                <span class="navi-link-badge">
                                                    <span
                                                        class="label label-light-primary label-inline font-weight-bold">new</span>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a href="#" class="navi-link">
                                                <span class="navi-icon"><i class="flaticon2-bell-2"></i></span>
                                                <span class="navi-text">Calls</span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a href="#" class="navi-link">
                                                <span class="navi-icon"><i class="flaticon2-gear"></i></span>
                                                <span class="navi-text">Settings</span>
                                            </a>
                                        </li>

                                        <li class="navi-separator my-3"></li>

                                        <li class="navi-item">
                                            <a href="#" class="navi-link">
                                                <span class="navi-icon"><i class="flaticon2-magnifier-tool"></i></span>
                                                <span class="navi-text">Help</span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a href="#" class="navi-link">
                                                <span class="navi-icon"><i class="flaticon2-bell-2"></i></span>
                                                <span class="navi-text">Privacy</span>
                                                <span class="navi-link-badge">
                                                    <span
                                                        class="label label-light-danger label-rounded font-weight-bold">5</span>
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                    <!--end::Navigation-->
                                </div>
                            </div>
                            <!--end::Dropdown Menu-->
                        </div>
                        <div class="text-center flex-grow-1">
                            <div class="text-dark-75 font-weight-bold font-size-h5">Matt Pears</div>
                            <div>
                                <span class="label label-dot label-success"></span>
                                <span class="font-weight-bold text-muted font-size-sm">Active</span>
                            </div>
                        </div>
                        <div class="text-right flex-grow-1">
                            <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md"
                                data-dismiss="modal">
                                <i class="ki ki-close icon-1x"></i>
                            </button>
                        </div>
                    </div>
                    <!--end::Header-->

                    <!--begin::Body-->
                    <div class="card-body">
                        <!--begin::Scroll-->
                        <div class="scroll scroll-pull" data-height="375" data-mobile-height="300">
                            <!--begin::Messages-->
                            <div class="messages">
                                <!--begin::Message In-->
                                <div class="d-flex flex-column mb-5 align-items-start">
                                    <div class="d-flex align-items-center">
                                        <div class="symbol symbol-circle symbol-40 mr-3">
                                            <img alt="Pic" src="assets/media/users/300_12.jpg" />
                                        </div>
                                        <div>
                                            <a href="#"
                                                class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">Matt
                                                Pears</a>
                                            <span class="text-muted font-size-sm">2 Hours</span>
                                        </div>
                                    </div>
                                    <div
                                        class="mt-2 rounded p-5 bg-light-success text-dark-50 font-weight-bold font-size-lg text-left max-w-400px">
                                        How likely are you to recommend our company
                                        to your friends and family?
                                    </div>
                                </div>
                                <!--end::Message In-->

                                <!--begin::Message Out-->
                                <div class="d-flex flex-column mb-5 align-items-end">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <span class="text-muted font-size-sm">3 minutes</span>
                                            <a href="#"
                                                class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">You</a>
                                        </div>
                                        <div class="symbol symbol-circle symbol-40 ml-3">
                                            <img alt="Pic" src="assets/media/users/300_21.jpg" />
                                        </div>
                                    </div>
                                    <div
                                        class="mt-2 rounded p-5 bg-light-primary text-dark-50 font-weight-bold font-size-lg text-right max-w-400px">
                                        Hey there, we’re just writing to let you know
                                        that you’ve been subscribed to a repository on GitHub.
                                    </div>
                                </div>
                                <!--end::Message Out-->

                                <!--begin::Message In-->
                                <div class="d-flex flex-column mb-5 align-items-start">
                                    <div class="d-flex align-items-center">
                                        <div class="symbol symbol-circle symbol-40 mr-3">
                                            <img alt="Pic" src="assets/media/users/300_21.jpg" />
                                        </div>
                                        <div>
                                            <a href="#"
                                                class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">Matt
                                                Pears</a>
                                            <span class="text-muted font-size-sm">40 seconds</span>
                                        </div>
                                    </div>
                                    <div
                                        class="mt-2 rounded p-5 bg-light-success text-dark-50 font-weight-bold font-size-lg text-left max-w-400px">
                                        Ok, Understood!
                                    </div>
                                </div>
                                <!--end::Message In-->

                                <!--begin::Message Out-->
                                <div class="d-flex flex-column mb-5 align-items-end">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <span class="text-muted font-size-sm">Just now</span>
                                            <a href="#"
                                                class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">You</a>
                                        </div>
                                        <div class="symbol symbol-circle symbol-40 ml-3">
                                            <img alt="Pic" src="assets/media/users/300_21.jpg" />
                                        </div>
                                    </div>
                                    <div
                                        class="mt-2 rounded p-5 bg-light-primary text-dark-50 font-weight-bold font-size-lg text-right max-w-400px">
                                        You’ll receive notifications for all issues, pull requests!
                                    </div>
                                </div>
                                <!--end::Message Out-->

                                <!--begin::Message In-->
                                <div class="d-flex flex-column mb-5 align-items-start">
                                    <div class="d-flex align-items-center">
                                        <div class="symbol symbol-circle symbol-40 mr-3">
                                            <img alt="Pic" src="assets/media/users/300_12.jpg" />
                                        </div>
                                        <div>
                                            <a href="#"
                                                class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">Matt
                                                Pears</a>
                                            <span class="text-muted font-size-sm">40 seconds</span>
                                        </div>
                                    </div>
                                    <div
                                        class="mt-2 rounded p-5 bg-light-success text-dark-50 font-weight-bold font-size-lg text-left max-w-400px">
                                        You can unwatch this repository immediately by clicking here: <a
                                            href="#">https://github.com</a>
                                    </div>
                                </div>
                                <!--end::Message In-->

                                <!--begin::Message Out-->
                                <div class="d-flex flex-column mb-5 align-items-end">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <span class="text-muted font-size-sm">Just now</span>
                                            <a href="#"
                                                class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">You</a>
                                        </div>
                                        <div class="symbol symbol-circle symbol-40 ml-3">
                                            <img alt="Pic" src="assets/media/users/300_21.jpg" />
                                        </div>
                                    </div>
                                    <div
                                        class="mt-2 rounded p-5 bg-light-primary text-dark-50 font-weight-bold font-size-lg text-right max-w-400px">
                                        Discover what students who viewed Learn Figma - UI/UX Design. Essential Training
                                        also viewed
                                    </div>
                                </div>
                                <!--end::Message Out-->

                                <!--begin::Message In-->
                                <div class="d-flex flex-column mb-5 align-items-start">
                                    <div class="d-flex align-items-center">
                                        <div class="symbol symbol-circle symbol-40 mr-3">
                                            <img alt="Pic" src="assets/media/users/300_12.jpg" />
                                        </div>
                                        <div>
                                            <a href="#"
                                                class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">Matt
                                                Pears</a>
                                            <span class="text-muted font-size-sm">40 seconds</span>
                                        </div>
                                    </div>
                                    <div
                                        class="mt-2 rounded p-5 bg-light-success text-dark-50 font-weight-bold font-size-lg text-left max-w-400px">
                                        Most purchased Business courses during this sale!
                                    </div>
                                </div>
                                <!--end::Message In-->

                                <!--begin::Message Out-->
                                <div class="d-flex flex-column mb-5 align-items-end">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <span class="text-muted font-size-sm">Just now</span>
                                            <a href="#"
                                                class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">You</a>
                                        </div>
                                        <div class="symbol symbol-circle symbol-40 ml-3">
                                            <img alt="Pic" src="assets/media/users/300_21.jpg" />
                                        </div>
                                    </div>
                                    <div
                                        class="mt-2 rounded p-5 bg-light-primary text-dark-50 font-weight-bold font-size-lg text-right max-w-400px">
                                        Company BBQ to celebrate the last quater achievements and goals. Food and drinks
                                        provided
                                    </div>
                                </div>
                                <!--end::Message Out-->
                            </div>
                            <!--end::Messages-->
                        </div>
                        <!--end::Scroll-->
                    </div>
                    <!--end::Body-->

                    <!--begin::Footer-->
                    <div class="card-footer align-items-center">
                        <!--begin::Compose-->
                        <textarea class="form-control border-0 p-0" rows="2" placeholder="Type a message"></textarea>
                        <div class="d-flex align-items-center justify-content-between mt-5">
                            <div class="mr-3">
                                <a href="#" class="btn btn-clean btn-icon btn-md mr-1"><i
                                        class="flaticon2-photograph icon-lg"></i></a>
                                <a href="#" class="btn btn-clean btn-icon btn-md"><i
                                        class="flaticon2-photo-camera  icon-lg"></i></a>
                            </div>
                            <div>
                                <button type="button"
                                    class="btn btn-primary btn-md text-uppercase font-weight-bold chat-send py-2 px-6">Send</button>
                            </div>
                        </div>
                        <!--begin::Compose-->
                    </div>
                    <!--end::Footer-->
                </div>
                <!--end::Card-->
            </div>
        </div>
    </div>
    <!--end::Chat Panel-->

    <!--begin::Scrolltop-->
    <div id="kt_scrolltop" class="scrolltop">
        <span class="svg-icon">
            <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Up-2.svg--><svg
                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                viewBox="0 0 24 24" version="1.1">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <polygon points="0 0 24 0 24 24 0 24" />
                    <rect fill="#000000" opacity="0.3" x="11" y="10" width="2" height="10" rx="1" />
                    <path
                        d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z"
                        fill="#000000" fill-rule="nonzero" />
                </g>
            </svg>
            <!--end::Svg Icon-->
        </span>
    </div>
    <!--end::Scrolltop-->

    <script>var HOST_URL = "{{ url('/') }}";</script>
    <!--begin::Global Config(global config for global JS scripts)-->
    <script>
        var KTAppSettings = {
            "breakpoints": {
                "sm": 576,
                "md": 768,
                "lg": 992,
                "xl": 1200,
                "xxl": 1200
            },
            "colors": {
                "theme": {
                    "base": {
                        "white": "#ffffff",
                        "primary": "#663259",
                        "secondary": "#E5EAEE",
                        "success": "#1BC5BD",
                        "info": "#8950FC",
                        "warning": "#FFA800",
                        "danger": "#F64E60",
                        "light": "#F3F6F9",
                        "dark": "#212121"
                    },
                    "light": {
                        "white": "#ffffff",
                        "primary": "#F4E1F0",
                        "secondary": "#ECF0F3",
                        "success": "#C9F7F5",
                        "info": "#EEE5FF",
                        "warning": "#FFF4DE",
                        "danger": "#FFE2E5",
                        "light": "#F3F6F9",
                        "dark": "#D6D6E0"
                    },
                    "inverse": {
                        "white": "#ffffff",
                        "primary": "#ffffff",
                        "secondary": "#212121",
                        "success": "#ffffff",
                        "info": "#ffffff",
                        "warning": "#ffffff",
                        "danger": "#ffffff",
                        "light": "#464E5F",
                        "dark": "#ffffff"
                    }
                },
                "gray": {
                    "gray-100": "#F3F6F9",
                    "gray-200": "#ECF0F3",
                    "gray-300": "#E5EAEE",
                    "gray-400": "#D6D6E0",
                    "gray-500": "#B5B5C3",
                    "gray-600": "#80808F",
                    "gray-700": "#464E5F",
                    "gray-800": "#1B283F",
                    "gray-900": "#212121"
                }
            },
            "font-family": "Poppins"
        };
    </script>
    <!--end::Global Config-->

    <!--begin::Global Theme Bundle(used by all pages)-->
    <script src="{{ asset('assets/plugins/global/plugins.bundle.js?v=7.0.6') }}"></script>
    <script src="{{ asset('assets/plugins/custom/prismjs/prismjs.bundle.js?v=7.0.6') }}"></script>
    <script src="{{ asset('assets/js/scripts.bundle.js?v=7.0.6') }}"></script>
    <!--end::Global Theme Bundle-->

    <!--begin::Page Vendors(used by this page)-->
    <script src="{{ asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.js?v=7.0.6') }}"></script>
    <script src="{{ asset('//maps.google.com/maps/api/js?key=AIzaSyBTGnKT7dt597vo9QgeQ7BFhvSRP4eiMSM?v=7.0.6') }}"></script>
    <script src="{{ asset('assets/plugins/custom/gmaps/gmaps.js?v=7.0.6') }}"></script>
    <!--end::Page Vendors-->

    <!--begin::Page Scripts(used by this page)-->
    <script src="{{ asset('assets/js/pages/widgets.js?v=7.0.6') }}"></script>
    <!--end::Page Scripts-->
</body>
<!--end::Body-->

</html>