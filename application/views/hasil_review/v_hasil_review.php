<html>
	<head>
		<title>Hasil Review Judul</title>
	</head>
	<body>
		<p><h3 align="center">Hasil Review Judul Tugas Akhir</h3></p>
		
		<p align="center">
			<table border="1">
				<tr>
				<th>No</th>
					<th>NIM</th>
					<th>Nama</th>
					<th>GOL</th>
					<th>Judul</th>
					<th>deskripsi</th>
					<th>Hasil Review</th>
					<th>Status</th>
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
					<td><?php echo $row->judul;?></td>
					<td><?php echo $row->deskripsi;?></td>
					<td><?php echo $row->hasil_review;?></td>
					<td><?php echo $row->status;?></td>
					
				</tr>
				
				<?php $no++;
                endforeach;?>
			</table>
		</p>
	</body>
</html>