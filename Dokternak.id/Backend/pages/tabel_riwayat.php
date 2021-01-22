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
                            <h1 class="page-header">Data Riwayat Konsultasi</h1>
						</div>
						

					<?php

					//kode untuk menampilkan data pada tabel  
					error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
					ini_set('max_execution_time', 0);
					// date_default_timezone_set('Asia/Jakarta');
					include "koneksi.php";
						
						$id_riwayat = $_POST['id_riwayat'];;
						$id_konsultasi = $_POST['id_konsultasi'];
						$id_respon = $_POST['id_respon'];
						$keluhan = $_POST['keluhan'];
						$id_dokter = $_POST['id_dokter'];
						$respon = $_POST['respon'];
						$tanggal = $_POST['tanggal'];
						$tanggal_respon = $_POST['tanggal_konsultasi'];


					//Code tombol tambah	
					if(isset($_POST['tambah'])){
						/* cek input NIM apakah sudah ada nim yang digunakan */
						$pilih="select * from respon_konsultasi, dokter where respon_konsultasi.id_dokter=nama.id_dokter and respon_konsultasi.id_respon='$id_respon'";
						$cek=mysqli_query($koneksi, $pilih);
					
						$jumlah_data = mysqli_num_rows($cek);
						if ($jumlah_data >= 1 ) {
					
							echo "<script>alert(' Id respon yang sama sudah digunakan');history.go(-1);</script>";
						}
						else{
							$kode = date('His'); //Hour,minutes,second

							$id_respon = "RES$kode";
							$idk = $_POST['id_konsultasi'];
							$respon = $_POST['respon'];
							$tanggal = $_POST['tanggal'];
							$status = "on";
							
							if (isset($_POST['id_dokter'])){
								$dokter = $_POST['id_dokter'];
								$query = mysqli_query($koneksi,"select * from dokter where nama='$dokter'");
								$data = mysqli_fetch_assoc($query);
								$id = $data['id_dokter'];
						 }else{
								 echo 'no value';
						}
							// $id_konsultasi  = "KONS$kode";
							// $id_respon  = "RES$kode";
							//tambah
							
							$kirim1 = " insert into respon_konsultasi values 
							('$id_respon','$id','$respon','$tanggal')";
							mysqli_query($koneksi,$kirim1);

							$kirim2 = " insert into riwayat_konsultasi values 
							('','$idk','$id_respon','$status')";
							$sql = mysqli_query($koneksi,$kirim2);

							$ambildata=mysqli_query($koneksi, "SELECT * FROM  riwayat_konsultasi where id_respon = '$id_respon'");
							$row = mysqli_fetch_array($ambildata);
							$idss = $row['id_konsultasi'];
							mysqli_query($koneksi,"update konsultasi set status_kirim='terespon' where id_konsultasi='$idss'");

							$nilaihasil = "Records inserted successfully.";
						}
					}

					// code tombol edit
					if(isset($_POST['edit'])){
						//edit
						$sql = "UPDATE respon_konsultasi SET  respon = '$respon' , tanggal_respon = '$tanggal_respon'WHERE id_respon = '$id_respon'";
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
						$sql = "DELETE FROM riwayat_konsultasi WHERE id_riwayat = '$id_riwayat'";
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
							$sql = "DELETE FROM riwayat_konsultasi WHERE id_riwayat IN (".implode(",", $pilih).")";
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
					<form method="POST" action="cetak/cetak_konsultasi.php" target="_blank">
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

<form method="post" action="">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
					</div>
					<div class="col-sm-6">
						<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal">++ Tambah Data	</a>
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
						<th>ID Riwayat</th>
						<th>ID Konsultasi</th>
						<th>ID Respon</th>
                        <th>Konsultasi</th>
						<th>Respon</th>
						<th>Tanggal Konsultasi</th>
						<th>Tanggal Respon</th>
                        <th>Actions</th>

                    </tr>
                </thead>
                <tbody>
					<?php
					$i = 1;
					$ksql="SELECT * FROM riwayat_konsultasi INNER JOIN konsultasi ON riwayat_konsultasi.id_konsultasi = konsultasi.id_konsultasi INNER JOIN respon_konsultasi ON riwayat_konsultasi.id_respon = respon_konsultasi.id_respon ORDER BY id_riwayat";
					$khasil = mysqli_query($koneksi,$ksql);
					while($krow = mysqli_fetch_array($khasil))
					{
					?>

					<tr>
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox5" name="pilih[]" value="<?php echo $krow['id_riwayat']; ?>">
								<label for="checkbox5"></label>
							</span>
						</td>
						<td><?= $i ?></td>

						<!-- Code menampilkan data -->
						<td><?php echo $krow['id_riwayat']; ?></td>
						<td><?php echo $krow['id_konsultasi']; ?></td>
						<td><?php echo $krow['id_respon']; ?></td>
                        <td><?php echo $krow['keluhan']; ?></td>
                        <td><?php echo $krow['respon']; ?></td>
						<td><?php echo $krow['tanggal']; ?></td>
						<td><?php echo $krow['tanggal_respon']; ?></td>

						<!-- Tombol Action -->
                        <td>
							<a href="#editEmployeeModal<?php echo $krow['id_respon']; ?>" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                            <a href="#deleteEmployeeModal<?php echo $krow['id_riwayat']; ?>" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                        </td>
                    </tr>
					
					<!-- Edit Modal HTML -->
					<div id="editEmployeeModal<?php echo $krow['id_respon']; ?>" class="modal fade">
						<div class="modal-dialog">
							<div class="modal-content">
								<form role="form" method="POST">
									<input type="hidden" class="form-control" value="<?php echo $krow['id_respon']; ?>" name="id_respon" required>
									<div class="modal-header">
										<h4 class="modal-title">Edit</h4>
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
									</div>
									<div class="modal-body">

                                        <div class="form-group">
                                            <label>Respon :</label>
                                            <input type="text" name="respon" id="respon" class="form-control" value="<?php echo $krow['respon']; ?>"  required>
										</div>
										
                                        <div class="form-group">
                                            <label>Tanggal Respon :</label>
                                            <input type="date" name="tanggal_respon" id="tanggal_respon" class="form-control" value="<?php echo $krow['tanggal_respon']; ?>" >
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
					<div id="deleteEmployeeModal<?php echo $krow['id_riwayat']; ?>" class="modal fade">
						<div class="modal-dialog">
							<div class="modal-content">
							<form method="post" action="">
								<input type="text" class="form-control" value="<?php echo $krow['id_riwayat']; ?>" name="id_riwayat" required>
									<div class="modal-header">
										<h4 class="modal-title">Delete</h4>
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
									</div>
									<div class="modal-body">
										<p>Apakah anda yakin ingin menghapus data respon <?php echo $krow['id_respon']; ?> di Konsultasi 
										<?php echo $krow['id_konsultasi']; ?>?</p>
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
							<form role="form" method="POST" action="">
									<div class="modal-header">
										<h4 class="modal-title">Tambah Data</h4>
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
									</div>
									<div class="modal-body">
										<div class="form-group">
                                            <label>Konsultasi :</label>
                                            <select name="id_konsultasi" class="form-control" id="default-select">
												<option disabled selected> Pilih </option>
												<?php 
												include "koneksi.php";
												$sql="SELECT * FROM konsultasi";
												$dok = mysqli_query($koneksi,$sql);
												while($data = mysqli_fetch_array($dok))
												{ ?>
												<option value="<?php echo $data['id_konsultasi']?>" <?php if($data['id_konsultasi']==$krow['id_konsultasi']) echo 'selected' ?>><?=$data['keluhan']?></option> 
												<?php } ?>
											</select><br>
                                        </div>
										<div class="mt-30">
										<h5 class="mb-15">Dokter</h5>
										<?php 
										$nama = $_GET['id_dokter'];
										$query_dok = mysqli_query($koneksi,"SELECT * FROM dokter WHERE nama='$nama'");
										$dok = mysqli_fetch_array($query_dok)
										?>
										<input list="id_dokter" class="form-control" placeholder='Masukkan nama Dokter tujuan' value="<?php echo $search_keyword; ?>" name="id_dokter">
										<datalist id="id_dokter" name="id_dokter">
											<?php 
											$query_dok = mysqli_query($koneksi,"SELECT * FROM dokter");
											while ($dok = mysqli_fetch_array($query_dok)) { ?>
												<option value="<?= $dok['nama']; ?>" ></option>
											<?php } ?>
										</datalist>
										<!-- <div class="form-group">
                                            <label>ID Dokter :</label>
                                            <select name="id_dokter" class="form-control" id="default-select">
												<option disabled selected> Pilih </option>
												<?php 
												include "koneksi.php";
												$sql="SELECT * FROM dokter";
												$dok = mysqli_query($koneksi,$sql);
												while($data = mysqli_fetch_array($dok))
												{ ?>
												<option value="<?=$data['id_dokter']?>"><?=$data['nama']?></option> 
												<?php } ?>
											</select><br>
                                        </div> -->
										
									<div class="form-group">
                                            <label>Respon :</label>
                                            <input type="text" name="respon" id="respon" class="form-control" >
                                        </div> 

                                        <div class="form-group">
                                            <label>Tanggal Respon :</label>
                                            <input type="date" name="tanggal" id="tanggal" class="form-control" >
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

    </body>
</html>