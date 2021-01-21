<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>
        @section('page_title')
        {{ env('APP_NAME') }}
        @show
    </title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="/dist/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="/plugins/summernote/summernote-bs4.css">
    <!-- Bootstrap 4 RTL -->
    <link rel="stylesheet" href="/dist/css/bootstrap.min.css">
    <!-- Custom style for RTL -->
    <link rel="stylesheet" href="/dist/css/custom.css">
    <!-- PersianCalender -->
    <link href="/plugins/persiancalender/jquery.md.bootstrap.datetimepicker.style.css" rel="stylesheet"/>
    @yield('css')
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
            <!-- Right navbar links -->
            <ul class="navbar-nav mr-auto-navbav">
                <!-- Messages Dropdown Menu -->

                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-comments"></i>
                        <span class="badge badge-danger navbar-badge">3</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="#" class="dropdown-item">
                            <div class="media">
                                {{-- <img src="/uploads/{{ $item->themessage->user->image_path }}" alt="User Avatar"
                                    class="img-size-50 mr-3 img-circle"> --}}
                                <img src="/dist/img/user1-128x128.jpg" alt="User Avatar"
                                    class="img-size-50 mr-3 img-circle">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        <!--<span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>-->
                                    </h3>
                                    <p class="text-sm"></p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i>
                                        {{-- {{ jdate(strtotime($item->created_at))->format("Y/m/d H:i:s") }} --}}
                                    </p>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>

                        <a href="#" class="dropdown-item dropdown-footer">صندوق پیام</a>
                    </div>
                </li>

                <!-- Notifications Dropdown Menu -->

                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-bell"></i>
                    <span class="badge badge-warning navbar-badge">4</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <span class="dropdown-item dropdown-header">3 بخشنامه</span>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">مشاهده همه</a>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="/" class="brand-link">
                <img src="/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                    style="opacity: .8">
                <span class="brand-text font-weight-light">{{ env('APP_NAME') }}</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        {{-- <img src="/uploads/{{ Auth::user()->image_path }}" class="img-circle elevation-2" alt="User Image"> --}}
                        <img src="/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="/login" class="d-block">
                            {{ Auth::user()->name }}

                            <i class="fa fa-window-close"></i>
                        </a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            {{-- @if(strpos(\Request::route()->getName(), 'dashboard')===0) --}}
                            {{-- <a href="/" class="nav-link active"> --}}
                                {{-- @else --}}
                                <a href="/" class="nav-link">
                                    {{-- @endif --}}
                                    <!-- <i class="far fa-circle nav-icon"></i> -->
                                    <p>داشبورد</p>
                                </a>
                        </li>
                        {{-- @if (Gate::allows('parameters')) --}}
                        <!-- <li class="nav-header">تعاریف پایه</li> -->
                        @if(strpos(\Request::route()->getName(), 'tag')===0 || strpos(\Request::route()->getName(),
                        'need_tag')===0 || strpos(\Request::route()->getName(), 'parent_tag')===0 ||
                        strpos(\Request::route()->getName(), 'need_parent_tag')===0 ||
                        strpos(\Request::route()->getName(), 'temperature')===0 ||
                        strpos(\Request::route()->getName(), 'school')===0 ||
                        strpos(\Request::route()->getName(), 'collection')===0 ||
                        strpos(\Request::route()->getName(), 'product')===0 ||
                        strpos(\Request::route()->getName(), 'source')===0 ||
                        strpos(\Request::route()->getName(), 'user_all')===0 ||
                        strpos(\Request::route()->getName(), 'call_result')===0 ||
                        strpos(\Request::route()->getName(), 'notice')===0 ||
                        strpos(\Request::route()->getName(), 'province')===0 ||
                        strpos(\Request::route()->getName(), 'class_room')===0 ||
                        strpos(\Request::route()->getName(), 'cit')===0 ||
                        strpos(\Request::route()->getName(), 'lesson')===0 ||
                        strpos(\Request::route()->getName(), 'exam')===0)
                        <li class="nav-item has-treeview menu-open">
                            @else
                        <li class="nav-item has-treeview">
                            @endif
                            <a href="#" class="nav-link">
                                <!-- <i class="nav-icon fas fa-bookmark"></i> -->
                                <p>
                                    تعاریف پایه
                                    <i class="fas fa-angle-left right"></i>
                                    <!--<span class="badge badge-info right">6</span>-->
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    {{-- <a href="{{ route('need_parent_tag_ones') }}" class="nav-link">
                                        <p>برچسب اصلی نیازسنجی</p>
                                    </a> --}}
                                </li>
                                <li class="nav-item">
                                    {{-- @if(strpos(\Request::route()->getName(), 'need_parent_tag_two')===0)
                                    <a href="{{ route('need_parent_tag_twos') }}" class="nav-link active">
                                    @else
                                    <a href="{{ route('need_parent_tag_twos') }}" class="nav-link">
                                    @endif
                                        <!-- <i class="far fa-circle nav-icon"></i> -->
                                        -
                                        <p>برچسب فرعی 1 نیازسنجی</p>
                                    </a> --}}
                                </li>
                                <li class="nav-item">

                                </li>
                                <li class="nav-item">

                                </li>
                                <li class="nav-item">

                                </li>
                                <li class="nav-item">

                                </li>
                                <li class="nav-item">

                                </li>
                                <li class="nav-item">

                                </li>
                                <li class="nav-item">

                                </li>
                                <li class="nav-item">

                                </li>
                                <li class="nav-item">

                                </li>
                                <li class="nav-item">

                                </li>
                                <li class="nav-item">

                                </li>
                                <li class="nav-item">

                                </li>
                                <li class="nav-item">

                                </li>
                                <li class="nav-item">

                                </li>
                                <li class="nav-item">

                                </li>
                                <li class="nav-item">

                                </li>
                                <li class="nav-item">

                                </li>
                                <li class="nav-item">

                                </li>
                                <li class="nav-item">

                                </li>
                                <li class="nav-item">

                                </li>
                                <li class="nav-item">

                                </li>
                                <li class="nav-item">

                                </li>
                            </ul>
                        </li>
                        {{-- @endif --}}

                        {{-- @if (!Gate::allows('marketers'))
                        <li class="nav-item">
                            @if(strpos(\Request::route()->getName(), 'circular')===0)
                            <a href="{{ route('circulars') }}" class="nav-link active">
                                @else
                                <a href="{{ route('circulars') }}" class="nav-link">
                                    @endif
                                    @if(Gate::allows('parameters'))
                                    <p>ارسال بخشنامه برای پشتیبان ها</p>
                                    @else
                                    <p>دریافت  بخشنامه ها</p>
                                    @endif
                                </a>
                        </li> --}}
                        <li class="nav-item">
                            @if(strpos(\Request::route()->getName(), 'message')===0)
                            <a href="#" class="nav-link active">
                                @else
                                <a href="#" class="nav-link">
                                    @endif
                                    <p>ارسال و دریافت پیام</p>
                                </a>
                        </li>

                        <li class="nav-item">
                            @if(strpos(\Request::route()->getName(), 'grid')===0)
                            <a href="#" class="nav-link active">
                            @else
                            <a href="#" class="nav-link">
                            @endif
                                <p>آموزش و راهنما</p>
                            </a>
                        </li>

                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            @yield('content')
            @if (isset($msg_success))
            <div class="card card-success" style="width: 400px;position: fixed;left: 10px;bottom: 10px;">
                <div class="card-header">
                    <h3 class="card-title">موفقیت</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="remove"><i
                                class="fas fa-times"></i>
                        </button>
                    </div>
                    <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    {{ $msg_success }}
                </div>
                <!-- /.card-body -->
            </div>
            @endif
            @if (isset($msg_error))
            <div class="card card-danger" style="width: 400px;position: fixed;left: 10px;bottom: 10px;">
                <div class="card-header">
                    <h3 class="card-title">خطا</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="remove"><i
                                class="fas fa-times"></i>
                        </button>
                    </div>
                    <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    {{ $msg_error }}
                </div>
                <!-- /.card-body -->
            </div>
            @endif
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <!--
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.0-rc.1
    </div>
    -->
            کلیه حقوق متعلق به
            <strong>
                <a href="http://i-motion.ir/">
                    imotion
                </a>
                &copy;
            </strong>
            است
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->




    <!-- jQuery -->
    <script src="/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)

    </script>
    <!-- Bootstrap 4 rtl -->
    <script src="/dist/js/bootstrap.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="/plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="/plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="/plugins/jqvmap/maps/jquery.vmap.world.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="/plugins/moment/moment.min.js"></script>
    <script src="/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/dist/js/adminlte.js"></script>
    <!-- PersianCalender -->
    <script src="/plugins/persiancalender/jquery.md.bootstrap.datetimepicker.js"></script>

    @yield('js')

    <script>
        $(document).ready(function(){
            $("input.pdate").each(function(id, field){
                $(field).MdPersianDateTimePicker({
                    targetTextSelector: '#' + field.id
                });
            });
        });
    </script>

</body>

</html>
