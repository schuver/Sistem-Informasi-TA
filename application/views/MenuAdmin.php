
                        <!-- Left Menu Start -->
                        <ul class="metisMenu nav" id="side-menu">
                            <li class="menu-title">List Menu</li>
                            <?php if($this ->session ->userdata('level')==1){?>
                                <li>
                                    <a href="<?php echo base_url(); ?>koordinator"><i class="fa fa-home"></i><span> Beranda</span></a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('koordinator/privileges')?>"><i class="fa fa-lock"></i> <span> Privileges</span></a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('koordinator/editkuota')?>"><i class="fa fa-pencil"></i> <span> Edit Kuota</span></a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('koordinator/bimbinganMhs')?>"><i class="fa fa-pencil"></i> <span> Bimbingan Mahasiswa</span></a>
                                </li>
                                <li>
                                    <a href="javascript: void(0);" aria-expanded="true"><i class="fa fa-calendar-check-o"></i> <span> Batas Tanggal Input<span> <span class="menu-arrow"></span></a>
                                    <ul class="nav-second-level nav" aria-expanded="true">
                                        <li><a href="<?php echo base_url('koordinator/tglInput')?>"> Input Tanggal</a></li>
                                        <li><a href="<?php echo base_url('koordinator/listJadwal')?>"> List Jadwal</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript: void(0);" aria-expanded="true"><i class="fa fa-bar-chart-o"></i> <span> Grafik<span> <span class="menu-arrow"></span></a>
                                    <ul class="nav-second-level nav" aria-expanded="true">
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
                                <a href="<?php echo base_url(); ?>datamaster"><i class="fa fa-home"></i><span> Beranda</span></a>
                                </li>
                                <li>
                                <a href="<?php echo base_url(); ?>datamaster/tambahDosen"><i class="fa fa-home"></i><span> Data Master Dosen</span></a>
                                </li>
                                <li>
                                <a href="<?php echo base_url(); ?>datamaster/tambahDataMaster"><i class="fa fa-home"></i><span> Tambah Data Master</span></a>
                                </li>
                            <?php }?>

                        </ul>

                    