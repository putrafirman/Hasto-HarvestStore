<?php

//include class model
include_once "../model/M_Toko.php";
include_once "../model/M_User.php";

class C_Admin{
    //variabel public
    public $toko, $user;

    //inisialisasi awal untuk class
    function __construct(){
        $this->toko = new M_Toko(); //variabel model merupakan objek baru yang dibuat dari class model
        $this->user = new M_User();
    }

    function index(){
        $username = $this->getUsername($_SESSION['user']);
        $row = $this->getTokoList();
        include_once "../view/v_admin.php";
    }

    function getUsername($id){
        $reslt = $this->user->getUsername($id);
        return $reslt;
    }

    function getTokoList(){
        return $data  = $this->toko->getTokoList();
    }

    function hapusToko($id){
        $id_user = $this->toko->getUserbyid($id);
        $deluser = $this->user->hapusUser($id_user);
        header("location:index.php");
    }

    function logout(){
        session_destroy();
        header("location:../index.php");
    }

}

?>
