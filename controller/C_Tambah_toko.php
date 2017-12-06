<?php

include_once "../model/M_Toko.php";
include_once "../model/M_User.php";

class C_Tambah_toko{
    public $toko, $user;

    function __construct(){
        $this->toko = new M_Toko();
        $this->user = new M_User();
    }

    function index(){
        include_once "../view/v_tambah_toko.php";
    }

    function tambahToko($username, $password, $nama_toko, $pemilik_toko, $alamat_toko, $hp_toko, $gambar_toko){
        $password = md5($password);
        $nama_file = $gambar_toko['name'];
        $tmp_file = $gambar_toko['tmp_name'];
        $path = "../img/".$nama_file;
        $created = $this->user->tambahUser($username, $password);
        if($created){
            move_uploaded_file($tmp_file, $path);
            $id_user = $this->user->getIdbyuname($username);
            $this->toko->tambahToko($nama_toko, $pemilik_toko, $alamat_toko, $hp_toko, $id_user, $path);
            header("location:index.php");
        }
        else{
            echo '<script language="javascript">alert("username yang anda masukan sudah digunakan");</script>';
        }
    }
}

?>
