 <?php foreach($user as $data){?>
        <div class="form-group">
        <label class="col-md-2 control-label" for="exampleInputEmail1">NIM</label>
            <div class="col-md-10">
                <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $data->nim ?>" disabled>
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-2 control-label" for="exampleInputEmail1">Nama Mahasiswa</label>
            <div class="col-md-10">
                <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $data->nama ?>" disabled>
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-2 control-label" for="exampleInputEmail1">Judul</label>
            <div class="col-md-10">
                <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $data->judul ?>" disabled>
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-2 control-label" for="exampleInputEmail1">Deskripsi</label>
            <div class="col-md-10">
                <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $data->deskripsi ?>" disabled>
            </div>
        </div>
        <!-- <div class="form-group">
        <label class="col-md-2 control-label" for="exampleInputEmail1">Status</label>
            <div class="col-md-10">
                <select clas>
                    
                </select>
            </div>
        </div> -->
       <!--  <div class="form-group">
        <label class="col-md-2 control-label" for="exampleInputEmail1">Deskripsi</label>
            <div class="col-md-10">
                <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $data->Deskripsi ?>" disabled>
            </div>
         </div>
        <div class="form-group">
        <label class="col-md-2 control-label" for="exampleInputEmail1">zzz</label>
            <div class="col-md-10">
                <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $prodi['nama_prodi'] ?>" disabled>
            </div>
         </div>
     <?php } ?>
        <div class="form-group">
        <label class="col-md-2 control-label" for="exampleInputEmail1">Level</label>
            <div class="col-md-10">
                <div class="radio radio-custom">
                    <input type="radio" name="level" id="radio1" value="1"  <?php if ($pemilihan['level']==1) {
                echo "checked";
            }?>>
                    <label for="radio12">Dosen</label>
                </div>
                <div class="radio radio-custom">
                    <input type="radio" name="level" id="radio2" value="2"
                     <?php if ($pemilihan['level']==2) {
                echo "checked";
            }?>>
                    <label for="radio12">Reviewer</label>
                </div>
                <div class="radio radio-custom">
                    <input type="radio" name="level" id="radio3" value="3"
                     <?php if ($pemilihan['level']==3) {
                echo "checked";
            }?>>
                    <label for="radio12">Koordinator</label>
 -->

                </div>
                <br>
            <button type="submit" name="btn-update" class="btn btn-custom waves-light waves-effect w-md">Submit</button>
            <!-- <button type="submit" onclick="" class="btn btn-purple waves-effect waves-light">Back</button> -->
            </div>
        </div>