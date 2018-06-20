<?php echo form_open('koordinator/save_tglInput','class="form-horizontal" role="form"');?>
<div class="row">
    <div class="col-sm-12">
        <div class="card-box">
            <h4 class="m-t-0 header-title"><b>Input Batasan Tanggal</b></h4>
            <div class="row">
                <div class="col-md-12">
                    <div class="p-20">

                        <div class="form-group">
                            <label class="col-md-2 control-label" for="exampleInputEmail1">Tanggal Awal </label>
                            <div class="col-md-10">
                                <input type="date" name="tanggal_awal" class="form-control" id="exampleInputEmail1">
                            </div>
                         </div>
                        <div class="form-group">
                             <label class="col-md-2 control-label" for="exampleInputEmail1">Tanggal Akhir </label>
                                <div class="col-md-10">
                                    <input type="date" name="tanggal_akhir" class="form-control" id="exampleInputEmail1">
                                </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="exampleInputEmail1">Keterangan</label>
                                <div class="col-md-10">
                                    <select class="form-control" name="ket">
                                        <option value="Awal">Input Judul Tugas Akhir Awal</option>
                                        <option value="Final">Input Judul Tugas Akhir Final</option>
                                    </select>
                            <button style="margin-top: 20px;" type="submit" name="btn-update" class="btn btn-custom waves-light waves-effect w-md">Submit</button>
                            <button style="margin-top: 20px;" type="submit" onclick="history-1" class="btn btn-warning waves-effect waves-light">Back</button>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

        </div> <!-- end card-box -->
    </div><!-- end col -->
</div>