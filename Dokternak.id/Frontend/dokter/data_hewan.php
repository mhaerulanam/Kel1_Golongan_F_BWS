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

        <title>Dokter Data Hewan</title>

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
    </navbar>
<section>
<div class="container">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Data Hewan</h1>
						</div>
					<?php

					//kode untuk menampilkan data pada tabel  
					error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
					ini_set('max_execution_time', 0);
					date_default_timezone_set('Asia/Jakarta');
					include "../koneksi.php";
					$kode = date('His');
					$id_dok = "DOC$kode";
					
					$id_konsultasi= $_POST['id_konsultasi'];
					$nama_hewan = $_POST['nama_hewan'];
					$id_peternak= $_POST['id_peternak'];
					$id_kategori= $_POST['id_kategori'];
					$namadepan_peternak = $_POST['namadepan_peternak'];
					$namabelakang_peternak = $_POST['namabelakang_peternak'];
					$jenis_hewan = $_POST['kategori_artikel'];
					$kategori_hewan = $_POST["kategori_hewan"];
					$id_ktg= $_POST['id_ktg'];
						// $keterangan = $_POST['keterangan'];
						
						

					//Code tombol tambah	
					// if(isset($_POST['tambah'])){
					// 	/* cek input NIM apakah sudah ada nim yang digunakan */
					// 	$pilih="select * from konsultasi, kategori_artikel where konsultasi.id_ktg=kategori_artikel.id_ktg and konsultasi.id_konsultasi='$id_konsultasi'";
					// 	$cek=mysqli_query($koneksi, $pilih);
					
					// 	$jumlah_data = mysqli_num_rows($cek);
					// 	if ($jumlah_data >= 1 ) {
					
					// 		echo "<script>alert(' Id Konsultasi yang sama sudah digunakan');history.go(-1);</script>";
					// 	}
					// 	else{
					// 		$kode = date('His'); //Hour,minutes,second

					// 		$id_konsultasi  = "HEW$kode";

					// 		//tambah
					// 		$sql = "INSERT INTO konsultasi VALUES ('$id_konsultasi','$id_peternak','$id_kategori','$id_ktg',$nama_hewan)";
					// 		if(mysqli_query($koneksi, $sql)){
					// 			$nilaihasil = "Records inserted successfully.";
					// 		} 
					// 		else{
					// 			echo "ERROR: Could not able to execute $sql. " . mysqli_error($koneksi);
					// 		}
					// 	}
					// }

					// code tombol edit
					if(isset($_POST['edit'])){
						//edit
						$sql = "UPDATE konsultasi SET  id_kategori = '$id_kategori' , id_ktg = '$id_ktg' , nama_hewan = '$nama_hewan' WHERE id_konsultasi = '$id_konsultasi'";
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
						$sql = "DELETE FROM konsultasi WHERE id_konsultasi = '$id_konsultasi'";
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
						$sql = "DELETE FROM konsultasi WHERE id_konsultasi IN (".implode(",", $pilih).")";
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


					
<div class="col-lg-12">
<form method="post" action="">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
					</div>
					<div class="col-sm-6">
						<!-- <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal">++ Tambah Data	</a> -->
						<a href="cetak/cetak_datahewan.php" target="_blank" class="btn btn-info">Cetak</a>
						<!-- <input type="submit" name="deleteall" value="Delete Selected" class="btn btn-danger" onclick="return confirm('Are you sure delete selected records?')"> -->
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
                        <th>Pemilik</th>
						<th>Nama Hewan</th>
						<th>Jenis Hewan</th>
						<th>Kategori Hewan</th>
						<th>Actions</th>
                    </tr>
                </thead>
                <tbody>
					<?php
					$i = 1;
					$ksql="SELECT * FROM konsultasi INNER JOIN peternak ON konsultasi.id_peternak = peternak.id_peternak INNER JOIN kategori_artikel ON konsultasi.id_ktg = kategori_artikel.id_ktg INNER JOIN kategori_hewan ON konsultasi.id_kategori = kategori_hewan.id_kategori ";
					$khasil = mysqli_query($koneksi,$ksql);
					while($krow = mysqli_fetch_array($khasil))
					{
					?>

					<tr>
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox5" name="pilih[]" value="<?php echo $krow['id_konsultasi']; ?>">
								<label for="checkbox5"></label>
							</span>
						</td>
						<!-- <td><?php echo $i ?></td> -->

						<!-- Code menampilkan data -->
						<td>
						
						<?php echo $krow['namadepan_peternak'];
						?>
						</td>
						<td><?php echo $krow['nama_hewan']; ?></td>
						<td><?php echo $krow['kategori_artikel']; ?></td>
						<td><?php echo $krow['kategori_hewan']; ?></td>
					
						<!-- Tombol Action -->
                        <td>
                            <a href="#editEmployeeModal<?php echo $krow['id_konsultasi']; ?>" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                            <!-- <a href="#deleteEmployeeModal<?php echo $krow['id_konsultasi']; ?>" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a> -->
                        </td>
                    </tr>
					


					<!-- Edit Modal HTML -->
					<div id="editEmployeeModal<?php echo $krow['id_konsultasi']; ?>" class="modal fade">
						<div class="modal-dialog">
							<div class="modal-content">
								<form role="form" method="POST">
									<input type="hidden" class="form-control" value="<?php echo $krow['id_konsultasi']; ?>" name="id_konsultasi" required>
									<div class="modal-header">
										<h4 class="modal-title">Edit</h4>
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
									</div>
									<div class="modal-body">
									<div class="form-group">
                                            <label>Kategori :</label>
                                            <select name="id_kategori" class="form-control" id="default-select">
												<option disabled selected> Pilih </option>
												<?php 
												include "koneksi.php";
												$sql="SELECT * FROM kategori_hewan";
												$dok = mysqli_query($koneksi,$sql);
												while($data = mysqli_fetch_array($dok))
												{ ?>
												<option value="<?php echo $data['id_kategori']?>" <?php if($data['id_kategori']==$krow['id_kategori']) echo 'selected' ?>><?=$data['kategori_hewan']?></option> 
												<?php } ?>
											</select><br>
                                        </div>
									<div class="mt-30">
                                            <label>Jenis Hewan :</label>
                                            <select name="id_ktg" class="form-control" id="default-select">
												<option disabled selected> Pilih </option>
												<?php 
												include "koneksi.php";
												$sql="SELECT * FROM kategori_artikel";
												$dok = mysqli_query($koneksi,$sql);
												while($data = mysqli_fetch_array($dok))
												{ ?>
												<option value="<?php echo $data['id_ktg']?>" <?php if($data['id_ktg']==$krow['id_ktg']) echo 'selected' ?>><?=$data['kategori_artikel']?></option> 
												<?php } ?>
											</select><br>
                                        </div>
                                    <div class="form-group">
									<div class="form-group">
                                            <label>Nama Hewan :</label>
                                            <input type="text" name="nama_hewan" id="nama_hewan" class="form-control" value="<?php echo $krow['nama_hewan']; ?>" >
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
					<!-- <div id="deleteEmployeeModal<?php echo $krow['id_konsultasi']; ?>" class="modal fade">
						<div class="modal-dialog">
							<div class="modal-content">
							<form method="post" action="">
								<input type="text" class="form-control" value="<?php echo $krow['id_konsultasi']; ?>" name="id_konsultasi" required>
									<div class="modal-header">
										<h4 class="modal-title">Delete</h4>
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
									</div>
									<div class="modal-body">
										<p>Apakah anda yakin ingin menghapus data Hewan <?php echo $krow['id_hewan']; ?> 
										<p class="text-warning"><small>Data yang terhapus tidak dapat dikembalikan.</small></p>
									</div>
									<div class="modal-footer">
										<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
										<input type="submit" class="btn btn-danger" value="Delete" name="delete">
									</div>
								</form>
							</div>
						</div>
					</div> -->
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
				<!-- <div id="addEmployeeModal" class="modal fade">
						<div class="modal-dialog">
							<div class="modal-content">
							<form role="form" method="POST" action="">
									<div class="modal-header">
										<h4 class="modal-title">Tambah Data</h4>
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
									</div>
									<div class="modal-body">
									<div class="modal-body">
		
                            <div class="form-group">
										<label>Kategori Hewan</label><br>
										<select name="id_kategori" class="form-control" id="default-select">
										<option disabled selected> Pilih </option>
											<?php 
												include "koneksi.php";
												$query_kat = mysqli_query($koneksi,"SELECT * FROM kategori_hewan");
													while($data = mysqli_fetch_array($query_kat))
												{ ?>
													<option value="<?php echo $data['id_kategori']?>"><?=$data['kategori_hewan']?></option> 
												<?php } ?>
										</select><br>
									</div>
									<div class="form-group">
										<label>Jenis Hewan</label><br>
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
                                            <label>Nama Hewan :</label>
                                            <input type="text" name="nama_hewan" id="nama_hewan" class="form-control" >
                                        </div>
										
												<div class="modal-footer">
													<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
													<input type="submit" class="btn btn-info" value="Save" name="tambah">
												</div>
									</div>
								</form>
							</div>
						</div>
					</div> -->
            </div>
        </div>
        </table>
        </div>
        </div>
        </div>
        <!-- /.container-fluid -->
<!-- /#wrapper -->
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
