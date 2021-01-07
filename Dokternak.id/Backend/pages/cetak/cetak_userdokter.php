<!DOCTYPE html>
<html>
<head>
	<title>CETAK DATA USER DOKTER - DOKTERNAK.ID</title>
</head>
<body>
 
	<center>
 
		<h2>DATA USER (DOKTER)</h2>
		<h4>Dokternak.id</h4>
 
	</center>
 
	<?php 
	include '../koneksi.php';
	?>

	<table border="1">
                <thead>
                    <tr>
						<th>No</th>
						<th>ID Dokter</th>
						<th>Nama Lengkap</th>
						<th>Jenis Kelamin</th>
						<th>Alamat</th>
						<th>Tempat</th>
						<th>Telpon</th>
						<th>Foto</th>
						<th>username</th>
						<th>password</th>

                    </tr>
                </thead>
                <tbody>
					<?php
					$i = 1;
					$ksql="SELECT * FROM dokter_user, dokter, user WHERE dokter_user.id_user=user.id_user  AND dokter_user.id_dokter=dokter.id_dokter  ORDER BY dokter.id_dokter";
					$khasil = mysqli_query($koneksi,$ksql);
					while($krow = mysqli_fetch_array($khasil))
					{
					?>

					<tr>
						<td>
						<?= $i ?>
						</td>

						<!-- Code menampilkan data -->
						<td><?php echo $krow['id_dokter']; ?></td>
						<td><?php echo $krow['nama']; ?></td>
						<td><?php echo $krow['jenis_kelamin']; ?></td>
						<td><?php echo $krow['alamat']; ?></td>
						<td><?php echo $krow['tempat']; ?></td>
						<td><?php echo $krow['telpon']; ?></td>
						<td>
							<img src="../foto/foto_dokter.php?id_dokter=<?php echo $krow['id_dokter']; ?>"
											alt="<?php echo "Belum upload foto" ?>" height="100"></img>
						</td>
						<td><?php echo $krow['username']; ?></td>
						<td><?php echo $krow['password']; ?></td>


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