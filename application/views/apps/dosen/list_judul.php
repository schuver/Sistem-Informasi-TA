<div class="col-sm-12"><?php echo form_open('Dosen/simpan','class="form-horizontal" role="form"'); ?>
                                <div class="card-box">
                                    <h4 class="m-t-0 header-title"><b>Input Judul Penelitian</b></h4>
                             

                                 <?php echo $this ->session ->flashdata('msg'); ?>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="p-20">
                                                    
                                                    <div class="form-group">
                                                        <label class="col-md-2 control-label">Kuota</label>
                                                        <div class="col-md-10">
                                                            <input name="kuota" type="text" class="form-control" placeholder="Kuota">
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <label class="col-md-2 control-label">Judul Penelitian</label>
                                                        <div class="col-md-10">
                                                            <input name="judul_penelitian" type="text" class="form-control" placeholder="Judul Penelitian">
                                                       <button style="margin-top: 15px;" type="submit" name="btn-master" class="btn btn-custom waves-light waves-effect w-md">Simpan</button>
                                                        </div>
                                                    </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                    </div>

                                                  

                                                <!-- </form> -->
                                                
                                            </div>
                                        </div>

                                    </div>
                                    <!-- end row -->

                                </div> <!-- end card-box -->
                            </div>