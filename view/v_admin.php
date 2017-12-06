<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Admin</title>
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
        <h2 class="filter">Daftar Toko <a class="btn btn-default" href="index.php?tambah_toko" role="button"><i class="glyphicon glyphicon-plus"></i></a></h2>

        <div class="col-md-12">
            <!-- menampilkan daftar toko -->
            <div class="list-produk">
                <?php

                foreach($row as $toko){

                ?>
                <div class="col-md-4">
                    <div class="well">
                        <div class="row">
                            <div class="col-sm-4">
                                <img class="img-well" src="<?php echo $toko['gambar_toko'] ?>">
                            </div>
                            <div class="col-sm-8">
                                <h4><a href="?a_toko=<?php echo $toko['id_toko']; ?>"><?php echo $toko['nama_toko']; ?></a></h4>
                                <h4><?php echo $toko['pemilik_toko'] ?></h4>
                                <div class="btn-group" role="group" aria-label="...">
									<button class="btn btn-danger" type="button" data-toggle="modal" data-target=".<?php echo $toko['id_toko']; ?>"><i class="glyphicon glyphicon-trash"></i></button>
									<a class="btn btn-default" href="?edit_toko=<?php echo $toko['id_toko'];?>"><i class="glyphicon glyphicon-edit"></i></a>
								</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- pesan konfirmasi ketika akan melakukan hapus toko -->
                <div class="modal fade <?php echo $toko['id_toko']; ?>" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel">Konfirmasi</h4>
                            </div>
                            <div class="modal-body">
                                <p>Apakah anda yakin ingin menghapus toko?</p>
                            </div>
                            <div class="modal-footer">
                                <div class="col-md-12">
                                    <form action="" method="post" class="col-md-6 col-md-pull-2">
                                        <input type="hidden" name="a_hapus_toko" value="<?php echo $toko['id_toko']; ?>">
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
