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
			include "../koneksi.php";
			$username = input($_POST["username"]);
			$p = input($_POST["password"]);

			$sql = "select * from user, role where user.id_role=role.id_role AND username='".$username."' and password='".$p."' limit 1";
			$hasil = mysqli_query($koneksi,$sql);
			$jumlah = mysqli_num_rows($hasil);

			if ($jumlah>0){
                $row = mysqli_fetch_assoc($hasil);
                $_SESSION["username"]=$row["nama"];
                $_SESSION["id_role"]=$row["role"];

                if ($_SESSION["id_role"]=($row["id_role"]==1))
				{
                    $level = "Admin";
                    $_SESSION["id_role"] = $level; 
					header("location:../LandingPagePeternak.php");
				} else if ($_SESSION["id_role"]=$row["id_role"]==2)
				{
                    $level = "Dokter";
                    $_SESSION["id_role"] = $level;
					header("location:../LandingPagePeternak.php");
                }
                else if ($_SESSION["id_role"]=$row["id_role"]==3)
				{
                    $level = "Peternak";
                    $_SESSION["id_role"] = $level;
					header("location:../LandingPagePeternak.php");
				}			
			}else {
                // alihkan ke halaman login kembali
                header("location:../modal/Login.php?pesan=gagal");
			}
		}
	?>