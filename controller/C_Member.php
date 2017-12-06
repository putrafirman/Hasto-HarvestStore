<?php

//include class model
include_once "../model/M_Produk.php";
include_once "../model/M_Toko.php";

class C_Member{
    //variabel public
    public $toko, $produk;

    //inisialisasi awal untuk class
    function __construct(){
        $this->produk = new M_Produk(); //variabel model merupakan objek baru yang dibuat dari class model
        $this->toko = new M_Toko();
    }

    function index(){
        $username = implode('', $this->toko->getNamatoko($_SESSION['user']));
        $id_toko = implode('', $this->toko->getIdbyuserid($_SESSION['user']));
        $row = $this->produk->getProduktoko($id_toko);
        include_once "../view/v_member.php";
    }

    function getProdukList(){
        return $data  = $this->toko->getProdukList();
    }

    function hapusProduk($id_produk){
        $delproduk = $this->produk->hapusProduk($id_produk);
        header("location:index.php");
    }

    function logout(){
        session_destroy();
        header("location:../index.php");
    }

}

?>
