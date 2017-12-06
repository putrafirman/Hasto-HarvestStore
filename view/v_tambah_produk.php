<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <title>Tambah Produk</title>
        <link rel="stylesheet" href="../asset/css/bootstrap.min.css">
        <link rel="stylesheet" href="../asset/css/custom.css">
        <script type="text/javascript" src="../asset/js/jquery-1.10.1.min.js"></script>
        <script type="text/javascript" src="../asset/js/bootstrap.min.js"></script>
    </head>

    <!-- memanggil header -->
    <div class="container">
    <?php include_once 'header-member.php'; ?>
    </div>
    <body>
<div class="container">
        <h2 class="form-tilte">Tambah Produk</h2>

        <!-- form tambah produk -->
        <form method="post" class="col-md-12" enctype="multipart/form-data" runat="server" id="tambah_produk">
            <div class="row">
                <div class="form-group col-md-4 col-md-push-1">
                    <label>Gambar</label>
                    <br/>
                    <img style="width: 200px;" id="preview_gambar" src="../img/no-image.png">
                    <input type="file" name="gambar_produk" onchange="readURL(this);">
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Nama Produk</label>
                        <input type="text" class="form-control" placeholder="nama produk" name="nama_produk">
                    </div>
                    <div class="form-group">
                        <label>Deskripsi</label>
                        <textarea class="form-control" rows="3" name="deskripsi_produk" form="tambah_produk"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="kategori">Kategori</label>
                        <select class="form-control" id="kategori" onchange="run()">
                            <option value="buah">Buah</option>
                            <option value="sayur">Sayur</option>
                            <option value="umbi">Umbi</option>
                            <option value="biji">Biji-bijian</option>
                        </select>
                        <input type="hidden" name="kategori_produk" id="kategori_terpilih" value="buah">
                    </div>
                    <div class="form-group">
                        <label>Harga</label>
                        <div class="input-group">
                            <div class="input-group-addon">Rp</div>
                            <input type="number" class="form-control" placeholder="Harga" name="harga_produk">
                            <div class="input-group-addon">,00</div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-default" name="submit_produk">Submit</button>
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
