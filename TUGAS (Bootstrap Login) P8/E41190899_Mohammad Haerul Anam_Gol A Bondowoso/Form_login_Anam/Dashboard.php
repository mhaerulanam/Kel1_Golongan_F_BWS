<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <script>
        alert ("<?php echo ($_SESSION['username']);?>, Selamat Anda Berhasil Log in sebagai <?php echo ($_SESSION['level']);?>");    
    </script>
    <center><h1>Selamat Datang</h1><a href="./Login.php"><- Kembali</a></center>
</body>
</html>

