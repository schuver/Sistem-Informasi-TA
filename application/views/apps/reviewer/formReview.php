        <div class="form-group">
        <label class="col-md-2 control-label" for="exampleInputEmail1">Judul</label>
            <div class="col-md-10">
                <input type="text" name="judul" class="form-control" id="exampleInputEmail1" value="<?php echo $data['judul'] ?>" disabled>
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-2 control-label" for="exampleInputEmail1">Deskripsi</label>
            <div class="col-md-10">
                <textarea class="form-control" rows="5" disabled><?php echo $data['deskripsi'];?></textarea>
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-2 control-label" for="exampleInputEmail1">Review</label>
            <div class="col-md-10">
                <textarea class="form-control" rows="5" name="review"></textarea>
            </div>
        </div>
         <div class="form-group">
        <label class="col-md-2 control-label" for="exampleInputEmail1">Status</label>
            <div class="col-md-10">
                <div class="radio radio-custom">
                    <input type="radio" name="status" id="radio12" value="Diterima">
                    <label for="radio12">
                        Diterima
                    </label>
                </div>
                <div class="radio radio-custom">
                    <input type="radio" name="status" id="radio12" value="Ditolak">
                    <label for="radio12">
                        Ditolak
                    </label>
                </div>
                <button style="margin-top: 20px;" type="submit" name="btn-update" class="btn btn-custom waves-light waves-effect w-md">Submit</button>
                <button style="margin-top: 20px;" type="submit" onclick="" class="btn btn-warning waves-effect waves-light">Back</button>
            </div>
         </div>
            
           
