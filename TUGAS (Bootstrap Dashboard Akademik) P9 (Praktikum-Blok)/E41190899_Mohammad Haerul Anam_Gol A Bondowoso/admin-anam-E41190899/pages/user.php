<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>User</title>
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
<script type="text/javascript">
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
<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
ini_set('max_execution_time', 0);
date_default_timezone_set('Asia/Jakarta');
include "conn.inc";
	$id_user_akses = $_POST['id_user_akses'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$status = $_POST['status'];
if(isset($_POST['tambah']))
{
	//tambah
	$sql = "INSERT INTO user_akses VALUES ('', '$username', '$password', '$status',now(),now(),now())";
	if(mysqli_query($conn, $sql))
	{
		$nilaihasil = "Records inserted successfully.";
	} 
	else
	{
		echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
	}
	

}
if(isset($_POST['edit']))
{
	//edit
	$sql = "UPDATE user_akses SET username = '$username' , password = '$password' , status_akses = '$status' , update_date = now(), update_time = now() WHERE id_user_akses = '$id_user_akses'";
	if(mysqli_query($conn, $sql))
	{
		$nilaihasil = "Records updated successfully.";
	} 
	else
	{
		echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
	}
}
if(isset($_POST['delete']))
{
	//delete
	$sql = "DELETE FROM user_akses WHERE id_user_akses = '$id_user_akses'";
	if(mysqli_query($conn, $sql))
	{
		$nilaihasil = "Records deleted successfully.";
	} 
	else
	{
		echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
	}

}

if(isset($_POST['deleteall']))
{
	//delete
	$pilih = $_POST['pilih'];
		$sql = "DELETE FROM user_akses WHERE id_user_akses IN (".implode(",", $pilih).")";
		if(mysqli_query($conn, $sql))
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
						<h4><b>Data User</b></h4>
					</div>
					<div class="col-sm-6">
						<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal">New Record</a>
						<input type="submit" name="deleteall" value="Delete Selected" class="btn btn-danger" onclick="return confirm('Are you sure delete selected records?')">
					</div>
                </div>
            </div>
			<?php echo "$nilaihasil"; ?>
            <table id="tabel-data" class="table table-striped table-hover">
                <thead>
                    <tr>
						<th>
							<span class="custom-checkbox">
								<input type="checkbox" id="selectAll">
								<label for="selectAll"></label>
							</span>
						</th>
                        <th>ID</th>
						<th>Username</th>
                        <th>Password</th>
						<th>Status</th>
                        <th>Update Create</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
<?php
$i = 0;
$ksql="SELECT * FROM user_akses";
$khasil = mysqli_query($conn,$ksql);
while($krow = mysqli_fetch_array($khasil))
{
$i++;
?>
					<tr>
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox5" name="pilih[]" value="<?php echo $krow['id_user_akses']; ?>">
								<label for="checkbox5"></label>
							</span>
						</td>
						<td><?php echo $krow['id_user_akses']; ?></td>
                        <td><?php echo $krow['username']; ?></td>
                        <td><?php echo md5(md5($krow['password']) + $i); ?></td>
						<td>
						<?php 
						if($krow['status_akses'] == "1")
						{
							$staty = "Enable";
						}
						else
						{
							$staty = "Disable";
						}
						echo $staty; 
						?>
						</td>
                        <td><?php echo $krow['update_create']; ?></td>
                        <td>
                            <a href="#editEmployeeModal<?php echo $krow['id_user_akses']; ?>" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                            <a href="#deleteEmployeeModal<?php echo $krow['id_user_akses']; ?>" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                        </td>
                    </tr>
					
	<!-- Edit Modal HTML -->
	<div id="editEmployeeModal<?php echo $krow['id_user_akses']; ?>" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
			<form method="post" action="">
				<input type="hidden" class="form-control" value="<?php echo $krow['id_user_akses']; ?>" name="id_user_akses" required>
					<div class="modal-header">
						<h4 class="modal-title">Edit</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<label>Username</label>
							<input type="text" class="form-control" value="<?php echo $krow['username']; ?>" name="username" required>
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" class="form-control" value="<?php echo $krow['password']; ?>" name="password" required>
						</div>
						<div class="form-group">
							<label>Status</label>
							<input type="text" class="form-control" value="<?php echo $krow['status_akses']; ?>" name="status" required>
						</div>
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btn btn-info" value="Save" name="edit">
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Delete Modal HTML -->
	<div id="deleteEmployeeModal<?php echo $krow['id_user_akses']; ?>" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
			<form method="post" action="">
				<input type="hidden" class="form-control" value="<?php echo $krow['id_user_akses']; ?>" name="id_user_akses" required>
				
					<div class="modal-header">
						<h4 class="modal-title">Delete</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">
						<p>Are you sure you want to delete these Records <?php echo $krow['username']; ?>?</p>
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
	mysqli_close($conn);
?>
</form>
                </tbody>

            </table>
<!-- Add Modal HTML -->
<div id="addEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form method="post" action="">
					<div class="modal-header">
						<h4 class="modal-title">Add</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<label>Username</label>
							<input type="text" class="form-control" name ="username" required>
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" class="form-control" name ="password" required>
						</div>
						<div class="form-group">
							<label>Status</label>
							<input type="text" class="form-control" name ="status" required>
							<!-- <textarea class="form-control" required></textarea> -->
						</div>
						
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btn btn-success" value="Add" name="tambah">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

</body>
</html>