<?php
    $masuk = [
        [
            'username' => 'Anam',
            'password' => 'Anam2001',
            'level' => '1'
        ],
        [
            'username' => 'Adinda',
            'password' => 'Adinda123',
            'level' => '2'
        ],
        [
            'username' => 'dora',
            'password' => '12345',
            'level' => '2'
        ]
    ];
    
    foreach ($masuk as $data) {
            if ($_POST['username'] == $data['username']){
                if ($_POST['password'] == $data['password']){
                header("Location: index.html"); //Pindahkan Kehalaman Dashboard
                session_start();
                $_SESSION['username'] = $_POST['username'];
                $_SESSION['level'] = ($data['level'] == "1")?'Admin':'Kasir';
                die();
                }
                else{
                    echo "<script type='text/javascript'>alert('Password Tidak Benar');</script>";
                    echo "<script type='text/javascript'> window.location.href = 'login.html' </script>";
                } 
            } else {
            // Tampilkan Pesan Error
            echo "<script type='text/javascript'>alert('Username Tidak Benar');</script>";
            echo "<script type='text/javascript'> window.location.href = 'login.html' </script>";
            }

    }
        
?>