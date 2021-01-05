<!DOCTYPE html>
<html>
<head>
	<title>CETAK DATA HEWAN - DOKTERNAK.ID</title>
</head>
<body>
 
	<center>
 
		<h2>DATA HEWAN</h2>
		<h4>Dokternak.id</h4>
 
	</center>
 
	<?php 
	include '../koneksi.php';
	?>

	<table border="1">
                <thead>
                    <tr>
						<th>No</th>
						<th>ID Hewan</th>
						<th>Nama Hewan</th>
						<th>Ras Hewan</th>
						<th>Usia</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
					<?php
					$i = 1;
					$ksql="SELECT * FROM data_hewan";
					$khasil = mysqli_query($koneksi,$ksql);
					while($krow = mysqli_fetch_array($khasil))
					{
					?>

					<tr>
						<td>
						<?= $i ?>
						</td>

						<!-- Code menampilkan data -->
                        <td><?php echo $krow['id_hewan']; ?></td>
						<td><?php echo $krow['nama_hewan']; ?></td>
						<td><?php echo $krow['ras_hewan']; ?></td>
						<td><?php echo $krow['usia']; ?></td>
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