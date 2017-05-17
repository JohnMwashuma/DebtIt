<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('browsertitle')</title>

    <!-- Bootstrap -->
    <link href="https://colorlib.com/polygon/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://colorlib.com/polygon/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="https://colorlib.com/polygon/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="https://colorlib.com/polygon/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="https://colorlib.com/polygon/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="https://colorlib.com/polygon/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="https://colorlib.com/polygon/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="https://colorlib.com/polygon/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="https://colorlib.com/polygon/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="https://colorlib.com/polygon/build/css/custom.min.css" rel="stylesheet"> @yield('css')
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="/" class="site_title"><i class="fa fa-paw"></i> <span>DebtIt!</span></a>
                    </div>

                    <div class="clearfix"></div>

                    <br />

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <ul class="nav side-menu">
                                @if((DebtIt\Auth\LoggedIn::user()) && (DebtIt\Auth\LoggedIn::user()->user_role == 'roleA'))
                                <li><a><i class="fa fa-home"></i> Dashboard <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="/">Debtors Accounts</a></li>
                                        <li><a href="/customers">Customers Accounts</a></li>
                                        <li><a href="/debtstatus">Customers Debt Status</a></li>
                                    </ul>
                                </li>
                                @endif @if(DebtIt\Auth\LoggedIn::user())
                                <li><a><i class="fa fa-credit-card"></i> My Debt Accounts <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="/debtaccounts">All My Debt Accounts</a></li>
                                        <li><a href="/loan">New Debt Account<span class="fa fa-plus"></span></a></li>

                                    </ul>
                                </li>
                                <li><a href="/manage/{{$UserId}}"><i class="glyphicon glyphicon-cog"></i> Manage My Account </a></li>
                                @endif
                            </ul>
                        </div>


                    </div>
                    <!-- /sidebar menu -->

                    <!-- /menu footer buttons -->
                    <div class="sidebar-footer hidden-small">
                        <a href="/" data-toggle="tooltip" data-placement="top" title="Dashboard">
                            <span class="fa fa-home" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="My Debt Accounts">
                            <span class="fa fa-credit-card" aria-hidden="true"></span>
                        </a>
                        <a href="/manage/{{$UserId}}" data-toggle="tooltip" data-placement="top" title="Manage My Account">
                            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                        </a>
                        <a href="/logout" data-toggle="tooltip" data-placement="top" title="Logout">
                            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                        </a>
                    </div>
                    <!-- /menu footer buttons -->
                </div>
            </div>

            <!-- top navigation -->
            <div class="top_nav">
                <div class="nav_menu">
                    <nav>
                        <div class="nav toggle">
                            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                        </div>

                        <ul class="nav navbar-nav navbar-right">
                            <li class="">
                                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Welcome back {{$UserName}}
                                    <span class=" fa fa-angle-down"></span>
                                </a>
                                <ul class="dropdown-menu dropdown-usermenu pull-right">
                                    <li><a href="/manage/{{$UserId}}"> Profile</a></li>
                                    <li><a href="/logout"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                                </ul>
                            </li>


                        </ul>
                    </nav>
                </div>
            </div>
            <!-- /top navigation -->

            <!-- page content -->
            <div class="right_col" role="main">

                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            @yield('content')
                        </div>
                    </div>

                </div>
                <br />


            </div>
            <!-- /page content -->

            <!-- footer content -->
            <footer>
                <div class="pull-right">
                    DebtIt! App Developed by <a href="https://colorlib.com">John Mwashuma</a>
                </div>
                <div class="clearfix"></div>
            </footer>
            <!-- /footer content -->
        </div>
    </div>

    <!-- jQuery -->
    <script src="https://colorlib.com/polygon/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="https://colorlib.com/polygon/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="https://colorlib.com/polygon/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="https://colorlib.com/polygon/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="https://colorlib.com/polygon/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="https://colorlib.com/polygon/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="https://colorlib.com/polygon/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="https://colorlib.com/polygon/vendors/iCheck/icheck.min.js"></script>
    <!-- Datatables -->
    <script src="https://colorlib.com/polygon/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="https://colorlib.com/polygon/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="https://colorlib.com/polygon/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="https://colorlib.com/polygon/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="https://colorlib.com/polygon/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="https://colorlib.com/polygon/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="https://colorlib.com/polygon/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="https://colorlib.com/polygon/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="https://colorlib.com/polygon/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="https://colorlib.com/polygon/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="https://colorlib.com/polygon/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="https://colorlib.com/polygon/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="https://colorlib.com/polygon/vendors/jszip/dist/jszip.min.js"></script>
    <script src="https://colorlib.com/polygon/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="https://colorlib.com/polygon/vendors/pdfmake/build/vfs_fonts.js"></script>

    <!-- Skycons -->
    <script src="https://colorlib.com/polygon/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="https://colorlib.com/polygon/vendors/Flot/jquery.flot.js"></script>
    <script src="https://colorlib.com/polygon/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="https://colorlib.com/polygon/vendors/Flot/jquery.flot.time.js"></script>
    <script src="https://colorlib.com/polygon/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="https://colorlib.com/polygon/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="https://colorlib.com/polygon/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="https://colorlib.com/polygon/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="https://colorlib.com/polygon/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="https://colorlib.com/polygon/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="https://colorlib.com/polygon/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="https://colorlib.com/polygon/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="https://colorlib.com/polygon/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="https://colorlib.com/polygon/vendors/moment/min/moment.min.js"></script>
    <script src="https://colorlib.com/polygon/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap-wysiwyg -->
    <script src="https://colorlib.com/polygon/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
    <script src="https://colorlib.com/polygon/vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
    <script src="https://colorlib.com/polygon/vendors/google-code-prettify/src/prettify.js"></script>
    <!-- jQuery Tags Input -->
    <script src="https://colorlib.com/polygon/vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
    <!-- Switchery -->
    <script src="https://colorlib.com/polygon/vendors/switchery/dist/switchery.min.js"></script>
    <!-- Select2 -->
    <script src="https://colorlib.com/polygon/vendors/select2/dist/js/select2.full.min.js"></script>
    <!-- Parsley -->
    <script src="https://colorlib.com/polygon/vendors/parsleyjs/dist/parsley.min.js"></script>
    <!-- Autosize -->
    <script src="https://colorlib.com/polygon/vendors/autosize/dist/autosize.min.js"></script>
    <!-- jQuery autocomplete -->
    <script src="https://colorlib.com/polygon/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
    <!-- starrr -->
    <script src="https://colorlib.com/polygon/vendors/starrr/dist/starrr.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="https://colorlib.com/polygon/build/js/custom.min.js"></script>

</body>

</html>
