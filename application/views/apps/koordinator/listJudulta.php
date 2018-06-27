<div class="row">
    <div class="col-sm-12">
        <div class="card-box table-responsive">
                <h2 class="m-t-0 header-title"><b>Daftar Judul Tugas Akhir</b></h2>
        <!-- <?php echo $this ->session ->flashdata('msg'); ?> -->
            <div id="datatable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
<div class="row">
    <div class="col-sm-12">
        <table id="datatable" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="datatable_info">
                <thead>
                <tr role="row">
                    
                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 50px;">NIM
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 210px;">Nama Mahasiswa
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 250px;">Judul
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 250px;">Deskripsi
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 210px;">Dosen Pembimbing
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 50px;">Kategori
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 30px;">Opsi
                    </th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php $no=1; foreach($list as $data){ ?>
                        
                        <td><?php echo $data->nim ?></td>
                        <td><?php echo $data->nama ?></td>
                        <td><?php echo $data->judul ?></td>
                        <td><?php echo $data->deskripsi ?></td>
                        <td><?php echo $data->nama_dosen ?></td>
                        <td><?php echo $data->kategori ?></td>
                        <td><?php 
                        echo anchor('reviewer/editReview/'.$data->id,'Edit','id="btnTest" type="button" class="btn btn-warning btn-bordered waves-effect w-md waves-light"'); ?>
                            
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