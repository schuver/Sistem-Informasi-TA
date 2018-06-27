
<div class="row">
    <div class="col-sm-12">
        <div class="card-box table-responsive">
                <h2 class="m-t-0 header-title"><b>Daftar Hasil Review Judul Tugas Akhir</b></h2>
            <div id="datatable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
<div class="row">
    <div class="col-sm-12">
        <table id="datatable" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="datatable_info">
                <thead>
                <tr role="row">
                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 20px;">Nim
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 110px;">Nama
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 150px;">Judul
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 215px;">Deskripsi
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 200px;">Hasil Review
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 20px;">Status
                    </th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php
                        foreach($list as $data){ ?>
                        <td><?php echo $data->nim; ?></td>
                        <td><?php echo $data->nama ?></td>
                        <td><?php echo $data->judul ?></td>
                        <td><?php echo $data->deskripsi ?></td>
                        <td><?php echo $data->hasil_review ?></td>
                        <td><?php 
                        if($data->status==1){
                        	echo "Diterima";
                        }else if($data->status==2){
                        	echo "Diterima Dengan Perbaikan";
                        }else{
                        	echo "Ditolak";
                        }
                        ?>
                        </td>
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