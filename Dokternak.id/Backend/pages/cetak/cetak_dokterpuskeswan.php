<!DOCTYPE html>
<html>
<head>
	<title>CETAK DATA DOKTER PUSKESWAN - DOKTERNAK.ID</title>
</head>
<body>
 
	<center>
 
		<h2>DATA DOKTER DI SETIAP PUSKESWAN</h2>
		<h4>Dokternak.id</h4>
 
	</center>
 
	<?php 
	include '../koneksi.php';
	?>

	<table border="1">
                <thead>
                    <tr>
						<th>No</th>
						<th>ID DP</th>
						<th>ID Puskeswan</th>
						<th>Nama Puskeswan</th>
						<th>ID Dokter</th>
						<th>Nama Dokter</th>

                    </tr>
                </thead>
                <tbody>
					<?php
					$i = 1;
					$ksql="SELECT * FROM dokter_puskeswan INNER JOIN puskeswan ON dokter_puskeswan.id_puskeswan = puskeswan.id_puskeswan INNER JOIN dokter ON dokter_puskeswan.id_dokter = dokter.id_dokter ORDER BY id_dp";
					$khasil = mysqli_query($koneksi,$ksql);
					while($krow = mysqli_fetch_array($khasil))
					{
					?>

					<tr>
						<td>
						<?= $i ?>
						</td>

						<!-- Code menampilkan data -->
						<td><?php echo $krow['id_dp']; ?></td>
						<td><?php echo $krow['id_puskeswan']; ?></td>
						<td><?php echo $krow['nama_puskeswan']; ?></td>
						<td><?php echo $krow['id_dokter']; ?></td>
						<td><?php echo $krow['nama']; ?></td>
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