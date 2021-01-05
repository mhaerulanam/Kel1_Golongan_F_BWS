<!DOCTYPE html>
<html>
<head>
	<title>CETAK DATA PUSKESWAN - DOKTERNAK.ID</title>
</head>
<body>
 
	<center>
 
		<h2>DATA PUSKESWAN</h2>
		<h4>Dokternak.id</h4>
 
	</center>
 
	<?php 
	include '../koneksi.php';
	?>

	<table border="1">
                <thead>
                    <tr>
						<th>No</th>
						<th>ID Puskeswan</th>
						<th>Nama Puskeswan</th>
						<th>Alamat</th>
                        <th>Jam Kerja</th>
						<th>Icon</th>
                        <th>Maps</th>

                    </tr>
                </thead>
                <tbody>
					<?php
					$i = 1;
					$ksql="SELECT * FROM puskeswan";
					$khasil = mysqli_query($koneksi,$ksql);
					while($krow = mysqli_fetch_array($khasil))
					{
					?>

					<tr>
						<td>
						<?= $i ?>
						</td>

						<!-- Code menampilkan data -->
						<td><?php echo $krow['id_puskeswan']; ?></td>
						<td><?php echo $krow['nama_puskeswan']; ?></td>
						<td><?php echo $krow['alamat']; ?></td>
                        <td><?php echo $krow['jam_kerja']; ?></td>
						<td>
							<img src="../foto/gambarpuskeswan.php?id_puskeswan=<?php echo $krow['id_puskeswan']; ?>"
											alt="<?php echo "Belum upload foto" ?>" ></img>
						</td>  
						<td><?php echo $krow['maps']; ?></td>
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