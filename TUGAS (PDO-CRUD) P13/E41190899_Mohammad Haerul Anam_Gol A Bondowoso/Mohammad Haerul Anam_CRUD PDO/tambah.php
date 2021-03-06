<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tambah Data - Mohammad Haerul Anam</title>
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
    </head>
    <body>
        
    <?php 
        include('library.php');
        $lib = new Library();
        if(isset($_POST['tambah'])){
            $nim = $_POST['nim'];
            $nama_mhs = $_POST['nama_mhs'];
            $prodi = $_POST['prodi'];
            $alamat = $_POST['alamat'];
        
            $info_tambah = $lib->add_mhs($nim,$nama_mhs, $prodi, $alamat);
            if($info_tambah){
            header('Location: index.php');
            }
        }
    ?>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>Tambah Data Siswa</h3>
            </div>
            <div class="card-body">
            <form method="post" action="">
                <div class="form-group row">
                    <label for="nim" class="col-sm-2 col-form-label">Nim</label>
                    <div class="col-sm-10">
                    <input type="text" name="nim" class="form-control" id="nim" placeholder="Masukkan NIM" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama_siswa" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                    <input type="text" name="nama_mhs" class="form-control" id="nama_siswa"  placeholder="Masukkan Prodi" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="prodi"><span class="glyphicon glyphicon-star"></span> Prodi</label><br>
                    <select name="prodi" class="form-select" id="default-select">
                        <option disabled selected> Pilih </option>
                        <option value="Teknik Informatika">Teknik Informatika</option> 
                        <option value="Teknik Komputer">Teknik Komputer</option>
                        <option value="Manajemen Informatika">Manajemen Informatika</option>
                    </select>
                </div>
                <div class="form-group row">
                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                    <textarea class="form-control" name="alamat" id="alamat" required></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="alamat" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                    <input type="submit" name="tambah" class="btn btn-primary" value="Tambah">
                    <input type="reset" name="reset" class="btn btn-default" value="Reset"><br><hr>
                    <a href="index.php"><-- Kembali Tabel Data Mahasiswa</a>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
    </body>
</body>
</html>