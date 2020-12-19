	<?php 
		include '../koneksi.php';
		session_start();
		if(isset($_POST['re_password'])){
		$data="";
		$id = $_SESSION['id'];	
		$old_pass=$_POST['old_pass'];
		$new_pass=$_POST['new_pass'];
		$re_pass=$_POST['re_pass'];
		$chg_pwd = "SELECT * FROM peternak, user WHERE peternak.id_peternak = '$id' AND peternak.id_user=user.id_user";
		$hasil = mysqli_query($koneksi,$chg_pwd);
		$data = mysqli_fetch_array($hasil);
		$id_user =$data['id_user'];
		$data_pwd=$data['password'];
		if($data_pwd==$old_pass){
			if($new_pass==$re_pass){
				$update_pwd=mysqli_query($koneksi,"update user set password='$new_pass' where id_user='$id_user'");
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