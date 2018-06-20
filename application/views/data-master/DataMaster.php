<div class="col-sm-12">
                                <div class="card-box">
                                    <h4 class="m-t-0 header-title"><b>Tambah Data Dosen</b></h4>
                             

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="p-20">
                                                <form class="form-horizontal" role="form" action="<?php echo base_url('DataMaster/simpan'); ?>" method="post">

                                                    <div class="form-group">
                                                        <label class="col-md-2 control-label">NIP</label>
                                                        <div class="col-md-10">
                                                            <input name="nip" type="text" class="form-control" placeholder="NIP">
                                                        </div>
                                                    </div>
													
													<div class="form-group">
                                                        <label class="col-md-2 control-label">Nama</label>
                                                        <div class="col-md-10">
                                                            <input name="nama" type="text" class="form-control" placeholder="Nama">
                                                        </div>
                                                    </div>
													
													<div class="form-group">
                                                        <label class="col-md-2 control-label">No.HP</label>
                                                        <div class="col-md-10">
                                                            <input name="no_hp" type="text" class="form-control" placeholder="No. HP">
                                                        </div>
                                                    </div>
													
									

                                                    <div class="form-group">
                                                        <label class="col-md-2 control-label">Input Select</label>
                                                        <div class="col-md-10">
                                                             <select class="form-control"  id="username" name="id_prodi" required="" placeholder="NIM">
                                            <option> - Pilih - </option>
                                            <?php foreach ($prodi as $list){?>
                                                    <option value="<?php echo $list->id ?>"><?php echo $list->nama_prodi; ?></option>
                                                <?php
                                                }
                                                ?>
                                        </select>
                                                <button style="margin-top: 25px;" type="submit" name="btn-master" class="btn btn-custom waves-light waves-effect w-md">Simpan</button>
                                                        </div>
                                                    </div>
													
													<div class="form-group">
                                                    </div>

                                                  

                                                </form>
												
                                            </div>
                                        </div>

                                    </div>
                                    <!-- end row -->

                                </div> <!-- end card-box -->
                            </div>