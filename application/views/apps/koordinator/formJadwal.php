        <div class="form-group">
        <label class="col-md-2 control-label" for="exampleInputEmail1">Tanggal Awal</label>
            <div class="col-md-10">
                <input type="date" name="tanggal_awal" class="form-control" id="exampleInputEmail1" value="<?php echo $jadwal['tgl_awal'] ?>">
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-2 control-label" for="exampleInputEmail1">Tanggal Akhir</label>
            <div class="col-md-10">
                <input type="date" name="tanggal_akhir" class="form-control" id="exampleInputEmail1" value="<?php echo $jadwal['tgl_akhir'] ?>">
            </div>
        </div>
         <div class="form-group">
        <label class="col-md-2 control-label" for="exampleInputEmail1">Keterangan</label>
            <div class="col-md-10">
                <select class="form-control" name="keterangan">
                        <option value="Awal" <?php if($jadwal['keterangan']=='Awal'){echo "selected";} ?>>Input Judul Tugas Akhir Awal  </option>
                        <option value="Akhir" <?php if($jadwal['keterangan']=='Akhir'){echo "selected";} ?>>Input Judul Tugas Akhir Final </option>
                </select>
                <button style="margin-top: 20px;" type="submit" name="btn-update" class="btn btn-custom waves-light waves-effect w-md">Submit</button>
                <button style="margin-top: 20px;" type="submit" onclick="history.back(-1)" class="btn btn-warning waves-effect waves-light">Back</button>
            </div>
         </div>