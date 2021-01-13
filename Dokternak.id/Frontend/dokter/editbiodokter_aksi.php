<?php

include "../koneksi.php";

			if(isset($_POST['edit'])){

            $id_dokter = $_POST['id_dokter'];
            $id_user = $_POST['id_user'];
            $nama = $_POST['nama'];
            $email = $_POST['email'];
            $jk = $_POST['jenis_kelamin'];
			      $alamat = $_POST['alamat'];
            $tempat = $_POST['tempat'];
            $telpon = $_POST['telpon'];
            $jadwal_kerja = $_POST['jadwal_kerja'];
            $username = $_POST['username'];
            
			//edit
			$sql1 = "UPDATE dokter SET nama = '$nama',  email = '$email',  jenis_kelamin = '$jk', alamat = '$alamat', tempat = '$tempat', telpon = '$telpon', jadwal_kerja = '$jadwal_kerja' WHERE id_dokter = '$id_dokter'";
            $sql = "UPDATE user SET  username = '$username' WHERE id_user = '$id_user'";
            if(mysqli_query($koneksi, $sql1)){
              if(mysqli_query($koneksi, $sql)){
                $nilaihasil = "Records updated successfully.";
                header("location:LandingPageDokter.php?pesan=berhasil");
              }else{
                header("location:LandingPageDokter.php?pesan=gagal");
              }	
			} else{
				echo "ERROR: Could not able to execute $sql. " . mysqli_error($koneksi);
			} };
          
?>