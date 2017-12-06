<?php
ob_start();

//include class controller yang dibutuhkan
include_once "../controller/C_Login.php";

//menginstansiasi dari class yang telah di-include
$login = new C_Login();

session_start();

//
if(isset($_SESSION['user'])){
    header("../index.php");
}

//
else{
    $login->index();

    //
    if(isset($_POST['login'])){
        $login->login($_POST['username'], $_POST['password']);
    }
}

?>
