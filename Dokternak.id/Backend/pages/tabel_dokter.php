<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Dokternak - Data Dokter</title>

        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
		<link rel="stylesheet" href="/resources/demos/style.css">
		<!-- Custom CSS Table -->
        <link href="../css/style2.css" rel="stylesheet">
       

        <!-- Bootstrap Core CSS -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="../css/metisMenu.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="../css/startmin.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" media="screen" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">

		<script>
            $( function() {
                $( "#date" ).datepicker({
                    dateFormat: "yy-mm-dd"
                });
            } );
            $(document).ready(function(){
			// Activate tooltip
			$('[data-toggle="tooltip"]').tooltip();

			// Select/Deselect checkboxes
			var checkbox = $('table tbody input[type="checkbox"]');
			$("#selectAll").click(function(){
				if(this.checked){
					checkbox.each(function(){
						this.checked = true;
					});
				} else{
					checkbox.each(function(){
						this.checked = false;
					});
				}
			});
			checkbox.click(function(){
				if(!this.checked){
					$("#selectAll").prop("checked", false);
				}
			});
		});

		</script>
    </head>
    <body>

        <div id="wrapper">
		<?php include "navbar.php" ?>
            <!-- Page Content -->
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Data Dokter</h1>
						</div>
						

					<?php

					//kode untuk menampilkan data pada tabel  
					error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
					ini_set('max_execution_time', 0);
					date_default_timezone_set('Asia/Jakarta');
					include "koneksi.php";

						$kode = date('His');
						$id_dok = "DOC$kode";
						$verifikasi = "yes";

						$id_dokter = $_POST['id_dokter'];
						$nama = $_POST['nama'];
						$email = $_POST['email'];
						$jk = $_POST['jenis_kelamin'];
						$alamat = $_POST['alamat'];
						$tempat = $_POST['tempat'];
						$telpon = $_POST['telpon'];
						$foto = $_POST['foto'];
						$sertifikasi = $_POST['sertifikasi'];
						$id_jabatan = $_POST['id_jabatan'];
						$jadwal_kerja = $_POST['jadwal_kerja'];
						$username = $_POST['username'];
						$password = $_POST['password'];
						

					//Code tombol tambah	
					if(isset($_POST['tambah'])){
						/* cek input id apakah sudah ada id yang digunakan */
						$pilih="select * from dokter where id_dokter='$id_dok'";
						$cek=mysqli_query($koneksi, $pilih);
					
						$jumlah_data = mysqli_num_rows($cek);
						if ($jumlah_data >= 1 ) {
					
							echo "<script>alert(' Id Dokter yang sama sudah digunakan');history.go(-1);</script>";
						}
						else{
							//tambah
							$lokasiFoto = $_FILES['foto']['tmp_name'];
							$lokasiSertif = $_FILES['sertifikasi']['tmp_name'];
						
							if($lokasiFoto=="" && $lokasiSertif==""){
								echo "<script>alert(' Anda harus memasukkan foto/sertifikasi, silahkan ulangi input data.');
								header('location:../tabel_dokter.php');</script>";
							}else{
								$ambilFoto   = addslashes(file_get_contents($_FILES['foto']['tmp_name']));
								$ambilSertif   = addslashes(file_get_contents($_FILES['sertifikasi']['tmp_name']));
								$sql = "INSERT INTO dokter VALUES ('$id_dok','$nama','$email','$jk','$alamat','$tempat','$telpon','$ambilFoto','$ambilSertif','$id_jabatan','$jadwal_kerja','$username','$password','$verifikasi')";
								if(mysqli_query($koneksi, $sql)){
									$nilaihasil = "Records inserted successfully.";
								} 
								else{
									echo "ERROR: Could not able to execute $sql. " . mysqli_error($koneksi);
								}
							}
						}
					}

					// BISMILLAH ***********************************************************************************************************************************************************************************************************************************************************************************************************************************
					// code tombol edit 
					if(isset($_POST['edit'])){
						//edit
						$cek_tabel = mysqli_query($koneksi, "SELECT * FROM dokter WHERE id_dokter='$id_dokter'");
						while ($cek_gambar = mysqli_fetch_array($cek_tabel)) {
							$fotoDatabase = $cek_gambar['foto'];
							$sertifDatabase = $cek_gambar['sertifikasi'];
						} //end while
						
						$foto = $_POST['foto'];
						$sertifikasi = $_POST['sertifikasi'];

						$lokasiFoto = $_FILES['foto']['tmp_name'];
						$namaFoto = $_FILES['foto']['name'];
						$lokasiSertif = $_FILES['sertifikasi']['tmp_name'];
						$namaSertif = $_FILES['sertifikasi']['name'];

						if (!isset($fotoDatabase) && !isset($sertifDatabase)){
							if (!$lokasiFoto=="" && !$lokasiSertif==""){
								$ambilFoto   = addslashes(file_get_contents($_FILES['foto']['tmp_name']));
								$ambilSertif   = addslashes(file_get_contents($_FILES['sertifikasi']['tmp_name']));
								$sql = "UPDATE dokter SET nama = '$nama', email = '$email', jenis_kelamin = '$jk', alamat = '$alamat', tempat = '$tempat', telpon = '$telpon', foto = '$ambilFoto', sertifikasi = '$ambilSertif', id_jabatan = '$id_jabatan', jadwal_kerja = '$jadwal_kerja', username = '$username', password = '$password' WHERE id_dokter = '$id_dokter'";
								if(mysqli_query($koneksi, $sql)){
									$nilaihasil = "Records updated successfully.";
								} 
								else{
									echo "ERROR: Could not able to execute $sql. " . mysqli_error($koneksi);
								}
							}else{
								?><script> alert ("Masukkan Foto/Sertifikat terlebih dahulu"); </script><?php
							}
						}else if(isset($fotoDatabase) && isset($sertifDatabase)){
							if (!$lokasiFoto=="" && !$lokasiSertif==""){
								$ambilFoto   = addslashes(file_get_contents($_FILES['foto']['tmp_name']));
								$ambilSertif   = addslashes(file_get_contents($_FILES['sertifikasi']['tmp_name']));
								$sql = "UPDATE dokter SET nama = '$nama', email = '$email', jenis_kelamin = '$jk', alamat = '$alamat', tempat = '$tempat', telpon = '$telpon', foto = '$ambilFoto', sertifikasi = '$ambilSertif', id_jabatan = '$id_jabatan', jadwal_kerja = '$jadwal_kerja', username = '$username', password = '$password' WHERE id_dokter = '$id_dokter'";
								if(mysqli_query($koneksi, $sql)){
									$nilaihasil = "Records updated successfully.";
								} 
								else{
									echo "ERROR: Could not able to execute $sql. " . mysqli_error($koneksi);
								}
							}else if($lokasiFoto=="" && !$lokasiSertif==""){
								$ambilSertif   = addslashes(file_get_contents($_FILES['sertifikasi']['tmp_name']));
								$sql = "UPDATE dokter SET nama = '$nama', email = '$email', jenis_kelamin = '$jk', alamat = '$alamat', tempat = '$tempat', telpon = '$telpon', sertifikasi = '$ambilSertif', id_jabatan = '$id_jabatan', jadwal_kerja = '$jadwal_kerja', username = '$username', password = '$password' WHERE id_dokter = '$id_dokter'";
								if(mysqli_query($koneksi, $sql)){
									$nilaihasil = "Records updated successfully.";
								} 
								else{
									echo "ERROR: Could not able to execute $sql. " . mysqli_error($koneksi);
								}
							}else if (!$lokasiFoto=="" && $lokasiSertif==""){
								$ambilFoto   = addslashes(file_get_contents($_FILES['foto']['tmp_name']));
								$sql = "UPDATE dokter SET nama = '$nama', email = '$email', jenis_kelamin = '$jk', alamat = '$alamat', tempat = '$tempat', telpon = '$telpon', foto = '$ambilFoto', id_jabatan = '$id_jabatan', jadwal_kerja = '$jadwal_kerja', username = '$username', password = '$password' WHERE id_dokter = '$id_dokter'";
								if(mysqli_query($koneksi, $sql)){
									$nilaihasil = "Records updated successfully.";
								} 
								else{
									echo "ERROR: Could not able to execute $sql. " . mysqli_error($koneksi);
								}
							}else{
								$sql = "UPDATE dokter SET nama = '$nama', email = '$email', jenis_kelamin = '$jk', alamat = '$alamat', tempat = '$tempat', telpon = '$telpon', id_jabatan = '$id_jabatan', jadwal_kerja = '$jadwal_kerja', username = '$username', password = '$password' WHERE id_dokter = '$id_dokter'";
								if(mysqli_query($koneksi, $sql)){
									$nilaihasil = "Records updated successfully.";
								} 
								else{
									echo "ERROR: Could not able to execute $sql. " . mysqli_error($koneksi);
								}
							}
						}else{
							?><script> alert ("Anda harus mengupload foto/sertifikat"); </script><?php
						}

						// $ambilFoto   = addslashes(file_get_contents($_FILES['foto']['tmp_name']));
						// $ambilSertif   = addslashes(file_get_contents($_FILES['sertifikasi']['tmp_name']));
						// $sql = "UPDATE dokter SET nama = '$nama', email = '$email', jenis_kelamin = '$jk', alamat = '$alamat', tempat = '$tempat', telpon = '$telpon', foto = '$ambilFoto', sertifikasi = '$ambilSertif', id_jabatan = '$id_jabatan', jadwal_kerja = '$jadwal_kerja', username = '$username', password = '$password' WHERE id_dokter = '$id_dokter'";
						// if(mysqli_query($koneksi, $sql)){
						// 	$nilaihasil = "Records updated successfully.";
						// } 
						// else{
						// 	echo "ERROR: Could not able to execute $sql. " . mysqli_error($koneksi);
						// }
						
					}
					// ALHAMDULILLAH ***********************************************************************************************************************************************************************************************************************************************************************************************************************************

					//code delete per item
					if(isset($_POST['delete'])){
						//delete
						$sql = "DELETE FROM dokter WHERE id_dokter = '$id_dokter'";
						if(mysqli_query($koneksi, $sql)){
							$nilaihasil = "Records deleted successfully.";
						} 
						else{
							echo "ERROR: Could not able to execute $sql. " . mysqli_error($koneksi);
						}

					}

					//code delete all
					if(isset($_POST['deleteall']))
					{
						//delete
						$pilih = $_POST['pilih'];
							$sql = "DELETE FROM dokter WHERE id_dokter IN (".implode(",", $pilih).")";
							if(mysqli_query($koneksi, $sql))
							{
								$nilaihasil = "Records deleted successfully.";
							} 
							else
							{
								// echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
							}

					}

					// kode aksi batalkan verifikasi
					if(isset($_POST['batalverifikasi']))
					{	
						$sql1 = "UPDATE dokter SET verifikasi = 'no' WHERE id_dokter = '$id_dokter'";			
						if(mysqli_query($koneksi, $sql1)){
							echo "<script type='text/javascript'>alert('Pembatalan Verifikasi Berhasil');; window.location='tabel_dokter.php'</script>";
						} 
						else{
							echo "<script type='text/javascript'>alert('Pembatalan Verifikasi gagal'); window.location='tabel_dokter.php'</script>";
						}

					}
					?>
<form method="post" action="">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
					</div>
					<div class="col-sm-6">
						<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal">++ Tambah Data	</a>
						<a href="./cetak/cetak_datadokter.php" target="_blank" class="btn btn-info">Cetak</a>
						<input type="submit" name="deleteall" value="Delete Selected" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">
					</div>
				</div>
				<div class="row">
				</div>
			</div>
				<?php echo "$nilaihasil"; ?>
            <table id="tabel-data" class="table table-striped table-hover" >
                <thead>
                    <tr>
						<th>
							<span class="custom-checkbox">
								<input type="checkbox" id="selectAll">
								<label for="selectAll"></label>
							</span>
						</th>

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
                        <th colspan="3">Actions</th>

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
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox5" name="pilih[]" value="<?php echo $krow['id_dokter']; ?>">
								<label for="checkbox5"></label>
							</span>
						</td>
						<td><?= $i ?></td>

						<!-- Code menampilkan data -->
						<td><?php echo $krow['id_dokter']; ?></td>
						<td><?php echo $krow['nama']; ?></td>
						<td><?php echo $krow['email']; ?></td>
                        <td><?php echo $krow['jenis_kelamin']; ?></td>
						<td><?php echo $krow['alamat']; ?></td>
                        <td><?php echo $krow['tempat']; ?></td>
						<td><?php echo $krow['telpon']; ?></td>
                        <td>
							<img src="foto/foto_dokter.php?id_dokter=<?php echo $krow['id_dokter']; ?>"
											alt="<?php echo "Belum upload foto" ?>" height="100"></img>
						</td>
                        <td>
							<img src="foto/sertifikasi.php?id_dokter=<?php echo $krow['id_dokter']; ?>"
											alt="<?php echo "Belum upload sertifikasi" ?>" height="100"></img>
						</td>
                        <td><?php echo $krow['id_jabatan']; ?></td>
                        <td><?php echo $krow['jadwal_kerja']; ?></td>
                        <td><?php echo $krow['username']; ?></td>
						<td><?php echo $krow['password']; ?></td>

						<!-- Tombol Action -->
						<td>
							<a href="#editEmployeeModal<?php echo $krow['id_dokter']; ?>" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                            <a href="#deleteEmployeeModal<?php echo $krow['id_dokter']; ?>" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                        </td>
						<td>
							<input type="hidden" value="<?php echo $krow['id_dokter']; ?>" name="id_dokter">
							<input type="submit" class="btn btn-info" value="Batalkan Verifikasi" name="batalverifikasi">
						</td>
                    </tr>
					


					<!-- Edit Modal HTML -->
					<div id="editEmployeeModal<?php echo $krow['id_dokter']; ?>" class="modal fade">
						<div class="modal-dialog">
							<div class="modal-content">
								<form role="form" method="POST" enctype="multipart/form-data">
									<input type="hidden" class="form-control" value="<?php echo $krow['id_dokter']; ?>" name="id_dokter" required>
									<div class="modal-header">
										<h4 class="modal-title">Edit</h4>
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
									</div>
									<div class="modal-body">
										<div class="form-group">
                                            <label>Nama :</label>
                                            <input type="text" name="nama" id="nama" class="form-control" value="<?php echo $krow['nama']; ?>" >
                                        </div>
										<div class="form-group">
                                            <label>Email :</label>
                                            <input type="email" name="email" id="email" class="form-control" value="<?php echo $krow['email']; ?>" >
										</div>
                                        <div class="form-group">
                                            <label>Jenis Kelamin :</label><br>
                                            		<div class="radio-inline">
													<input type="radio" name="jenis_kelamin" id="jk" value="Laki-Laki" <?php if($krow['jenis_kelamin']=='Laki-Laki') echo 'checked' ?>> Laki-Laki
                                                    </div>
                                                    <div class="radio-inline">
													<input type="radio" name="jenis_kelamin" id="jk" value="Perempuan" <?php if($krow['jenis_kelamin']=='Perempuan') echo 'checked' ?>> Perempuan
													</div>
										</div>
                                        <div class="form-group">
                                            <label>Alamat :</label>
                                            <textarea name="alamat" id="alamat" class="form-control" ><?php echo $krow['alamat']; ?></textarea>
										</div>
										<div class="form-group">
                                            <label>Tempat :</label>
                                            <input type="text" name="tempat" id="tempat" class="form-control" value="<?php echo $krow['tempat']; ?>" >
										</div> 
										<div class="form-group">
                                            <label>Telpon :</label>
                                            <input type="text" name="telpon" id="telpon" class="form-control" value="<?php echo $krow['telpon']; ?>" >
										</div>
                                        <div class="form-group">
                                            <label>Foto :</label>
											<img src="foto/foto_dokter.php?id_dokter=<?php echo $krow['id_dokter']; ?>"
											alt="<?php echo "Belum upload foto"; ?>" height="50"></img>
											<input type="file" name="foto" id="foto" class="form-control"> 
                                        </div>     
                                        <div class="form-group">
                                            <label>Sertifikasi :</label>
											<img src="foto/sertifikasi.php?id_dokter=<?php echo $krow['id_dokter']; ?>"
											alt="<?php echo "Belum upload sertifikasi"; ?>" height="50"></img>
                                            <input type="file" name="sertifikasi" id="sertifikasi" class="form-control">
                                        </div>
                                        <div class="form-group">
											<label>Jabatan :</label><br>
                                            		<div class="radio-inline">
													<input type="radio" name="id_jabatan" id="id_jabatan" value="J01" <?php if($krow['id_jabatan']=='J01') echo 'checked' ?>> Dokter
                                                    </div>
                                                    <div class="radio-inline">
													<input type="radio" name="id_jabatan" id="id_jabatan" value="J02" <?php if($krow['id_jabatan']=='J02') echo 'checked' ?>> Paramedis
													</div>
													<div class="radio-inline">
													<input type="radio" name="id_jabatan" id="id_jabatan" value="J03" <?php if($krow['id_jabatan']=='J03') echo 'checked' ?>> Petugas IB
													</div>
										</div>  
                                        <div class="form-group">
                                            <label>Jadwal Kerja :</label>
                                            <textarea name="jadwal_kerja" id="jadwal_kerja" class="form-control" ><?php echo $krow['jadwal_kerja']; ?></textarea>
										</div>
                                        <div class="form-group">
                                            <label>Username :</label>
                                            <input type="text" name="username" id="username" class="form-control" value="<?php echo $krow['username']; ?>"  >
										</div>    
										<div class="form-group">
                                            <label>Password :</label>
                                            <input type="password" name="password" id="password" class="form-control" value="<?php echo $krow['password']; ?>" >
										</div>
										<div class="modal-footer">
											<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
											<input type="submit" class="btn btn-info" value="Save" name="edit">
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>


					<!-- Delete Modal HTML -->
					<div id="deleteEmployeeModal<?php echo $krow['id_dokter']; ?>" class="modal fade">
						<div class="modal-dialog">
							<div class="modal-content">
							<form method="post" action="">
								<input type="text" class="form-control" value="<?php echo $krow['id_dokter']; ?>" name="id_dokter" required>
									<div class="modal-header">
										<h4 class="modal-title">Delete</h4>
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
									</div>
									<div class="modal-body">
										<p>Apakah anda yakin ingin menghapus data dengan nama <?php echo $krow['nama']; ?>?</p>
										<p class="text-warning"><small>Data yang terhapus tidak dapat dikembalikan.</small></p>
									</div>
									<div class="modal-footer">
										<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
										<input type="submit" class="btn btn-danger" value="Delete" name="delete">
									</div>
								</form>
							</div>
						</div>
					</div>
					<?php

					$i++;
					}
						// Close connection
						mysqli_close($koneksi);
					?>
				</form>
                </tbody>
			</table>
			

				<!-- Add Modal HTML -->
					<div id="addEmployeeModal" class="modal fade">
						<div class="modal-dialog">
							<div class="modal-content">
							<form role="form" method="POST" action="" enctype="multipart/form-data">
									<div class="modal-header">
										<h4 class="modal-title">Tambah Data</h4>
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
									</div>
									<div class="modal-body">
									<div class="form-group">
                                            <label>Nama :</label>
                                            <input type="text" name="nama" id="nama" class="form-control" required>
                                        </div>
										<div class="form-group">
                                            <label>Email :</label>
                                            <input type="email" name="email" id="email" class="form-control" required>
										</div>
                                        <div class="form-group">
                                            <label>Jenis Kelamin :</label><br>
                                            <div class="radio-inline">
													<input type="radio" name="jenis_kelamin" id="jk" value="Laki-Laki" selected> Laki-Laki
                                                    </div>
                                                    <div class="radio-inline">
													<input type="radio" name="jenis_kelamin" id="jk" value="Perempuan" selected> Perempuan
													</div>
										</div>
                                        <div class="form-group">
                                            <label>Alamat :</label>
                                            <textarea name="alamat" id="alamat" class="form-control" required></textarea>
										</div>
										<div class="form-group">
                                            <label>Tempat :</label>
                                            <input type="text" name="tempat" id="tempat" class="form-control" required>
										</div> 
										<div class="form-group">
                                            <label>Telpon :</label>
                                            <input type="text" name="telpon" id="telpon" class="form-control" required>
										</div>
                                        <div class="form-group">
                                            <label>Foto :</label>
                                            <input type="file" name="foto" id="foto" class="form-control">
                                        </div>     
                                        <div class="form-group">
                                            <label>Sertifikasi :</label>
                                            <input type="file" name="sertifikasi" id="sertifikasi" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>ID Jabatan :</label>
											<select name="id_jabatan" class="form-control" id="default-select">
												<option disabled selected> Pilih </option>
												<?php 
												include "koneksi.php";
												$sql="SELECT * FROM jabatan";
												$jab = mysqli_query($koneksi,$sql);
												while($data = mysqli_fetch_array($jab))
												{ ?>
												<option value="<?=$data['id_jabatan']?>"><?=$data['jabatan']?></option> 
												<?php } ?>
											</select><br>
										</div>  
                                        <div class="form-group">
                                            <label>Jadwal Kerja :</label>
                                            <textarea name="jadwal_kerja" id="jadwal_kerja" class="form-control" required></textarea>
										</div>
                                        <div class="form-group">
                                            <label>Username :</label>
                                            <input type="text" name="username" id="username" class="form-control" required>
										</div>    
										<div class="form-group">
                                            <label>Password :</label>
                                            <input type="password" name="password" id="password" class="form-control" required>
										</div>
										<div class="modal-footer">
													<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
													<input type="submit" class="btn btn-success" value="Tambah" name="tambah">
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				</table>
				</div>
				<br><br>
				<?php
					include 'koneksi.php';
					// code tombol edit 
					if(isset($_POST['edit'])){
						//edit
						$cek_tabel = mysqli_query($koneksi, "SELECT * FROM dokter WHERE id_dokter='$id_dokter'");
						while ($cek_gambar = mysqli_fetch_array($cek_tabel)) {
							$fotoDatabase = $cek_gambar['foto'];
							$sertifDatabase = $cek_gambar['sertifikasi'];
						} //end while
						
						$foto = $_POST['foto'];
						$sertifikasi = $_POST['sertifikasi'];

						$lokasiFoto = $_FILES['foto']['tmp_name'];
						$namaFoto = $_FILES['foto']['name'];
						$lokasiSertif = $_FILES['sertifikasi']['tmp_name'];
						$namaSertif = $_FILES['sertifikasi']['name'];

						if (!isset($fotoDatabase) && !isset($sertifDatabase)){
							if (!$lokasiFoto=="" && !$lokasiSertif==""){
								$ambilFoto   = addslashes(file_get_contents($_FILES['foto']['tmp_name']));
								$ambilSertif   = addslashes(file_get_contents($_FILES['sertifikasi']['tmp_name']));
								$sql = "UPDATE dokter SET nama = '$nama', email = '$email', jenis_kelamin = '$jk', alamat = '$alamat', tempat = '$tempat', telpon = '$telpon', foto = '$ambilFoto', sertifikasi = '$ambilSertif', id_jabatan = '$id_jabatan', jadwal_kerja = '$jadwal_kerja', username = '$username', password = '$password' WHERE id_dokter = '$id_dokter'";
								if(mysqli_query($koneksi, $sql)){
									$nilaihasil = "Records updated successfully.";
								} 
								else{
									echo "ERROR: Could not able to execute $sql. " . mysqli_error($koneksi);
								}
							}else{
								?><script> alert ("Masukkan Foto/Sertifikat terlebih dahulu"); </script><?php
							}
						}else if(isset($fotoDatabase) && isset($sertifDatabase)){
							if (!$lokasiFoto=="" && !$lokasiSertif==""){
								$ambilFoto   = addslashes(file_get_contents($_FILES['foto']['tmp_name']));
								$ambilSertif   = addslashes(file_get_contents($_FILES['sertifikasi']['tmp_name']));
								$sql = "UPDATE dokter SET nama = '$nama', email = '$email', jenis_kelamin = '$jk', alamat = '$alamat', tempat = '$tempat', telpon = '$telpon', foto = '$ambilFoto', sertifikasi = '$ambilSertif', id_jabatan = '$id_jabatan', jadwal_kerja = '$jadwal_kerja', username = '$username', password = '$password' WHERE id_dokter = '$id_dokter'";
								if(mysqli_query($koneksi, $sql)){
									$nilaihasil = "Records updated successfully.";
								} 
								else{
									echo "ERROR: Could not able to execute $sql. " . mysqli_error($koneksi);
								}
							}else if($lokasiFoto=="" && !$lokasiSertif==""){
								$ambilSertif   = addslashes(file_get_contents($_FILES['sertifikasi']['tmp_name']));
								$sql = "UPDATE dokter SET nama = '$nama', email = '$email', jenis_kelamin = '$jk', alamat = '$alamat', tempat = '$tempat', telpon = '$telpon', sertifikasi = '$ambilSertif', id_jabatan = '$id_jabatan', jadwal_kerja = '$jadwal_kerja', username = '$username', password = '$password' WHERE id_dokter = '$id_dokter'";
								if(mysqli_query($koneksi, $sql)){
									$nilaihasil = "Records updated successfully.";
								} 
								else{
									echo "ERROR: Could not able to execute $sql. " . mysqli_error($koneksi);
								}
							}else if (!$lokasiFoto=="" && $lokasiSertif==""){
								$ambilFoto   = addslashes(file_get_contents($_FILES['foto']['tmp_name']));
								$sql = "UPDATE dokter SET nama = '$nama', email = '$email', jenis_kelamin = '$jk', alamat = '$alamat', tempat = '$tempat', telpon = '$telpon', foto = '$ambilFoto', id_jabatan = '$id_jabatan', jadwal_kerja = '$jadwal_kerja', username = '$username', password = '$password' WHERE id_dokter = '$id_dokter'";
								if(mysqli_query($koneksi, $sql)){
									$nilaihasil = "Records updated successfully.";
								} 
								else{
									echo "ERROR: Could not able to execute $sql. " . mysqli_error($koneksi);
								}
							}else{
								$sql = "UPDATE dokter SET nama = '$nama', email = '$email', jenis_kelamin = '$jk', alamat = '$alamat', tempat = '$tempat', telpon = '$telpon', id_jabatan = '$id_jabatan', jadwal_kerja = '$jadwal_kerja', username = '$username', password = '$password' WHERE id_dokter = '$id_dokter'";
								if(mysqli_query($koneksi, $sql)){
									$nilaihasil = "Records updated successfully.";
								} 
								else{
									echo "ERROR: Could not able to execute $sql. " . mysqli_error($koneksi);
								}
							}
						}else{
							?><script> alert ("Anda harus mengupload foto/sertifikat"); </script><?php
						}
						
					}
					// ALHAMDULILLAH ***********************************************************************************************************************************************************************************************************************************************************************************************************************************

					//code delete per item
					if(isset($_POST['delete'])){
						//delete
						$sql = "DELETE FROM dokter WHERE id_dokter = '$id_dokter'";
						if(mysqli_query($koneksi, $sql)){
							echo "<script type='text/javascript'>alert('Data Dokter Berhasil Dihapus');; window.location='tabel_dokter.php'</script>";
						} 
						else{
							echo "<script type='text/javascript'>alert('Data Dokter Gagal Dihapus');; window.location='tabel_dokter.php'</script>";
						}

					}

					// kode aksi verifikasi
					if(isset($_POST['verifikasi']))
					{	
						$cek = mysqli_query($koneksi, "SELECT * FROM dokter WHERE id_dokter='$id_dokter'");
						while ($cek_telp = mysqli_fetch_array($cek)) {
							$telpon = $cek_telp['telpon'];
							$telpon2 = $cek_telp['telpon'];
							// $nama = $cek_telp['nama'];
						} //End while

						$telpon0 = mysqli_query($koneksi, "SELECT * FROM dokter WHERE id_dokter='$id_dokter' AND telpon LIKE '08%'");
						while($telp0 = mysqli_fetch_array($telpon0)){
							$t0 = $telp0['telpon'];
						}

						$telpon62 = mysqli_query($koneksi, "SELECT * FROM dokter WHERE id_dokter='$id_dokter' AND telpon LIKE '+62%'");
						while($telp62 = mysqli_fetch_array($telpon62)){
							$t62 = $telp62['telpon'];
						}
						
						
						if($telpon = $t0){
							$str= ltrim ($telpon2,'0');
							$telpon_baru = "+62$str";
							$sql1 = "UPDATE dokter SET verifikasi = 'yes', telpon = '$telpon_baru' WHERE id_dokter = '$id_dokter'";			
							if(mysqli_query($koneksi, $sql1)){
								echo "<script type='text/javascript'>alert('Verifikasi Berhasil');; window.location='tabel_dokter.php'</script>";
							} 
							else{
								echo "<script type='text/javascript'>alert('Verifikasi gagal'); window.location='tabel_dokter.php'</script>";
							}
							// echo "<script type='text/javascript'>alert('Nomor Telpon Belum Diperbaiki. Ubah 0 menjadi +62'); window.location='tabel_dokter.php'</script>";
						}else if($telpon = $t62){
							$sql1 = "UPDATE dokter SET verifikasi = 'yes' WHERE id_dokter = '$id_dokter'";			
							if(mysqli_query($koneksi, $sql1)){
								echo "<script type='text/javascript'>alert('Verifikasi Berhasil');; window.location='tabel_dokter.php'</script>";
							} 
							else{
								echo "<script type='text/javascript'>alert('Verifikasi gagal'); window.location='tabel_dokter.php'</script>";
							}
						}else{
							echo "<script type='text/javascript'>alert('Nomor telpon tidak terdaftar. Mohon perbaiki nomor telpon terlebih dahulu!'); window.location='tabel_dokter.php'</script>";
						} // End else

					} //End if isset
				?>

				<h3 class="page-header">Data Dokter Baru/<b>Belum Terverifikasi</b></h3>

				<table  class="table table-striped table-hover" >
					<th>No</th>
					<th>Nama</th>
					<th>Email</th>
					<th>Jenis Kelamin</th>
					<th>Alamat</th>
					<th>Tempat</th>
					<th>Telpon</th>
					<th>Foto</th>
					<th>Sertifikasi</th>
					<th>ID Jabatan</th>
					<th>Jadwal Kerja</th>
					<th>Username</th>
					<th>Password</th>
					<th colspan="2">Action</th>
						<?php
						$i =1;
							include "koneksi.php";
							$sql="SELECT * FROM dokter WHERE verifikasi='no'";
							$jab = mysqli_query($koneksi,$sql);
							while($data = mysqli_fetch_array($jab))
							{ ?>
							<form method="POST" >
							<tr>
							<td><?= $i?> </td>
							<td><?=$data['nama']?> </td>
							<td><?=$data['email']?> </td>
							<td><?=$data['jenis_kelamin']?> </td>
							<td><?=$data['alamat']?> </td>
							<td><?=$data['tempat']?> </td>
							<td><?=$data['telpon']?> </td>
							<td><img src="foto/foto_dokter.php?id_dokter=<?php echo $data['id_dokter']; ?>"
											alt="<?php echo "Belum upload foto"; ?>" height="50"></img></td>
							<td><img src="foto/sertifikasi.php?id_dokter=<?php echo $data['id_dokter']; ?>"
											alt="<?php echo "Belum upload sertifikasi"; ?>" height="50"></img></td>
							<td><?=$data['id_jabatan']?> </td>
							<td><?=$data['jadwal_kerja']?> </td>
							<td><?=$data['username']?> </td>
							<td><?=$data['password']?> </td>
							<td>
                            	<a href="#editEmployeeModal2<?php echo $data['id_dokter']; ?>" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                            	<a href="#deleteEmployeeModal2<?php echo $data['id_dokter']; ?>" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
							</td>
							<td>
								<input type="hidden" value="<?php echo $data['id_dokter']; ?>" name="id_dokter">
								<input type="submit" class="btn btn-success" value="Verifikasi" name="verifikasi">
							</td>
							</tr>

				<!-- MODAL UNTUK DATA BELUM DIVERIFIKASI -->
				<!-- Edit Modal HTML -->
				<div id="editEmployeeModal2<?php echo $data['id_dokter']; ?>" class="modal fade">
						<div class="modal-dialog">
							<div class="modal-content">
								<form role="form" method="POST" enctype="multipart/form-data">
									<input type="hidden" class="form-control" value="<?php echo $data['id_dokter']; ?>" name="id_dokter" required>
									<div class="modal-header">
										<h4 class="modal-title">Edit</h4>
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
									</div>
									<div class="modal-body">
										<div class="form-group">
                                            <label>Nama :</label>
                                            <input type="text" name="nama" id="nama" class="form-control" value="<?php echo $data['nama']; ?>" >
                                        </div>
										<div class="form-group">
                                            <label>Email :</label>
                                            <input type="email" name="email" id="email" class="form-control" value="<?php echo $data['email']; ?>" >
										</div>
                                        <div class="form-group">
                                            <label>Jenis Kelamin :</label><br>
                                            		<div class="radio-inline">
													<input type="radio" name="jenis_kelamin" id="jk" value="Laki-Laki" <?php if($data['jenis_kelamin']=='Laki-Laki') echo 'checked' ?>> Laki-Laki
                                                    </div>
                                                    <div class="radio-inline">
													<input type="radio" name="jenis_kelamin" id="jk" value="Perempuan" <?php if($data['jenis_kelamin']=='Perempuan') echo 'checked' ?>> Perempuan
													</div>
										</div>
                                        <div class="form-group">
                                            <label>Alamat :</label>
                                            <textarea name="alamat" id="alamat" class="form-control" ><?php echo $data['alamat']; ?></textarea>
										</div>
										<div class="form-group">
                                            <label>Tempat :</label>
                                            <input type="text" name="tempat" id="tempat" class="form-control" value="<?php echo $data['tempat']; ?>" >
										</div> 
										<div class="form-group">
                                            <label>Telpon :</label>
                                            <input type="text" name="telpon" id="telpon" class="form-control" value="<?php echo $data['telpon']; ?>" >
										</div>
                                        <div class="form-group">
                                            <label>Foto :</label>
											<img src="foto/foto_dokter.php?id_dokter=<?php echo $data['id_dokter']; ?>"
											alt="<?php echo "Belum upload foto"; ?>" height="50"></img>
											<input type="file" name="foto" id="foto" class="form-control"> 
                                        </div>     
                                        <div class="form-group">
                                            <label>Sertifikasi :</label>
											<img src="foto/sertifikasi.php?id_dokter=<?php echo $data['id_dokter']; ?>"
											alt="<?php echo "Belum upload sertifikasi"; ?>" height="50"></img>
                                            <input type="file" name="sertifikasi" id="sertifikasi" class="form-control">
                                        </div>
                                        <div class="form-group">
											<label>Jabatan :</label><br>
                                            		<div class="radio-inline">
													<input type="radio" name="id_jabatan" id="id_jabatan" value="J01" <?php if($data['id_jabatan']=='J01') echo 'checked' ?>> Dokter
                                                    </div>
                                                    <div class="radio-inline">
													<input type="radio" name="id_jabatan" id="id_jabatan" value="J02" <?php if($data['id_jabatan']=='J02') echo 'checked' ?>> Paramedis
													</div>
													<div class="radio-inline">
													<input type="radio" name="id_jabatan" id="id_jabatan" value="J03" <?php if($data['id_jabatan']=='J03') echo 'checked' ?>> Petugas IB
													</div>
										</div>  
                                        <div class="form-group">
                                            <label>Jadwal Kerja :</label>
                                            <textarea name="jadwal_kerja" id="jadwal_kerja" class="form-control" ><?php echo $data['jadwal_kerja']; ?></textarea>
										</div>
                                        <div class="form-group">
                                            <label>Username :</label>
                                            <input type="text" name="username" id="username" class="form-control" value="<?php echo $data['username']; ?>"  >
										</div>    
										<div class="form-group">
                                            <label>Password :</label>
                                            <input type="password" name="password" id="password" class="form-control" value="<?php echo $data['password']; ?>" >
										</div>
										<div class="modal-footer">
											<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
											<input type="submit" class="btn btn-info" value="Save" name="edit">
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>


					<!-- Delete Modal HTML -->
					<div id="deleteEmployeeModal2<?php echo $data['id_dokter']; ?>" class="modal fade">
						<div class="modal-dialog">
							<div class="modal-content">
							<form method="post" action="">
								<input type="text" class="form-control" value="<?php echo $data['id_dokter']; ?>" name="id_dokter" required>
									<div class="modal-header">
										<h4 class="modal-title">Delete</h4>
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
									</div>
									<div class="modal-body">
										<p>Apakah anda yakin ingin menghapus data dengan nama <?php echo $data['nama']; ?>?</p>
										<p class="text-warning"><small>Data yang terhapus tidak dapat dikembalikan.</small></p>
									</div>
									<div class="modal-footer">
										<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
										<input type="submit" class="btn btn-danger" value="Delete" name="delete">
									</div>
								</form>
							</div>
						</div>
					</div>
				<!-- End Modal -->

							</form>
							<?php
							$i++;
						} 
							// Close connection
						mysqli_close($koneksi);
						?>
						

				</table>

				</div>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="../js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="../js/metisMenu.min.js"></script>

        <!-- Custom Theme JavaScript -->
		<script src="../js/startmin.js"></script>
		
		<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
		<script>
			$(document).ready(function(){
				$('#tabel-data').DataTable();
			});
		</script>

    </body>
</html>
