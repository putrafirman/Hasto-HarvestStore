<?php

class C_Detail_toko{
    //variabel public
    public $toko, $produk;

    //inisialisasi awal untuk class
    function __construct(){
        $this->toko = new M_Toko();
        $this->produk = new M_Produk(); //variabel model merupakan objek baru yang dibuat dari class model
    }

    function index($id_toko){
        $detail_toko = $this->toko->getDatatoko($id_toko);
        $produk_toko = $this->produk->getProduktoko($id_toko);
        include_once "../view/v_detail_toko.php";
    }

    function __destruct(){
    }
}

?>