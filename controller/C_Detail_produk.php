<?php

class C_Detail_produk{
    //variabel public
    public $produk;

    //inisialisasi awal untuk class
    function __construct(){
        $this->produk = new M_Produk(); //variabel model merupakan objek baru yang dibuat dari class model
    }

    function index($id){
        $produk_data  = $this->produk->getProdukdetail($id);
        include_once "../view/v_detail_produk.php";
    }

    function __destruct(){
    }
}

?>