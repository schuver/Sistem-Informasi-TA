<div class="row">
    <div class="col-sm-12">
        <div class="card-box table-responsive">
                <h2 class="m-t-0 header-title"><b>Hak Akses User</b></h2>
            <div id="datatable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
<div class="row">
    <div class="col-sm-12">
        <table id="datatable" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="datatable_info">
                <thead>
                <tr role="row">
                    <th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Name: activate to sort column descending" aria-sort="ascending" style="width: 162px;">NIP
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 250px;">Nama
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 107px;">Level
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 30px;">Opsi
                    </th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php foreach($list as $data){ ?>
                        <td><?php echo $data->nip ?></td>
                        <td><?php if($data->nama == null){echo "<i>Tidak tersedia</i>";}else{echo $data->nama;} ?></td>
                        <td><?php if($data->level==1){echo "Koordinator";}else if($data->level==2){echo "Reviewer";}else if($data->level==3){echo "Dosen";}else if($data->level==4){echo "Mahasiswa";}else{echo "Data Master";} ?></td>
                        <td><?php 
                        if($data->nip==$this->session->userdata('id_session')){
                            echo "<button type='button'class='btn btn-warning btn-bordered waves-effect w-md waves-light' disabled>Edit</button>";}
                        else{
                            echo anchor('Koordinator/editPrivileges/'.$data->nip,'Edit','id="btnTest" type="button" class="btn btn-warning btn-bordered waves-effect w-md waves-light"');} ?></td>
                    </tr>
                        <?php }?>
            </tbody>
        </table>
    </div>
</div>
</div>
        </div>
    </div>
</div>