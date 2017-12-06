<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <title>Tambah Toko</title>
        <link rel="stylesheet" href="../asset/css/bootstrap.min.css">
        <link rel="stylesheet" href="../asset/css/custom.css">
        <script type="text/javascript" src="../asset/js/jquery-1.10.1.min.js"></script>
        <script type="text/javascript" src="../asset/js/bootstrap.min.js"></script>
    </head>
<div class="container">
    <?php include_once 'header-member.php'; ?>

    <body>

        <h2 class="form-tilte">Tambah Toko</h2>

        <!-- form tambah toko -->
        <form class="col-md-12" enctype="multipart/form-data" method="post">
            <div class="row">
                <div class="form-group col-md-4 col-md-push-1">
                    <label>Gambar</label>
                    <br/>
                    <img style="width: 200px;" id="preview_gambar" src="../img/no-image.png">
                    <input type="file" name="gambar_toko" onchange="readURL(this);">
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" placeholder="username" name="username">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" placeholder="password" name="password">
                    </div>
                    <div class="form-group">
                        <label>Nama Toko</label>
                        <input type="text" class="form-control" placeholder="nama toko" name="nama_toko">
                    </div>
                    <div class="form-group">
                        <label>Nama Pemilik</label>
                        <input type="text" class="form-control" placeholder="nama pemilik" name="pemilik_toko">
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" class="form-control" rows="3" placeholder="alamat" name="alamat_toko">
                    </div>
                    <div class="form-group">
                        <label>No.Telp/HP</label>
                        <input type="text" class="form-control" placeholder="no.telp/hp" name="hp_toko">
                    </div>
                    <button type="submit" class="btn btn-default" name="submit_toko">Submit</button>
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
