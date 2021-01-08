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

		<!-- CSS here -->
		<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
      <link rel="stylesheet" href="../assets/css/slicknav.css">
      <link rel="stylesheet" href="../assets/css/price_rangs.css">
      <link rel="stylesheet" href="../assets/css/animate.min.css">
      <link rel="stylesheet" href="../assets/css/magnific-popup.css">
      <link rel="stylesheet" href="../assets/css/fontawesome-all.min.css">
      <link rel="stylesheet" href="../assets/css/themify-icons.css">
      <link rel="stylesheet" href="../assets/css/slick.css">
      <link rel="stylesheet" href="../assets/css/nice-select.css">
      <link rel="stylesheet" href="../assets/css/style.css">
      <link rel="stylesheet" href="../assets/css/responsive.css">

        <title>Dokter Data Obat</title>

        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
		<link rel="stylesheet" href="/resources/demos/style.css">
		<!-- Custom CSS Table -->
        <link href="../../backend/css/style2.css" rel="stylesheet">
       

        <!-- Bootstrap Core CSS -->
        <link href="../../backend/css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="../../backend/css/metisMenu.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="../../backend/css/startmin.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="../../backend/css/font-awesome.min.css" rel="stylesheet" type="text/css">

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
	<navbar>
	<?php include "../modal/login.php"; ?>
    <?php include "../modal/login.php"; ?>
    <?php include "../modal/ubah_password.php"; ?>
    <?php
        include 'navbar.php';
    ?>
			<div class="table-wrapper">
            <div class="table-title">
                <!-- <div class="row">
                    <div class="col-sm-6">
					<form method="POST" action="cetak/cetak_datarekammedik.php" target="_blank">
									<div class="form-group">
                                            <label>Tanggal Awal:</label>
                                            <input type="date" name="tanggal_awal" id="tanggal_awal" class="form-control" required>
                                        </div>
										<div class="form-group">
                                            <label>Tanggal Akhir:</label>
                                            <input type="date" name="tanggal_akhir" id="tanggal_akhir" class="form-control" required>
                                        </div>
										<input type="submit" class="btn btn-info" value="Cetak" name="submit">
					</form>
					</div> -->
    </navbar>
<section>
<div class="container">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Data Rekam Medik</h1>
						</div>
					<?php

					//kode untuk menampilkan data pada tabel  
					error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
					ini_set('max_execution_time', 0);
					date_default_timezone_set('Asia/Jakarta');
                    include "../koneksi.php";

						$id_rmd = $_POST['id_rmd'];
						$nama_hewan = $_POST['nama_hewan'];
                        $nama_pemilik = $_POST['nama_pemilik'];
                        $kategori = $_POST['kategori'];
						$keluhan = $_POST['keluhan'];
						$tanggal = $_POST['tanggal'];
                        $alamat = $_POST['alamat'];
                        $kategori = $_POST['kategori'];
                        $diagnosa = $_POST['diagnosa'];
						$pelayanan = $_POST['pelayanan'];
						

					//Code tombol tambah	
					if(isset($_POST['tambah'])){
						/* cek input NIM apakah sudah ada nim yang digunakan */
						$pilih="select * from rekam_medik where id_rmd='$id_rmd'";
						$cek=mysqli_query($koneksi, $pilih);
					
						$jumlah_data = mysqli_num_rows($cek);
						if ($jumlah_data >= 1 ) {
					
							echo "<script>alert(' Id obat yang sama sudah digunakan');history.go(-1);</script>";
						}
						else{
							//tambah
							$sql = "INSERT INTO rekam_medik VALUES 
                            (null,'$tanggal', '$kategori','$nama_hewan','$nama_pemilik','$alamat','$keluhan','$diagnosa','$pelayanan')";
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
						//edit
						$sql = "UPDATE rekam_medik SET nama_hewan =
                         '$nama_hewan', nama_pemilik = '$nama_pemilik', keluhan = '$keluhan', tanggal = '$tanggal', alamat = '$alamat', diagnosa = '$diagnosa', pelayanan = '$pelayanan', kategori = '$kategori' WHERE id_rmd = '$id_rmd'";
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
						$sql = "DELETE FROM rekam_medik WHERE id_rmd = '$id_rmd'";
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
							$sql = "DELETE FROM rekam_medik WHERE id_rmd IN (".implode(",", $pilih).")";
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

<div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
					<form method="POST" action="cetak/cetak_datarekammedik.php" target="_blank">
									<div class="form-group">
                                            <label>Tanggal Awal:</label>
                                            <input type="date" name="tanggal_awal" id="tanggal_awal" class="form-control" required>
                                        </div>
										<div class="form-group">
                                            <label>Tanggal Akhir:</label>
                                            <input type="date" name="tanggal_akhir" id="tanggal_akhir" class="form-control" required>
                                        </div>
										<input type="submit" class="btn btn-info" value="Cetak" name="submit">
					</form>
					</div>

<div class="col-lg-12">
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
						<!-- <th>No</th> -->
                        <th>ID Rmd</th>
                        <th>Tanggal</th>
                        <th>Kategori Hewan </th>
						<th>Nama Hewan</th>
						<th>Nama Pemilik</th>
                        <th>Alamat</th>
						<th>Keluhan</th>
                        <th>Diagnosa</th>
                        <th>Pelayanan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
					<?php
					// $i = 1;
					$ksql="SELECT * FROM rekam_medik";
					$khasil = mysqli_query($koneksi,$ksql);
					while($krow = mysqli_fetch_array($khasil))
					{
					?>

					<tr>
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox5" name="pilih[]" value="<?php echo $krow['id_rmd']; ?>">
								<label for="checkbox5"></label>
							</span>
						</td>
						<!-- <td><?= $i ?></td> -->

						<!-- Code menampilkan data -->
						<td><?php echo $krow['id_rmd']; ?></td>
                        <td><?php echo $krow['tanggal']; ?></td>
                        <td><?php echo $krow['kategori']; ?></td>
						<td><?php echo $krow['nama_hewan']; ?></td>
						<td><?php echo $krow['nama_pemilik']; ?></td>
						<td><?php echo $krow['keluhan']; ?></td>
						<td><?php echo $krow['alamat']; ?></td>
                        <td><?php echo $krow['diagnosa']; ?></td>
                        <td><?php echo $krow['pelayanan']; ?></td>
					
						<!-- Tombol Action -->
                        <td>
                            <a href="#editEmployeeModal<?php echo $krow['id_rmd']; ?>" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                            <a href="#deleteEmployeeModal<?php echo $krow['id_rmd']; ?>" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                        </td>
                    </tr>
					


					<!-- Edit Modal HTML -->
					<div id="editEmployeeModal<?php echo $krow['id_rmd']; ?>" class="modal fade">
						<div class="modal-dialog">
							<div class="modal-content">
								<form role="form" method="POST">
									<input type="hidden" class="form-control" value="<?php echo $krow['id_rmd']; ?>" name="id_rmd" required>
									<div class="modal-header">
										<h4 class="modal-title">Edit</h4>
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
									</div>

								<div class="modal-body">
                                    <div class="form-group">
                                            <label>Tanggal :</label>
                                            <input type="date" name="tanggal" id="tanggal" class="form-control" value="<?php echo $krow['tanggal']; ?>" required >
										</div> 
                                        <div class="form-group">
                                            <label>Kategori Hewan :</label>
                                            <input type="text" name="kategori" id="kategori" class="form-control" value="<?php echo $krow['kategori']; ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Hewan :</label>
                                            <input type="text" name="nama_hewan" id="nama_hewan" class="form-control" value="<?php echo $krow['nama_hewan']; ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Pemilik :</label>
                                            <input type="text" name="nama_pemilik" id="nama_pemilik" class="form-control" value="<?php echo $krow['nama_pemilik']; ?>"  required>
										</div>
                                        <div class="form-group">
                                            <label>Alamat :</label>
                                            <input type="text" name="alamat" id="alamat" class="form-control" value="<?php echo $krow['alamat']; ?>" required>
										</div>
										<div class="form-group">
                                            <label>Keluhan :</label>
                                            <input type="text" name="keluhan" id="keluhan" class="form-control" value="<?php echo $krow['keluhan']; ?>" required>
										</div>
                                        <div class="form-group">
                                            <label>Diagnosa :</label>
                                            <input type="text" name="diagnosa" id="diagnosa" class="form-control" value="<?php echo $krow['diagnosa']; ?>"  required>
										</div>
                                        <div class="form-group">
                                            <label>Pelayanan :</label>
                                            <input type="text" name="pelayanan" id="pelayanan" class="form-control" value="<?php echo $krow['pelayanan']; ?>"  required>
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
					<div id="deleteEmployeeModal<?php echo $krow['id_rmd']; ?>" class="modal fade">
						<div class="modal-dialog">
							<div class="modal-content">
							<form method="post" action="">
								<input type="text" class="form-control" value="<?php echo $krow['id_rmd']; ?>" name="id_rmd" required>
									<div class="modal-header">
										<h4 class="modal-title">Delete</h4>
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
									</div>
									<div class="modal-body">
										<p>Apa benar ingin menghapus data <?php echo $krow['nama_hewan']; ?>?</p>
										<p class="text-warning"><small>Data akan dihapus permanen</small></p>
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
</div>
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
                                            <label>Tanggal :</label>
                                            <input type="date" name="tanggal" id="tanggal" class="form-control" required>
										</div> 
                                        <div class="wrapper">
                                            <div class="tabs-2">
                                                <div class="tab">
                                                <label>Kategori : </label> <br>
                                                <input type="radio" name="kategori" id="tab-l" class="tab-switch" value="Hewan Ternak" selected>
                                                <label for="tab-l" class="tab-label">Hewan Ternak</label>
                                                </div>
                                                <div class="tab">
                                                <input type="radio" name="kategori" id="tab-p" class="tab-switch" value="Hewan Kesayangan / Pets" selected>
                                                <label for="tab-p" class="tab-label">Hewan Kesayangan</label>
                                                </div>
                                            </div>
                                            </div>
                                        <div class="form-group">
                                            <label>Nama Hewan :</label>
                                            <input type="text" name="nama_hewan" id="nama_hewan" class="form-control" required >
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Pemilik :</label>
                                            <input type="text" name="nama_pemilik" id="nama_pemilik" class="form-control" required>
										</div>
                                        <div class="form-group">
                                            <label>Alamat :</label>
                                            <textarea name="alamat" id="alamat" class="form-control" required></textarea>
										</div>
										<div class="form-group">
                                            <label>Keluhan :</label>
                                            <input type="text" name="keluhan" id="keluhan" class="form-control" required>
										</div>
                                        <div class="form-group">
                                            <label>Diagnosa :</label>
                                            <textarea name="diagnosa" id="diagnosa" class="form-control" required></textarea>
										</div>
                                        <div class="form-group">
                                            <label>Pelayanan :</label>
                                            <textarea name="pelayanan" id="pelayanan" class="form-control" required></textarea>
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
				
				</table>
				</div>
				</div>
                </div>
                <!-- /.container-fluid -->
		</div>
</section>

        <!-- jQuery -->
        <script src="../../backend/js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../../backend/js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="../../backend/js/metisMenu.min.js"></script>

        <!-- Custom Theme JavaScript -->
		<script src="../../backend/js/startmin.js"></script>
		
		<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
		<script>
			$(document).ready(function(){
				$('#tabel-data').DataTable();
			});
		</script>
		 <!-- JS here -->
		 
	    <!-- Jquery Mobile Menu -->
        <script src="../assets/js/jquery.slicknav.min.js"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="../assets/js/owl.carousel.min.js"></script>
        <script src="../assets/js/slick.min.js"></script>
        <script src="../assets/js/price_rangs.js"></script>
        
		<!-- One Page, Animated-HeadLin -->
        <script src="../assets/js/wow.min.js"></script>
		<script src="../assets/js/animated.headline.js"></script>
        <script src="../assets/js/jquery.magnific-popup.js"></script>

		<!-- Scrollup, nice-select, sticky -->
        <script src="../assets/js/jquery.scrollUp.min.js"></script>
        <script src="../assets/js/jquery.nice-select.min.js"></script>
		<script src="../assets/js/jquery.sticky.js"></script>
        
		<!-- Jquery Plugins, main Jquery -->	
        <script src="../assets/js/plugins.js"></script>
        <script src="../assets/js/main.js"></script>
        </body>
    </body>
	<footer>
            <?php 
                include 'footer.php';
            ?>
        </footer>
</html>
