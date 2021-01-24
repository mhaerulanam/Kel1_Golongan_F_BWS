<!DOCTYPE html>
<html>
<head>
	<title>CETAK DATA HEWAN - DOKTERNAK.ID</title>
</head>
<body>
 
	<center>
 
		<h2>DATA HEWAN</h2>
		<h4>Dokternak.id</h4>
 
	</center>
 
	<?php 
	include '../../koneksi.php';
	?>

	<table border="1">
                <thead>
                    <tr>
					<th>No .</th>
					<th>Pemilik</th>
						<th>Nama Hewan</th>
						<th>Jenis Hewan</th>
						<th>Kategori Hewan</th>
                    </tr>
                </thead>
                <tbody>
					<?php
					$i = 1;
					$ksql="SELECT * FROM konsultasi INNER JOIN peternak ON konsultasi.id_peternak = peternak.id_peternak INNER JOIN kategori_artikel ON konsultasi.id_ktg = kategori_artikel.id_ktg INNER JOIN kategori_hewan ON konsultasi.id_kategori = kategori_hewan.id_kategori ";
					$khasil = mysqli_query($koneksi,$ksql);
					while($krow = mysqli_fetch_array($khasil))
					{
					?>

					<tr>
						<td>
						<?= $i ?>
						</td>
						<td>
						<!-- Code menampilkan data -->
						<?php echo $krow['namadepan_peternak'];
						?>
						</td>
						<td><?php echo $krow['nama_hewan']; ?></td>
						<td><?php echo $krow['kategori_artikel']; ?></td>
						<td><?php echo $krow['kategori_hewan']; ?></td>
					
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