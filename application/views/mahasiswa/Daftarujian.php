<?php echo form_open_multipart('Mahasiswa/simpandaftar','class="form-horizontal" role="form"'); ?>
<div class="col-sm-12">
    <div class="card-box">
        <h4 class="m-t-0 header-title"><b>Pendaftaran Ujian Proposal</b></h4>
 
        <div class="row">
            <div class="col-md-12">
                <div class="p-20">
                    
        <?php echo $this ->session ->flashdata('msg'); ?>
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="exampleInputEmail1">Tanggal </label>
                            <div class="col-md-10">
                                <input type="date" name="tanggal" class="form-control" id="exampleInputEmail1">
                            </div>
                         </div>
						
						<div class="form-group">
                            <label class="col-md-2 control-label">Waktu</label>
                            <div class="col-md-10">
                                <input name="waktu" type="time" class="form-control" placeholder="Waktu">
                            </div>
                        </div>
						
						<div class="form-group">
                            <label class="col-md-2 control-label">Tempat</label>
                            <div class="col-md-10">
                                <input name="tempat" type="text" class="form-control" placeholder="Tempat">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label">NIM</label>
                            <div class="col-md-10">
                                <input name="nim" type="text" class="form-control" value="<?php echo @$id; ?>" placeholder="NIM" disabled>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label">File</label>
                            <div class="col-md-10">
                                <input name="berkas" type="file" class="form-control">
                        <button style="margin-top: 25px;" type="submit" name="btn-master" class="btn btn-custom waves-light waves-effect w-md">Simpan</button>
                            </div>
                        </div>

						<div class="form-group">
                        </div>

                      
					
                </div>
            </div>

        </div>
        <!-- end row -->

    </div> <!-- end card-box -->
</div>
<?php echo form_close();?>