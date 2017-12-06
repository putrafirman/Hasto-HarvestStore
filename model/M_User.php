<?php

class M_User{

    public $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;dbname=hasto;', 'root', '');
    }

    function login($username, $password){
        $query = "select * from user where username=:username and password=:password";
		$stmt = $this->db->prepare($query);
        $stmt->execute(array(':username'=>$username, ':password'=>$password));
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    function getUsername($id){
        $query = "select username from user where id_user=:id";
		$stmt = $this->db->prepare($query);
        $stmt->execute(array(':id'=>$id));
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row['username'];
    }

    function tambahUser($username, $password){
        $query = "insert into user (username, password, level) values (:uname, :pass, :lv)";
		$stmt = $this->db->prepare($query);
        $stmt->bindValue(':uname', $username);
        $stmt->bindValue(':pass', $password);
        $stmt->bindValue(':lv', 2);
        return $stmt->execute();
    }

    function getIdbyuname($uname){
        $query2 = "select id_user from user where username=:uname";
        $stmt2 = $this->db->prepare($query2);
        $stmt2->execute(array(':uname'=>$uname));
        $row = $stmt2->fetch(PDO::FETCH_ASSOC);
        return $row['id_user'];
    }

    function hapusUser($id){
        $query = "delete from user where id_user=$id";
        $stmt = $this->db->prepare($query);
        $deleted = $stmt->execute();
        return $deleted;
    }

}

?>
