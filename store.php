3<?php
//include con database
include './config.php';

//mengambil data yang di kirim dari form
$nama_buku = $_POST['nama'];
$kategori_buku = $_POST['kategori'];
$penerbit = $_POST['penerbit'];
$harga = $_POST['harga'];
$probabilitas_diskon = $_POST['diskon'];

//input data ke database
mysqli_query($koneksi, "insert into uas values('','$nama_buku', '$kategori_buku', '$penerbit', '$harga', '$probabilitas_diskon')");
//return ke halaman awal
header("location: ./data.php");

