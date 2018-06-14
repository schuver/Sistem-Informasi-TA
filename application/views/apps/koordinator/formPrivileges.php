
        <div class="form-group">
        <label class="col-md-2 control-label" for="exampleInputEmail1">NIP</label>
            <div class="col-md-10">
                <input type="text" name="nip" class="form-control" id="exampleInputEmail1" value="<?php echo $user['nip'] ?>" disabled>
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-2 control-label" for="exampleInputEmail1">Nama</label>
            <div class="col-md-10">
                <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $user['nama'] ?>" disabled>
            </div>
         </div>
        <div class="form-group">
        <label class="col-md-2 control-label" for="exampleInputEmail1">Level</label>
            <div class="col-md-10">
                <select class="form-control" name="level">
                        <option value="1" <?php if($privileges['level']==1){echo "selected";} ?>>1</option>
                        <option value="2" <?php if($privileges['level']==2){echo "selected";} ?>>2</option>
                        <option value="3" <?php if($privileges['level']==3){echo "selected";} ?>>3</option>
                </select>
            <button style="margin-top: 20px;" type="submit" name="btn-update" class="btn btn-custom waves-light waves-effect w-md">Submit</button>
            <button style="margin-top: 20px;" type="submit" onclick="" class="btn btn-warning waves-effect waves-light">Back</button>
            </div>
            <!-- <div class="col-md-10">
                <div class="radio radio-custom">
                    <input type="radio" name="level" id="radio1" value="1">
                    <label for="radio12">Koordinator</label>
                </div>
                <div class="radio radio-custom">
                    <input type="radio" name="level" id="radio2" value="2">
                    <label for="radio12">Reviewer</label>
                </div>
                <div class="radio radio-custom">
                    <input type="radio" name="level" id="radio3" value="3">
                    <label for="radio12">Dosen</label>

                </div>
                <br>-->
            
            </div>
        </div>