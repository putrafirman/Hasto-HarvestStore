<?php

class M_Toko{

    public $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;dbname=hasto;', 'root', '');
    }

    function getNamatoko($id_user){
        $query = "select nama_toko from toko where id_user=:id";
        $stmt = $this->db->prepare($query);
        $stmt->execute(array(':id'=>$id_user));
        $nama_toko = $stmt->fetch(PDO::FETCH_ASSOC);
        return $nama_toko;
    }

    function getNamatokobyidtoko($id_toko)
    {
        $query = "select nama_toko from toko where id_toko=:id";
        $stmt = $this->db->prepare($query);
        $stmt->execute(array(':id'=>$id_toko));
        $nama_toko = $stmt->fetch(PDO::FETCH_ASSOC);
        return $nama_toko;
    }

    function getIdbyuserid($id_user){
        $query = "select id_toko from toko where id_user=:id";
        $stmt = $this->db->prepare($query);
        $stmt->execute(array(':id'=>$id_user));
        $id_toko = $stmt->fetch(PDO::FETCH_ASSOC);
        return $id_toko;
    }

    function getTokoList(){
        $query = "select id_toko, gambar_toko, nama_toko, pemilik_toko from toko";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    function getDatatoko($id_toko){
        $query = "select id_toko, nama_toko, pemilik_toko, alamat_toko, hp_toko, gambar_toko from toko where id_toko=:id";
        $stmt = $this->db->prepare($query);
        $stmt->execute(array(':id'=>$id_toko));
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row;
    }

    function tambahToko($nama_toko, $pemilik_toko, $alamat_toko, $hp_toko, $id_user, $gambar_toko){
        $query = "insert into toko (nama_toko, pemilik_toko, alamat_toko, hp_toko, id_user, gambar_toko) values (:nama_toko, :pemilik_toko, :alamat_toko, :hp_toko, :id_user, :gambar_toko)";
		$stmt = $this->db->prepare($query);
        $stmt->bindValue(':nama_toko', $nama_toko);
        $stmt->bindValue(':pemilik_toko', $pemilik_toko);
        $stmt->bindValue(':alamat_toko', $alamat_toko);
        $stmt->bindValue(':hp_toko', $hp_toko);
        $stmt->bindValue(':id_user', $id_user);
        $stmt->bindValue(':gambar_toko', $gambar_toko);
        $inserted = $stmt->execute();
        return $inserted;
    }

    function editToko($id_toko, $nama_toko, $pemilik_toko, $alamat_toko, $hp_toko, $gambar_toko){
        $query = "update toko set nama_toko=:nama_toko, pemilik_toko=:pemilik_toko, alamat_toko=:alamat_toko, hp_toko=:hp_toko, gambar_toko=:gambar_toko where id_toko=:id";
		$stmt = $this->db->prepare($query);
        $stmt->bindValue(':nama_toko', $nama_toko);
        $stmt->bindValue(':pemilik_toko', $pemilik_toko);
        $stmt->bindValue(':alamat_toko', $alamat_toko);
        $stmt->bindValue(':hp_toko', $hp_toko);
        $stmt->bindValue(':gambar_toko', $gambar_toko);
        $stmt->bindValue(':id', $id_toko);
        $updated = $stmt->execute();
        return $updated;
    }

    function editToko2($id_toko, $nama_toko, $pemilik_toko, $alamat_toko, $hp_toko){
        $query = "update toko set nama_toko=:nama_toko, pemilik_toko=:pemilik_toko, alamat_toko=:alamat_toko, hp_toko=:hp_toko where id_toko=:id";
		$stmt = $this->db->prepare($query);
        $stmt->bindValue(':nama_toko', $nama_toko);
        $stmt->bindValue(':pemilik_toko', $pemilik_toko);
        $stmt->bindValue(':alamat_toko', $alamat_toko);
        $stmt->bindValue(':hp_toko', $hp_toko);
        $stmt->bindValue(':id', $id_toko);
        $updated = $stmt->execute();
        return $updated;
    }

    function getUserbyid($id_toko){
        $query = "select id_user from toko where id_toko=:id";
        $stmt = $this->db->prepare($query);
        $stmt->execute(array(':id'=>$id_toko));
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row['id_user'];
    }

}

?>
