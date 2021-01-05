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
	include '../koneksi.php';
	?>

	<table border="1">
                <thead>
                    <tr>
						<th>No</th>
						<th>ID Admin</th>
						<th>Nama Lengkap</th>
						<th>Jenis Kelamin</th>
						<th>Alamat</th>
						<th>Foto</th>
						<th>username</th>
						<th>password</th>

                    </tr>
                </thead>
                <tbody>
					<?php
					$i = 1;
					$ksql="SELECT * FROM admin, user WHERE admin.id_user=user.id_user ORDER BY id_admin";
					$khasil = mysqli_query($koneksi,$ksql);
					while($krow = mysqli_fetch_array($khasil))
					{
					?>

					<tr>
						<td>
						<?= $i ?>
						</td>

						<!-- Code menampilkan data -->
						<td><?php echo $krow['id_admin']; ?></td>
						<td><?php echo $krow['nama']; ?></td>
						<td><?php echo $krow['jenis_kelamin']; ?></td>
						<td><?php echo $krow['alamat']; ?></td>
						<td>
							<img src="../foto/foto_admin.php?id_admin=<?php echo $krow['id_admin']; ?>"
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