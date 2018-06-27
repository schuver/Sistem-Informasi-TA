<div class="row">
    <div class="col-sm-12">
        <div class="card-box table-responsive">
                <h2 class="m-t-0 header-title"><b>Daftar Judul Penelitian Dosen</b></h2>
            <div id="datatable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
<div class="row">
    <div class="col-sm-12">
        <table id="datatable" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="datatable_info">
                <thead>
                <tr role="row">
                    <th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Name: activate to sort column descending" aria-sort="ascending" style="width: 50px;">No.
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 250px;">Nama Dosen
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 150px;">Judul Penelitian
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 30px;">Kuota
                    </th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php 
                        $no=1;
                        foreach($list as $data){ ?>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $data->nama ?></td>
                        <td><?php echo $data->judul_penelitian ?></td>
                        <td><?php echo $data->kuota ?></td>
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