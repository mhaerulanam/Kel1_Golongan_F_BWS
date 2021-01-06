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

        <title>Admin Akademik</title>

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
                            <h1 class="page-header">Data Peternak</h1>
						</div>
						

					<?php

					//kode untuk menampilkan data pada tabel  
					error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
					ini_set('max_execution_time', 0);
					date_default_timezone_set('Asia/Jakarta');
					include "koneksi.php";
						$id_peternak = $_POST['id_peternak'];
						$namadepan_peternak = $_POST['namadepan_peternak'];
						$namabelakang_peternak = $_POST['namabelakang_peternak'];
						$email_peternak = $_POST['email_peternak'];
						$no_hp = $_POST['no_hp'];
						$jenis_kelamin = $_POST['jenis_kelamin'];
						$alamat = $_POST['alamat'];
						$foto_peternak = $_POST['foto_peternak'];
						$id_user = $_POST['id_user'];
						$username = $_POST['username'];
						$password = $_POST['password'];
						$id_role = 3;
						

					//Code tombol tambah	
					if(isset($_POST['tambah'])){
						/* cek input NIM apakah sudah ada nim yang digunakan */
						$pilih="select * from peternak where id_peternak='$id_peternak'";
						$cek=mysqli_query($koneksi, $pilih);
					
						$jumlah_data = mysqli_num_rows($cek);
						if ($jumlah_data >= 1 ) {
					
							echo "<script>alert(' Id peternak yang sama sudah digunakan');history.go(-1);</script>";
						}
						else{
							//tambah
							$sql = "INSERT INTO user VALUES ('','$username','$password','$id_role')";
							mysqli_query($koneksi,$sql);
							//cek keberhasilan
							if(mysqli_affected_rows($koneksi) > 0){
								$kode = date('ymdHs'); 
								$id_peternak = "$kode";
							 	$data = "";
							  	$ambildata=mysqli_query($koneksi, "SELECT * FROM user order by id_user DESC LIMIT 1");
							  	$row = mysqli_fetch_array($ambildata);
								$id = $row['id_user'];
								$ambilfoto   = addslashes(file_get_contents($_FILES['foto']['tmp_name']));
								$sql = "INSERT INTO peternak VALUES ('$id_peternak','$namadepan_peternak','$namabelakang_peternak','$email_peternak','$no_hp','$jenis_kelamin','$alamat','$ambilfoto','$id')";
							if(mysqli_query($koneksi, $sql)){
								$nilaihasil = "Records inserted successfully.";
							} 
							else{
								echo "ERROR: Could not able to execute $sql. " . mysqli_error($koneksi);
							}
						}
						}
					}

					// code tombol edit
					if(isset($_POST['edit'])){
						//edit
						$lokasiFoto = $_FILES['foto']['tmp_name'];
						if($lokasiFoto==""){
							$sql = "UPDATE peternak SET  namadepan_peternak = '$namadepan_peternak', namabelakang_peternak = '$namabelakang_peternak', email_peternak = '$email_peternak', no_hp = '$no_hp', jenis_kelamin = '$jenis_kelamin', alamat = '$alamat' WHERE id_peternak = '$id_peternak'";
							include 'koneksi.php';
							if(mysqli_query($koneksi, $sql)){
								$data = "";
								$ambildata=mysqli_query($koneksi, "SELECT * FROM peternak where id_peternak='$id_peternak'");
								$row = mysqli_fetch_array($ambildata);
								$id = $row['id_user'];
								  $sql1 = "UPDATE user SET  username = '$username', password = '$password', id_role = '$id_role' WHERE id_user = '$id'";
								if(mysqli_query($koneksi, $sql1)){
									$nilaihasil = "Records updated successfully.";
								}else{
									echo "ERROR: Could not able to execute $sql1. " . mysqli_error($koneksi);
								}
							} 
							else{
								echo "ERROR: Could not able to execute $sql. " . mysqli_error($koneksi);
							}
						}else{
							$ambilfoto1   = addslashes(file_get_contents($_FILES['foto']['tmp_name']));
							echo $ambilfoto1;
							$sql = "UPDATE peternak SET  namadepan_peternak = '$namadepan_peternak', namabelakang_peternak = '$namabelakang_peternak', email_peternak = '$email_peternak', no_hp = '$no_hp', jenis_kelamin = '$jenis_kelamin', alamat = '$alamat', foto_peternak = '$ambilfoto1' WHERE id_peternak = '$id_peternak'";
							include 'koneksi.php';
							if(mysqli_query($koneksi, $sql)){
								$data = "";
								$ambildata=mysqli_query($koneksi, "SELECT * FROM peternak where id_peternak='$id_peternak'");
								$row = mysqli_fetch_array($ambildata);
								$id = $row['id_user'];
								  $sql1 = "UPDATE user SET  username = '$username', password = '$password', id_role = '$id_role' WHERE id_user = '$id'";
								if(mysqli_query($koneksi, $sql1)){
									$nilaihasil = "Records updated successfully.";
								}else{
									echo "ERROR: Could not able to execute $sql1. " . mysqli_error($koneksi);
								}
							} 
							else{
								echo "ERROR: Could not able to execute $sql. " . mysqli_error($koneksi);
							}
						}

						if(mysqli_query($koneksi, $sql)){
							$nilaihasil = "Records updated successfully.";
						} 
						else{
							echo "ERROR: Could not able to execute $sql. " . mysqli_error($koneksi);
						}
					}

					//code delete per item
					if(isset($_POST['delete'])){
						//delete
						$sql = "DELETE FROM peternak WHERE  id_peternak = '$id_peternak'";
							$ambildata=mysqli_query($koneksi, "SELECT * FROM peternak where  id_peternak = '$id_peternak'");
							$row = mysqli_fetch_array($ambildata);
							$id = $row['id_user'];
							$sql2 = "DELETE FROM user WHERE id_user = '$id'";
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
							$sql = "DELETE FROM peternak WHERE id_peternak IN (".implode(",", $pilih).")";
							if(mysqli_query($koneksi, $sql))
							{
								$nilaihasil = "Records deleted successfully.";
							} 
							else
							{
								// echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
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
						<a href="cetak/cetak_userpeternak.php" target="_blank" class="btn btn-info">Cetak</a>
						<input type="submit" name="deleteall" value="Delete Selected" class="btn btn-danger" onclick="return confirm('Are you sure delete selected records?')">
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
						<th>Actions</th>
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
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox5" name="pilih[]" value="<?php echo $krow['id_user']; ?>">
								<label for="checkbox5"></label>
							</span>
						</td>
						<td><?= $i ?></td>

						<!-- Code menampilkan data -->
						<td><?php echo $krow['id_peternak']; ?></td>
						<td><?php echo $krow['namadepan_peternak']; ?> <?php echo $krow['namabelakang_peternak'];?></td>
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

						<!-- Tombol Action -->
                        <td>
                            <a href="#editEmployeeModal<?php echo $krow['id_peternak']; ?>" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                            <a href="#deleteEmployeeModal<?php echo $krow['id_peternak']; ?>" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                        </td>
                    </tr>
					


					<!-- Edit Modal HTML -->
					<div id="editEmployeeModal<?php echo $krow['id_peternak']; ?>" class="modal fade">
						<div class="modal-dialog">
							<div class="modal-content">
								<form role="form" method="POST" enctype="multipart/form-data">
									<input type="hidden" class="form-control" value="<?php echo $krow['id_peternak']; ?>" name="id_peternak" required>
									<div class="modal-header">
										<h4 class="modal-title">Edit</h4>
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
									</div>
									<div class="modal-body">
                                        <div class="form-group">
                                            <label>Nama Depan Peternak:</label>
                                            <input type="text" name="namadepan_peternak" id="namadepan_peternak" class="form-control" value="<?php echo $krow['namadepan_peternak']; ?>" >
										</div>
										<div class="form-group">
                                            <label>Nama Belakang Peternak:</label>
                                            <input type="text" name="namabelakang_peternak" id="namabelakang_peternak" class="form-control" value="<?php echo $krow['namabelakang_peternak']; ?>" >
                                        </div>
                                       
										<div class="form-group">
                                            <label>Email :</label>
                                            <input type="email" name="email_peternak" id="email_peternak" class="form-control" value="<?php echo $krow['email_peternak']; ?>" required>
										</div>
										<div class="form-group">
                                            <label>Telepone :</label>
                                            <input type="number" name="no_hp" id="no_hp" class="form-control" value="<?php echo $krow['no_hp']; ?>" required>
										</div>
										<div class="form-group">
                                            <label>Jenis Kelamin :</label><br>
                                            	<div class="radio-inline">
													<input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Laki-Laki" <?php if($krow['jenis_kelamin']=='Laki-Laki') echo 'checked' ?>> Laki-Laki
                                                </div>
                                                <div class="radio-inline">
													<input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Perempuan" <?php if($krow['jenis_kelamin']=='Perempuan') echo 'checked' ?>> Perempuan
												</div>
										</div> 
										<div class="form-group">
                                            <label>Tempat :</label>
                                            <input type="text" name="alamat" id="alamat" class="form-control" value="<?php echo $krow['alamat']; ?>" required>
										</div> 
										<div class="form-group">
											<label>Foto :</label>
												<img src="foto/foto_peternak.php?id_peternak=<?php echo $krow['id_peternak']; ?>"
												alt="<?php echo "Belum upload foto" ?>" height="100"></img>
                                            <input type="file" name="foto" id="foto" class="form-control">
                                        </div>     
										<div class="form-group">
                                            <label>Username :</label>
                                            <input type="text" name="username" id="username" class="form-control" value="<?php echo $krow['username']; ?>"  required>
										</div>
										<div class="form-group">
                                            <label>Password :</label>
                                            <input type="password" name="password" id="password" class="form-control" value="<?php echo $krow['password']; ?>" required>
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
					<div id="deleteEmployeeModal<?php echo $krow['id_peternak']; ?>" class="modal fade">
						<div class="modal-dialog">
							<div class="modal-content">
							<form method="post" action="" enctype="multipart/form-data">
								<input type="text" class="form-control" value="<?php echo $krow['id_peternak']; ?>" name="id_peternak" required>
									<div class="modal-header">
										<h4 class="modal-title">Delete</h4>
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
									</div>
									<div class="modal-body">
										<p>Are you sure you want to delete these Records <?php echo $krow['namadepan_peternak']; ?>?</p>
										<p class="text-warning"><small>This action cannot be undone.</small></p>
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
							<form role="form" method="POST" action=""  enctype="multipart/form-data">
									<div class="modal-header">
										<h4 class="modal-title">Tambah Data</h4>
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
									</div>
									<div class="modal-body">
									<div class="form-group">
                                            <label>Nama Depan Peternak:</label>
                                            <input type="text" name="namadepan_peternak" id="namadepan_peternak" class="form-control" value="<?php echo $krow['namadepan_peternak']; ?>" >
										</div>
										<div class="form-group">
                                            <label>Nama Belakang Peternak:</label>
                                            <input type="text" name="namabelakang_peternak" id="namabelakang_peternak" class="form-control" value="<?php echo $krow['namabelakang_peternak']; ?>" >
                                        </div>
                                       
										<div class="form-group">
                                            <label>Email :</label>
                                            <input type="email" name="email_peternak" id="email_peternak" class="form-control" value="<?php echo $krow['email_peternak']; ?>" required>
										</div>
										<div class="form-group">
                                            <label>Telepone :</label>
                                            <input type="number" name="no_hp" id="no_hp" class="form-control" value="<?php echo $krow['no_hp']; ?>" required>
										</div>
										<div class="form-group">
                                            <label>Jenis Kelamin :</label><br>
                                            		<div class="radio-inline">
													<input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Laki-Laki" > Laki-Laki
                                                    </div>
                                                    <div class="radio-inline">
													<input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Perempuan" > Perempuan
												</div>
										</div> 
										<div class="form-group">
                                            <label>Tempat :</label>
                                            <input type="text" name="alamat" id="alamat" class="form-control" value="<?php echo $krow['alamat']; ?>" required>
										</div> 
										<div class="form-group">
											<label>Foto :</label>
                                            <input type="file" name="foto" id="foto" class="form-control">
                                        </div>     
										<div class="form-group">
                                            <label>Username :</label>
                                            <input type="text" name="username" id="username" class="form-control" value="<?php echo $krow['username']; ?>"  required>
										</div>
										<div class="form-group">
                                            <label>Password :</label>
                                            <input type="password" name="password" id="password" class="form-control" value="<?php echo $krow['password']; ?>" required>
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
