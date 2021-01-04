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
                            <h1 class="page-header">Data Artikel</h1>
						</div>
						

					<?php

					//kode untuk menampilkan data pada tabel  
					error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
					ini_set('max_execution_time', 0);
					date_default_timezone_set('Asia/Jakarta');
					include "koneksi.php";
						$id_artikel = $_POST['id_artikel'];
						$id_kategori = $_POST['id_ktg'];
						$tanggal = $_POST['tanggal'];
						$nama_penulis = $_POST['nama_penulis'];
						$judul = $_POST['judul'];
						$isi = $_POST['isi'];
						$gambar = $_POST['gambar'];
						$sumber = $_POST['sumber'];
						

					//Code tombol tambah	
					if(isset($_POST['tambah'])){
						include "koneksi.php";
						/* cek input NIM apakah sudah ada nim yang digunakan */
						$pilih="select * from artikel, kategori_artikel where artikel.id_ktg=kategori_artikel.id_ktg and artikel.id_artikel='$id_artikel'";
						$cek=mysqli_query($koneksi, $pilih);
					
						$jumlah_data = mysqli_num_rows($cek);
						if ($jumlah_data >= 1 ) {
					
							echo "<script>alert(' Id artikel yang sama sudah digunakan');history.go(-1);</script>";
						}
						else{
							//tambah
							$gambar2   = addslashes(file_get_contents($_FILES['gambar']['tmp_name']));
							$sql = "INSERT INTO artikel VALUES ('','$id_kategori','$tanggal','$nama_penulis','$judul','$isi','$gambar2','$sumber')";
							if(mysqli_query($koneksi, $sql)){
								$nilaihasil = "Records inserted successfully.";
							} 
							else{
								echo "ERROR: Could not able to execute $sql. " . mysqli_error($koneksi);
							}
						}
					}

					// code tombol edit
					if(isset($_POST['edit'])){
						$cek_tabel = mysqli_query($koneksi, "SELECT * FROM artikel WHERE id_artikel='$id_artikel'");
						while ($cek_gambar = mysqli_fetch_array($cek_tabel)) {
							$fotoDatabase = $cek_gambar['gambar'];
						}
						$lokasiFoto = $_FILES['gambar']['tmp_name'];
						//edit
						if (!isset($fotoDatabase)){
							if (!$lokasiFoto==""){
							$gambar   = addslashes(file_get_contents($_FILES['gambar']['tmp_name']));
							$sql = "UPDATE artikel SET id_ktg = '$id_kategori', tanggal = '$tanggal', nama_penulis = '$nama_penulis', judul = '$judul', isi = '$isi', gambar = '$gambar', sumber = '$sumber' WHERE id_artikel = '$id_artikel'";
								if(mysqli_query($koneksi, $sql)){
									$nilaihasil = "Records updated successfully.";
								} 
								else{
									echo "ERROR: Could not able to execute $sql. " . mysqli_error($koneksi);
								}
							}else{
								?><script> alert ("Masukkan Gambar terlebih dahulu"); </script><?php
							}
						}
						elseif(isset($fotoDatabase)){
							$gambar   = addslashes(file_get_contents($_FILES['gambar']['tmp_name']));
							$sql = "UPDATE artikel SET id_ktg = '$id_kategori', tanggal = '$tanggal', nama_penulis = '$nama_penulis', judul = '$judul', isi = '$isi', gambar = '$gambar', sumber = '$sumber' WHERE id_artikel = '$id_artikel'";
								if(mysqli_query($koneksi, $sql)){
									$nilaihasil = "Records updated successfully.";
								} 
								else{
									echo "ERROR: Could not able to execute $sql. " . mysqli_error($koneksi);
								}
						}else{
								?><script> alert ("Anda harus mengupload foto/sertifikat"); </script><?php
						}
					}

					//code delete per item
					if(isset($_POST['delete'])){
						//delete
						$sql = "DELETE FROM artikel WHERE id_artikel = '$id_artikel'";
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
							$sql = "DELETE FROM artikel WHERE id_artikel IN (".implode(",", $pilih).")";
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
                        <th>ID artikel</th>
						<th>ID Kategori</th>
						<th>Tanggal</th>
						<th>Nama Penulis</th>
						<th>Judul</th>
						<th>Isi</th>
						<th>Gambar</th>
						<th>Sumber</th>
						<th>Actions</th>
                    </tr>
                </thead>
                <tbody>
					<?php
					$i = 1;
					$ksql="SELECT * FROM artikel";
					$khasil = mysqli_query($koneksi,$ksql);
					while($krow = mysqli_fetch_array($khasil))
					{
					?>

					<tr>
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox5" name="pilih[]" value="<?php echo $krow['id_artikel']; ?>">
								<label for="checkbox5"></label>
							</span>
						</td>
						<td><?= $i ?></td>

						<!-- Code menampilkan data -->
						<td><?php echo $krow['id_artikel']; ?></td>
						<td><?php echo $krow['id_ktg']; ?></td>
						<td><?php echo $krow['tanggal']; ?></td>
						<td><?php echo $krow['nama_penulis']; ?></td>
						<td><?php echo $krow['judul']; ?></td>
						<td><?php echo $krow['isi']; ?></td>
						<td>
							<img src="foto/foto_artikel.php?id_artikel=<?php echo $krow['id_artikel']; ?>"
											alt="<?php echo $krow['nama']; ?>" height="200"></img>
						</td>
						<td><?php echo $krow['sumber']; ?></td>

						<!-- Tombol Action -->
                        <td>
                            <a href="#editEmployeeModal<?php echo $krow['id_artikel']; ?>" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                            <a href="#deleteEmployeeModal<?php echo $krow['id_artikel']; ?>" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                        </td>
                    </tr>
					


					<!-- Edit Modal HTML -->
					<div id="editEmployeeModal<?php echo $krow['id_artikel']; ?>" class="modal fade">
						<div class="modal-dialog">
							<div class="modal-content">
								<form role="form" method="POST">
									<input type="hidden" class="form-control" value="<?php echo $krow['id_artikel']; ?>" name="id_artikel" required>
									<div class="modal-header">
										<h4 class="modal-title">Edit</h4>
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
									</div>
									<div class="modal-body">
									<div class="form-group">
										<label>Kategori Hewan</label>
										<select name="id_ktg" class="form-control" id="default-select">
										<option disabled selected> Pilih </option>
										<?php 
												include "koneksi.php";
												$query_kat = mysqli_query($koneksi,"SELECT * FROM kategori_artikel");
													while($data = mysqli_fetch_array($query_kat))
												{ ?>
												<option value="<?php echo $data['id_ktg']?>" <?php if($data['id_ktg']==$krow['id_ktg']) echo 'selected' ?>><?=$data['kategori_artikel']?></option> 
										<?php } ?>
										</select>
									</div>
										<div class="form-group">
                                            <label>Tanggal :</label><br>
                                            <input type="date" name="tanggal" id="tanggal" class="form-control" value="<?php echo $krow['tanggal']; ?>" >
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Penulis :</label>
                                            <input type="text" name="nama_penulis" id="nama_penulis" class="form-control" value="<?php echo $krow['nama_penulis']; ?>" >
                                        </div>

                                        <div class="form-group">
                                            <label>Judul :</label>
                                            <input type="text" name="judul" id="judul" class="form-control" value="<?php echo $krow['judul']; ?>"  required>
										</div>
										<div class="form-group">
											<label>Isi :</label>
                    						<textarea class="ckeditor" name="isi" id="ckedtor"><?php echo $krow['isi']; ?></textarea>
										</div>
										<div class="form-group">
											<label>Gambar:</label>
											<img src="foto/foto_artikel.php?id_artikel=<?php echo $krow['id_artikel']; ?>"
											alt="<?php echo "Belum upload foto"; ?>" height="100"></img>
                                            <input type="file" name="gambar" id="gambar" class="form-control">
										</div>     
										<div class="form-group">
                                            <label>Sumber :</label>
                                            <input type="text" name="sumber" id="sumber" class="form-control" value="<?php echo $krow['sumber']; ?>" required>
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
					<div id="deleteEmployeeModal<?php echo $krow['id_artikel']; ?>" class="modal fade">
						<div class="modal-dialog">
							<div class="modal-content">
							<form method="post" action="">
								<input type="text" class="form-control" value="<?php echo $krow['id_artikel']; ?>" name="id_artikel" required>
									<div class="modal-header">
										<h4 class="modal-title">Delete</h4>
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
									</div>
									<div class="modal-body">
										<p>Are you sure you want to delete these Records?</p>
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
							<form role="form" method="POST" action="">
									<div class="modal-header">
										<h4 class="modal-title">Tambah Data</h4>
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
									</div>
									<div class="modal-body">
									<div class="form-group">
										<label>Kategori Hewan</label><br>
										<select name="id_ktg" class="form-control" id="default-select">
										<option disabled selected> Pilih </option>
											<?php 
												include "koneksi.php";
												$query_kat = mysqli_query($koneksi,"SELECT * FROM kategori_artikel");
													while($data = mysqli_fetch_array($query_kat))
												{ ?>
													<option value="<?php echo $data['id_ktg']?>"><?=$data['kategori_artikel']?></option> 
												<?php } ?>
										</select><br>
									</div>
									<div class="form-group">
                                            <label>Tanggal :</label>
                                            <input type="date" name="tanggal" id="tanggal" class="form-control" >
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Penulis :</label>
                                            <input type="text" name="nama_penulis" id="nama_penulis" class="form-control" >
                                        </div>

                                        <div class="form-group">
                                            <label>Judul :</label>
                                            <input type="text" name="judul" id="judul" class="form-control"   required>
										</div>
										<div class="form-group">
											<label>Isi :</label>
											<textarea class="ckeditor" name="isi" id="ckedtor"></textarea>
										</div>
										<div class="form-group">
											<label>Gambar:</label>
                                            <input type="file" name="gambar" id="gambar" class="form-control">
										</div>     
										<div class="form-group">
                                            <label>Sumber :</label>
                                            <input type="text" name="sumber" id="sumber" class="form-control" required>
										</div>
												
												<div class="modal-footer">
													<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
													<input type="submit" class="btn btn-info" value="Save" name="tambah">
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

		<!-- Link Js CkEditor -->
        <script type="text/javascript" src="../assets/ckeditor/ckeditor.js"></script>
    </body>
</html>
