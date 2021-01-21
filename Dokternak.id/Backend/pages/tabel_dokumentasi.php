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

        <title>Dokternak - Data Dokumentasi</title>

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
                            <h1 class="page-header">Data Dokumentasi</h1>
						</div>
						

					<?php

					//kode untuk menampilkan data pada tabel  
					error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
					ini_set('max_execution_time', 0);
					// date_default_timezone_set('Asia/Jakarta');
					include "koneksi.php";

						$id_dokumentasi = $_POST['id_dokumentasi'];;
						$judul = $_POST['judul'];
						$keterangan = $_POST['keterangan'];
						$dokumentasi = $_POST['dokumentasi'];
						

					//Code tombol tambah	
					if(isset($_POST['tambah'])){
						/* cek input id apakah sudah ada id yang digunakan */
						$pilih="select * from dokumentasi where id_dokumentasi='$id_dokumentasi'";
						$cek=mysqli_query($koneksi, $pilih);
					
						$jumlah_data = mysqli_num_rows($cek);
						if ($jumlah_data >= 1 ) {
					
							echo "<script>alert(' Id Dokumentasi yang sama sudah digunakan, harap menggunakan Id yang berbeda.');
							header('location:../tabel_dokumentasi.php');</script>";
						}
						else{

							$lokasiDok = $_FILES['dokumentasi']['tmp_name'];
						
							if($lokasiDok==""){
								echo "<script>alert(' Anda harus memasukkan foto dokumentasi, silahkan ulangi input data.');
								header('location:../tabel_dokumentasi.php');</script>";
							}else{
								$ambilDok   = addslashes(file_get_contents($_FILES['dokumentasi']['tmp_name']));
								$sql = "INSERT INTO dokumentasi VALUES ('$id_dokumentasi','$judul','$keterangan','$ambilDok')";
								
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
						$lokasiDok = $_FILES['dokumentasi']['tmp_name'];
						
						if($lokasiDok==""){
							$sql = "UPDATE dokumentasi SET judul = '$judul', keterangan = '$keterangan' WHERE id_dokumentasi = '$id_dokumentasi'";
						}else{
							$ambilDok   = addslashes(file_get_contents($_FILES['dokumentasi']['tmp_name']));
							$sql = "UPDATE dokumentasi SET judul = '$judul', keterangan = '$keterangan', dokumentasi = '$ambilDok' WHERE id_dokumentasi = '$id_dokumentasi'";
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
						$sql = "DELETE FROM dokumentasi WHERE id_dokumentasi = '$id_dokumentasi'";
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
							$sql = "DELETE FROM dokumentasi WHERE id_dokumentasi IN (".implode(",", $pilih).")";
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
						<a href="./cetak/cetak_dokumentasi.php" target="_blank" class="btn btn-info">Cetak</a>
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
						<th>ID Dokumentasi</th>
						<th>Judul</th>
						<th>Keterangan</th>
						<th>Dokumentasi</th>
                        <th>Actions</th>

                    </tr>
                </thead>
                <tbody>
					<?php
					$i = 1;
					$ksql="SELECT * FROM dokumentasi";
					$khasil = mysqli_query($koneksi,$ksql);
					while($krow = mysqli_fetch_array($khasil))
					{
					?>

					<tr>
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox5" name="pilih[]" value="<?php echo $krow['id_dokumentasi']; ?>">
								<label for="checkbox5"></label>
							</span>
						</td>
						<td><?= $i ?></td>

						<!-- Code menampilkan data -->
						<td><?php echo $krow['id_dokumentasi']; ?></td>
						<td><?php echo $krow['judul']; ?></td>
						<td><?php echo $krow['keterangan']; ?></td>
						<td>
							<img src="foto/foto_dokumentasi.php?id_dokumentasi=<?php echo $krow['id_dokumentasi']; ?>"
											alt="<?php echo "Belum upload foto" ?>" height="100"></img>
						</td>

						<!-- Tombol Action -->
                        <td>
                            <a href="#editEmployeeModal<?php echo $krow['id_dokumentasi']; ?>" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                            <a href="#deleteEmployeeModal<?php echo $krow['id_dokumentasi']; ?>" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                        </td>
                    </tr>
					


					<!-- Edit Modal HTML -->
					<div id="editEmployeeModal<?php echo $krow['id_dokumentasi']; ?>" class="modal fade">
						<div class="modal-dialog">
							<div class="modal-content">
								<form role="form" method="POST" enctype="multipart/form-data">
									<input type="hidden" class="form-control" value="<?php echo $krow['id_dokumentasi']; ?>" name="id_dokumentasi" required>
									<div class="modal-header">
										<h4 class="modal-title">Edit</h4>
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
									</div>
									<div class="modal-body">
										<div class="form-group">
                                            <label>Judul :</label>
                                            <input type="text" name="judul" id="judul" class="form-control" value="<?php echo $krow['judul']; ?>" required>
                                        </div>
										<div class="form-group">
                                            <label>Keterangan :</label>
                                            <input type="text" name="keterangan" id="keterangan" class="form-control" value="<?php echo $krow['keterangan']; ?>" required>
										</div>
										<div class="form-group">
                                            <label>Dokumentasi :</label>
											<img src="foto/foto_dokumentasi.php?id_dokumentasi=<?php echo $krow['id_dokumentasi']; ?>"
											alt="<?php echo "Belum upload dokumentasi"; ?>" height="50"></img>
											<input type="file" name="dokumentasi" id="dokumentasi" class="form-control"> 
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
					<div id="deleteEmployeeModal<?php echo $krow['id_dokumentasi']; ?>" class="modal fade">
						<div class="modal-dialog">
							<div class="modal-content">
							<form method="post" action="">
								<input type="text" class="form-control" value="<?php echo $krow['id_dokumentasi']; ?>" name="id_dokumentasi" required>
									<div class="modal-header">
										<h4 class="modal-title">Delete</h4>
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
									</div>
									<div class="modal-body">
										<p>Apakah anda yakin ingin menghapus dokumentasi dengan id <?php echo $krow['id_dokumentasi']; ?>?</p>
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
                                            <label>ID Dokumentasi :</label>
                                            <input type="text" name="id_dokumentasi" id="id_dokumentasi" class="form-control" required>
                                        </div>
										<div class="form-group">
                                            <label>Judul :</label>
                                            <input type="text" name="judul" id="judul" class="form-control" required>
                                        </div>
										<div class="form-group">
                                            <label>Keterangan :</label>
                                            <input type="text" name="keterangan" id="keterangan" class="form-control" required>
                                        </div>
										<div class="form-group">
                                            <label>Dokumentasi :</label>
                                            <input type="file" name="dokumentasi" id="dokumentasi" class="form-control">
                                        </div>  
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
