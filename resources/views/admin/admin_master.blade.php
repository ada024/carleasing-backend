<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <title> Admin Dashboard</title>

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500"
          rel="stylesheet"/>
    <link href="https://cdn.materialdesignicons.com/3.0.39/css/materialdesignicons.min.css" rel="stylesheet"/>


    <!-- PLUGINS CSS STYLE -->
    <link href="{{asset('backend/assets/plugins/toaster/toastr.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('backend/assets/plugins/nprogress/nprogress.css')  }} " rel="stylesheet"/>
    <link href="{{asset('backend/assets/plugins/flag-icons/css/flag-icon.min.css')  }}" rel="stylesheet"/>
    <link href="{{asset('backend/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css')  }} " rel="stylesheet"/>
    <link href="{{asset('backend/assets/plugins/ladda/ladda.min.css')  }} " rel="stylesheet"/>
    <link href="{{asset('backend/assets/plugins/select2/css/select2.min.css')  }} " rel="stylesheet"/>
    <link href="{{asset('backend/assets/plugins/daterangepicker/daterangepicker.css')  }} " rel="stylesheet"/>

    <!-- SLEEK CSS -->
    <link id="sleek-css" rel="stylesheet" href="{{asset('backend/assets/css/sleek.css') }} "/>


    <!-- TOAST.js -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">


    <!-- FAVICON -->
    <link href="{{asset('backend/assets/img/favicon.png')  }} " rel="shortcut icon"/>

    <!--
      HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
    -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="{{asset('backend/assets/plugins/nprogress/nprogress.js')}}  "></script>

</head>


<body class="sidebar-fixed sidebar-dark header-light header-fixed" id="body">
<script>
    NProgress.configure({showSpinner: false});
    NProgress.start();
</script>

<div class="mobile-sticky-body-overlay"></div>

<div class="wrapper">

    @include('admin.body.sidebar')

    <div class="page-wrapper">
        <header class="main-header " id="header">
            <nav class="navbar navbar-static-top navbar-expand-lg">
                <!-- Sidebar toggle button -->
                <button id="sidebar-toggler" class="sidebar-toggle">
                    <span class="sr-only">Toggle navigation</span>
                </button>
                <!-- search form -->
                <div class="search-form d-none d-lg-inline-block">
                    <div class="input-group">
                        <button type="button" name="search" id="search-btn" class="btn btn-flat">
                            <i class="mdi mdi-magnify"></i>
                        </button>
                        <input type="text" name="query" id="search-input" class="form-control"
                               placeholder="'name', 'description' etc."
                               autofocus autocomplete="off"/>
                    </div>
                    <div id="search-results-container">
                        <ul id="search-results"></ul>
                    </div>
                </div>

                <div class="navbar-right ">
                    <ul class="nav navbar-nav">
                        <!-- User Account -->
                        <li class="dropdown user-menu">
                            <button href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                <img src="{{ Auth::user()->profile_photo_url }} " class="user-image"
                                     alt="User Image"/>
                                <span class="d-none d-lg-inline-block">{{Auth::user()->name}} </span>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <!-- User image -->
                                <li class="dropdown-header">
                                    <img src="{{ Auth::user()->profile_photo_url }}" class="img-circle"
                                         alt="User Image"/>
                                    <div class="d-inline-block">{{Auth::user()->name}}<small class="pt-1">{{Auth::user()->email}}</small>
                                    </div>
                                </li>

                                <li>
                                    <a href="{{route('profile.update')}}">
                                        <i class="mdi mdi-account"></i> My Profile
                                    </a>
                                </li>
                                <li>
                                    <a href=" {{route('change.password')}}">
                                        <i class="mdi mdi-email"></i> Change Password
                                    </a>
                                </li>

                                <li class="dropdown-footer">
                                    <a href="{{ route('user.logout')  }}"> <i class="mdi mdi-logout"></i> Log Out </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>


        <div class="content-wrapper">
            <div class="content">
                @yield('admin')
            </div>
        </div>

        <footer class="footer mt-auto">
            <div class="copyright bg-white">
                <p>&copy;<span id="copy-year">2020</span> Sleek Theme
                </p>
            </div>
        </footer>

    </div>
</div>


<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCn8TFXGg17HAUcNpkwtxxyT9Io9B_NcM" defer></script>
<script src="{{asset('backend/assets/plugins/jquery/jquery.min.j')}}s"></script>
<script src="{{asset('backend/assets/plugins/bootstrap/js/bootstrap.bundle.min.js ')}}"></script>
<script src="{{asset('backend/assets/plugins/toaster/toastr.min.js')}}"></script>
<script src="{{asset('backend/assets/plugins/slimscrollbar/jquery.slimscroll.min.js ')}}"></script>
<script src="{{asset('backend/assets/plugins/charts/Chart.min.js')}}"></script>
<script src="{{asset('backend/assets/plugins/ladda/spin.min.js')}}"></script>
<script src="{{asset('backend/assets/plugins/ladda/ladda.min.js ')}}"></script>
<script src="{{asset('backend/assets/plugins/jquery-mask-input/jquery.mask.min.js ')}}"></script>
<script src="{{asset('backend/assets/plugins/select2/js/select2.min.js')}}"></script>
<script src="{{asset('backend/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js ')}}"></script>
<script src="{{asset('backend/assets/plugins/jvectormap/jquery-jvectormap-world-mill.js')}}"></script>
<script src="{{asset('backend/assets/plugins/daterangepicker/moment.min.js ')}}"></script>
<script src="{{asset('backend/assets/plugins/daterangepicker/daterangepicker.js')}}"></script>
<script src="{{asset('backend/assets/plugins/jekyll-search.min.js ')}}"></script>
<script src="{{asset('backend/assets/js/sleek.js ')}}"></script>
<script src="{{asset('backend/assets/js/chart.j')}}s"></script>
<script src="{{asset('backend/assets/js/date-range.js')}}"></script>
<script src="{{asset('backend/assets/js/map.js ')}}"></script>
<script src="{{asset('backend/assets/js/custom.js')}}"></script>
<script type="text/javascript"  src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
    @if(Session::has('message'))
    const type = "{{Session::get('alert-type','info')}}"
    switch(type){
        case 'info':
        toastr.info("{{Session::get('message')}}");
        break;

        case 'success':
            toastr.success("{{Session::get('message')}}");
            break;

        case 'warning':
            toastr.warning("{{Session::get('message')}}");
            break;

        case 'error':
            toastr.error("{{Session::get('message')}}");
            break;
    }
    @endif

</script>

</body>
</html>

