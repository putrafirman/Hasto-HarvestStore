<?php
ob_start();

//include beberapa class controller yang dibutuhkan
include "../controller/C_Admin.php";
include "../controller/C_Tambah_toko.php";
include "../controller/C_Edit_toko.php";
include '../controller/C_Toko_admin.php';
include '../controller/C_Tambah_produk.php';
include '../controller/C_Edit_produk.php';

//menginstansiasi dari class yang telah di-include
$admin = new C_Admin();
$tambah_toko = new C_Tambah_toko();
$edit_toko = new C_Edit_toko();
$toko_admin = new C_Toko_admin();
$tambah_produk = new C_Tambah_produk();
$edit_produk = new C_Edit_produk();

session_start();

//mengecek apakah user sudah login sebagai admin
if($_SESSION['level']==1){

    //ketika tombol tambah toko (+) diklik
    if(isset($_GET['tambah_toko'])){
        $tambah_toko->index();

        //ketika form tambah toko di-submit
        if(isset($_POST['submit_toko'])){
            $tambah_toko->tambahToko($_POST['username'], $_POST['password'], $_POST['nama_toko'], $_POST['pemilik_toko'], $_POST['alamat_toko'], $_POST['hp_toko'], $_FILES['gambar_toko']);
        }
    }

    //ketika tombol edit toko diklik
    else if(isset($_GET['edit_toko'])){
        $edit_toko->index($_GET['edit_toko']);

        //ketika form edit toko di-submit
        if(isset($_POST['submit_edit'])){
            $edit_toko->editToko($_POST['id_toko'], $_POST['nama_toko'], $_POST['pemilik_toko'], $_POST['alamat_toko'], $_POST['hp_toko'], $_FILES['gambar_toko']);
        }
    }

    //ketika tombol tambah produk pada toko diklik
    else if(isset($_GET['a_toko']) && isset($_GET['tambah_produk'])){
        $tambah_produk->index();

        //ketika form tambah produk di-submit
        if(isset($_POST['submit_produk'])){
            $tambah_produk->tambahProdukAdmin($_POST['nama_produk'], $_POST['deskripsi_produk'], $_POST['kategori_produk'], $_POST['harga_produk'], $_GET['a_toko'], $_FILES['gambar_produk']);
        }
    }

    //ketika tombol edit produk diklik
    else if(isset($_GET['edit_produk']) && isset($_GET['a_toko'])){
        $edit_produk->index($_GET['edit_produk']);

        //ketika form edit produk di-submit
        if(isset($_POST['submit_edit'])){
            $edit_produk->editProdukAdmin($_POST['id_produk'], $_POST['nama_produk'], $_POST['deskripsi_produk'], $_POST['kategori_produk'], $_POST['harga_produk'], $_FILES['gambar_produk'], $_GET['a_toko']);
        }
    }

    //ketika tombol hapus produk diklik
    else if(isset($_GET['a_toko']) && isset($_POST['hapus'])) {
        $toko_admin->hapusProduk($_POST['m_hapus_produk'], $_GET['a_toko']);
    }

    //ketika link nama toko diklik
    else if (isset($_GET['a_toko'])) {
        $toko_admin->index($_GET['a_toko']);
    }

    //ketika awal login sebagai admin
    else{
        $admin->index();

        //ketika tombol hapus toko diklik
        if(isset($_POST['hapus'])){
            $admin->hapusToko($_POST['a_hapus_toko']);
        }

        //ketika tombol logout diklik
        if(isset($_GET['logout'])){
            $admin->logout();
        }
    }
}

//jika user belum login
else{
    header("location:../index.php");
}

?>
