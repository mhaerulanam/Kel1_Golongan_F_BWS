<?php
    $login =  [ //Mendeklarasikan array yang akan digunakan sebagai akun user/admin
        [
            'username' => "defitamara",
            'password' => "12345",
            'level' => "1" //Pembeda user dan admin adalah pada levelnya. Admin ditandai level 1, 
        ],                  // dan User ditandai level 0
        [
            'username' => "defi",
            'password' => "54321",
            'level' => "0"
        ],
        [
            'username' => "tamara",
            'password' => "123",
            'level' => "1"
        ]
    ];
    foreach($login as $data){
        if($_POST['user'] == $data['username'] && $_POST['pass'] == $data['password']){
                session_start();
                $_SESSION['user'] = $_POST['user'];
                $_SESSION['level'] = ($data['level']=="1")?'Admin':'User'; //Disini merupakan penentuan. jika 
                header("Location: dashboard.php");                          //level = 1 maka Admin. Jika bukan maka User
        }else {
            echo "Username atau password salah <br>";
            // die();
        }    
    }
?>