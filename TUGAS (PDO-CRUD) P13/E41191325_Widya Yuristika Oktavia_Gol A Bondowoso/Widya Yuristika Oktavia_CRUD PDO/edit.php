<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edit Data - Widya Yuristika Oktavia</title>
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
    </head>
    <body>

    <?php 
        include('library.php');
        $lib = new Library();
        if(isset($_GET['kode_mk'])){
            $kode_mk = $_GET['kode_mk']; 
            $data_mk = $lib->get_by_id($kode_mk);
        }
        else
        {
            header('Location: index.php');
        }
        
        if(isset($_POST['update'])){
            $kode_mk = $_POST['kode_mk'];
            $nama_mk = $_POST['nama_mk'];
            $SKS = $_POST['SKS'];
            $semester = $_POST['semester'];
            $info_edit = $lib->update($kode_mk,$nama_mk,$SKS, $semester);
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
                <input type="hidden" name="kode_mk" value="<?php echo $data_mk['kode_mk']; ?>"/>
                <div class="form-outline mb-4">
                    <label for="nama_mk" class="form-label">Nama Mata Kuliah</label>
                    <div class="col-sm-10">
                    <input type="text" name="nama_mk" class="form-control" id="nama_mk" value="<?php echo $data_mk['nama_mk']; ?>">
                    </div>
                </div>
                <div class="form-outline mb-4">
                    <label for="SKS" class="form-label">SKS</label>
                    <div class="col-sm-10">
                    <input type="number" name="SKS" class="form-control" id="SKS" value="<?php echo $data_mk['SKS']; ?>">
                    </div>
                </div>
                <div class="form-outline mb-4">
                    <label for="semester" class="form-label">Semester</label>
                    <div class="col-sm-10">
                    <input type="number" name="semester" class="form-control" id="semester" value="<?php echo $data_mk['semester']; ?>">
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