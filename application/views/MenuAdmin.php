
                        <!-- Left Menu Start -->
                        <ul class="metisMenu nav" id="side-menu">
                            <li class="menu-title">List Menu</li>
                            <!-- <li>
                                <a href="javascript: void(0);" aria-expanded="true"><i class="fi-air-play"></i><span class="badge badge-success pull-right">2</span> <span> Dashboard </span></a>
                                <ul class="nav-second-level nav" aria-expanded="true">
                                    <li><a href="index.html">Dashboard 1</a></li>
                                    <li><a href="dashboard-2.html">Dashboard 2</a></li>
                                </ul>
                            </li> -->
                            <?php if($this ->session ->userdata('level')==1){?>
                                <li>
                                    <a href="<?php echo base_url(); ?>koordinator"><i class="fa fa-home"></i><span> Beranda</span></a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('koordinator/privileges')?>"><i class="fa fa-lock"></i> <span> Privileges</span></a>
                                </li>
                                 <li>
                                    <a href="<?php echo base_url('koordinator/editkuota')?>"><i class="fa fa-lock"></i> <span> Edit Kuota</span></a>
                                </li>
                                <li>
                                    <a href="javascript: void(0);" aria-expanded="true"><i class="fa fa-lock"></i> <span> Grafik<span> <span class="menu-arrow"></span></a>
                                    <ul class="nav-second-level nav" aria-expanded="true">
                                        <li><a href="#"> Grafik Total Usulan</a></li>
                                        <li><a href="#"> Grafik Total Usulan</a></li>
                                        <li><a href="#"> Grafik Total Usulan</a></li>
                                        <li><a href="#"> Grafik Total Usulan</a></li>
                                        <li><a href="#"> Grafik Total Usulan</a></li>
                                        <li><a href="#"> Grafik Total Usulan</a></li>
                                    </ul>
                                </li>
                            <?php }else if($this ->session ->userdata('level')==2){?>
                                <li>
                                    <a href="<?php echo base_url(); ?>reviewer"><i class="fa fa-home"></i><span> Beranda2</span></a>
                                </li>
                            <?php }else if($this ->session ->userdata('level')==3){?>
                                <li>
                                    <a href="<?php echo base_url(); ?>dosen"><i class="fa fa-home"></i><span> Beranda3</span></a>
                                </li>
                            <?php }else{ ?>
                                <li>
                                <a href="<?php echo base_url(); ?>datamaster"><i class="fa fa-home"></i><span> Beranda0</span></a>
                            </li>
                            <?php }?>
                            <!-- <li>
                                <a href="javascript: void(0);" aria-expanded="true"><i class="fa fa-lock"></i> <span> Privileges<span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level nav" aria-expanded="true">
                                    <li><a href="admin-grid.html">Grid</a></li>
                                    <li><a href="admin-sweet-alert.html">Sweet Alert</a></li>
                                    <li><a href="admin-tiles.html">Tiles Box</a></li>
                                    <li><a href="admin-nestable.html">Nestable List</a></li>
                                    <li><a href="admin-rangeslider.html">Range Slider</a></li>
                                    <li><a href="admin-ratings.html">Ratings</a></li>
                                    <li><a href="admin-filemanager.html">File Manager</a></li>
                                    <li><a href="admin-lightbox.html">Lightbox</a></li>
                                    <li><a href="admin-scrollbar.html">Scroll bar</a></li>
                                    <li><a href="admin-slider.html">Slider</a></li>
                                    <li><a href="admin-treeview.html">Treeview</a></li>
                                </ul>
                            </li> -->

                        </ul>

                    