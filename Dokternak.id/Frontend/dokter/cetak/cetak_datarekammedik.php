<!DOCTYPE html>
<html>
<head>
	<title>CETAK DATA PETERNAK - DOKTERNAK.ID</title>
</head>
<body>
<?php
	$tanggal_awal=$_POST['tanggal_awal'];
	$tanggal_akhir=$_POST['tanggal_akhir'];
 ?> 
 
 	<center>
 
		<h2>DATA PETERNAK</h2>
		<h4>Dokternak.id</h4>
 
	</center>
 
	<?php 
	include '../koneksi.php';
	?>

	<table border="1">
                <thead>
                    <tr>
                        <th>No</th>
						<th>ID </th>
						<th>Tanggal</th>
						<th>Kategori </th>
						<th>Nama Hewan</th>
						<th>Nama Pemilik</th>
						<th>Alamat</th>
						<th>Keluhan</th>
                        <th>Diagnosa</th>
						<th>Pelayanan</th>
                    </tr>
                </thead>
                <tbody>
					<?php
					$i = 1;
					$ksql="SELECT * FROM rekam_medik";
					$khasil = mysqli_query($koneksi,$ksql);
					while($krow = mysqli_fetch_array($khasil))
					{
					?>

					<tr>
						<td>
						<?= $i ?>
						</td>

						<!-- Code menampilkan data -->
						<td><?php echo $krow['id_rmd']; ?></td>
						<td><?php echo $krow['tanggal'];?></td>
						<td><?php echo $krow['kategori']; ?></td>
                        <td><?php echo $krow['nama_hewan']; ?></td>
						<td><?php echo $krow['nama_pemilik']; ?></td>
                        <td><?php echo $krow['alamat']; ?></td>
						<td><?php echo $krow['keluhan']; ?></td>
						<td><?php echo $krow['diagnosa']; ?></td>
						<td><?php echo $krow['pelayanan']; ?></td>
                    </tr> 
					<?php 
						$i++;
						}
						// Close connection
						mysqli_close($koneksi); 
					?>
		</table>

		<script>
			window.print();
		</script> 
	
 
</body>
</html>