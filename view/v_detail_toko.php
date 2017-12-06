<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <title>Detail Toko</title>
        <link rel="stylesheet" href="../asset/css/bootstrap.min.css">
        <link rel="stylesheet" href="../asset/css/custom.css">
        <script type="text/javascript" src="../asset/js/jquery-1.10.1.min.js"></script>
        <script type="text/javascript" src="../asset/js/bootstrap.min.js"></script>
    </head>

    <body>

        <!-- memanggil header -->
        <?php include_once 'header-default.php'; ?>
        <div class="container">
        <!-- menampilkan detail toko -->
        <div class="col-md-7 product-detail ">
            <div class="well">
                <div class="jumbotron-photo det-toko">
                    <img  src="<?php echo $detail_toko['gambar_toko']; ?>" />
                </div>
                <div class="jumbotron-contents">
                    <h2>Nama Toko</h2>
                    <h1><?php echo $detail_toko['nama_toko'] ?></h1>
                    <h2>Pemilik</h2>
                    <p><?php echo $detail_toko['pemilik_toko'] ?></p>
                    <h2>Alamat</h2>
                    <p><?php echo $detail_toko['alamat_toko'] ?></p>
                    <h2>HP/Telp.</h2>
                    <p><?php echo $detail_toko['hp_toko'] ?></p>
                </div>
            </div>
        </div>

        <!-- menampikan daftar produk yang dimiliki toko tersebut -->
        <div class="col-sm-6 col-md-4 product-detail col-md-push-1 ">
            <h2 style="text-align:center;">Daftar Produk</h2>
            <?php
            foreach($produk_toko as $row){
            ?>
            <div class="col-sm-12">
                <div class="well">
                    <div class="row">
                        <div class="col-xs-4">
                            <img class="img-produk-det-toko" src="<?php echo $row['gambar_produk']; ?>">
                        </div>
                        <div class="col-xs-8">
                            <h4><a href="?produk=<?php echo $row['id_produk']; ?>"><?php echo $row['nama_produk']; ?></a></h4>
                            <h4>Rp <?php echo $row['harga_produk']; ?></h4>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            }
            ?>
        </div>

    </body>

</html>
