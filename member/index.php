<?php
ob_start();

//include beberapa class controller yang dibutuhkan
include "../controller/C_Member.php";
include "../controller/C_Tambah_produk.php";
include "../controller/C_Edit_produk.php";

//menginstansiasi dari class yang telah di-include
$member = new C_Member();
$tambah_produk = new C_Tambah_produk();
$edit_produk = new C_Edit_produk();

session_start();

//mengecek apakah user sudah login sebagai member
if($_SESSION['level']==2){

    //ketika tombol tambah produk diklik
    if(isset($_GET['tambah_produk'])){
        $tambah_produk->index();

        //ketika form tambah toko di-submit
        if(isset($_POST['submit_produk'])){
            $tambah_produk->tambahProduk($_POST['nama_produk'], $_POST['deskripsi_produk'], $_POST['kategori_produk'], $_POST['harga_produk'], $_FILES['gambar_produk']);
        }
    }

    //ketika tombol edit produk diklik
    else if(isset($_GET['edit_produk'])){
        $edit_produk->index($_GET['edit_produk']);

        //ketika form edit produk di-submit
        if(isset($_POST['submit_edit'])){
            $edit_produk->editProduk($_POST['id_produk'], $_POST['nama_produk'], $_POST['deskripsi_produk'], $_POST['kategori_produk'], $_POST['harga_produk'], $_FILES['gambar_produk']);
        }
    }

    //ketika awal login sebagai member
    else{
        $member->index();

        //ketika tombol hapus produk diklik
        if(isset($_POST['hapus'])){
            $member->hapusProduk($_POST['m_hapus_produk']);
        }

        //ketika tombol logout diklik
        if(isset($_GET['logout'])){
            $member->logout();
        }
    }
}

//jika user belum login
else{
    header("location:../index.php");
}

?>
