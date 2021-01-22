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

        <title>Dokternak - Data User Dokter</title>

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
                            <h1 class="page-header">Data User - Dokter</h1>
						</div>
					<?php
					//kode untuk menampilkan data pada tabel  
					error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
					ini_set('max_execution_time', 0);
					date_default_timezone_set('Asia/Jakarta');
					include "koneksi.php";
						$id_dokteruser = $_POST['id_dokteruser'];
						$id_dokter = $_POST['id_dokter'];
						$nama = $_POST['nama'];
						$id_user = $_POST['id_user'];
						$username = $_POST['username'];
						$password = $_POST['password'];
						$id_role = 2;
						

					//Code tombol tambah	
					if(isset($_POST['tambah'])){
						/* cek input NIM apakah sudah ada nim yang digunakan */
						$pilih="select * from dokter_user where id_dokteruser='$id_dokteruser'";
						$cek=mysqli_query($koneksi, $pilih);
					
						$jumlah_data = mysqli_num_rows($cek);
						if ($jumlah_data >= 1 ) {
					
							echo "<script>alert(' Id User yang sama sudah digunakan');history.go(-1);</script>";
						}
						else{
							$ambildata1=mysqli_query($koneksi, "SELECT * FROM dokter where id_dokter= '$id_dokter'");
							$row1 = mysqli_fetch_array($ambildata1);
							$usrname = $row1['username'];
							$pass = $row1['password'];

							// $sql = "INSERT INTO user VALUES ('','$username','$password','$id_role')";
							$sql = "INSERT INTO user VALUES ('','$usrname','$pass','$id_role')";
							mysqli_query($koneksi,$sql);
							$ambilfoto   = addslashes(file_get_contents($_FILES['foto']['tmp_name']));
							//cek keberhasilan
							if(mysqli_affected_rows($koneksi) > 0){
							  $data = "";
							  $ambildata=mysqli_query($koneksi, "SELECT * FROM user order by id_user DESC LIMIT 1");
							  $row = mysqli_fetch_array($ambildata);
							  $id = $row['id_user'];
							$sql = "INSERT INTO dokter_user VALUES ('','$id_dokter','$id')";
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
							$sql = "UPDATE dokter_user SET id_dokter = '$id_dokter' WHERE id_dokteruser = '$id_dokteruser'";
							include 'koneksi.php';
							if(mysqli_query($koneksi, $sql)){
								$ambildata=mysqli_query($koneksi, "SELECT * FROM dokter_user where id_dokteruser = '$id_dokteruser'");
								$row = mysqli_fetch_array($ambildata);
								$id = $row['id_user'];
								$sql1 = "UPDATE user SET  username = '$username', password = '$password', id_role = '$id_role' WHERE id_user = '$id'";
								if(mysqli_query($koneksi, $sql1)){
									$ambildata1=mysqli_query($koneksi, "SELECT * FROM dokter where id_dokter= '$id_dokter'");
									$row1 = mysqli_fetch_array($ambildata1);
									$ids = $row1['id_dokter'];
									$sql2 = "UPDATE dokter SET username = '$username', password = '$password' WHERE id_dokter = '$ids'";
									if(mysqli_query($koneksi, $sql2)){
									$nilaihasil = "Records updated successfully.";
									}else{
										echo "ERROR: Could not able to execute $sql2. " . mysqli_error($koneksi);
									}
								}else{
									echo "ERROR: Could not able to execute $sql1. " . mysqli_error($koneksi);
								}
							} 
							else{
								echo "ERROR: Could not able to execute $sql. " . mysqli_error($koneksi);
							}
					}

					//code delete per item
					if(isset($_POST['delete'])){
						//delete
							$sql = "DELETE FROM dokter_user WHERE  id_dokteruser = '$id_dokteruser'";
							$ambildata=mysqli_query($koneksi, "SELECT * FROM dokter_user WHERE  id_dokteruser = '$id_dokteruser'");
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
							$sql = "DELETE FROM dokter_user WHERE id_dokteruser IN (".implode(",", $pilih).")";
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
						<a href="cetak/cetak_userdokter.php" target="_blank" class="btn btn-info">Cetak</a>
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
						<th>ID Dokteruser</th>
						<th>Nama Dokter</th>
						<th>Username</th>
						<th>Password</th>
						<th>Actions</th>
                    </tr>
                </thead>
                <tbody>
					<?php
					$i = 1;
					$ksql="SELECT * FROM dokter_user, dokter, user  where  dokter_user.id_user=user.id_user and  dokter_user.id_dokter=dokter.id_dokter  order by  dokter_user.id_dokteruser";
					$khasil = mysqli_query($koneksi,$ksql);
					while($krow = mysqli_fetch_array($khasil))
					{
					?>

					<tr>
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox5" name="pilih[]" value="<?php echo $krow['id_dokteruser']; ?>">
								<label for="checkbox5"></label>
							</span>
						</td>
						<td><?= $i ?></td>

						<!-- Code menampilkan data -->
						<td><?php echo $krow['id_dokteruser']; ?></td>
						<td><?php echo $krow['nama']; ?></td>
						<td><?php echo $krow['username']; ?></td>
						<td><?php echo $krow['password']; ?></td>

						<!-- Tombol Action -->
                        <td>
                            <a href="#editEmployeeModal<?php echo $krow['id_dokteruser']; ?>" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                            <a href="#deleteEmployeeModal<?php echo $krow['id_dokteruser']; ?>" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                        </td>
                    </tr>
					


					<!-- Edit Modal HTML -->
					<div id="editEmployeeModal<?php echo $krow['id_dokteruser']; ?>" class="modal fade">
						<div class="modal-dialog">
							<div class="modal-content">
								<form role="form" method="POST" enctype="multipart/form-data">
									<input type="hidden" class="form-control" value="<?php echo $krow['id_dokteruser']; ?>" name="id_dokteruser" required>
									<div class="modal-header">
										<h4 class="modal-title">Edit</h4>
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
									</div>
									<div class="modal-body">
									<div class="form-group">
                                            <label>ID Jabatan :</label>
											<select name="id_dokter" class="form-control" id="default-select">
												<option disabled selected> Pilih </option>
												<?php 
												include "koneksi.php";
												$sql="SELECT * FROM dokter";
												$jab = mysqli_query($koneksi,$sql);
												while($data = mysqli_fetch_array($jab))
												{ ?>
												<option value="<?=$data['id_dokter']?>"  <?php if($data['id_dokter']==$krow['id_dokter']) echo 'selected' ?>><?=$data['nama']?></option> 
												<?php } ?>
											</select><br>
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
					<div id="deleteEmployeeModal<?php echo $krow['id_dokteruser']; ?>" class="modal fade">
						<div class="modal-dialog">
							<div class="modal-content">
							<form method="post" action="">
								<input type="text" class="form-control" value="<?php echo $krow['id_dokteruser']; ?>" name="id_dokteruser" required>
									<div class="modal-header">
										<h4 class="modal-title">Delete</h4>
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
									</div>
									<div class="modal-body">
										<p>Are you sure you want to delete these Records <?php echo $krow['nama']; ?>?</p>
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
							<form role="form" method="POST" action="" enctype="multipart/form-data">
									<div class="modal-header">
										<h4 class="modal-title">Tambah Data</h4>
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
									</div>
									<div class="modal-body">
									<div class="form-group">
                                            <label>Nama Dokter:</label>
											<select name="id_dokter" class="form-control" id="default-select">
												<option disabled selected> Pilih </option>
												<?php 
												include "koneksi.php";
												$sql="SELECT * FROM dokter";
												$jab = mysqli_query($koneksi,$sql);
												while($data = mysqli_fetch_array($jab))
												{ ?>
												<option value="<?=$data['id_dokter']?>"><?=$data['nama']?></option> 
												<?php } ?>
											</select><br>
										</div>  
                                        <!-- <div class="form-group">
                                            <label>Username :</label>
                                            <input type="text" name="username" id="username" class="form-control" value="<?php echo $krow['username']; ?>"  required>
										</div>
										<div class="form-group">
                                            <label>Password :</label>
                                            <input type="password" name="password" id="password" class="form-control" value="<?php echo $krow['password']; ?>" required>
										</div> -->
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
				<h3 class="page-header">Data Dokter (Baru) / Belum Terverifikasi</h3>

				<table  class="table table-striped table-hover" >
					<th>No</th>
					<th>Nama</th>
						<?php
						$i =1;
							include "koneksi.php";
							$sql="SELECT * FROM dokter_user RIGHT JOIN dokter ON dokter_user.id_dokter=dokter.id_dokter WHERE dokter_user.id_dokter IS NULL";
							$jab = mysqli_query($koneksi,$sql);
							while($data = mysqli_fetch_array($jab))
							{ ?>
							<tr>
							<td><?= $i?> </td>
							<td><?=$data['nama']?> </td>
							</tr>
							<?php
							$i++;
						} ?>
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
