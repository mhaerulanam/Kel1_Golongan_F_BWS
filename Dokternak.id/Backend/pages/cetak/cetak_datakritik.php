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
						<th>ID </th>
						<th>Tanggal</th>
						<th>Komentar</th>
						<th>Nama</th>
						<th>Email</th>
						<th>Pekerjaan</th>
                    </tr>
                </thead>
                <tbody>
					<?php
					$i = 1;
					$ksql="SELECT * FROM kritikdansaran";
					$khasil = mysqli_query($koneksi,$ksql);
					while($krow = mysqli_fetch_array($khasil))
					{
					?>

					<tr>
						<td>
						<?= $i ?>
						</td>

						<!-- Code menampilkan data -->
						<td><?php echo $krow['id_ks']; ?></td>
						<td><?php echo $krow['tanggal'];?></td>
						<td><?php echo $krow['komentar']; ?></td>
                        <td><?php echo $krow['nama']; ?></td>
						<td><?php echo $krow['email_hp']; ?></td>
                        <td><?php echo $krow['pekerjaan']; ?></td>
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