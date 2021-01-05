<!DOCTYPE html>
<html>
<head>
	<title>CETAK DATA KONSULTASI - DOKTERNAK.ID</title>
</head>
<body>
 
	<center>
 
		<h2>DATA KONSULTASI</h2>
		<h4>Dokternak.id</h4>
 
	</center>
 
	<?php 
	include 'koneksi.php';
	?>

	<table border="1">
                <thead>
                    <tr>
						<th>No</th>
						<th>ID Konsultasi</th>
                        <th>ID Peternak</th>
                        <th>ID Dokter</th>
                        <th>ID Kategori</th>
                        <th>ID Ktg</th>
						<th>Nama Hewan</th>
						<th>Keluhan</th>
						<th>Tanggal</th>

                    </tr>
                </thead>
                <tbody>
					<?php
					$i = 1;
					$ksql="SELECT * FROM konsultasi";
					$khasil = mysqli_query($koneksi,$ksql);
					while($krow = mysqli_fetch_array($khasil))
					{
					?>

					<tr>
						<td>
						<?= $i ?>
						</td>

						<!-- Code menampilkan data -->
						<td><?php echo $krow['id_konsultasi']; ?></td>
						<td><?php echo $krow['id_peternak']; ?></td>
						<td><?php echo $krow['id_dokter']; ?></td>  
                        <td><?php echo $krow['id_kategori']; ?></td>
                        <td><?php echo $krow['id_ktg']; ?></td>
						<td><?php echo $krow['nama_hewan']; ?></td>  
                        <td><?php echo $krow['keluhan']; ?></td>
						<td><?php echo $krow['tanggal']; ?></td>  
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