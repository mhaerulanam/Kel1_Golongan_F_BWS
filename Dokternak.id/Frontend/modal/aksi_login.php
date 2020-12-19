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
				$id = $row["id_user"];
				$_SESSION["username"]=$row["username"];
				$_SESSION["id"]=$row["id_user"];
                $_SESSION["id_role"]=$row["role"];

                if ($_SESSION["id_role"]=($row["id_role"]==1))
				{
					$id = $_SESSION["id"];
					$sdata1 = "SELECT * FROM admin, user WHERE admin.id_user = '$id' AND admin.id_user=user.id_user";
					$hasil = mysqli_query($koneksi,$sdata1);
					$row1 = mysqli_fetch_array($hasil);
					$nama = $row1["nama"];
                    $level = "Admin";
					$_SESSION["id_role"] = $level;
					$_SESSION["nama"]=$nama;
					echo "<script>alert('Selamat $nama, Anda Berhasil Login sebagai $level'); window.location='../../Backend/pages/Dashboard.php'</script>"; 
				} else if ($_SESSION["id_role"]=$row["id_role"]==2)
				{
					$id = $_SESSION["id"];
					$sdata2 = "SELECT * FROM dokter, user, jabatan, dokter_user WHERE dokter_user.id_user = '$id' AND dokter_user.id_user=user.id_user AND dokter_user.id_dokter=dokter.id_dokter AND dokter.id_jabatan=jabatan.id_jabatan";
					$hasil = mysqli_query($koneksi,$sdata2);
					$row2 = mysqli_fetch_array($hasil);
					$nama = $row2["nama"];
					$jabatan = $row2["jabatan"];
					$_SESSION["nama"]=$nama;
					$_SESSION["jabatan"]=$jabatan;
					echo "<script>alert('Selamat $nama, Anda Berhasil Login sebagai $jabatan'); window.location='../dokter/LandingPageDokter.php'</script>"; 
                }
                else if ($_SESSION["id_role"]=$row["id_role"]==3)
				{
					$id = $_SESSION["id"];
					$sdata3 = "SELECT * FROM peternak, user WHERE peternak.id_user = '$id' AND peternak.id_user=user.id_user";
					$hasil = mysqli_query($koneksi,$sdata3);
					$row3 = mysqli_fetch_array($hasil);
					$id = $row3["id_peternak"];
					$nmd = $row3["namadepan_peternak"];
					$nmb = $row3["namabelakang_peternak"];
					$nama = "$nmd $nmb";
                    $level = "Peternak";
					$_SESSION["id_role"] = $level;
					$_SESSION["nama"]=$nama;
					$_SESSION["id"]=$id;
					echo "<script>alert('Selamat $nama, Anda Berhasil Login sebagai $level'); window.location='../LandingPagePeternak.php'</script>"; 
				}				
			}else {
                // alihkan ke halaman login kembali
                echo "<script>alert('Maaf $nama, Login Anda gagal'); window.location='../LandingPagePeternak.php'</script>"; 
			}
		}
	?>