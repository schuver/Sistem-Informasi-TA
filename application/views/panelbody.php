<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Adminox - Responsive Web App Kit</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="<?php echo base_url(); ?>layout/assets/images/favicon.ico">

        <!-- C3 charts css -->
        <link href="<?php echo base_url(); ?>layout/assets/plugins/c3/c3.min.css" rel="stylesheet" type="text/css"  />

        <!-- App css -->
        <link href="<?php echo base_url(); ?>layout/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>layout/assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>layout/assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>layout/assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>layout/assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>layout/assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>layout/assets/css/responsive.css" rel="stylesheet" type="text/css" />

        <script src="<?php echo base_url(); ?>layout/assets/js/modernizr.min.js"></script>

    </head>


    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <!--<a href="index.html" class="logo"><span>Code<span>Fox</span></span><i class="mdi mdi-layers"></i></a>-->
                    <!-- Image logo -->
                    <a href="index.html" class="logo">
                        <span>
                            <img src="<?php echo base_url(); ?>layout/assets/images/logo.png" alt="" height="25">
                        </span>
                        <i>
                            <img src="<?php echo base_url(); ?>layout/assets/images/logo_sm.png" alt="" height="28">
                        </i>
                    </a>
                </div>

                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">

                        <!-- Navbar-left -->
                        <ul class="nav navbar-nav navbar-left nav-menu-left">
                            <li>
                                <button type="button" class="button-menu-mobile open-left waves-effect">
                                    <i class="dripicons-menu"></i>
                                </button>
                            </li>
                        </ul>

                        <!-- Right(Notification) -->
                        <ul class="nav navbar-nav navbar-right">
                            <li class="hidden-xs">
                                <form role="search" class="app-search">
                                    <input type="text" placeholder="Search..."
                                           class="form-control">
                                    <a href=""><i class="fa fa-search"></i></a>
                                </form>
                            </li>
                            <?php echo base_url();?>
                            <li>
                                <a href="#" class="right-menu-item dropdown-toggle" data-toggle="dropdown">
                                    <i class="dripicons-bell"></i>
                                    <span class="badge badge-pink">4</span>
                                </a>

                                <ul class="dropdown-menu dropdown-menu-right dropdown-lg user-list notify-list">
                                    <li class="list-group notification-list m-b-0">
                                        <div class="slimscroll">
                                           <!-- list item-->
                                           <a href="javascript:void(0);" class="list-group-item">
                                              <div class="media">
                                                 <div class="media-left p-r-10">
                                                    <em class="fa fa-diamond bg-primary"></em>
                                                 </div>
                                                 <div class="media-body">
                                                    <h5 class="media-heading text-primary">A new order has been placed A new order has been placed</h5>
                                                    <p class="m-0">
                                                        There are new settings available
                                                    </p>
                                                 </div>
                                              </div>
                                           </a>

                                           <!-- list item-->
                                           <a href="javascript:void(0);" class="list-group-item">
                                              <div class="media">
                                                 <div class="media-left p-r-10">
                                                    <em class="fa fa-cog bg-warning"></em>
                                                 </div>
                                                 <div class="media-body">
                                                    <h5 class="media-heading text-warning">New settings</h5>
                                                    <p class="m-0">
                                                        There are new settings available
                                                    </p>
                                                 </div>
                                              </div>
                                           </a>

                                           <!-- list item-->
                                           <a href="javascript:void(0);" class="list-group-item">
                                              <div class="media">
                                                 <div class="media-left p-r-10">
                                                    <em class="fa fa-bell-o bg-custom"></em>
                                                 </div>
                                                 <div class="media-body">
                                                    <h5 class="media-heading text-custom">Updates</h5>
                                                    <p class="m-0">
                                                        There are <span class="text-primary font-600">2</span> new updates available
                                                    </p>
                                                 </div>
                                              </div>
                                           </a>

                                           <!-- list item-->
                                           <a href="javascript:void(0);" class="list-group-item">
                                              <div class="media">
                                                 <div class="media-left p-r-10">
                                                    <em class="fa fa-user-plus bg-danger"></em>
                                                 </div>
                                                 <div class="media-body">
                                                    <h5 class="media-heading text-danger">New user registered</h5>
                                                    <p class="m-0">
                                                        You have 10 unread messages
                                                    </p>
                                                 </div>
                                              </div>
                                           </a>

                                            <!-- list item-->
                                           <a href="javascript:void(0);" class="list-group-item">
                                              <div class="media">
                                                 <div class="media-left p-r-10">
                                                    <em class="fa fa-diamond bg-primary"></em>
                                                 </div>
                                                 <div class="media-body">
                                                    <h5 class="media-heading text-primary">A new order has been placed A new order has been placed</h5>
                                                    <p class="m-0">
                                                        There are new settings available
                                                    </p>
                                                 </div>
                                              </div>
                                           </a>

                                           <!-- list item-->
                                           <a href="javascript:void(0);" class="list-group-item">
                                              <div class="media">
                                                 <div class="media-left p-r-10">
                                                    <em class="fa fa-cog bg-warning"></em>
                                                 </div>
                                                 <div class="media-body">
                                                    <h5 class="media-heading text-warning">New settings</h5>
                                                    <p class="m-0">
                                                        There are new settings available
                                                    </p>
                                                 </div>
                                              </div>
                                           </a>
                                       </div>
                                    </li>
                                    <!-- end notification list -->
                                </ul>
                            </li>

                            <li class="dropdown user-box">
                                <a href="" class="dropdown-toggle waves-effect user-link" data-toggle="dropdown" aria-expanded="true">
                                    <img src="<?php echo base_url(); ?>layout/assets/images/users/avatar-1.jpg" alt="user-img" class="img-circle user-img">
                                </a>

                                <ul class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right user-list notify-list">
                                    <li><a href="javascript:void(0)">Profile</a></li>
                                    <li><a href="javascript:void(0)"><span class="badge badge-info pull-right">4</span>Settings</a></li>
                                    <li><a href="javascript:void(0)">Lock screen</a></li>
                                    <li class="divider"></li>
                                    <li><a href="javascript:void(0)">Logout</a></li>
                                </ul>
                            </li>

                        </ul> <!-- end navbar-right -->

                    </div><!-- end container -->
                </div><!-- end navbar -->
            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <div class="slimscroll-menu" id="remove-scroll">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                    <?php $this->load->view($menu);?>
                    </div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Dashboard</h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">Adminox</a>
                                        </li>
                                        <li>
                                            <a href="#">Dashboard</a>
                                        </li>
                                        <li class="active">
                                            Dashboard 1
                                        </li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">

                            <div class="col-lg-3 col-md-6">
                                <div class="card-box widget-box-two widget-two-custom">
                                    <i class="mdi mdi-currency-usd widget-two-icon"></i>
                                    <div class="wigdet-two-content">
                                        <p class="m-0 text-uppercase font-bold font-secondary text-overflow" title="Statistics">Total Revenue</p>
                                        <h2 class=""><span><i class="mdi mdi-arrow-up"></i></span> <span data-plugin="counterup">65841</span></h2>
                                        <p class="m-0">Jan - Apr 2017</p>
                                    </div>
                                </div>
                            </div><!-- end col -->

                            <div class="col-lg-3 col-md-6">
                                <div class="card-box widget-box-two widget-two-custom">
                                    <i class="mdi mdi-account-multiple widget-two-icon"></i>
                                    <div class="wigdet-two-content">
                                        <p class="m-0 text-uppercase font-bold font-secondary text-overflow" title="Statistics">Total Unique Visitors</p>
                                        <h2 class=""><span><i class="mdi mdi-arrow-up"></i></span> <span data-plugin="counterup">236521</span></h2>
                                        <p class="m-0">Jan - Apr 2017</p>
                                    </div>
                                </div>
                            </div><!-- end col -->

                            <div class="col-lg-3 col-md-6">
                                <div class="card-box widget-box-two widget-two-custom">
                                    <i class="mdi mdi-crown widget-two-icon"></i>
                                    <div class="wigdet-two-content">
                                        <p class="m-0 text-uppercase font-bold font-secondary text-overflow" title="Statistics">Number of Transactions</p>
                                        <h2 class=""><span><i class="mdi mdi-arrow-up"></i></span> <span data-plugin="counterup">563698</span></h2>
                                        <p class="m-0">Jan - Apr 2017</p>
                                    </div>
                                </div>
                            </div><!-- end col -->

                            <div class="col-lg-3 col-md-6">
                                <div class="card-box widget-box-two widget-two-custom">
                                    <i class="mdi mdi-auto-fix widget-two-icon"></i>
                                    <div class="wigdet-two-content">
                                        <p class="m-0 text-uppercase font-bold font-secondary text-overflow" title="Statistics">Conversation Rate</p>
                                        <h2 class=""><span><i class="mdi mdi-arrow-up"></i></span> <span data-plugin="counterup">2.07</span>%</h2>
                                        <p class="m-0">Jan - Apr 2017</p>
                                    </div>
                                </div>
                            </div><!-- end col -->

                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card-box">
                                    <h4 class="header-title m-t-0 m-b-30">Revenue Comparison</h4>

                                    <div class="text-center">
                                        <h5 class="font-normal text-muted">You have to pay</h5>
                                        <h3 class="m-b-30"><i class="mdi mdi-arrow-up-bold-hexagon-outline text-success"></i> 25643 <small>USD</small></h3>
                                    </div>

                                    <div class="chart-container">
                                        <div class="" style="height:280px" id="platform_type_dates_donut"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="card-box">
                                    <h4 class="header-title m-t-0 m-b-30">Visitors Overview</h4>

                                    <div class="text-center">
                                        <h5 class="font-normal text-muted">You have to pay</h5>
                                        <h3 class="m-b-30"><i class="mdi mdi-arrow-down-bold-hexagon-outline text-danger"></i> 5623 <small>USD</small></h3>
                                    </div>

                                    <div class="chart-container">
                                        <div class="" style="height:280px" id="user_type_bar"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="card-box">
                                    <h4 class="header-title m-t-0 m-b-30">Goal Completion</h4>

                                    <div class="text-center">
                                        <h5 class="font-normal text-muted">You have to pay</h5>
                                        <h3 class="m-b-30"><i class="mdi mdi-arrow-up-bold-hexagon-outline text-success"></i> 12548 <small>USD</small></h3>
                                    </div>

                                    <div class="chart-container">
                                        <div class="chart has-fixed-height" style="height:280px" id="page_views_today"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card-box">
                                    <h4 class="m-t-0 header-title"><b>Recent Candidates</b></h4>
                                    <p class="text-muted font-14 m-b-20">
                                        Your awesome text goes here.
                                    </p>

                                    <div class="table-responsive">
                                        <table class="table table-hover m-0 mails table-actions-bar">

                                            <thead>
                                            <tr>
                                                <th>
                                                    <div class="btn-group dropdown">
                                                        <button type="button" class="btn btn-default btn-xs dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false"><i class="caret"></i></button>
                                                        <ul class="dropdown-menu" role="menu">
                                                            <li><a href="#">Action</a></li>
                                                            <li><a href="#">Another action</a></li>
                                                            <li><a href="#">Something else here</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="#">Separated link</a></li>
                                                        </ul>
                                                    </div>
                                                </th>
                                                <th>Name</th>
                                                <th>Location</th>
                                                <th>Job Timing</th>
                                                <th>Salary</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>

                                                    <img src="<?php echo base_url(); ?>layout/assets/images/users/avatar-2.jpg" alt="contact-img" title="contact-img" class="img-circle thumb-sm" />
                                                </td>

                                                <td>
                                                    <h5 class="m-b-0 m-t-0">Tomaslau</h5>
                                                    <p class="m-b-0"><small>Web Designer</small></p>
                                                </td>

                                                <td>
                                                    <i class="mdi mdi-map-marker text-primary"></i> New York
                                                </td>

                                                <td>
                                                    <i class="mdi mdi-clock text-success"></i> Full Time
                                                </td>

                                                <td>
                                                    <i class="mdi mdi-currency-usd text-warning"></i> 3265
                                                </td>

                                                <td>
                                                    <a href="#" class="table-action-btn"><i class="mdi mdi-pencil"></i></a>
                                                    <a href="#" class="table-action-btn"><i class="mdi mdi-close"></i></a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <img src="<?php echo base_url(); ?>layout/assets/images/users/avatar-3.jpg" alt="contact-img" title="contact-img" class="img-circle thumb-sm" />
                                                </td>

                                                <td>
                                                    <h5 class="m-b-0 m-t-0">Erwin E. Brown</h5>
                                                    <p class="m-b-0"><small>Programmer</small></p>
                                                </td>

                                                <td>
                                                    <i class="mdi mdi-map-marker text-primary"></i> California
                                                </td>

                                                <td>
                                                    <i class="mdi mdi-clock text-success"></i> Part Time
                                                </td>

                                                <td>
                                                    <i class="mdi mdi-currency-usd text-warning"></i> 1365
                                                </td>

                                                <td>
                                                    <a href="#" class="table-action-btn"><i class="mdi mdi-pencil"></i></a>
                                                    <a href="#" class="table-action-btn"><i class="mdi mdi-close"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="<?php echo base_url(); ?>layout/assets/images/users/avatar-4.jpg" alt="contact-img" title="contact-img" class="img-circle thumb-sm" />
                                                </td>

                                                <td>
                                                    <h5 class="m-b-0 m-t-0">Margeret V. Ligon</h5>
                                                    <p class="m-b-0"><small>Web Designer</small></p>
                                                </td>

                                                <td>
                                                    <i class="mdi mdi-map-marker text-primary"></i> New York
                                                </td>

                                                <td>
                                                    <i class="mdi mdi-clock text-success"></i> Full Time
                                                </td>

                                                <td>
                                                    <i class="mdi mdi-currency-usd text-warning"></i> 115248
                                                </td>

                                                <td>
                                                    <a href="#" class="table-action-btn"><i class="mdi mdi-pencil"></i></a>
                                                    <a href="#" class="table-action-btn"><i class="mdi mdi-close"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="<?php echo base_url(); ?>layout/assets/images/users/avatar-5.jpg" alt="contact-img" title="contact-img" class="img-circle thumb-sm" />
                                                </td>

                                                <td>
                                                    <h5 class="m-b-0 m-t-0">Jose D. Delacruz</h5>
                                                    <p class="m-b-0"><small>Web Developer</small></p>
                                                </td>

                                                <td>
                                                    <i class="mdi mdi-map-marker text-primary"></i> New York
                                                </td>

                                                <td>
                                                    <i class="mdi mdi-clock text-success"></i> Part Time
                                                </td>

                                                <td>
                                                    <i class="mdi mdi-currency-usd text-warning"></i> 2451
                                                </td>

                                                <td>
                                                    <a href="#" class="table-action-btn"><i class="mdi mdi-pencil"></i></a>
                                                    <a href="#" class="table-action-btn"><i class="mdi mdi-close"></i></a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <img src="<?php echo base_url(); ?>layout/assets/images/users/avatar-8.jpg" alt="contact-img" title="contact-img" class="img-circle thumb-sm" />
                                                </td>

                                                <td>
                                                    <h5 class="m-b-0 m-t-0">Luke J. Sain</h5>
                                                    <p class="m-b-0"><small>Web Designer</small></p>
                                                </td>

                                                <td>
                                                    <i class="mdi mdi-map-marker text-primary"></i> Australia
                                                </td>

                                                <td>
                                                    <i class="mdi mdi-clock text-success"></i> Part Time
                                                </td>

                                                <td>
                                                    <i class="mdi mdi-currency-usd text-warning"></i> 3265
                                                </td>

                                                <td>
                                                    <a href="#" class="table-action-btn"><i class="mdi mdi-pencil"></i></a>
                                                    <a href="#" class="table-action-btn"><i class="mdi mdi-close"></i></a>
                                                </td>
                                            </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>
                            <!-- end col -->

                            <div class="col-lg-3">
                                <div class="card-box">
                                    <h4 class="text-dark header-title m-t-0 m-b-30">Total Unique Visitors</h4>

                                    <div class="widget-chart text-center">

                                        <div id="donut-chart" style="height: 270px;"></div>

                                        <div class="row text-center m-t-30">
                                            <div class="col-xs-6">
                                                <h3 data-plugin="counterup">1,507</h3>
                                                <p class="text-muted">Visitors Male</p>
                                            </div>
                                            <div class="col-xs-6">
                                                <h3 data-plugin="counterup">854</h3>
                                                <p class="text-muted">Visitors Female</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>


                            <div class="col-lg-3">
                                <div class="card-box">
                                    <h4 class="text-dark header-title m-t-0 m-b-30">Number of Transactions</h4>

                                    <div class="widget-chart text-center">

                                        <div id="pie-chart" style="height: 270px;"></div>

                                        <div class="row text-center m-t-30">
                                            <div class="col-xs-6">
                                                <h3 data-plugin="counterup">2,854</h3>
                                                <p class="text-muted">Payment Done</p>
                                            </div>
                                            <div class="col-xs-6">
                                                <h3 data-plugin="counterup">22</h3>
                                                <p class="text-muted">Payment Due</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <!--- end row -->




                    </div> <!-- container -->

                </div> <!-- content -->

                <footer class="footer text-right">
                    2017 © Adminox. - Coderthemes.com
                </footer>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->



        <!-- jQuery  -->
        <script src="<?php echo base_url(); ?>layout/assets/js/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>layout/assets/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>layout/assets/js/metisMenu.min.js"></script>
        <script src="<?php echo base_url(); ?>layout/assets/js/waves.js"></script>
        <script src="<?php echo base_url(); ?>layout/assets/js/jquery.slimscroll.js"></script>

        <!-- Counter js  -->
        <script src="<?php echo base_url(); ?>layout/assets/plugins/waypoints/jquery.waypoints.min.js"></script>
        <script src="<?php echo base_url(); ?>layout/assets/plugins/counterup/jquery.counterup.min.js"></script>

        <!--C3 Chart-->
        <script type="text/javascript" src="<?php echo base_url(); ?>layout/assets/plugins/d3/d3.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>layout/assets/plugins/c3/c3.min.js"></script>

        <!--Echart Chart-->
        <script src="<?php echo base_url(); ?>layout/assets/plugins/echart/echarts-all.js"></script>

        <!-- Dashboard init -->
        <script src="<?php echo base_url(); ?>layout/assets/pages/jquery.dashboard.js"></script>

        <!-- App js -->
        <script src="<?php echo base_url(); ?>layout/assets/js/jquery.core.js"></script>
        <script src="<?php echo base_url(); ?>layout/assets/js/jquery.app.js"></script>

    </body>
</html>