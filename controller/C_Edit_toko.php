<?php

include_once "../model/M_Toko.php";

class C_Edit_toko{
    public $toko;

    function __construct(){
        $this->toko = new M_Toko();
    }

    function index($id_toko){
        $data = $this->toko->getDatatoko($id_toko);
        include_once "../view/v_edit_toko.php";
    }

    function editToko($id_toko, $nama_toko, $pemilik_toko, $alamat_toko, $hp_toko, $gambar_toko){
        $nama_file = $gambar_toko['name'];
        $tmp_file = $gambar_toko['tmp_name'];
        $path = "../img/".$nama_file;
        if(move_uploaded_file($tmp_file, $path)){
            $updated = $this->toko->editToko($id_toko, $nama_toko, $pemilik_toko, $alamat_toko, $hp_toko, $path);
        }
        else {
            $updated = $this->toko->editToko2($id_toko, $nama_toko, $pemilik_toko, $alamat_toko, $hp_toko);
        }
        if($updated){
            header("location:index.php");
        }
        else{
            echo '<script language="javascript">alert("username yang anda masukan sudah digunakan");</script>';
        }
    }
}

?>
