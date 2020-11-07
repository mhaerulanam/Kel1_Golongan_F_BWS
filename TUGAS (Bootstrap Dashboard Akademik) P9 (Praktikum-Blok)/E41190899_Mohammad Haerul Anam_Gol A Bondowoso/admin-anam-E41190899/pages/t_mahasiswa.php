<?php
    // Check If form submitted, insert form data into users table.
    if(isset($_POST['submit'])) {
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $ttl = $_POST['date'];
        $agama = $_POST['agama'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        // include database connection file
        include_once("koneksi.php");

        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO mahasiswa(nim,nama,ttl,agama,username,password) VALUES('$nim','$nama','$ttl','$agama','$username','$password')");

        // Show message when user added
        echo "User added successfully. <a href='tabel mahasiswa.php'>View Users</a>";
    }
?>