<div class="row">
    <div class="col-sm-12">
        <div class="card-box table-responsive">
                <h2 class="m-t-0 header-title"><b>List Jadwal Input Judul</b></h2>
            <div id="datatable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
<div class="row">
    <div class="col-sm-12">
        <table id="datatable" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="datatable_info">
                <thead>
                <tr role="row">
                    <th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Name: activate to sort column descending" aria-sort="ascending" style="width: 5px;">No.
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 110px;">Tanggal Awal
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 110px;">Tanggal Akhir
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 135px;">Keterangan
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 100px;">Opsi
                    </th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php 
                        $no =1;
                        foreach($list as $data){ 
                        $data->id ?>
                        <td><?php echo $no ?></td>
                        <td><?php echo $data->tgl_awal ?></td>
                        <td><?php echo $data->tgl_akhir ?></td>
                        <td><?php 
                        if($data->keterangan=='Awal'){
                            echo "Input Judul Tugas Akhir Awal";
                        }else{
                            echo "Input Judul Tugas Akhir Final";
                        } ?></td>
                        <td><?php 
                        echo anchor('Koordinator/editJadwal/'.$data->id,'Edit','id="btnTest" type="button" class="btn btn-warning btn-bordered waves-effect w-md waves-light"')."&nbsp;";
                        echo anchor('Koordinator/delJadwal/'.$data->id,'Hapus','id="btnTest" type="button" class="btn btn-danger btn-bordered waves-effect w-md waves-light"'); ?></td>
                    </tr>
                        <?php $no++; }?>
            </tbody>
        </table>
    </div>
</div>
</div>
        </div>
    </div>
</div>