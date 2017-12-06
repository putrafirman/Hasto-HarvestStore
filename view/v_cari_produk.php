<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Harvest Store</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link rel="stylesheet" href="../asset/css/bootstrap.min.css">
        <link rel="stylesheet" href="../asset/css/custom.css">
        <script type="text/javascript" src="../asset/js/jquery-1.10.1.min.js"></script>
        <script type="text/javascript" src="../asset/js/bootstrap.min.js"></script>
    </head>

    <!-- memanggil header -->
    <?php include_once 'header-default.php'; ?>
<div class="container">
    <body>

        <div class="col-md-12">

            <!-- form pencarian -->
            <div class="row">
                <div class="col-md-4 col-md-push-4">
                        <form method="get" class="input-group">
                            <input type="text" class="form-control" placeholder="Cari produk..." name="katakunci">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="submit" name="cari">Go!</button>
                            </span>
                        </form>
                </div>
            </div>

            <!-- menampilkan kata kunci yang dicari -->
            <div style="margin-top:30px; margin-left:20px;">
                <h4>Hasil pencarian untuk "<?php echo $_GET['katakunci']; ?>"</h4>
            </div>

            <!-- menampilkan hasil pencarian -->
            <div class="list-produk">
                <?php

                foreach($row as $produk){

                ?>
                <div class="col-md-4">
                    <div class="well">
                        <div class="row">
                            <div class="col-xs-4">
                                <img class="img-well" src="<?php echo $produk['gambar_produk'] ?>">
                            </div>
                            <div class="col-xs-8">
                                <h4><a href="?produk=<?php echo $produk['id_produk']; ?>"><?php echo $produk['nama_produk']; ?></a></h4>
                                <h4>Rp <?php echo $produk['harga_produk']; ?></h4>
                                <h4><?php echo $produk['nama_toko']; ?></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>

        </div>

    </body>

</html>
