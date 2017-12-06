<?php

include_once '../model/M_Produk.php';
include_once '../model/M_Toko.php';

class C_Tambah_produk{
    public $produk, $toko;

    function __construct(){
        $this->produk = new M_Produk();
        $this->toko = new M_Toko();
    }

    function index(){
        include_once "../view/v_tambah_produk.php";
    }

    function getIdtoko($id_user){
        $id_toko = implode('', $this->toko->getIdbyuserid($id_user));
        return $id_toko;
    }

    function tambahProduk($nama_produk, $deskripsi_produk, $kategori_produk, $harga_produk, $gambar_produk){
        $nama_file = $gambar_produk['name'];
        $tmp_file = $gambar_produk['tmp_name'];
        $path = "../img/".$nama_file;
        $id_toko = $this->getIdtoko($_SESSION['user']);
        move_uploaded_file($tmp_file, $path);
        $created = $this->produk->tambahProduk($nama_produk, $deskripsi_produk, $kategori_produk, $harga_produk, $id_toko, $path);
        if($created){
            header("location:index.php");
        }
        else{
            echo '<script language="javascript">alert("produk sudah ada");</script>';
        }
    }

    function tambahProdukAdmin($nama_produk, $deskripsi_produk, $kategori_produk, $harga_produk, $id_toko, $gambar_produk){
        $nama_file = $gambar_produk['name'];
        $tmp_file = $gambar_produk['tmp_name'];
        $path = "../img/".$nama_file;
        move_uploaded_file($tmp_file, $path);
        $created = $this->produk->tambahProduk($nama_produk, $deskripsi_produk, $kategori_produk, $harga_produk, $id_toko, $path);
        if($created){
            header("location:index.php?a_toko=$id_toko");
        }
        else{
            echo '<script language="javascript">alert("produk sudah ada");</script>';
        }
    }

}

?>
