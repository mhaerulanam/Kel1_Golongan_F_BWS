	<?php 
		include '../koneksi.php';
		session_start();
		if(isset($_POST['re_password'])){
		$id = $_SESSION['id'];	
		$old_pass=$_POST['old_pass'];
		$new_pass=$_POST['new_pass'];
		$re_pass=$_POST['re_pass'];
		$chg_pwd=mysqli_query($koneksi,"select * from user where id_user='$id'");
		$chg_pwd1=mysqli_fetch_array($chg_pwd);
		$data_pwd=$chg_pwd1['password'];
		if($data_pwd==$old_pass){
			if($new_pass==$re_pass){
				$update_pwd=mysqli_query($koneksi,"update user set password='$new_pass' where id_user='$id'");
				echo "<script>alert('Perubahan Password Berhasil'); window.location='../LandingPagePeternak.php'</script>";
			}
			else{
				echo "<script>alert('Password Baru dan Password Baru Ulang Anda Tidak Sama'); window.location='../LandingPagePeternak.php'</script>";
			}
			}
		else
		{
		echo "<script>alert('Perubahan Password Gagal'); window.location='../LandingPagePeternak.php'</script>";
		}}
	?>