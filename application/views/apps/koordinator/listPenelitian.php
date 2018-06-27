<div class="row">
    <div class="col-sm-12">
        <div class="card-box table-responsive">
                <h2 class="m-t-0 header-title"><b>Daftar Judul Penelitian</b></h2>
        <?php echo $this ->session ->flashdata('msg'); ?>
            <div id="datatable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
<div class="row">
    <div class="col-sm-12">
        <table id="datatable" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="datatable_info">
                <thead>
                <tr role="row">
                    
                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 50px;">No.
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 210px;">Judul
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 90px;">Kuota
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 100px;">Opsi
                    </th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php $no=1; foreach($list as $data){ ?>
                        
                        <td><?php echo $no ?></td>
                        <td><?php echo $data->judul_penelitian ?></td>
                        <td><?php echo $data->kuota ?></td>
                        <td><?php 
                        echo anchor('dosen/editPenelitian/'.$data->id,'Edit','id="btnTest" type="button" class="btn btn-warning btn-bordered waves-effect w-md waves-light"')."&nbsp;";
                        echo anchor('dosen/delJudulPenelitian/'.$data->id,'Hapus','id="btnTest" type="button" class="btn btn-danger btn-bordered waves-effect w-md waves-light"'); ?>
                            
                        </td>
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