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
	include '../koneksi.php';
	?>

	<table border="1">
                <thead>
                    <tr>
						<th>No</th>
						<th>ID Riwayat</th>
						<th>ID Konsultasi</th>
						<th>ID Respon</th>
						<th>Keluhan</th>
						<th>Respon</th>
                    </tr>
                </thead>
                <tbody>
					<?php
					$i = 1;
					$ksql="SELECT * FROM riwayat_konsultasi INNER JOIN konsultasi ON riwayat_konsultasi.id_konsultasi = konsultasi.id_konsultasi INNER JOIN respon_konsultasi ON riwayat_konsultasi.id_respon = respon_konsultasi.id_respon ORDER BY id_riwayat";
					$khasil = mysqli_query($koneksi,$ksql);
					while($krow = mysqli_fetch_array($khasil))
					{
					?>

					<tr>
						<td>
						<?= $i ?>
						</td>

						<!-- Code menampilkan data -->
                        <td><?php echo $krow['id_riwayat']; ?></td>
						<td><?php echo $krow['id_konsultasi']; ?></td>
						<td><?php echo $krow['id_respon']; ?></td>
                        <td><?php echo $krow['keluhan']; ?></td>
                        <td><?php echo $krow['respon']; ?></td>
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