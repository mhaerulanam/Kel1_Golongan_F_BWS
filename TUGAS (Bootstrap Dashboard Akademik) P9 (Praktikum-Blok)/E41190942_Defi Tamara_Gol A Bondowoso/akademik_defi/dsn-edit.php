<?php
include 'koneksi.php';
$nip         = $_GET['nip'];
$dosen  = mysqli_query($koneksi, "select * from dosen where nip='$nip'");
$row        = mysqli_fetch_array($dosen);

// membuat data jurusan menjadi dinamis dalam bentuk array
$jabatan    = array('Dosen','Kepala UPT','Kepala Jurusan');
$matkul    = array('Tidak Ada','Workshop Sistem Informasi Berbasis Web','Workshop Pengembangan Perangkat Lunak','Manajemen Basis Data');

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
        <title>Edit Data Dosen</title>

        <!-- Custom fonts for this template-->
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

        <!-- Custom styles for this template-->
        <link href="css/sb-admin-2.min.css" rel="stylesheet">

    </head>
    <body>

    <div class="container-fluid">
    
        <form method="post" action="update-dsn.php">
            <input type="hidden" value="<?php echo $row['nip'];?>" name="nip">
            
            <div class="card-body">
            <table>
            <div class="form-group">
                <tr><td>NIP</td><td><input type="text" class="form-control form-control-user" value="<?php echo $row['nip'];?>" name="nip"></td></tr>
                <tr><td>NAMA</td><td><input type="text" class="form-control form-control-user" value="<?php echo $row['nama'];?>" name="nama"></td></tr>
                <tr><td>JENIS KELAMIN</td><td>
                        <input type="radio" name="jk" value="Laki-Laki" <?php echo active_radio_button("Laki-Laki", $row['jenis_kelamin'])?>>Laki Laki
                        <input type="radio" name="jk" value="Perempuan" <?php echo active_radio_button("Perempuan", $row['jenis_kelamin'])?>>Perempuan
                    </td></tr>
                <tr><td>JABATAN</td><td>
                <!-- <?php echo $row['jabatan'];?> -->
                        <select name="jabatan" class="form-control form-control-user">
                            <?php
                            foreach ($jabatan as $p){
                                echo "<option value='$p' ";
                                echo $row['jabatan']==$p?'selected="selected"':'';
                                echo ">$p</option>";
                            }
                            ?>
                        </select>
                    </td></tr>
                    <tr><td>MATKUL YANG DIAMPU</td><td>
                    <!-- <?php echo $row['matkul'];?> -->
                        <select name="matkul" class="form-control form-control-user">
                            <?php
                            foreach ($matkul as $m){
                                echo "<option value='$m' ";
                                echo $row['matkul']==$m?'selected="selected"':'';
                                echo ">$m</option>";
                            }
                            ?>
                            </select>
                <tr><td>ALAMAT</td><td><input value="<?php echo $row['alamat'];?>" type="text" class="form-control form-control-user" name="alamat"></td></tr>
                <tr><td colspan="2"><button type="submit" class="btn btn-success" value="simpan">SIMPAN PERUBAHAN</button>
                        <a href="data_dosen.php">Kembali</a></td></tr>
            </table>
            </div>
            </div>
        </form>
        </div>
    </body>
</html>