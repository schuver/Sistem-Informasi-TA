        <div class="form-group">
        <label class="col-md-2 control-label" for="exampleInputEmail1">NIP</label>
            <div class="col-md-10">
                <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $list['nip'] ?>" disabled>
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-2 control-label" for="exampleInputEmail1">Prodi</label>
            <div class="col-md-10">
                <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $prodi['nama_prodi'] ?>" disabled>
            </div>
         </div>

         <div class="form-group">
        <label class="col-md-2 control-label" for="exampleInputEmail1">Kuota</label>
            <div class="col-md-10">
                <input type="text" name="kuota" class="form-control" id="exampleInputEmail1" value="<?php echo $list['kuota'] ?>">
                <button style="margin-top: 20px;" type="submit" name="btn-update" class="btn btn-custom waves-light waves-effect w-md">Submit</button>
                <button style="margin-top: 20px;" type="submit" onclick="" class="btn btn-warning waves-effect waves-light">Back</button>
            </div>
         </div>
            
           
