        <div class="form-group">
        <label class="col-md-2 control-label" for="exampleInputEmail1">NIM</label>
            <div class="col-md-10">
                <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $bimbingan['tmst_mahasiswa_nim'] ?>" disabled>
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-2 control-label" for="exampleInputEmail1">Nama Mahasiswa</label>
            <div class="col-md-10">
                <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $bimbingan['nama_mhs'] ?>" disabled>
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-2 control-label" for="exampleInputEmail1">Dosen Pembimbing</label>
            <div class="col-md-10">
                <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $bimbingan['nama'] ?>" disabled>
            </div>
         </div>
        <div class="form-group">
        <label class="col-md-2 control-label" for="exampleInputEmail1">Judul</label>
            <div class="col-md-10">
                <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $bimbingan['judul'] ?>" disabled>
            </div>
         </div>
         <div class="form-group">
        <label class="col-md-2 control-label" for="exampleInputEmail1">Status</label>
            <div class="col-md-10">
                <select class="form-control" name="status">
                        <option value="Belum" <?php if($bimbingan['status']=='Belum'){echo "selected";} ?>>Belum Disetujui</option>
                        <option value="Sudah" <?php if($bimbingan['status']=='Sudah'){echo "selected";} ?>>Sudah Disetujui</option>
                </select>
                <button style="margin-top: 20px;" type="submit" name="btn-update" class="btn btn-custom waves-light waves-effect w-md">Submit</button>
                <button style="margin-top: 20px;" type="submit" onclick="history.back(-1)" class="btn btn-warning waves-effect waves-light">Back</button>
            </div>
         </div>