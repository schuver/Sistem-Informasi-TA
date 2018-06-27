<div class="row">
    <div class="col-sm-12">
        <div class="card-box table-responsive">
                <h2 class="m-t-0 header-title"><b>Daftar Judul TA dan Dosen Pembimbing Fix</b></h2>
            <div id="datatable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
<div class="row">
    <div class="col-sm-12">
        <table id="datatable" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="datatable_info">
                <thead>
                <tr role="row">
                    <th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Name: activate to sort column descending" aria-sort="ascending" style="width: 162px;">NIM
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 250px;">Nama
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 30px;">Dosen Pembimbing
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 30px;">Judul
                    </th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php foreach($list as $data){ ?>
                        <td><?php echo $data->nim ?></td>
                        <td><?php echo $data->nama ?></td>
                        <td><?php echo $data->nama_dosen ?></td>
                        <td><?php echo $data->judul ?></td>
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