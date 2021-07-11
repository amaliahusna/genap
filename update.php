<?php
//include con database
include './config.php';

//mengambil data yang di kirim dari form
$nama_buku = $_POST['nama'];
$kategori_buku = $_POST['kategori'];
$penerbit = $_POST['penerbit'];
$harga = $_POST['harga'];
$probabilitas_diskon = $_POST['diskon'];

$id=$_POST['id'];
//update data ke database
mysqli_query($koneksi, "update uas set nama='$nama_buku', kategori = '$kategori_buku', penerbit = '$penerbit', harga = '$harga', diskon = '$probabilitas_diskon' where id = '$id'");
//return ke halaman awal
header("location: data.php");