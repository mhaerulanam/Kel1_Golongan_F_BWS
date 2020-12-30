<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edit Data - Mohammad Haerul Anam</title>
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
    </head>
    <body>

    <?php 
        include('library.php');
        $lib = new Library();
        if(isset($_GET['nim'])){
            $nim = $_GET['nim']; 
            $data_mhs = $lib->get_by_id($nim);
        }
        else
        {
            header('Location: index.php');
        }
        
        if(isset($_POST['update'])){
            $nim = $_POST['nim'];
            $nama_mhs = $_POST['nama_mhs'];
            $prodi = $_POST['prodi'];
            $alamat = $_POST['alamat']; 
            $info_edit = $lib->update($nim,$nama_mhs,$prodi,$alamat);
            if($info_edit)
            {
                header('Location:index.php');
            }
        }
    ?>

    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>Edit Data Siswa</h3>
            </div>
            <div class="card-body">
            <form method="post" action="">
                <input type="hidden" name="nim" value="<?php echo $data_mhs['nim']; ?>"/>
                <div class="form-outline mb-4">
                    <label for="nama_siswa" class="form-label">Nama</label>
                    <div class="col-sm-10">
                    <input type="text" name="nama_mhs" class="form-control" id="nama_mhs" value="<?php echo $data_mhs['nama_mhs']; ?>">
                    </div>
                </div>
                <div class="form-outline mb-4">
                    <label for="kelas" class="form-label">Kelas</label>
                    <div class="col-sm-10">
                    <input type="text" value="<?php echo $data_mhs['prodi']; ?>" name="prodi" class="form-control" id="prodi">
                    </div>
                </div>
                <div class="form-outline mb-4">
                    <label for="prodi"><span class="glyphicon glyphicon-star"></span> Prodi</label>
                    <select name="prodi" class="form-select" id="default-select">
                        <option disabled selected> Pilih </option>
                        <option value="Teknik Informatika">Teknik Informatika</option> 
                        <option value="Teknik Komputer">Teknik Komputer</option>
                        <option value="Manajemen Informatika">Manajemen Informatika</option>
                    </select>
                </div>
                <div class="form-outline mb-4">
                    <label for="alamat" class="form-label">Alamat</label>
                    <div class="col-sm-10">
                    <textarea class="form-control" name="alamat" id="alamat"><?php echo $data_mhs['alamat']; ?></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="alamat" class="form-label"></label>
                    <div class="col-sm-10">
                    <input type="submit" name="update" class="btn btn-primary btn-block" value="Update">
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
    </body>
</html>