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
            $kd_barang = $_POST['kd_barang'];
            $nama_barang = $_POST['nama_barang'];
            $satuan_barang = $_POST['satuan_barang'];
            $stok_barang = $_POST['stok_barang']; 
            $harga_barang = $_POST['harga_barang']; 
        
            $info_tambah = $lib->add_brg($kd_barang,$nama_barang,$satuan_barang,$stok_barang,$harga_barang);
            if($info_tambah){
            header('Location: index.php');
            }
        }
    ?>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>Tambah Data Barang</h3>
            </div>
            <div class="card-body">
            <form method="post" action="">
            <div class="form-group row">
                    <label for="kd_barang" class="col-sm-2 col-form-label">KD Barang</label>
                    <div class="col-sm-10">
                    <input type="text" name="kd_barang" class="form-control" id="kd_barang" placeholder="Masukkan KD Barang" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama_barang" class="col-sm-2 col-form-label">Nama Barang</label>
                    <div class="col-sm-10">
                    <input type="text" name="nama_barang" class="form-control" id="nama_barang"  placeholder="Masukkan nama_barang" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="satuan_barang"><span class="glyphicon glyphicon-star"></span> Satuan Barang</label><br>
                    <select name="satuan_barang" class="form-select" id="default-select">
                        <option disabled selected> Pilih </option>
                        <option value="PCS">PCS</option> 
                        <option value="Boto">Botol</option>
                    </select>
                </div>
                <div class="form-group row">
                    <label for="stok_barang" class="col-sm-2 col-form-label">Stok Barang</label>
                    <div class="col-sm-10">
                    <input type="number" class="form-control" name="stok_barang" id="stok_barang" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="stok_barang" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                <div class="form-group row">
                    <label for="harga_barang" class="col-sm-2 col-form-label">Harga Barang</label>
                    <div class="col-sm-10">
                    
                    <input type="number" name="harga_barang" class="form-control" id="harga_barang"  placeholder="Masukkan harga_barang" required>
                    </div>
                </div>
                    <input type="submit" name="tambah" class="btn btn-primary" value="Tambah">
                    <input type="reset" name="reset" class="btn btn-default" value="Reset"><br><hr>
                    <a href="index.php"><-- Kembali Tabel Data Barang</a>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
    </body>
</body>
</html>