<html>
	<head>
		<title>Daftar Judul DOsen</title>
	</head>
	<body>
		<p><h3 align="center">Daftar Judul Dosen</h3></p>
		

		<p align="center">
			<table border="1">
				<tr>
				<th>No</th>
					<th>Judul Penelitian</th>
					<th>Kuota</th>
					<th>NIP</th>
					<th>Nama Dosen</th>
					<th colspan="2"></th>
				</tr>
				<?php
                $no = 1;
                foreach ($data as $row): ?>
				<tr>
					<td><?php echo $no;?></td>
					<td><?php echo $row->judul_penelitian;?></td>
					<td><?php echo $row->kuota;?></td>
					<td><?php echo $row->tmst_dosen_nip;?></td>
					<td><?php echo $row->nama_dosen;?></td>
					
				</tr>
				
				<?php $no++;
                endforeach;?>
			</table>
		</p>
	</body>
</html>