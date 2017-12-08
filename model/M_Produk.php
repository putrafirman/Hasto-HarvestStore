<?php

class M_Produk{

    public $db;

    //inisialisasi awal untuk class biasa disebut instansiasi
    function __construct(){
        $this->db = new PDO('mysql:host=localhost;dbname=hasto;', 'root', 'toor');
    }

    //fungsi untuk mendapatkan list produk yang akan ditampilkan pada v_list_produk_user
    function getProdukList(){
        $query = "select id_produk, gambar_produk, nama_produk, nama_toko, harga_produk from produk p join toko t on p.id_toko = t.id_toko";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    function getProduk($katakunci){
        $query = "select id_produk, gambar_produk, nama_produk, nama_toko, harga_produk from produk p join toko t on p.id_toko = t.id_toko where nama_produk like :nama";
        $stmt = $this->db->prepare($query);
        $stmt->execute(array(':nama'=>"%$katakunci%"));
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    function getProduktoko($id_toko){
        $query = "select id_produk, gambar_produk, nama_produk, harga_produk from produk where id_toko=:id";
        $stmt = $this->db->prepare($query);
        $stmt->execute(array(':id'=>$id_toko));
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    //fungsi untuk mendapatkan list produk sesuai kategori
    function selectKategori($kategori){
        $query = "select id_produk, gambar_produk, nama_produk, nama_toko, harga_produk from produk p join toko t on p.id_toko = t.id_toko where kategori_produk=:kategori";
        $stmt = $this->db->prepare($query);
        $stmt->execute(array(':kategori'=>$kategori));
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    function getProdukdetail($id){
        $query = "select id_produk, gambar_produk, nama_produk, deskripsi_produk, harga_produk, p.id_toko, nama_toko, pemilik_toko, alamat_toko, hp_toko, gambar_toko from produk p join toko t on p.id_toko = t.id_toko where id_produk=:id";
        $stmt = $this->db->prepare($query);
        $stmt->execute(array(':id'=>$id));
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    function tambahProduk($nama_produk, $deskripsi_produk, $kategori_produk, $harga_produk, $id_toko, $gambar_produk){
        $query = "insert into produk (nama_produk, deskripsi_produk, kategori_produk, harga_produk, id_toko, gambar_produk) values (:nama_produk, :deskripsi_produk, :kategori_produk, :harga_produk, :id_toko, :gambar_produk)";
		$stmt = $this->db->prepare($query);
        $stmt->bindValue(':nama_produk', $nama_produk);
        $stmt->bindValue(':deskripsi_produk', $deskripsi_produk);
        $stmt->bindValue(':kategori_produk', $kategori_produk);
        $stmt->bindValue(':harga_produk', $harga_produk);
        $stmt->bindValue(':id_toko', $id_toko);
        $stmt->bindValue(':gambar_produk', $gambar_produk);
        $inserted = $stmt->execute();
        return $inserted;
    }

    function getDataproduk($id_produk){
        $query = "select id_produk, nama_produk, deskripsi_produk, kategori_produk, harga_produk, gambar_produk from produk where id_produk=:id_produk";
        $stmt = $this->db->prepare($query);
        $stmt->execute(array(':id_produk'=>$id_produk));
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row;
    }

    function editProduk($id_produk, $nama_produk, $deskripsi_produk, $kategori_produk, $harga_produk, $gambar_produk){
        $query = "update produk set nama_produk=:nama_produk, deskripsi_produk=:deskripsi_produk, kategori_produk=:kategori_produk, harga_produk=:harga_produk, gambar_produk=:gambar_produk where id_produk=:id_produk";
		$stmt = $this->db->prepare($query);
        $stmt->bindValue(':nama_produk', $nama_produk);
        $stmt->bindValue(':deskripsi_produk', $deskripsi_produk);
        $stmt->bindValue(':kategori_produk', $kategori_produk);
        $stmt->bindValue(':harga_produk', $harga_produk);
        $stmt->bindValue(':gambar_produk', $gambar_produk);
        $stmt->bindValue(':id_produk', $id_produk);
        $updated = $stmt->execute();
        return $updated;
    }

    function editProduk2($id_produk, $nama_produk, $deskripsi_produk, $kategori_produk, $harga_produk){
        $query = "update produk set nama_produk=:nama_produk, deskripsi_produk=:deskripsi_produk, kategori_produk=:kategori_produk, harga_produk=:harga_produk where id_produk=:id_produk";
		$stmt = $this->db->prepare($query);
        $stmt->bindValue(':nama_produk', $nama_produk);
        $stmt->bindValue(':deskripsi_produk', $deskripsi_produk);
        $stmt->bindValue(':kategori_produk', $kategori_produk);
        $stmt->bindValue(':harga_produk', $harga_produk);
        $stmt->bindValue(':id_produk', $id_produk);
        $updated = $stmt->execute();
        return $updated;
    }

    function hapusProduk($id_produk){
        $query = "delete from produk where id_produk=$id_produk";
        $stmt = $this->db->prepare($query);
        $deleted = $stmt->execute();
        return $deleted;
    }

}

?>
