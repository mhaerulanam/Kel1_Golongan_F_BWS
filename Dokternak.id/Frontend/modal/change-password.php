	<?php 
		include '../koneksi.php';
		if(isset($_POST['username']))
		{
		$sql = "select * from user, role where user.id_role=role.id_role AND username='".$username."' and password='".$p."' limit 1";
		$hasil = mysqli_query($koneksi,$sql);
		$row = mysqli_fetch_assoc($hasil);
		$id = $row['id_user'];
		if(isset($_POST['re_password'])){
		$old_pass=$_POST['old_pass'];
		$new_pass=$_POST['new_pass'];
		$re_pass=$_POST['re_pass'];
		$chg_pwd=mysqli_query($koneksi,"select * from users where id='$id'");
		$chg_pwd1=mysqli_fetch_array($chg_pwd);
		$data_pwd=$chg_pwd1['password'];
		if($data_pwd==$old_pass){
		if($new_pass==$re_pass){
			$update_pwd=mysqli_query($koneksi,"update user set password='$new_pass' where id='$id'");
			echo "<script>alert('Update Sucessfully'); window.location='index.php'</script>";
		}
		else{
			echo "<script>alert('Your new and Retype Password is not match'); window.location='index.php'</script>";
		}
		}
		else
		{
		echo "<script>alert('Your old password is wrong'); window.location='index.php'</script>";
		}}}
	?>