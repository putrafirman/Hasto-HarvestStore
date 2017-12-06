<?php
ob_start();

include "../controller/C_List_produk_user.php";
include "../controller/C_Detail_produk.php";
include "../controller/C_Detail_toko.php";
$produk = new C_List_produk_user();
$det_produk = new C_Detail_produk();
$det_toko = new C_Detail_toko();

session_start();
if(isset($_SESSION['user'])){
    header("../index.php");
}
else if(isset($_GET['produk'])){
    $det_produk->index($_GET['produk']);
}
else if(isset($_GET['toko'])){
    $det_toko->index($_GET['toko']);
}
else{
    if(isset($_GET['cari'])){
        $produk->cari($_GET['katakunci']);
    }
    else{
        if(!isset($_GET['filter'])){
            $_GET['filter']='Semua';
        }
        if(isset($_GET['filter'])){
            $produk->filter($_GET['filter']);
        }
    }

    if(isset($_GET['login'])){
        $produk->login();
    }


}

?>
