<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edit Data - Wike Sri Widari</title>
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
    </head>
    <body>

    <?php 
        include('library.php');
        $lib = new Library();
        if(isset($_GET['kd_barang'])){
            $kd_barang = $_GET['kd_barang']; 
            $data_brg = $lib->get_by_id($kd_barang);
        }
        else
        {
            header('Location: index.php');
        }
        
        if(isset($_POST['update'])){
            $kd_barang = $_POST['kd_barang'];
            $nama_barang = $_POST['nama_barang'];
            $satuan_barang = $_POST['satuan_barang'];
            $stok_barang = $_POST['stok_barang']; 
            $harga_barang = $_POST['harga_barang']; 
            $info_edit = $lib->update($kd_barang,$nama_barang,$satuan_barang,$stok_barang,$harga_barang);
            if($info_edit)
            {
                header('Location:index.php');
            }
        }
    ?>

    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>Edit Data Barang</h3>
            </div>
            <div class="card-body">
            <form method="post" action="">
            <input type="hidden" name="kd_barang" value="<?php echo $data_brg['kd_barang']; ?>"/>
                <div class="form-outline mb-4">
                    <label for="nama_barang" class="form-label">Nama Barang</label>
                    <div class="col-sm-10">
                    <input type="text" name="nama_barang" class="form-control" id="nama_barang" value="<?php echo $data_brg['nama_barang']; ?>">
                    </div>
                </div>
                <div class="form-outline mb-4">
                    <label for="satuan_barang" class="form-label">Satuan Barang</label>
                    <div class="col-sm-10">
                    <input type="text" name="satuan_barang" class="form-control" id="satuan_barang" value="<?php echo $data_brg['satuan_barang']; ?>">
                    </div>
                </div>
                <div class="form-outline mb-4">
                    <label for="stok_barang" class="form-label">Stok Barang</label>
                    <div class="col-sm-10">
                    <input type="number" class="form-control" name="stok_barang" id="stok_barang" value="<?php echo $data_brg['stok_barang']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="stok_barang" class="form-label"></label>
                    <div class="col-sm-10">
                <div class="form-outline mb-4">
                    <label for="harga_barang" class="form-label">Harga Barang</label>
                    <div class="col-sm-10">
                    <input type="number" name="harga_barang" class="form-control" id="harga_barang" value="<?php echo $data_brg['harga_barang']; ?>">
                    </div>
                </div>
                    <input type="submit" name="update" class="btn btn-primary btn-block" value="Update">
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
    </body>
</html>