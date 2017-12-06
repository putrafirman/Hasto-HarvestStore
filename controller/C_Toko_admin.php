<?php

/**
 *
 */

//include class model
include_once "../model/M_Produk.php";
include_once "../model/M_Toko.php";
include_once '../model/M_User.php';

class C_Toko_admin
{

    public $toko, $produk, $user;

    //inisialisasi awal untuk class
    function __construct(){
        $this->produk = new M_Produk(); //variabel model merupakan objek baru yang dibuat dari class model
        $this->toko = new M_Toko();
        $this->user = new M_User();
    }

    function index($id_toko){
        $username = $this->user->getUsername($_SESSION['user']);
        $nama_toko = implode('', $this->toko->getNamatokobyidtoko($id_toko));
        $row = $this->produk->getProduktoko($id_toko);
        include_once "../view/v_toko_admin.php";
    }

    function getProdukList(){
        return $data  = $this->toko->getProdukList();
    }

    function hapusProduk($id_produk, $id_toko){
        $this->produk->hapusProduk($id_produk);
        header("location:index.php?a_toko=$id_toko");
    }

}

?>
