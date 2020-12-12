<?php
session_start();

$_SESSION['id_user']='';
$_SESSION['username']='';
$_SESSION['password']='';
$_SESSION['id_role']='';

unset($_SESSION['id_user']);
unset($_SESSION['username']);
unset($_SESSION['password']);
unset($_SESSION['id_role']);

session_unset();
session_destroy();
header('Location:../index.php');
?>