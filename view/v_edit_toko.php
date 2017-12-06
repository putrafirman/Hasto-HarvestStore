<?php

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Edit Toko</title>
        <link rel="stylesheet" href="../asset/css/bootstrap.min.css">
        <link rel="stylesheet" href="../asset/css/custom.css">
        <script type="text/javascript" src="../asset/js/jquery-1.10.1.min.js"></script>
        <script type="text/javascript" src="../asset/js/bootstrap.min.js"></script>
    </head>

    <!-- memanggil header -->
    <div class="container">
    <?php include_once 'header-member.php'; ?>

    <body>

        <h2 class="form-tilte">Edit Toko</h2>

        <!-- form untuk mengubah data toko -->
        <form class="col-md-12" enctype="multipart/form-data" method="post">
            <div class="row">
                <div class="form-group col-md-4 col-md-push-1">
                    <label>Gambar</label>
                    <br/>
                    <img style="width: 200px;" id="preview_gambar" src="<?php echo $data['gambar_toko']; ?>">
                    <input type="file" name="gambar_toko" value="<?php echo $data['gambar_toko']; ?>" onchange="readURL(this);">
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Nama Toko</label>
                        <input type="text" class="form-control" placeholder="nama toko" name="nama_toko" value="<?php echo $data['nama_toko']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Nama Pemilik</label>
                        <input type="text" class="form-control" placeholder="nama pemilik" name="pemilik_toko" value="<?php echo $data['pemilik_toko']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" class="form-control" rows="3" placeholder="alamat" name="alamat_toko" value="<?php echo $data['alamat_toko']; ?>">
                    </div>
                    <div class="form-group">
                        <label>No.Telp/HP</label>
                        <input type="text" class="form-control" placeholder="no.telp/hp" name="hp_toko" value="<?php echo $data['hp_toko']; ?>">
                    </div>
                    <input type="hidden" name="id_toko" value="<?php echo $data['id_toko']; ?>">
                    <button type="button" class="btn btn-default" data-toggle="modal" data-target=".bs-example-modal-sm">Submit</button>
                </div>
            </div>

            <!-- konfirmasi mengubah data toko -->
            <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myModalLabel">Konfirmasi</h4>
                        </div>
                        <div class="modal-body">
                            <p>Apakah anda yakin data tersebut benar?</p>
                        </div>
                        <div class="modal-footer">
                            <div class="col-md-12">
                                <div class="col-md-6 col-md-pull-2">
                                    <button class="btn btn-success" type="submit" name="submit_edit">YA</button>
                                </div>
                                <div class="col-md-6">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">TIDAK</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </form>

    </body>

</html>

<script type="text/javascript">
    function run() {
        document.getElementById("kategori_terpilih").value = document.getElementById("kategori").value;
    }

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#preview_gambar').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
