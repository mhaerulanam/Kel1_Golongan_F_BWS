<!DOCTYPE html>
<html>
<head>
	<title>CETAK DATA DOKUMENTASI - DOKTERNAK.ID</title>
</head>
<body>
 <?php
	$tanggal_awal=$_POST['tanggal_awal'];
	$tanggal_akhir=$_POST['tanggal_akhir'];
 ?>
	<center>
 
		<h2>DATA DOKUMENTASI</h2>
		<h4>Dokternak.id</h4>
		<h5><?php echo $tanggal_awal?> - <?php echo $tanggal_akhir?></h5>
		
 
	</center>
 
	<?php 
	include '../koneksi.php';
	?>

	<table border="1">
                <thead>
                    <tr>
					
						
						<th>Tanggal</th>
						<th>No</th>
						<th>ID Artikel</th>
						<th>Nama Kategori</th>
						<th>Nama Penulis</th>
						<th>Judul</th>
						<th>Isi</th>
						<th>Gambar</th>
						<th>Sumber</th>
				

                    </tr>
                </thead>
                <tbody>
					<?php
					$i = 1;
					$khasil=mysqli_query($koneksi,"SELECT * FROM artikel WHERE tanggal BETWEEN '$tanggal_awal' AND '$tanggal_akhir'");
					while($krow = mysqli_fetch_array($khasil))
					{
					?>

					<tr>
						

						<!-- Code menampilkan data -->
						<td><?php echo $krow['tanggal']; ?></td>
						<td>
						<?= $i ?>
						</td>
						<td><?php echo $krow['id_artikel']; ?></td>
						<td><?php echo $krow['id_ktg']; ?></td>
						<td><?php echo $krow['nama_penulis']; ?></td>
						<td><?php echo $krow['judul']; ?></td>
						<td><?php echo $krow['isi']; ?></td>
						<td>
							<img src="../foto/foto_admin.php?id_admin=<?php echo $krow['id_admin']; ?>"
											alt="<?php echo "Belum upload foto" ?>" height="100"></img>
						</td>
						<td><?php echo $krow['sumber']; ?></td>


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