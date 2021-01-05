<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tambah Data - Widya Yuristika Oktavia</title>
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
    </head>
    <body>
        
    <?php 
        include('library.php');
        $lib = new Library();
        if(isset($_POST['tambah'])){
            $kode_mk = $_POST['kode_mk'];
            $nama_mk = $_POST['nama_mk'];
            $SKS = $_POST['SKS'];
            $semester = $_POST['semester'];
        
            $info_tambah = $lib->add_mk($kode_mk,$nama_mk,$SKS, $semester);
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
                    <label for="kode_mk" class="col-sm-2 col-form-label">Kode Matakuliah</label>
                    <div class="col-sm-10">
                    <input type="text" name="kode_mk" class="form-control" id="kode_mk" placeholder="Masukkan Kode Matakuliah" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama_mk" class="col-sm-2 col-form-label">Nama Matakuliah</label>
                    <div class="col-sm-10">
                    <input type="text" name="nama_mk" class="form-control" id="nama_mk"  placeholder="Masukkan Nama Matakuliah" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="SKS" class="col-sm-2 col-form-label">SKS</label>
                    <div class="col-sm-10">
                    <textarea class="form-control" name="SKS" id="SKS" required></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="semester" class="col-sm-2 col-form-label">Semester</label>
                    <div class="col-sm-10">
                    <input type="text" name="semester" class="form-control" id="semester"  placeholder="Masukkan Nama semester" required>
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