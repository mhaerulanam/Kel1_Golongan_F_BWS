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
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" media="screen" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function(){
        $('#tabel-data').DataTable();
    });
</script>

<style type="text/css">
    body {
        color: #566787;
		background: #fff;
		font-family: 'Varela Round', sans-serif;
		font-size: 13px;
	}
	.table-wrapper {
        background: #fff;
        padding: 10px 25px;
        	
    }
	.table-title {
		padding-bottom: 5px;
		background: #fff;
		color: #000;
		
    }
    .table-title h2 {
		margin: 5px 0 0;
		font-size: 24px;
	}
	.table-title .btn-group {
		float: right;
	}
	.table-title .btn {
		color: #fff;
		float: right;
		font-size: 13px;
		border: none;
		min-width: 50px;
		border-radius: 2px;
		border: none;
		outline: none !important;
		margin-left: 10px;
	}
	.table-title .btn i {
		float: left;
		font-size: 21px;
		margin-right: 5px;
	}
	.table-title .btn span {
		float: left;
		margin-top: 2px;
	}
    table.table tr th, table.table tr td {
        border-color: #e9e9e9;
		padding: 12px 15px;
		vertical-align: middle;
    }
	table.table tr th:first-child {
		width: 60px;
	}
	table.table tr th:last-child {
		width: 100px;
	}
    table.table-striped tbody tr:nth-of-type(odd) {
    	background-color: #fcfcfc;
	}
	table.table-striped.table-hover tbody tr:hover {
		background: #f5f5f5;
	}
    table.table th i {
        font-size: 13px;
        margin: 0 5px;
        cursor: pointer;
    }
    table.table td:last-child i {
		opacity: 0.9;
		font-size: 22px;
        margin: 0 5px;
    }
	table.table td a {
		font-weight: bold;
		color: #566787;
		display: inline-block;
		text-decoration: none;
		outline: none !important;
	}
	table.table td a:hover {
		color: #2196F3;
	}
	table.table td a.edit {
        color: #FFC107;
    }
    table.table td a.delete {
        color: #F44336;
    }
    table.table td i {
        font-size: 19px;
    }
	table.table .avatar {
		border-radius: 50%;
		vertical-align: middle;
		margin-right: 10px;
	}
    .pagination {
        float: right;
        margin: 0 0 5px;
    }
    .pagination li a {
        border: none;
        font-size: 13px;
        min-width: 30px;
        min-height: 30px;
        color: #999;
        margin: 0 2px;
        line-height: 30px;
        border-radius: 2px !important;
        text-align: center;
        padding: 0 6px;
    }
    .pagination li a:hover {
        color: #666;
    }
    .pagination li.active a, .pagination li.active a.page-link {
        background: #03A9F4;
    }
    .pagination li.active a:hover {
        background: #0397d6;
    }
	.pagination li.disabled i {
        color: #ccc;
    }
    .pagination li i {
        font-size: 16px;
        padding-top: 6px
    }
    .hint-text {
        float: left;
        margin-top: 10px;
        font-size: 13px;
    }
	/* Custom checkbox */
	.custom-checkbox {
		position: relative;
	}
	.custom-checkbox input[type="checkbox"] {
		opacity: 0;
		position: absolute;
		margin: 5px 0 0 3px;
		z-index: 9;
	}
	.custom-checkbox label:before{
		width: 18px;
		height: 18px;
	}
	.custom-checkbox label:before {
		content: '';
		margin-right: 10px;
		display: inline-block;
		vertical-align: text-top;
		background: white;
		border: 1px solid #bbb;
		border-radius: 2px;
		box-sizing: border-box;
		z-index: 2;
	}
	.custom-checkbox input[type="checkbox"]:checked + label:after {
		content: '';
		position: absolute;
		left: 6px;
		top: 3px;
		width: 6px;
		height: 11px;
		border: solid #000;
		border-width: 0 3px 3px 0;
		transform: inherit;
		z-index: 3;
		transform: rotateZ(45deg);
	}
	.custom-checkbox input[type="checkbox"]:checked + label:before {
		border-color: #03A9F4;
		background: #03A9F4;
	}
	.custom-checkbox input[type="checkbox"]:checked + label:after {
		border-color: #fff;
	}
	.custom-checkbox input[type="checkbox"]:disabled + label:before {
		color: #b8b8b8;
		cursor: auto;
		box-shadow: none;
		background: #ddd;
	}
	/* Modal styles */
	.modal .modal-dialog {
		max-width: 400px;
	}
	.modal .modal-header, .modal .modal-body, .modal .modal-footer {
		padding: 20px 30px;
	}
	.modal .modal-content {
		border-radius: 3px;
	}
	.modal .modal-footer {
		background: #ecf0f1;
		border-radius: 0 0 3px 3px;
	}
    .modal .modal-title {
        display: inline-block;
    }
	.modal .form-control {
		border-radius: 2px;
		box-shadow: none;
		border-color: #dddddd;
	}
	.modal textarea.form-control {
		resize: vertical;
	}
	.modal .btn {
		border-radius: 2px;
		min-width: 100px;
	}
	.modal form label {
		font-weight: normal;
	}
    </style>
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
            <?php
                include "navbar.html";
            ?>
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
						<h4><b>Data Mahasiswa</b></h4>
					</div>
					<div class="col-sm-6">
						<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal">New Record</a>
						<input type="submit" name="deleteall" value="Delete Selected" class="btn btn-danger" onclick="return confirm('Are you sure delete selected records?')">
					</div>
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
                        <th>NIM</th>
						<th>Nama</th>
                        <th>Tanggal Lahir</th>
						<th>Agama</th>
                        <th>Username</th>
						<th>Password</th>
						<th colspan="5">Actions</th>
                    </tr>
                </thead>
                <tbody>
<?php
$i = 0;
$ksql="SELECT * FROM mahasiswa";
$khasil = mysqli_query($mysqli,$ksql);
while($krow = mysqli_fetch_array($khasil))
{
$i++;
?>
					<tr>
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox5" name="pilih[]" value="<?php echo $krow['Nim']; ?>">
								<label for="checkbox5"></label>
							</span>
						</td>
						<td><?php echo $krow['Nim']; ?></td>
						<td><?php echo $krow['nama']; ?></td>
						<td><?php echo $krow['ttl']; ?></td>
						<td><?php echo $krow['agama']; ?></td>
						<td><?php echo $krow['username']; ?></td>
						<td><?php echo $krow['password']; ?></td>
						<td>
						</td>
                        <td><?php echo $krow['update_create']; ?></td>
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
                                                    <input type="text" name="nama" id="nama" class="form-control" value="<?php echo $krow['nama']; ?>"  placeholder="Masukkan Nama Lengkap" required>
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
                                                    <input type="text" name="nim" id="nim" class="form-control" placeholder="Masukkan NIM" required>
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
						<input type="submit" class="btn btn-success" value="Add" name="tambah">
					</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<div class="dataTables_paginate paging_simple_numbers" id="tabel-data_paginate">
    <a class="paginate_button previous disabled" aria-controls="tabel-data" data-dt-idx="0" tabindex="0" id="tabel-data_previous">
        Previous</a>
        <span>
</span>
<a class="paginate_button next disabled" aria-controls="tabel-data" data-dt-idx="1" tabindex="0" id="tabel-data_next">
    Next</a>
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

    </body>
</html>
