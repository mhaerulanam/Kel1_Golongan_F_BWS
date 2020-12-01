<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat CRUD dengan PHP dan MYSQL - Menampilkan dari data Database (Anam)</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="judul">
        <h1>Membuat CRUD dengan PHP dan MYSQl</h1>
        <h2>Menampilkan dari Database</h2>
    </div>

    <br>
    <div class="box-input">
    <a href="index.php" class="tombol"><-- Lihat  Semua Data</a>
    <br>
    <h3>Input Data Baru</h3>
    <form action="input-aksi.php" method="POST">
        <table>
            <tr>
                <td>Nama  </td>
                <td><input type="text" name="nama" placeholder="Masukkan Nama" required></td>
            </tr>
            <tr>
                <td>Alamat   </td>
                <td><input type="text" name="alamat" placeholder="Masukkan alamat" required></td>
            </tr>
            <tr>
                <td>Pekerjaan   </td>
                <td><input type="text" name="pekerjaan" placeholder="Masukkan pekerjaan" required></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Simpan">
                <input type="reset" value="Reset"></td>
            </tr>
        </table>
        </div>
    </form>
</body>
</html>