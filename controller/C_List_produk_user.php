<?php

//include class model
include_once "../model/M_Produk.php";
include_once "../model/M_Toko.php";

class C_List_produk_user{
    //variabel public
    public $produk, $toko;

    //inisialisasi awal untuk class
    function __construct(){
        $this->produk = new M_Produk(); //variabel model merupakan objek baru yang dibuat dari class model
    }

    function index(){
        $row  = $this->produk->getProdukList();
        include_once "../view/v_list_produk_user.php";
    }

    function filter($kategori){
        if($kategori=='Semua'){
            $row = $this->produk->getProdukList();
            include_once "../view/v_list_produk_user.php";
        }
        else{
            $row = $this->produk->selectKategori($kategori);
            include_once "../view/v_list_produk_user.php";
        }
    }
    
    function cari($katakunci){
        $row = $this->produk->getProduk($katakunci);
        include_once "../view/v_cari_produk.php";
    }
    
    function login(){
        header("location:../login/index.php");
    }

    function __destruct(){
    }
}

?>