<!DOCTYPE html>
<html>
<head>
	<title>CETAK DATA PETERNAK - DOKTERNAK.ID</title>
</head>
<body>
 
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
						<th>ID Peternak</th>
						<th>Nama Lengkap</th>
						<th>Email </th>
						<th>No Hp</th>
						<th>Jenis Kelamin</th>
						<th>Alamat</th>
						<th>Foto</th>
                        <th>ID User</th>
						<th>Username</th>
						<th>Password</th>
                    </tr>
                </thead>
                <tbody>
					<?php
					$i = 1;
					$ksql="SELECT * FROM peternak,user where peternak.id_user=user.id_user order by peternak.id_peternak";
					$khasil = mysqli_query($koneksi,$ksql);
					while($krow = mysqli_fetch_array($khasil))
					{
					?>

					<tr>
						<td>
						<?= $i ?>
						</td>

						<!-- Code menampilkan data -->
						<td><?php echo $krow['id_peternak']; ?></td>
						<td><?php echo $krow['namadepan_peternak'].$krow["namabelakang_peternak"]; ?></td>
						<td><?php echo $krow['email_peternak']; ?></td>
                        <td><?php echo $krow['no_hp']; ?></td>
						<td><?php echo $krow['jenis_kelamin']; ?></td>
                        <td><?php echo $krow['alamat']; ?></td>
						<td>
							<img src="foto/foto_peternak.php?id_peternak=<?php echo $krow['id_peternak']; ?>"
							alt="<?php echo "Belum upload foto" ?>" height="100"></img>
						</td>
						<td><?php echo $krow['id_user']; ?></td>
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