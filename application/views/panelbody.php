<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Sistem Informasi TA</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="<?php echo base_url(); ?>layout/assets/images/favicon.ico">
        <link href="<?php echo base_url(); ?>layout/assets/plugins/footable/css/footable.core.css" rel="stylesheet">

        <link href="<?php echo base_url(); ?>layout/assets/plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>layout/assets/plugins/datatables/fixedHeader.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>layout/assets/plugins/datatables/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css"/>

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
                    <a class="logo">
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
                            <li class="dropdown user-box">
                                <a href="#" class="right-menu-item dropdown-toggle" data-toggle="dropdown">
                                    <i class="dripicons-user"></i>
                                </a>

                                <ul class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right user-list notify-list">
                                    <li style="margin-top: 10px; margin-left: 10px;">Selamat Datang ! <br><?php echo $this->session->userdata('name_session');?>
                                  </li>
                                    <li class="divider"></li>
                                    <li><a href="<?php echo base_url('login/logout')?>">Logout</a></li>
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
                                            <a href="#">Sistem Informasi TA</a>
                                        </li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                        <?php $this ->load ->view($panelbody); ?>

                    </div> <!-- container -->

                </div> <!-- content -->

                <footer class="footer text-right">
                    2018 &copy; Manajemen Informatika
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

        <script src="<?php echo base_url(); ?>layout/assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url(); ?>layout/assets/plugins/datatables/dataTables.bootstrap.js"></script>
        <script src="<?php echo base_url(); ?>layout/assets/plugins/datatables/jszip.min.js"></script>
        <script src="<?php echo base_url(); ?>layout/assets/plugins/datatables/dataTables.fixedHeader.min.js"></script>
        <script src="<?php echo base_url(); ?>layout/assets/plugins/datatables/responsive.bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>layout/assets/plugins/datatables/dataTables.fixedColumns.min.js"></script>

        <!-- init -->
        <script src="<?php echo base_url(); ?>layout/assets/pages/jquery.datatables.init.js"></script>

        <!-- Dashboard init -->
        <script src="<?php echo base_url(); ?>layout/assets/pages/jquery.dashboard.js"></script>

        <!-- App js -->
        <script src="<?php echo base_url(); ?>layout/assets/js/jquery.core.js"></script>
        <script src="<?php echo base_url(); ?>layout/assets/js/jquery.app.js"></script>

        <script type="text/javascript">
            $(document).ready(function () {
                $('#datatable').dataTable();
                $('#datatable-keytable').DataTable({keys: true});
                $('#datatable-responsive').DataTable();
                $('#datatable-colvid').DataTable({
                    "dom": 'C<"clear">lfrtip',
                    "colVis": {
                        "buttonText": "Change columns"
                    }
                });
                $('#datatable-scroller').DataTable({
                    ajax: "<?php echo base_url(); ?>layout/assets/plugins/datatables/json/scroller-demo.json",
                    deferRender: true,
                    scrollY: 380,
                    scrollCollapse: true,
                    scroller: true
                });
                var table = $('#datatable-fixed-header').DataTable({fixedHeader: true});
                var table = $('#datatable-fixed-col').DataTable({
                    scrollY: "300px",
                    scrollX: true,
                    scrollCollapse: true,
                    paging: false,
                    fixedColumns: {
                        leftColumns: 1,
                        rightColumns: 1
                    }
                });
            });
            TableManageButtons.init();

        </script>

        <!--FooTable-->
        <script src="<?php echo base_url(); ?>layout/assets/plugins/footable/js/footable.all.min.js"></script>


        <script type="text/javascript" src="<?php echo base_url(); ?>layout/assets/plugins/d3/d3.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>layout/assets/plugins/c3/c3.min.js"></script>
        <script src="<?php echo base_url(); ?>layout/assets/pages/jquery.c3-chart.init.js"></script>

        <!--FooTable Example-->
        <script src="<?php echo base_url(); ?>layout/assets/pages/jquery.footable.js"></script>

    </body>
</html>