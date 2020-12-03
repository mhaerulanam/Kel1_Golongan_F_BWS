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
		<link rel="stylesheet" href="../css/style1.css">
    </head>
    <body>

        <div id="wrapper">
		<?php include "menubar.php" ?>
            <!-- Page Content -->
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Data Mahasiswa</h1>
                        </div>
<?php                    
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
ini_set('max_execution_time', 0);
date_default_timezone_set('Asia/Jakarta');
include "koneksi.php";
	$nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $ttl = $_POST['date'];
    $agama = $_POST['agama'];
    $username = $_POST['username'];
    $password = $_POST['password'];

if(isset($_POST['tambah']))
{
	/* cek input NIM apakah sudah ada nim yang digunakan */
	$pilih="select * from mahasiswa where Nim='$nim'";
	$cek=mysqli_query($mysqli, $pilih);
  
	$jumlah_data = mysqli_num_rows($cek);
	if ($jumlah_data >= 1 ) 
	{
  
   echo "<script>alert('NIM yang sama sudah digunakan');history.go(-1);</script>";
	 }
	else
 {
	//tambah
	$sql = "INSERT INTO mahasiswa (Nim,nama,ttl,agama,username,password) VALUES('$nim','$nama','$ttl','$agama','$username','$password')";
	if(mysqli_query($mysqli, $sql))
	{
		$nilaihasil = "Records inserted successfully.";
	} 
	else
	{
		echo "ERROR: Could not able to execute $sql. " . mysqli_error($mysqli);
	}
}
}
if(isset($_POST['edit']))
{
	//edit
	$sql = "UPDATE mahasiswa SET nama = '$nama' , ttl = '$ttl', agama = '$agama', username = '$username', password = '$password' WHERE Nim = '$nim'";
	// $sql = "UPDATE mahasiswa SET nama = '$nama' , ttl = '$ttl', agama = '$agama', username = '$username', password = '$password' ,  WHERE Nim = '$nim'";
	// $sql = "UPDATE mahasiswa SET nama = '$nama' , ttl = '$ttl', agama = '$agama', username = '$username', password = '$password', WHERE Nim = '$nim'";
	if(mysqli_query($mysqli, $sql))
	{
		$nilaihasil = "Records updated successfully.";
	} 
	else
	{
		echo "ERROR: Could not able to execute $sql. " . mysqli_error($mysqli);
	}
}
if(isset($_POST['delete']))
{
	//delete
	$sql = "DELETE FROM mahasiswa WHERE Nim = '$nim'";
	if(mysqli_query($mysqli, $sql))
	{
		$nilaihasil = "Records deleted successfully.";
	} 
	else
	{
		echo "ERROR: Could not able to execute $sql. " . mysqli_error($mysqli);
	}

}

if(isset($_POST['deleteall']))
{
	//delete
	$pilih = $_POST['pilih'];
		$sql = "DELETE FROM mahasiswa WHERE Nim IN (".implode(",", $pilih).")";
		if(mysqli_query($mysqli, $sql))
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
						<!-- <input type="submit" name="deleteall" value="Delete Selected" class="btn btn-danger" onclick="return confirm('Are you sure delete selected records?')"> -->
					</div>
                </div>
			</div>
				<?php echo "$nilaihasil"; ?>
            <table id="tabel-data" class="table table-striped table-hover" >
                <thead>
                    <tr>
						<!-- <th>
							<span class="custom-checkbox">
								<input type="checkbox" id="selectAll">
								<label for="selectAll"></label>
							</span>
						</th> -->
						<th>No</th>
                        <th>NIM</th>
						<th>Nama</th>
                        <th>Tanggal Lahir</th>
						<th>Agama</th>
                        <th>Username</th>
						<th>Password</th>
						<th>Actions</th>
                    </tr>
                </thead>
                <tbody>
<?php
$i = 1;
$ksql="SELECT * FROM mahasiswa";
$khasil = mysqli_query($mysqli,$ksql);
while($krow = mysqli_fetch_array($khasil))
{
?>

					<tr>
						<!-- <td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox5" name="pilih[]" value="<?php echo $krow['Nim']; ?>">
								<label for="checkbox5"></label>
							</span>
						</td> -->
						<td><?= $i ?></td>
						<td><?php echo $krow['Nim']; ?></td>
						<td><?php echo $krow['nama']; ?></td>
						<td><?php echo $krow['ttl']; ?></td>
						<td><?php echo $krow['agama']; ?></td>
						<td><?php echo $krow['username']; ?></td>
						<td><?php echo $krow['password']; ?></td>
                        <td>
                            <a href="#editEmployeeModal<?php echo $krow['Nim']; ?>" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                            <a href="#deleteEmployeeModal<?php echo $krow['Nim']; ?>" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                        </td>
                    </tr>
					
	<!-- Edit Modal HTML -->
	<div id="editEmployeeModal<?php echo $krow['Nim']; ?>" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
			<form role="form" method="POST">
			<input type="hidden" class="form-control" value="<?php echo $krow['Nim']; ?>" name="nim" required>
					<div class="modal-header">
						<h4 class="modal-title">Edit</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">
                                                <!-- <div class="form-group">
                                                    <label>Nim :</label>
                                                    <input type="text" name="nim" id="nim" class="form-control" placeholder="Masukkan NIM" required>
                                                </div> -->
                                                <div class="form-group">
                                                    <label>Nama Lengkap :</label>
                                                    <input type="text" name="nama" id="nama" class="form-control" value="<?php echo $krow['nama']; ?>"   placeholder="Masukkan Nama Lengkap" required>
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label >Date :</label>
                                                    <input type="date" name="date" id="date" class="form-control" value="<?php echo $krow['ttl']; ?>"  placeholder="Masukkan Tanggal Lahir" required>
                                                </div>
                                               
                                                <div class="form-group">
                                                    <label>Agama :</label>
                                                    <select class="form-control" value="<?php echo $krow['agama']; ?>" name="agama">
                                                        <option>Islam</option>
                                                        <option>Protestan</option>
                                                        <option>Katolik</option>
                                                        <option>Hindu</option>
                                                        <option>Buddha</option>
                                                        <option>Khonghucu</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Username :</label>
                                                    <input type="text" name="username" id="username" class="form-control" value="<?php echo $krow['username']; ?>"  placeholder="Masukkan Username" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Password :</label>
                                                    <input type="password" name="password" id="password" class="form-control" value="<?php echo $krow['password']; ?>"  placeholder="Masukkan Password" required>
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
	<div id="deleteEmployeeModal<?php echo $krow['Nim']; ?>" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
			<form method="post" action="">
				<input type="text" class="form-control" value="<?php echo $krow['Nim']; ?>" name="nim" required>
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
	mysqli_close($mysqli);
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
						<h4 class="modal-title">Add</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">
                                                <div class="form-group">
                                                    <label>Nim :</label>
                                                    <input type="text" name="nim" id="nim" min="8" max="8" class="form-control" placeholder="Masukkan NIM" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Nama Lengkap :</label>
                                                    <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan Nama Lengkap" required>
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label >Date :</label>
                                                    <input type="date" name="date" id="date" class="form-control" placeholder="Masukkan Tanggal Lahir" required>
                                                </div>
                                               
                                                <div class="form-group">
                                                    <label>Agama :</label>
                                                    <select class="form-control" name="agama">
                                                        <option>Islam</option>
                                                        <option>Protestan</option>
                                                        <option>Katolik</option>
                                                        <option>Hindu</option>
                                                        <option>Buddha</option>
                                                        <option>Khonghucu</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Username :</label>
                                                    <input type="text" name="username" id="username" class="form-control" placeholder="Masukkan Username" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Password :</label>
                                                    <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan Password" required>
                                                </div>
                                                
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btn btn-success" onclick="" value="Add" name="tambah">
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
		<script src="../js/data.js"></script>
		
		<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
		<script>
			$(document).ready(function(){
				$('#tabel-data').DataTable();
			});
		</script>

    </body>
</html>
