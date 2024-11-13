<?php

//deklasrasi variabel
$db_host = "localhost"; //menyimpan nama host
$db_user = "root";
$db_pass = "";
$db_name = "db_sekolah"; 
$db_port = "3307"; //ini karena port dri mysql bukan lagi default makanya ditulis

$connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name, $db_port);

if($connection) { //menggunakan conditional function
    echo "Koneksi Berhasil!";
} else {
    echo "Koneksi Gagal! : ". mysqli_connect_error();
}

?>