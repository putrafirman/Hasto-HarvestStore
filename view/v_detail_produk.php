<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <title>Detail Produk</title>
        <link rel="stylesheet" href="../asset/css/bootstrap.min.css">
        <link rel="stylesheet" href="../asset/css/custom.css">
        <script type="text/javascript" src="../asset/js/jquery-1.10.1.min.js"></script>
        <script type="text/javascript" src="../asset/js/bootstrap.min.js"></script>
    </head>

    <body>

        <!-- memanggil header -->
        <?php include_once 'header-default.php'; ?>
        <div class="container">
        <!-- menampilkan daetail produk -->
        <div class="col-md-6 product-detail col-md-push-1 well">
            <h2 style="margin-top:0px;"><?php echo $produk_data['nama_produk'] ?></h1>
            <div class="row">
                <div class="col-md-5">
                    <img class="img-det-produk" src="<?php echo $produk_data['gambar_produk']; ?>" />
                </div>
                <div class="col-md-7">
                    <h3 class="det-produk-text">Deskripsi</h2>
                    <p><?php echo $produk_data['deskripsi_produk'] ?></p>
                    <h3 class="det-produk-text">Harga</h2>
                    <p>Rp <?php echo $produk_data['harga_produk'] ?>/Kg</p>
                </div>
            </div>
        </div>

        <!-- menampilkan toko yang menjual produk tersebut -->
        <div class="col-sm-6 col-md-3 product-detail col-md-push-2">
            <div class="thumbnail">
                <img class="img-rounded" src="<?php echo $produk_data['gambar_toko']; ?>" >
                <div class="caption text-center">
                    <h3><a href="?toko=<?php echo $produk_data['id_toko'] ?>"><?php echo $produk_data['nama_toko'] ?></a></h3>
                    <p><i class="glyphicon glyphicon-user"> <?php echo $produk_data['pemilik_toko'] ?></i></p>
                    <p><i class="glyphicon glyphicon-map-marker"> <?php echo $produk_data['alamat_toko'] ?></i></p>
                    <p><i class="glyphicon glyphicon-earphone"> <?php echo $produk_data['hp_toko'] ?></i></p>
                </div>
            </div>
        </div>

    </body>

</html>
