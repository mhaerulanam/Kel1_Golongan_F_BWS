<!DOCTYPE html>
<html>
<head>
	<title>CETAK DATA PETERNAK - DOKTERNAK.ID</title>
</head>
<body>
<?php
	$tanggal_awal=$_POST['tanggal_awal'];
	$tanggal_akhir=$_POST['tanggal_akhir'];
 ?> 
 
 	<center>
 
		<h2>DATA PETERNAK</h2>
		<h4>Dokternak.id</h4>
 
	</center>
 
	<?php 
	include '../../koneksi.php';
	?>

	<table border="1">
                <thead>
                    <tr>
						<th>NO</th>
                        <th>Tanggal</th>
                        <th>Kategori Hewan </th>
						<th>Jenis Hewan </th>
						<th>Nama Hewan</th>
						<th>Nama Pemilik</th>
                        <th>Alamat</th>
						<th>Keluhan</th>
                        <th>Diagnosa</th>
                        <th>Pelayanan</th>
						
                    </tr>
                </thead>
                <tbody>
					<?php
					$i = 1;
					$dokter = $_POST['id_dokter'];
					$ksql="SELECT detail_rekammedik.*, rekam_medik.*, kategori_artikel.*, kategori_hewan.*, dokter.id_dokter FROM detail_rekammedik, rekam_medik, kategori_hewan, kategori_artikel, dokter WHERE detail_rekammedik.id_rmd = rekam_medik.id_rmd AND rekam_medik.id_kategori = kategori_hewan.id_kategori AND rekam_medik.id_ktg = kategori_artikel.id_ktg AND detail_rekammedik.id_dokter = dokter.id_dokter AND dokter.id_dokter='$dokter'";
					$khasil = mysqli_query($koneksi,$ksql);
					while($krow = mysqli_fetch_array($khasil))
					{
					?>

					<tr>
						<td>
						<?= $i ?>
						</td>

                        <td><?php echo $krow['tanggal']; ?></td>
                        <td><?php echo $krow['kategori_hewan']; ?></td>
						<td><?php echo $krow['kategori_artikel']; ?></td>
						<td><?php echo $krow['nama_hewan']; ?></td>
						<td><?php echo $krow['nama_peternak']; ?></td>
						<td><?php echo $krow['alamat']; ?></td>
						<td><?php echo $krow['keluhan']; ?></td>
                        <td><?php echo $krow['diagnosa']; ?></td>
                        <td><?php echo $krow['pelayanan']; ?></td>
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