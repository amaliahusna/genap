<?php

//koneksi ke database (" ", merupakan pass phpmyadmin)

$koneksi = mysqli_connect("localhost", "root", "", "uas");

//cek koneksi ke database
//jika error

if(mysqli_connect_errno()){
    echo "Error connecting : " . mysqli_connect_error();
}