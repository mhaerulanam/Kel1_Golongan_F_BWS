<!DOCTYPE html>
<html>
<head>
	<title>CETAK DATA OBAT - DOKTERNAK.ID</title>
</head>
<body>
 
	<center>
 
		<h2>DATA OBAT</h2>
		<h4>Dokternak.id</h4>
 
	</center>
 
	<?php 
	include '../../koneksi.php';
	?>

	<table border="1">
                <thead>
                    <tr>
						<th>No</th>
						<th>ID Obat</th>
						<th>Nama Obat</th>
						<th>Stok</th>
						<th>Supplier</th>
                        <th>Expired</th>
                        <th>Keterangan</th>

                    </tr>
                </thead>
                <tbody>
					<?php
					$i = 1;
					$ksql="SELECT * FROM data_obat";
					$khasil = mysqli_query($koneksi,$ksql);
					while($krow = mysqli_fetch_array($khasil))
					{
					?>

					<tr>
						<td>
						<?= $i ?>
						</td>

						<!-- Code menampilkan data -->
						<td><?php echo $krow['id_obat']; ?></td>
						<td><?php echo $krow['nama_obat']; ?></td>
						<td><?php echo $krow['stok']; ?></td>
						<td><?php echo $krow['supplier']; ?></td>
                        <td><?php echo $krow['expired']; ?></td>
                        <td><?php echo $krow['keterangan']; ?></td>
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