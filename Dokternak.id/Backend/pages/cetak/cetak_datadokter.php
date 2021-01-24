<!DOCTYPE html>
<html>
<head>
	<title>CETAK DATA DOKTER - DOKTERNAK.ID</title>
</head>
<body>
 
	<center>
 
		<h2>DATA DOKTER</h2>
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
						<th>Nama</th>
						<th>Email</th>
                        <th>Jenis Kelamin</th>
						<th>Alamat</th>
                        <th>Tempat</th>
						<th>Telpon</th>
                        <th>Foto</th>
                        <th>Sertifikasi</th>
						<th>Id Jabatan</th>
						<th>Jadwal Kerja</th>
						<th>Username</th>
						<th>Password</th>

                    </tr>
                </thead>
                <tbody>
					<?php
					$i = 1;
					$ksql="SELECT * FROM dokter WHERE verifikasi='yes'";
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
						<td><?php echo $krow['email']; ?></td>
                        <td><?php echo $krow['jenis_kelamin']; ?></td>
						<td><?php echo $krow['alamat']; ?></td>
                        <td><?php echo $krow['tempat']; ?></td>
						<td><?php echo $krow['telpon']; ?></td>
                        <td>
							<img src="../foto/foto_dokter.php?id_dokter=<?php echo $krow['id_dokter']; ?>"
											alt="<?php echo "Belum upload foto" ?>" height="100"></img>
						</td>
                        <td>
							<img src="../foto/sertifikasi.php?id_dokter=<?php echo $krow['id_dokter']; ?>"
											alt="<?php echo "Belum upload sertifikasi" ?>" height="100"></img>
						</td>
                        <td><?php echo $krow['id_jabatan']; ?></td>
                        <td><?php echo $krow['jadwal_kerja']; ?></td>
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