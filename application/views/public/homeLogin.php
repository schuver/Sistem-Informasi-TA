<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Sistem Informasi Ta</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="<?php echo base_url(); ?>layout/login/assets/images/favicon.ico">

        <!-- App css -->
        <link href="<?php echo base_url(); ?>layout/login/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>layout/login/assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>layout/login/assets/css/style.css" rel="stylesheet" type="text/css" />

        <script src="<?php echo base_url(); ?>layout/login/assets/js/modernizr.min.js"></script>

    </head>

    <body>

        <!-- Begin page -->
        <div class="accountbg" style="background: url('<?php echo base_url(); ?>layout/login/assets/images/bg-1.jpg');background-size: cover;"></div>

        <div class="wrapper-page account-page-full">

            <div class="card">
                <div class="card-block">

                    <div class="account-box">

                        <div class="card-box p-5">
                            <h2 class="text-uppercase text-center pb-4">
                                <a href="index.html" class="text-success">
                                    <span><img src="<?php echo base_url(); ?>layout/login/assets/images/logo.png" alt="" height="100"></span>
                                </a>
                            </h2>

                            <form method="post" class="" action="<?php echo base_url('login/prosesLogin'); ?>">
                                <?php echo $this ->session ->flashdata('msg'); ?>
                                <div class="form-group m-b-20 row">
                                    <div class="col-12">
                                        <label for="username">Username</label>
                                        <input class="form-control" type="text" name="username" id="username"  placeholder="Masukkan username anda" required>
                                    </div>
                                </div>

                                <div class="form-group row m-b-20">
                                    <div class="col-12">
                                        <!-- <a href="#" class="text-muted pull-right"><small>Lupa Password ?</small></a> -->
                                        <label for="password">Password</label>
                                        <input class="form-control" type="password" name="pass" required id="password" placeholder="Masukkan password anda">
                                    </div>
                                </div>

                                <!-- <div class="form-group row m-b-20">
                                    <div class="col-12">

                                        <div class="checkbox checkbox-custom">
                                            <input id="remember" type="checkbox" checked="">
                                            <label for="remember">
                                                Remember me
                                            </label>
                                        </div>

                                    </div>
                                </div> -->

                                <div class="form-group row text-center m-t-10">
                                    <div class="col-12">
                                        <button name="btn-login" class="btn btn-block btn-custom waves-effect waves-light" type="submit">Masuk</button>
                                    </div>
                                </div>

                            </form>

                            <div class="row m-t-50">
                                <div class="col-sm-12 text-center">
                                    <p class="text-muted">Belum punya mendaftar ? <a href="<?php echo base_url('register'); ?>" class="text-dark m-l-5"><b>Daftar disini</b></a></p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <div class="m-t-40 text-center">
                <p class="account-copyright">2018 © Manajemen Informatika</p>
            </div>

        </div>


        <!-- jQuery  -->
        <script src="<?php echo base_url(); ?>layout/login/assets/js/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>layout/login/assets/js/popper.min.js"></script>
        <script src="<?php echo base_url(); ?>layout/login/assets/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>layout/login/assets/js/waves.js"></script>
        <script src="<?php echo base_url(); ?>layout/login/assets/js/jquery.slimscroll.js"></script>

        <!-- App js -->
        <script src="<?php echo base_url(); ?>layout/login/assets/js/jquery.core.js"></script>
        <script src="<?php echo base_url(); ?>layout/login/assets/js/jquery.app.js"></script>

    </body>
</html>