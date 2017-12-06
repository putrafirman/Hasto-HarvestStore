<?php
//include class model user
include_once "../model/M_User.php";

class C_Login{
    //variabel public
    public $user;

    //inisialisasi awal untuk class
    function __construct(){
        $this->user = new M_User(); //variabel model merupakan objek baru yang dibuat dari class model
    }

    function index(){
        include_once "../view/v_login.php";
    }

    function login($username, $password){
        $password = md5($password);
        $reslt = $this->user->login($username, $password); // it call the getlogin() function of model class and store the return value of this function into the reslt variable.
        if($reslt!=null){
            session_start();
            $_SESSION['user']=$reslt['id_user'];
            $_SESSION['level']=$reslt['level'];
            header("location:../index.php");
        }
        else{
            echo '<script language="javascript">alert("username atau password salah!");</script>';
        }
    }
}
?>
