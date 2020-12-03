
	<?php
		 //Fungsi untuk mencegah inputan karakter yang tidak sesuai
		 function input($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
		//Cek apakah ada kiriman form dari method post
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			session_start();
			include "koneksi.php";
			$username = input($_POST["username"]);
			$p = input($_POST["password"]);

			$sql = "select * from user where username='".$username."' and password='".$p."' limit 1";
			$hasil = mysqli_query($mysqli,$sql);
			$jumlah = mysqli_num_rows($hasil);

			if ($jumlah>0){
                $row = mysqli_fetch_assoc($hasil);
                $_SESSION["username"]=$row["username"];
                $_SESSION["level"]=$row["level"];

                if ($_SESSION["level"]=($row["level"]==1))
				{
                    $level = "Admin";
                    $_SESSION["level"] = $level; 
					header("location:index.php?pesan=berhasil");
				} else if ($_SESSION["level"]=$row["level"]==2)
				{
                    $level = "Pegawai";
                    $_SESSION["level"] = $level;
					header("location:index.php?pesan=berhasil");
				}		
			}else {
                // alihkan ke halaman login kembali
                header("location:Login.php?pesan=gagal");

			}

		}
	
	?>