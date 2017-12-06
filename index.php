<?php
ob_start();

//cek telah login atau tidak dan login sebagai apa
session_start();
if(isset($_SESSION['level'])){
    if($_SESSION['level']==1){
        header("location:admin/index.php");
    }
    else{
        header("location:member/index.php");
    }
}
else{
    header("location:produk/index.php");
}


?>
