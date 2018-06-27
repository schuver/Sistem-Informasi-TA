<?php echo form_open('mahasiswa/saveInputTa','class="form-horizontal" role="form"');?>
<div class="row">
    <div class="col-sm-12">
        <div class="card-box">
            <h4 class="m-t-0 header-title"><b>Input Usulan Judul Tugas Akhir</b></h4>
            <div class="row">
                <div class="col-md-12">
                    <div class="p-20">
            <?php
            if($limit==1){
            ?>
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="exampleInputEmail1">Judul </label>
                            <div class="col-md-10">
                                <input type="text" name="judul" class="form-control" id="exampleInputEmail1">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="exampleInputEmail1">Deskripsi </label>
                            <div class="col-md-10">
                                <textarea class="form-control" rows="5" name="deskripsi"></textarea>
                            </div>
                         </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="exampleInputEmail1">Usulan Dosen Pembimbing</label>
                                <div class="col-md-10">
                                    <select class="form-control" name="nip">
                                        <option disabled selected value>- Pilih -</option>
                                        <?php foreach($dosen as $data){?>
                                        <option value="<?php echo $data->nip?>"><?php echo $data->nama ?></option>
                                    <?php } ?>
                                    </select>
                                </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="exampleInputEmail1">Usulan Judul Dosen </label>
                            <div class="col-md-10">
                                    <select style="margin-bottom: 5px;" class="form-control" name="penelitian">
                                        <option disabled selected value>- Tidak Ada -</option>
                                        <?php foreach($penelitian as $data){?>
                                        <option value="<?php echo $data->id?>"><?php echo $data->judul_penelitian ?></option>
                                    <?php } ?>
                                    </select>
                                    <label class="label label-warning">*Note : Usulan judul dosen jika ada diisi. Apabila tidak ada lewati saja</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="exampleInputEmail1">Kategori  </label>
                            <div class="col-md-10">
                                <div class="radio radio-custom">
                                    <input type="radio" name="kategori" id="radio12" value="Individu">
                                    <label for="radio12">
                                        Individu
                                    </label>
                                </div>
                                <div class="radio radio-custom">
                                    <input type="radio" name="kategori" id="radio12" value="Kelompok">
                                    <label for="radio12">
                                        Kelompok
                                    </label>
                                </div>
                            <button style="margin-top: 20px;" type="submit" name="btn-update" class="btn btn-custom waves-light waves-effect w-md">Submit</button>
                            <button style="margin-top: 20px;" type="submit" onclick="history-1" class="btn btn-warning waves-effect waves-light">Back</button>
                            </div>
                        </div>
        <!-- <?php }else if($limit==2){?>

                <div class="panel panel-color panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">Penginputan Belum Diijinkan</h3>
                    </div>
                    <div class="panel-body">
                        <p>
                            Jadwal Penginputan Judul Tugas Akhir Belum Ditentukan
                        </p>
                    </div>
                </div> -->
        <?php }else{?>
                <div class="panel panel-color panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">Penginputan Belum Diijinkan</h3>
                    </div>
                    <div class="panel-body">
                        <p>
                            Jadwal Penginputan Judul Tugas Akhir :<br>
                            <?php echo $tgl_awal['tgl_awal']." Sampai dengan ".$tgl_akhir['tgl_akhir'];?>
                        </p>
                    </div>
                </div>
        <?php } ?>
            <!-- end row -->
                    </div>
                </div>
            </div>
        </div> <!-- end card-box -->
    </div><!-- end col -->
</div>