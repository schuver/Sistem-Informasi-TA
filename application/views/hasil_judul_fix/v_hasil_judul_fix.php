<html>
	<head>
		<title>Daftar Judul dan Dosen Pembimbing yang Sudah Fix</title>
	</head>
	<body>
	<div class="row">
    <div class="col-sm-12">
        <div class="card-box table-responsive">
		<p><h3 align="center">Daftar Judul dan Dosen Pembimbing yang Sudah Fix</h3></p>
		
		<div id="datatable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
	<div class="row">
    <div class="col-sm-10">
        <table id="datatable" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="datatable_info">
			
				<tr>
				<th>No</th>
					<th>NIM</th>
					<th>Nama</th>
					<th>GOL</th>
					<th>Pembimbing</th>
					<th>Judul</th>
				
					<th colspan="2"></th>
				</tr>
				<?php
                $no = 1;
                foreach ($data as $row): ?>
				<tr>
					<td><?php echo $no;?></td>
					<td><?php echo $row->nim;?></td>
					<td><?php echo $row->nama;?></td>
					<td><?php echo $row->golongan;?></td>
					<td><?php echo $row->nama_dosen;?></td>
					<td><?php echo $row->judul;?></td>

					
				</tr>
				
				<?php $no++;
                endforeach;?>
			</table>
		</p>
	</body>
</html>