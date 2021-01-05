<!DOCTYPE html>
<html>
<head>
	<title>CETAK DATA TUTORIAL - DOKTERNAK.ID</title>
</head>
<body>
 
	<center>
 
		<h2>DATA TUTORIAL</h2>
		<h4>Dokternak.id</h4>
 
	</center>
 
	<?php 
	include '../koneksi.php';
	?>

	<table border="1">
                <thead>
                    <tr>
						<th>No</th>
						<th>ID Tutorial</th>
						<th>Judul Tutorial</th>
						<th>isi</th>
						<th>icon</th>

                    </tr>
                </thead>
                <tbody>
					<?php
					$i = 1;
					$ksql="SELECT * FROM tutorial";
					$khasil = mysqli_query($koneksi,$ksql);
					while($krow = mysqli_fetch_array($khasil))
					{
					?>

					<tr>
						<td>
						<?= $i ?>
						</td>

						<!-- Code menampilkan data -->
						<td><?php echo $krow['id_tutorial']; ?></td>
						<td><?php echo $krow['judul_tutorial']; ?></td>
						<td><?php echo $krow['isi']; ?></td>
						<td>
							<img src="../foto/gambartutorial.php?id_tutorial=<?php echo $krow['id_tutorial']; ?>"
											alt="<?php echo "Belum upload foto" ?>" ></img>
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