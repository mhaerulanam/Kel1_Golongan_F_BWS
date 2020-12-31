<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edit Data - Defi Tamara</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->

        <style type="text/css">
        .card{
            margin-top: 10%;
            width: 50%;
            margin-left: 25%;
        }
        </style>
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
                <center><b><h3>Edit Data Siswa</h3></b></center>
            </div>
            <div class="card-body">
            <form method="post" action="">
                <input type="hidden" name="nim" value="<?php echo $data_mhs['nim']; ?>"/>
                <div class="form-outline mb-4">
                    <label for="nama_siswa" class="form-label">Nama</label>
                    <!-- <div class="col-sm-10"> -->
                    <input type="text" name="nama_mhs" class="form-control" id="nama_mhs" value="<?php echo $data_mhs['nama_mhs']; ?>">
                    <!-- </div> -->
                </div>
                <div class="form-outline mb-4">
                    <label for="prodi"><span class="glyphicon glyphicon-star"></span> Prodi</label>
                    <select name="prodi" class="form-control" id="default-select">
                        <option value="Teknik Informatika" <?php if($data_mhs['prodi']=='Teknik Informatika') echo 'selected' ?>>Teknik Informatika</option> 
                        <option value="Teknik Komputer" <?php if($data_mhs['prodi']=='Teknik Komputer') echo 'selected' ?>>Teknik Komputer</option>
                        <option value="Manajemen Informatika" <?php if($data_mhs['prodi']=='Manajemen Informatika') echo 'selected' ?>>Manajemen Informatika</option>
                    </select>
                </div>
                <div class="form-outline mb-4">
                    <label for="alamat" class="form-label">Alamat</label>
                    <textarea class="form-control" name="alamat" id="alamat"><?php echo $data_mhs['alamat']; ?></textarea>
                </div>
                <div class="form-outline mb-4">
                    <input type="submit" name="update" class="btn btn-primary btn-block" value="Simpan Perubahan">
                    
                </div>  
                <center><a href="index.php"><= Kembali Tabel Data Mahasiswa</a></center>
                <!-- form-group row -->
            </form>
            </div>
        </div>
    </div>
    </body>
</html>