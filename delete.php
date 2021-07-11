<?php
include 'config.php';

$id = $_GET['id'];

mysqli_query($koneksi, "delete from uas where id ='$id'");

//mengalihkan halaman ke index.php
header("location: data.php");

?>