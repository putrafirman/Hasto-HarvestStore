<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <title>Edit Produk</title>
        <link rel="stylesheet" href="../asset/css/bootstrap.min.css">
        <link rel="stylesheet" href="../asset/css/custom.css">
        <script type="text/javascript" src="../asset/js/jquery-1.10.1.min.js"></script>
        <script type="text/javascript" src="../asset/js/bootstrap.min.js"></script>
    </head>

    <!-- memanggil header -->
    <div class="container">
    <?php include_once 'header-member.php'; ?>

    <body>

        <h2 class="form-tilte">Edit Produk</h2>

        <!-- form untuk mengubah produk -->
        <form method="post" class="col-md-12" enctype="multipart/form-data" runat="server" id="tambah_produk">
            <div class="row">
                <div class="form-group col-md-4 col-md-push-1">
                    <label>Gambar</label>
                    <br/>
                    <img style="width: 200px;" id="preview_gambar" src="<?php echo $data['gambar_produk'];?>">
                    <input type="file" name="gambar_produk" id="input_gambar" onchange="readURL(this);">
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Nama Produk</label>
                        <input type="text" class="form-control" placeholder="nama produk" name="nama_produk" value="<?php echo $data['nama_produk'];?>">
                    </div>
                    <div class="form-group">
                        <label>Deskripsi</label>
                        <textarea class="form-control" rows="3" name="deskripsi_produk" form="tambah_produk"><?php echo $data['deskripsi_produk']; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="kategori">Kategori</label>
                        <select class="form-control" id="kategori" onchange="run()">
                            <option <?php if($data['kategori_produk'] == 'buah'){echo("selected");}?> value="buah">Buah</option>
                            <option <?php if($data['kategori_produk'] == 'sayur'){echo("selected");}?> value="sayur">Sayur</option>
                            <option <?php if($data['kategori_produk'] == 'umbi'){echo("selected");}?> value="umbi">Umbi</option>
                            <option <?php if($data['kategori_produk'] == 'biji'){echo("selected");}?> value="biji">Biji-bijian</option>
                        </select>
                        <input type="hidden" name="kategori_produk" id="kategori_terpilih" value="<?php echo $data['kategori_produk'];?>">
                    </div>
                    <div class="form-group">
                        <label>Harga</label>
                        <div class="input-group">
                            <div class="input-group-addon">Rp</div>
                            <input type="number" class="form-control" placeholder="Harga" name="harga_produk" value="<?php echo $data['harga_produk'];?>">
                            <div class="input-group-addon">,00</div>
                        </div>
                    </div>
                    <input type="hidden" name="id_produk" value="<?php echo $data['id_produk']; ?>">
                    <button type="button" class="btn btn-default" data-toggle="modal" data-target=".bs-example-modal-sm">Submit</button>
                </div>
            </div>

            <!-- konfirmasi untuk mengubah produk -->
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
