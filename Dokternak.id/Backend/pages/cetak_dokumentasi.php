<!DOCTYPE html>
<html>
<head>
	<title>CETAK DATA DOKUMENTASI - DOKTERNAK.ID</title>
</head>
<body>
 
	<center>
 
		<h2>DATA DOKUMENTASI</h2>
		<h4>Dokternak.id</h4>
 
	</center>
 
	<?php 
	include 'koneksi.php';
	?>

	<table border="1">
                <thead>
                    <tr>
						<th>No</th>
						<th>ID Dokumentasi</th>
						<th>Judul</th>
						<th>Keterangan</th>
						<th>Dokumentasi</th>

                    </tr>
                </thead>
                <tbody>
					<?php
					$i = 1;
					$ksql="SELECT * FROM dokumentasi";
					$khasil = mysqli_query($koneksi,$ksql);
					while($krow = mysqli_fetch_array($khasil))
					{
					?>

					<tr>
						<td>
						<?= $i ?>
						</td>

						<!-- Code menampilkan data -->
						<td><?php echo $krow['id_dokumentasi']; ?></td>
						<td><?php echo $krow['judul']; ?></td>
						<td><?php echo $krow['keterangan']; ?></td>
						<td>
							<img src="foto/foto_dokumentasi.php?id_dokumentasi=<?php echo $krow['id_dokumentasi']; ?>"
											alt="<?php echo "Belum upload foto" ?>" height="100"></img>
						</td>  
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