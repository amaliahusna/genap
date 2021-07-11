<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <!-- nav start -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand fw-bold" href="data.php">Toko Buku</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link active" aria-current="page" href="data.php">Home</a>
                    <a class="nav-link" href="#">Features</a>
                    <a class="nav-link" href="#">Pricing</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- nav end -->

    <!-- edit start -->
    <?php
    //memanggil file config.php
    include 'config.php';
    //menangkap id yang di kirimkan melalui button detail
    $id = $_GET['id'];
    //melakukan quey untuk mendapatkan data mahasiswa berdasarkan $id
    $mahasiswa = mysqli_query($koneksi, "select * from uas where id='$id'");
    while ($data = mysqli_fetch_assoc($mahasiswa)) {
    ?>
        <div class="container mt-5">
            <p><a href="data.php">Home</a>/ Edit Mahasiswa / <?php echo $data['nama'] ?></p>
            <div class="card">
                <div class="card-body fw-bold">
                    <!-- membuat form dengan method post untuk memanggil file update.php -->
                    <form method="post" action="update.php">
                        <!-- input yang disembunyikan (hidden) untuk menyimpan id mahasiswa -->
                        <div class="mb-3">
                            <input type="hidden" class="form-control" name="id" value="<?php echo $data['id']; ?>">
                        </div>
                        <!-- input nama -->
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Buku</label>
                            <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama Buku" name="nama" value="<?php echo $data['nama']; ?>">
                        </div>
                        <!-- input kategori buku -->
                        <div class="mb-3">
                            <label for="kategori" class="form-label">Kategori Buku</label>
                            <input type="text" class="form-control" id="kategori" placeholder="Masukkan Kategori Buku" name="kategori" value="<?php echo $data['kategori']; ?>">
                        </div>
                        <!-- input penerbit -->
                        <div class="mb-3">
                            <label for="penerbit" class="form-label">Penerbit</label>
                            <input type="text" class="form-control" id="penerbit" placeholder="Masukkan Penerbit" name="penerbit" value="<?php echo $data['penerbit']; ?>">
                        </div>
                        <!-- input harga -->
                        <div class="mb-3">
                            <label for="harga" class="form-label">Harga</label>
                            <input type="text" class="form-control" id="harga" placeholder="Masukkan Harga" name="harga" value="<?php echo $data['harga']; ?>">
                        </div>
                        <!-- input probabilitas diskon -->
                        <div class="mb-3">
                            <label for="diskom" class="form-label">Probabilitas Diskon</label>
                            <input type="text" class="form-control" id="diskon" placeholder="Masukkan Probabilitas Diskon" name="diskon" value="<?php echo $data['diskon']; ?>">
                        </div>
                        <!-- Button update data  -->
                        <button type="submit" class="btn btn-primary" value="SIMPAN">Update</button>
                    </form>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
    <!-- edit end -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>