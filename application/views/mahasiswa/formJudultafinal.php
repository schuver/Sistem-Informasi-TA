        <div class="form-group">
        <label class="col-md-2 control-label" for="exampleInputEmail1">Judul</label>
            <div class="col-md-10">
                <input type="text" name="judul" class="form-control" id="exampleInputEmail1" value="<?php echo $list['judul'] ?>" >
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-2 control-label" for="exampleInputEmail1">Deskripsi</label>
            <div class="col-md-10">
                <input type="text" name="desk" class="form-control" id="exampleInputEmail1" value="<?php echo $list['deskripsi'] ?>" >
            </div>
         </div>
        <div class="form-group">
        <label class="col-md-2 control-label" for="exampleInputEmail1">Dosen Pembimbing</label>
            <div class="col-md-10">
                <select class="form-control" name="dosen">
                    <?php foreach($dosen as $data){?>
                        <option value="<?php echo $data->nip; ?>" <?php if($list['tmst_dosen_nip']==$data->nip){echo "selected";} ?>><?php echo $data->nama; ?></option>
                    <?php } ?>
                </select>
            </div>
         </div>
         <div class="form-group">
        <label class="col-md-2 control-label" for="exampleInputEmail1">Kategori</label>
            <div class="col-md-10">
                <select class="form-control" name="kategori">
                        <option value="Individu" <?php if($list['kategori']=='Individu'){echo "selected";} ?>>Individu</option>
                        <option value="Kelompok" <?php if($list['kategori']=='Kelompok'){echo "selected";} ?>>Kelompok</option>
                </select>
                <button style="margin-top: 20px;" type="submit" name="btn-update" class="btn btn-custom waves-light waves-effect w-md">Submit</button>
                <button style="margin-top: 20px;" type="submit" onclick="" class="btn btn-warning waves-effect waves-light">Back</button>
            </div>
         </div>
            
           
