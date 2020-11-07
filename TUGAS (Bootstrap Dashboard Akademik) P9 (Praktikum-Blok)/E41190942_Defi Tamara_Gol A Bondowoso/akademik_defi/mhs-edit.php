<?php
include 'koneksi.php';
$nim         = $_GET['nim'];
$mahasiswa  = mysqli_query($koneksi, "select * from mahasiswa where nim='$nim'");
$row        = mysqli_fetch_array($mahasiswa);

// membuat data jurusan menjadi dinamis dalam bentuk array
$prodi    = array('Teknik Informatika','Manajemen Informatika','Teknik Komputer');

// membuat function untuk set aktif radio button
function active_radio_button($value,$input){
    // apabilan value dari radio sama dengan yang di input
    $result =  $value==$input?'checked':'';
    return $result;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Edit Data Mahasiswa</title>

        <!-- Custom fonts for this template-->
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

        <!-- Custom styles for this template-->
        <link href="css/sb-admin-2.min.css" rel="stylesheet">

    </head>
    <body>

    <div class="container-fluid">
    
        <form method="post" action="update-mhs.php">
            <input type="hidden" value="<?php echo $row['nim'];?>" name="nim">
            
            <div class="card-body">
            <table>
            <div class="form-group">
                <tr><td>NIM</td><td><input type="text" class="form-control form-control-user" value="<?php echo $row['nim'];?>" name="nim"></td></tr>
                <tr><td>NAMA</td><td><input type="text" class="form-control form-control-user" value="<?php echo $row['nama'];?>" name="nama"></td></tr>
                <tr><td>TEMPAT LAHIR</td><td><input type="text" class="form-control form-control-user" value="<?php echo $row['tempat_lahir'];?>" name="tmplahir"></td></tr>
                <tr><td>TGL LAHIR</td><td><input type="date" class="form-control form-control-user" value="<?php echo $row['tgllahir'];?>" name="tgllahir"></td></tr>
                <tr><td>JENIS KELAMIN</td><td>
                        <input type="radio" name="jk" value="Laki-Laki" <?php echo active_radio_button("Laki-Laki", $row['jenis_kelamin'])?>>Laki Laki
                        <input type="radio" name="jk" value="Perempuan" <?php echo active_radio_button("Perempuan", $row['jenis_kelamin'])?>>Perempuan
                    </td></tr>
                <tr><td>PRODI</td><td>
                <!-- <?php echo $row['prodi'];?> -->
                        <select name="prodi" class="form-control form-control-user">
                            <?php
                            foreach ($prodi as $p){
                                echo "<option value='$p' ";
                                echo $row['prodi']==$p?'selected="selected"':'';
                                echo ">$p</option>";
                            }
                            ?>
                        </select>
                    </td></tr>
                <tr><td>TELPON</td><td><input type="number" class="form-control form-control-user" value="<?php echo $row['telpon'];?>" name="telpon"></td></tr>
                <tr><td>ALAMAT</td><td><input value="<?php echo $row['alamat'];?>" type="text" class="form-control form-control-user" name="alamat"></td></tr>
                <tr><td colspan="2"><button type="submit" class="btn btn-success" value="simpan">SIMPAN PERUBAHAN</button>
                        <a href="data_mahasiswa.php">Kembali</a></td></tr>
            </table>
            </div>
            </div>
        </form>
        </div>
    </body>
</html>