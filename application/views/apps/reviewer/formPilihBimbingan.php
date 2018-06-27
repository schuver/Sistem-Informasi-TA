
        <div class="form-group">
        <label class="col-md-2 control-label" for="exampleInputEmail1">NIM</label>
            <div class="col-md-10">
                <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $data['nim'] ?>" disabled>
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-2 control-label" for="exampleInputEmail1">Nama Mahasiswa</label>
            <div class="col-md-10">
                <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $data['nama'] ?>" disabled>
            </div>
         </div>
        <div class="form-group">
        <label class="col-md-2 control-label" for="exampleInputEmail1">Judul</label>
            <div class="col-md-10">
                <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $data['judul'] ?>" disabled>
            </div>
         </div>
        <div class="form-group">
        <label class="col-md-2 control-label" for="exampleInputEmail1">Deskripsi</label>
            <div class="col-md-10">
                <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $data['deskripsi'] ?>" disabled>
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-2 control-label" for="exampleInputEmail1">Pilihan</label>
            <div class="col-md-10">
                <div class="radio radio-custom">
                    <input type="radio" name="status" id="radio12" value="1">
                    <label for="radio12">
                        Dipilih
                    </label>
                </div>
                <div class="radio radio-custom">
                    <input type="radio" name="status" id="radio12" value="0">
                    <label for="radio12">
                        Ditolak
                    </label>
                </div>
        <button style="margin-top: 20px;" type="submit" name="btn-update" class="btn btn-custom waves-light waves-effect w-md">Submit</button>
        <button style="margin-top: 20px;" type="submit" onclick="" class="btn btn-warning waves-effect waves-light">Back</button>
            </div>
         </div>
        </div>