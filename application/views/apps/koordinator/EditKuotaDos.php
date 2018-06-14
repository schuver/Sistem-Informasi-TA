<div class="row">
    <div class="col-sm-12">
        <div class="card-box table-responsive">
                <h2 class="m-t-0 header-title"><b>Edit Kuota Dosen</b></h2>
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

                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 250px;">Kuota
                    </th>

                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 30px;">Edit Kuota
                    </th>
                    
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php foreach($list as $data){ ?>
                        <td><?php echo $data->nip ?></td>
                        <td><?php 
                        if($data->level != 5){echo $data->nama; }
                        else{ echo "<i>- Admin -</i>"; } ?></td>
                        <td><?php 
                        if($data->kuota != null && $data->kuota !=0){echo $data->kuota;}
                        else{ echo "<i>Belum tersedia</i>"; } ?></td>
                        <td><?php
                        if($data->nip==$this->session->userdata('id_session') || $data->level ==5){
                            echo "<button type='button'class='btn btn-warning btn-bordered waves-effect w-md waves-light' disabled>Edit</button>";}
                        else{
                            echo anchor('Koordinator/tampildiformkuota/'.$data->nip,'Edit','class="btn btn-warning btn-bordered waves-effect w-md waves-light"');} ?></td>
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