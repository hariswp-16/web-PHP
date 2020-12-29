<!DOCTYPE html>
<html>
<head>
	<title>Data Mahasiswa</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="alert alert-info">Data Mahasiswa</div>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>No</th>	
					<th>NIM</th>	
					<th>Nama Mahasiswa</th>	
					<th>Prodi</th>	
					<th>Aksi</th>	

					<tbody>
						<?php  
						require "../koneksi.php";
						$query = "SELECT * FROM mahasiswa";
						$result = mysqli_query($link, $query);
						$no = 1;
						while ($isi = mysqli_fetch_object($result)) {
						?>
						<tr>
							<td><?= $no++; ?></td>
							<td><?= $isi->nim;  ?></td>
							<td><?= $isi->nama_mahasiswa;  ?></td>
							<td><?= $isi->prodi;  ?></td>
							<td></td>
						</tr>

						<?php } ?>
						
					</tbody>	
				</tr>
			</thead>
		</table>

	</div>
</body>
</html>