<html>
	<head>
		<title>Daftar Judul DOsen</title>
	</head>
	<body>
	<div class="row">
    <div class="col-sm-12">
        <div class="card-box table-responsive">
		<p><h3 align="center">Daftar Judul Dosen</h3></p>

    <div id="datatable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
	<div class="row">
    <div class="col-sm-10">
        <table id="datatable" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="datatable_info">
			
               <tr>
			   
				<th  colspan="1"></th>
				
				<th>No</th>
				<th>Judul Penelitian</th>
				<th>Kuota</th>
				<th>NIP</th>
				<th>Nama Dosen</th>
					
				</tr>
				
				<?php
				
                $no = 1;
                foreach ($list as $row): ?>
		
				
					<th colspan="1"></th>
					<td><?php echo $no;?></td>
					<td><?php echo $row->judul_penelitian;?></td>
					<td><?php echo $row->kuota;?></td>
					<td><?php echo $row->tmst_dosen_nip;?></td>
					<td><?php echo $row->nama;?></td>
					
				</tr>
				
				<?php $no++;
                endforeach;?>
				
			</table>
		</p>
		  </div>
</div>
</div>
        </div>
    </div>
</div>
	</body>
</html>