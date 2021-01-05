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
						<th>ID Puskeswan</th>
						<th>Nama Puskeswan</th>
						<th>Alamat</th>
						<th>Foto Puskeswan</th>
						<th>Judul</th>
						<th>Foto Dokumentasi</th>
						<th>Keterangan</th>


                    </tr>
                </thead>
                <tbody>
					<?php
					$i = 1;
				
					$ksql="SELECT * FROM puskeswan ORDER BY puskeswan.id_puskeswan";
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
						<!-- <td><?php echo $krow['jam_kerja']; ?></td>  -->
						<td>
							<img src="../foto/gambarpuskeswan.php?id_puskeswan=<?php echo $krow['id_puskeswan']; ?>"
											alt="<?php echo "Belum upload foto" ?>" height="100"></img>
						</td>  
						<td>
						<?php
							$j = 1;
							include '../koneksi.php';
							$id = $krow['id_puskeswan'];
							$ksql2="SELECT * FROM dokumentasi_puskeswan, puskeswan, dokumentasi WHERE dokumentasi_puskeswan.id_puskeswan=puskeswan.id_puskeswan AND dokumentasi_puskeswan.id_dokumentasi=dokumentasi.id_dokumentasi AND dokumentasi_puskeswan.id_puskeswan='$id'";
							$khasil2 = mysqli_query($koneksi,$ksql2);
							while($krow3 = mysqli_fetch_array($khasil2)) { ?>
									<?= $j.". "?>
									<?php echo $krow3['judul']; ?><br>
									
							<?php $j++; }
						?>
						</td>
						<td>
						<?php
							$j = 1;
							include '../koneksi.php';
							$id = $krow['id_puskeswan'];
							$ksql2="SELECT * FROM dokumentasi_puskeswan, puskeswan, dokumentasi WHERE dokumentasi_puskeswan.id_puskeswan=puskeswan.id_puskeswan AND dokumentasi_puskeswan.id_dokumentasi=dokumentasi.id_dokumentasi AND dokumentasi_puskeswan.id_puskeswan='$id'";
							$khasil2 = mysqli_query($koneksi,$ksql2);
							while($krow2 = mysqli_fetch_array($khasil2)) { ?>
								<?= $j.". "?>
								<img src="../foto/foto_dokumentasi.php?id_dokumentasi=<?php echo $krow2['id_dokumentasi']; ?>"
											alt="<?php echo "Belum upload foto" ?>" height="100"></img><br>
								
							<?php $j++; }
						?>
						</td>
						
						<td>
						<?php
							$j = 1;
							include 'koneksi.php';
							$id = $krow['id_puskeswan'];
							$ksql2="SELECT * FROM dokumentasi_puskeswan, puskeswan, dokumentasi WHERE dokumentasi_puskeswan.id_puskeswan=puskeswan.id_puskeswan AND dokumentasi_puskeswan.id_dokumentasi=dokumentasi.id_dokumentasi AND dokumentasi_puskeswan.id_puskeswan='$id'";
							$khasil2 = mysqli_query($koneksi,$ksql2);	
							while($krow4 = mysqli_fetch_array($khasil2)) { ?>
								<?= $j.". "?>
								<?php echo $krow4['keterangan']; ?><br>
							<?php $j++; }
						?>
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