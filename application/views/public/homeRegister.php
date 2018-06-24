<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Highdmin - Responsive Bootstrap 4 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="<?php echo base_url(); ?>layout/login/<?php echo base_url(); ?>layout/login/favicon.ico">

        <!-- App css -->
        <link href="<?php echo base_url(); ?>layout/login/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>layout/login/assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>layout/login/assets/css/style.css" rel="stylesheet" type="text/css" />

        <script src="<?php echo base_url(); ?>layout/login/assets/js/modernizr.min.js"></script>

    </head>

    <body>

        <!-- Begin page -->
        <div class="accountbg" style="background: url('<?php echo base_url(); ?>layout/login/assets/images/bg-2.jpg');background-size: cover;"></div>
        <!-- <div class="accountbg" style="background: #3498db;">
            <div class="col-md-7 text-center">
                <h2>LOGO</h2>
            </div>
        </div> -->

        <div class="wrapper-page account-page-full">

            <div class="card">
                <div class="card-block">

                    <div class="account-box">

                        <div class="card-box p-5">
                            <!-- <h2 class="text-uppercase text-center pb-4">
                                <a href="index.html" class="text-success">
                                    <span><img src="<?php echo base_url(); ?>layout/login/assets/images/logo.png" alt="" height="26"></span>
                                </a>
                            </h2> -->

                            <form class="form-horizontal" action="<?php echo base_url('register/simpan'); ?>" method="post">
                                <?php echo $this ->session ->flashdata('msg'); ?>

                                <div class="form-group row m-b-20">
                                    <div class="col-12">
                                        <label for="username">NIM</label>
                                        <input class="form-control" type="text" id="username" name="nim" required="" placeholder="NIM">
                                    </div>
                                </div>

                                <div class="form-group row m-b-20">
                                    <div class="col-12">
                                        <label for="username">Nama</label>
                                        <input class="form-control" type="text" id="username" name="nama" required="" placeholder="Nama">
                                    </div>
                                </div>

                                <div class="form-group row m-b-20">
                                    <div class="col-12">
                                        <label for="username">Golongan</label>
                                        <select class="form-control" type="radio" id="username" name="golongan" required="" placeholder="NIM">
                                            <option> - Pilih - </option>
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="C">C</option>
                                            <option value="D">D</option>
                                        </select>
                                    </div>
                                </div>



                                <div class="form-group row m-b-20">
                                    <div class="col-12">
                                        <label for="username">Prodi</label>
                                        <select class="form-control"  id="username" name="id_prodi" required="" placeholder="NIM">
                                            <option> - Pilih - </option>
                                            <?php foreach ($prodi as $list){?>
                                                    <option value="<?php echo $list->id ?>"><?php echo $list->nama_prodi; ?></option>
                                                <?php
                                                }
                                                ?>
                                        </select>
                                    </div>
                                </div>

                                <!-- <div class="form-group row m-b-20">
                                    <div class="col-12">
                                        <label for="username">Username</label>
                                        <input class="form-control" type="text" id="username" name="username" required="" placeholder="NIM">
                                    </div>
                                </div> -->

                                <div class="form-group row m-b-20">
                                    <div class="col-12">
                                        <label for="password">Password</label>
                                        <input class="form-control" name="password" type="password" required="" id="password" placeholder="Enter your password">
                                    </div>
                                </div>

                                <!-- div class="form-group row m-b-20">
                                    <div class="col-12">

                                        <div class="checkbox checkbox-custom">
                                            <input id="remember" type="checkbox" checked="">
                                            <label for="remember">
                                                I accept <a href="#" class="text-custom">Terms and Conditions</a>
                                            </label>
                                        </div>

                                    </div>
                                </div> -->

                                <div class="form-group row text-center m-t-10">
                                    <div class="col-12">
                                        <button class="btn btn-block btn-custom waves-effect waves-light" type="submit">Sign Up Free</button>
                                    </div>
                                </div>

                            </form>

                            <div class="row">
                                <div class="col-sm-12 text-center">
                                    <p class="text-muted">Already have an account?  <a href="<?php echo base_url('login'); ?>" class="text-dark m-l-5"><b>Sign In</b></a></p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
<!-- 
            <div class="m-t-40 text-center">
                <p class="account-copyright">2018 © Uknown</p>
            </div> -->

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