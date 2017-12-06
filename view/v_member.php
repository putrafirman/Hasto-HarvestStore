<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Member</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link rel="stylesheet" href="../asset/css/bootstrap.min.css">
        <link rel="stylesheet" href="../asset/css/custom.css">
        <script type="text/javascript" src="../asset/js/jquery-1.10.1.min.js"></script>
        <script type="text/javascript" src="../asset/js/bootstrap.min.js"></script>
    </head>

    <!-- memanggil header -->
    <div class="container">
    <?php include_once 'header-member.php'; ?>

    <body>

        <!-- menampilkan nama user -->
        <h1 class="filter">Selamat Datang, <?php echo $username; ?></h1>
        <h2 class="filter">Daftar Produk <a class="btn btn-default" href="index.php?tambah_produk" role="button"><i class="glyphicon glyphicon-plus"></i></a></h2>

        <div class="col-md-12">

            <!-- menampilkan daftar produk yang dimiliki oleh toko tersebut -->
            <div class="list-produk">
                <?php

                foreach($row as $produk){

                ?>
                <div class="col-md-4">
                    <div class="well">
                        <div class="row">
                            <div class="col-sm-4">
                                <img class="img-well" src="<?php echo $produk['gambar_produk'] ?>">
                            </div>
                            <div class="col-sm-8">
                                <h4><a href=""><?php echo $produk['nama_produk']; ?></a></h4>
                                <h4>Rp <?php echo $produk['harga_produk'] ?></h4>
                                <div class="btn-group" role="group">
									<button class="btn btn-danger" type="button" data-toggle="modal" data-target=".<?php echo $produk['id_produk']; ?>"><i class="glyphicon glyphicon-trash"></i></button>
									<a class="btn btn-default" href="?edit_produk=<?php echo $produk['id_produk'];?>"><i class="glyphicon glyphicon-edit"></i></a>
								</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- konfirmasi untuk menghapus produk -->
                <div class="modal fade <?php echo $produk['id_produk']; ?>" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel">Konfirmasi</h4>
                            </div>
                            <div class="modal-body">
                                <p>Apakah anda yakin ingin menghapus produk?</p>
                            </div>
                            <div class="modal-footer">
                                <div class="col-md-12">
                                    <form action="" method="post" class="col-md-6 col-md-pull-2">
                                        <input type="hidden" name="m_hapus_produk" value="<?php echo $produk['id_produk']; ?>">
                                        <button class="btn btn-danger" type="submit" role="button" name="hapus">YA</button>
                                    </form>
                                    <div class="col-md-6">
                                        <button type="button" class="btn btn-success" data-dismiss="modal">TIDAK</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>

        </div>

    </body>

</html>
