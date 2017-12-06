<?php
/**
 *
 */

include_once "../model/M_Produk.php";

class C_Edit_produk
{
    public $produk;

    function __construct(){
        $this->produk = new M_Produk();
    }

    function index($id_produk){
        $data = $this->produk->getDataproduk($id_produk);
        include_once "../view/v_edit_produk.php";
    }

    function editProduk($id_produk, $nama_produk, $deskripsi_produk, $kategori_produk, $harga_produk, $gambar_produk){
        $nama_file = $gambar_produk['name'];
        $tmp_file = $gambar_produk['tmp_name'];
        $path = "../img/".$nama_file;
        if(move_uploaded_file($tmp_file, $path)){
            $updated = $this->produk->editProduk($id_produk, $nama_produk, $deskripsi_produk, $kategori_produk, $harga_produk, $path);
        }
        else {
            $updated = $this->produk->editProduk2($id_produk, $nama_produk, $deskripsi_produk, $kategori_produk, $harga_produk);
        }
        if($updated){
            header("location:index.php");
        }
        else{
            echo '<script language="javascript">alert("nama produk yang anda masukan sudah digunakan");</script>';
        }
    }

    function editProdukAdmin($id_produk, $nama_produk, $deskripsi_produk, $kategori_produk, $harga_produk, $gambar_produk, $id_toko){
        $nama_file = $gambar_produk['name'];
        $tmp_file = $gambar_produk['tmp_name'];
        $path = "../img/".$nama_file;
        if(move_uploaded_file($tmp_file, $path)){
            $updated = $this->produk->editProduk($id_produk, $nama_produk, $deskripsi_produk, $kategori_produk, $harga_produk, $path);
        }
        else {
            $updated = $this->produk->editProduk2($id_produk, $nama_produk, $deskripsi_produk, $kategori_produk, $harga_produk);
        }
        if($updated){
            header("location:index.php?a_toko=$id_toko");
        }
        else{
            echo '<script language="javascript">alert("nama produk yang anda masukan sudah digunakan");</script>';
        }
    }
}

?>
