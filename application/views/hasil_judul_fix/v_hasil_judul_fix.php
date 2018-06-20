<html>
	<head>
		<title>Daftar Judul dan Dosen Pembimbing yang Sudah Fix</title>
	</head>
	<body>
		<p><h3 align="center">Daftar Judul dan Dosen Pembimbing yang Sudah Fix</h3></p>
		
		<p align="center">
			<table border="1">
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