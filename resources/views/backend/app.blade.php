<!DOCTYPE html>
<html lang="en">
<!-- [Head] start -->


<!-- Mirrored from ableproadmin.com/dashboard/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Mar 2024 18:19:58 GMT -->
<head>
    <title> Sapphire Admin Dashboard</title>
    <!-- [Meta] -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description"
          content="">
    <meta name="keywords"
          content="">
    <meta name="author" content="Phoenixcoded">

    <!-- [Favicon] icon -->
    <link rel="icon" href="{{asset('backend/logo.svg')}}" type="image/x-icon"> <!-- [Font] Family -->
    <link rel="stylesheet" href="{{asset('backend/assets/fonts/inter/inter.css')}}" id="main-font-link"/>
    <!-- [Tabler Icons] https://tablericons.com -->
    <link rel="stylesheet" href="{{asset('backend/assets/fonts/tabler-icons.min.css')}}">
    <!-- [Feather Icons] https://feathericons.com -->
    <link rel="stylesheet" href="{{asset('backend/assets/fonts/feather.css')}}">
    <!-- [Font Awesome Icons] https://fontawesome.com/icons -->
    <link rel="stylesheet" href="{{asset('backend/assets/fonts/fontawesome.css')}}">
    <!-- [Material Icons] https://fonts.google.com/icons -->
    <link rel="stylesheet" href="{{asset('backend/assets/fonts/material.css')}}">
    <!-- [Template CSS Files] -->
    <link rel="stylesheet" href="{{asset('backend/assets/css/style.css')}}" id="main-style-link">
    <link rel="stylesheet" href="{{asset('backend/assets/css/style-preset.css')}}">
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-14K1GBX9FG"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLR4zYJ5iENBO06fYlB8kEzZ55niPy5XKpQ+cl4zp2"
            crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" charset="utf8"
            src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>


    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'G-14K1GBX9FG');
    </script>
    <!-- WiserNotify -->
    <script>
        !(function () {
            if (window.t4hto4) console.log('WiserNotify pixel installed multiple time in this page');
            else {
                window.t4hto4 = !0;
                var t = document,
                    e = window,
                    n = function () {
                        var e = t.createElement('script');
                        (e.type = 'text/javascript'),
                            (e.async = !0),
                            (e.src = '../../pt.wisernotify.com/pixel6d4c.js?ti=1jclj6jkfc4hhry'),
                            document.body.appendChild(e);
                    };
                'complete' === t.readyState ? n() : window.attachEvent ? e.attachEvent('onload', n) : e.addEventListener('load', n, !1);
            }
        })();
    </script>
    <!-- Microsoft clarity -->
    <script type="text/javascript">
        (function (c, l, a, r, i, t, y) {
            c[a] =
                c[a] ||
                function () {
                    (c[a].q = c[a].q || []).push(arguments);
                };
            t = l.createElement(r);
            t.async = 1;
            t.src = 'https://www.clarity.ms/tag/' + i;
            y = l.getElementsByTagName(r)[0];
            y.parentNode.insertBefore(t, y);
        })(window, document, 'clarity', 'script', 'gkn6wuhrtb');
    </script>

</head>
<!-- [Head] end -->
<!-- [Body] Start -->

<body data-pc-preset="preset-1" data-pc-sidebar-caption="true" data-pc-direction="ltr" data-pc-theme_contrast=""
      data-pc-theme="light">
<!-- [ Pre-loader ] start -->
<div class="loader-bg">
    <div class="loader-track">
        <div class="loader-fill"></div>
    </div>
</div>
<!-- [ Pre-loader ] End -->
<!-- [ Sidebar Menu ] start -->
<nav class="pc-sidebar">
    <div class="navbar-wrapper">
        <div class="m-header">
            <a href="{{route('dashboard')}}" class="b-brand text-primary">
                <!-- ========   Change your logo from here   ============ -->
                <img style="height: 150px" src="{{asset('frontend_new/assets/images/logo2.png')}}" class="img-fluid" alt="logo">
                {{--                <span class="badge bg-light-success rounded-pill ms-2 theme-version">v9.0</span>--}}
            </a>
        </div>
        <div class="navbar-content">
            <div class="card pc-user-card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                            <img src="{{asset('backend/assets/images/user/avatar-1.jpg')}}" alt="user-image"
                                 class="user-avtar wid-45 rounded-circle"/>
                        </div>
                        <div class="flex-grow-1 ms-3 me-2">
                            <h6 class="mb-0">{{Auth::user()->name}}</h6>
                            <small>Admin</small>
                        </div>
                        <a class="btn btn-icon btn-link-secondary avtar" data-bs-toggle="collapse"
                           href="#pc_sidebar_userlink">
                            <svg class="pc-icon">
                                <use xlink:href="#custom-sort-outline"></use>
                            </svg>
                        </a>
                    </div>
                    <div class="collapse pc-user-links" id="pc_sidebar_userlink">
                        <div class="pt-3">
                            <a href="{{route('admin.change.password')}}">
                                <i class="ti ti-user"></i>
                                <span>My Account</span>
                            </a>

                            <a href="{{route('logout')}}">
                                <i class="ti ti-power"></i>
                                <span>Logout</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <ul class="pc-navbar">
                <li class="pc-item pc-caption">
                    <label>Navigation</label>
                </li>

                <li class="pc-item {{ Route::currentRouteName() === 'dashboard' ? 'active' : '' }}">
                    <a href="{{route('dashboard')}}" class="pc-link">
        <span class="pc-micon">
            <svg class="pc-icon">
                <use xlink:href="#custom-status-up"></use>
            </svg>
        </span>
                        <span class="pc-mtext">Dashboard</span>
                    </a>
                </li>

{{--                <li class="pc-item pc-hasmenu">--}}
{{--                    <a href="#!" class="pc-link">--}}
{{--        <span class="pc-micon">--}}
{{--            <i style="font-size: 20px;" class="ph-duotone ph-tags"></i>--}}
{{--        </span>--}}
{{--                        <span class="pc-mtext">Post Category</span>--}}
{{--                        <span class="pc-arrow"><i data-feather="chevron-right"></i></span>--}}
{{--                    </a>--}}
{{--                    <ul class="pc-submenu">--}}
{{--                        <li class="pc-item"><a href="{{route('category.view')}}" class="pc-link">Manage Post Category</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}

{{--                <li class="pc-item pc-hasmenu">--}}
{{--                    <a href="#!" class="pc-link">--}}
{{--        <span class="pc-micon">--}}
{{--            <i style="font-size: 20px;" class="ph-duotone ph-sticky-note"></i>--}}
{{--        </span>--}}
{{--                        <span class="pc-mtext">Posts</span>--}}
{{--                        <span class="pc-arrow"><i data-feather="chevron-right"></i></span>--}}
{{--                    </a>--}}
{{--                    <ul class="pc-submenu">--}}
{{--                        <li class="pc-item"><a href="{{route('post.view')}}" class="pc-link">Add Post</a></li>--}}
{{--                        <li class="pc-item"><a href="{{route('post.all')}}" class="pc-link">All Posts</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}

{{--                <li class="pc-item pc-hasmenu">--}}
{{--                    <a href="#!" class="pc-link">--}}
{{--        <span class="pc-micon">--}}
{{--            <i style="font-size: 20px;" class="ph-duotone ph-tasks"></i>--}}
{{--        </span>--}}
{{--                        <span class="pc-mtext">Projects</span>--}}
{{--                        <span class="pc-arrow"><i data-feather="chevron-right"></i></span>--}}
{{--                    </a>--}}
{{--                    <ul class="pc-submenu">--}}
{{--                        <li class="pc-item"><a href="{{route('project.view')}}" class="pc-link">Add Project</a></li>--}}
{{--                        <li class="pc-item"><a href="{{route('project.all')}}" class="pc-link">All Projects</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}

                <li class="pc-item pc-hasmenu">
                    <a href="#!" class="pc-link">
        <span class="pc-micon">
            <i style="font-size: 20px;" class="ph-duotone ph-list-magnifying-glass"></i>
        </span>
                        <span class="pc-mtext">Products</span>
                        <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
                    </a>
                    <ul class="pc-submenu">
                        <li class="pc-item"><a href="{{route('product.view')}}" class="pc-link">Add Product</a></li>
                        <li class="pc-item"><a href="{{route('product.all')}}" class="pc-link">All Products</a></li>
                    </ul>
                </li>

{{--                <li class="pc-item pc-hasmenu">--}}
{{--                    <a href="#!" class="pc-link">--}}
{{--        <span class="pc-micon">--}}
{{--            <i style="font-size: 20px;" class="ph-duotone ph-quote"></i>--}}
{{--        </span>--}}
{{--                        <span class="pc-mtext">Testimonials</span>--}}
{{--                        <span class="pc-arrow"><i data-feather="chevron-right"></i></span>--}}
{{--                    </a>--}}
{{--                    <ul class="pc-submenu">--}}
{{--                        <li class="pc-item"><a href="{{route('testimonial.view')}}" class="pc-link">Add Testimonial</a></li>--}}
{{--                        <li class="pc-item"><a href="{{route('testimonial.all')}}" class="pc-link">All Testimonials</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}

                <li class="pc-item">
                    <a href="{{route('all.orders')}}" class="pc-link">
        <span class="pc-micon">
            <i style="font-size: 20px;" class="ph-duotone ph-shopping-cart"></i>
        </span>
                        <span class="pc-mtext">Manage Orders</span>
                    </a>
                </li>
                <li class="pc-item">
                    <a href="{{route('admin.user.all')}}" class="pc-link">
        <span class="pc-micon">
            <i style="font-size: 20px;" class="ph-duotone ph-users-four"></i>
        </span>
                        <span class="pc-mtext">Manage Clients</span>
                    </a>
                </li>
                <li class="pc-item">
                    <a href="{{route('contact.all')}}" class="pc-link">
        <span class="pc-micon">
            <i style="font-size: 20px;" class="ph-duotone ph-messenger-logo"></i>
        </span>
                        <span class="pc-mtext">Messages</span>
                    </a>
                </li>
            <li class="pc-item">
                    <a target="_blank" href="{{route('home')}}" class="pc-link">
        <span class="pc-micon">
            <i style="font-size: 20px;" class="ph-duotone ph-webhooks-logo"></i>
        </span>
                        <span class="pc-mtext">Visit Website</span>
                    </a>
                </li>

                <li class="pc-item">
                    <a href="{{route('logout')}}" class="pc-link">
        <span class="pc-micon">
            <i style="font-size: 20px;" class="ph-duotone ph-arrow-square-out"></i>
        </span>
                        <span class="pc-mtext">Logout</span>
                    </a>
                </li>

{{--                <li class="pc-item">--}}
{{--                    <a href="{{route('comment.all')}}" class="pc-link">--}}
{{--        <span class="pc-micon">--}}
{{--            <i class="fa fa-comments"></i>--}}
{{--        </span>--}}
{{--                        <span class="pc-mtext">Comments</span>--}}
{{--                    </a>--}}
{{--                </li>--}}

            </ul>
        </div>
    </div>
</nav>
<!-- [ Sidebar Menu ] end --> <!-- [ Header Topbar ] start -->
<header class="pc-header">
    <div class="header-wrapper"> <!-- [Mobile Media Block] start -->
        <div class="me-auto pc-mob-drp">
            <ul class="list-unstyled">
                <!-- ======= Menu collapse Icon ===== -->
                <li class="pc-h-item pc-sidebar-collapse">
                    <a href="#" class="pc-head-link ms-0" id="sidebar-hide">
                        <i class="ti ti-menu-2"></i>
                    </a>
                </li>
                <li class="pc-h-item pc-sidebar-popup">
                    <a href="#" class="pc-head-link ms-0" id="mobile-collapse">
                        <i class="ti ti-menu-2"></i>
                    </a>
                </li>

            </ul>
        </div>
        <!-- [Mobile Media Block end] -->
        <div class="ms-auto">
            <ul class="list-unstyled">

                <li class="dropdown pc-h-item">
                    <a
                        class="pc-head-link dropdown-toggle arrow-none me-0"
                        data-bs-toggle="dropdown"
                        href="#"
                        role="button"
                        aria-haspopup="false"
                        aria-expanded="false"
                    >
                        <svg class="pc-icon">
                            <use xlink:href="#custom-setting-2"></use>
                        </svg>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end pc-h-dropdown">
                        <a target="_blank" href="{{route('home')}}" class="dropdown-item">
                            <i class="ph-duotone ph-webhooks-logo"></i>
                            <span>Visit Website</span>
                        </a>
                        <a href="{{route('admin.change.password')}}" class="dropdown-item">
                            <i class="ti ti-user"></i>
                            <span>My Account</span>
                        </a>

                        <a href="{{route('logout')}}" class="dropdown-item">
                            <i class="ti ti-power"></i>
                            <span>Logout</span>
                        </a>
                    </div>
                </li>


            </ul>
        </div>
    </div>
</header>

<!-- [ Main Content ] start -->
<div class="pc-container">
    <div class="pc-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="">Home</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0)">Dashboard</a></li>
                            <li class="breadcrumb-item" aria-current="page">@yield('page')</li>
                        </ul>
                    </div>
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h4 style="margin: 20px 1px;" class="mb-0">@yield('title')</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @yield('content')

        <!-- [Page Specific JS] start -->
        <script src="{{asset('backend/assets/js/plugins/apexcharts.min.js')}}"></script>
        <script src="{{asset('backend/assets/js/pages/dashboard-default.js')}}"></script>
        <!-- [Page Specific JS] end -->
        <!-- Required Js -->
        <script src="{{asset('backend/assets/js/plugins/popper.min.js')}}"></script>
        <script src="{{asset('backend/assets/js/plugins/simplebar.min.js')}}"></script>
        <script src="{{asset('backend/assets/js/plugins/bootstrap.min.js')}}"></script>
        <script src="{{asset('backend/assets/js/fonts/custom-font.js')}}"></script>
        <script src="{{asset('backend/assets/js/pcoded.js')}}"></script>
        <script src="{{asset('backend/assets/js/plugins/feather.min.js')}}"></script>


        <script>layout_change('light');</script>


        <script>layout_theme_contrast_change('false');</script>


        <script>change_box_container('false');</script>


        <script>layout_caption_change('true');</script>


        <script>layout_rtl_change('false');</script>


        <script>preset_change("preset-1");</script>

</body>
<!-- [Body] end -->

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
<script>
    @if(Session::has('message'))
    var type = "{{ Session::get('alert-type','info') }}";
    switch (type) {
        case 'info':
            Toastify({
                text: "{{ Session::get('message') }}", duration: 3000,
                style: {background: "linear-gradient(to right, #00b09b, #96c93d)"}
            }).showToast();
            break;

        case 'success':
            Toastify({
                text: "{{ Session::get('message') }}", duration: 3000,
                style: {background: "linear-gradient(to right, #00b09b, #96c93d)"}
            }).showToast();
            break;

        case 'warning':
            Toastify({
                text: "{{ Session::get('message') }}", duration: 3000,
                style: {background: "linear-gradient(to right, #00b09b, #96c93d)"}
            }).showToast();
            break;

        case 'error':
            Toastify({
                text: "{{ Session::get('message') }}", duration: 3000,
                style: {background: "linear-gradient(to right, #ff0000, #ff0000)"}
            }).showToast();
            break;
    }

    // Unset the session
    {{ Session::forget('message') }}
    {{ Session::forget('alert-type') }}
    @endif
</script>


<script>
    $(document).ready(function () {
        $('#my-table').DataTable({
            "paging": true,
            "searching": true,
            "ordering": true
        });
    });
</script>

<script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script>

<script> var editor = new FroalaEditor('#myTextarea'); </script>


<script>
    ClassicEditor
        .create(document.querySelector('#myTextarea'))
        .catch(error => {
            console.error(error);
        });
</script>

<style>
    /* Custom styles to enlarge the editor */
    .ck-editor__editable_inline {
        min-height: 200px;
        width: 100%;
    }
</style>


<!-- Mirrored from ableproadmin.com/dashboard/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Mar 2024 18:20:32 GMT -->
</html>
