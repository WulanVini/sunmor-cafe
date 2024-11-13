<?php

include('koneksi.php');

//get id
$id = $_GET['id']; // mengambil ID siswa

$query = "DELETE FROM tbl_siswaa WHERE id_siswa = '$id'"; //menghapus data siswa 

if($connection->query($query)) { //
    header("location: index.php"); //koneksi berhasil, di redirect ke index
} else {
    echo "DATA GAGAL DIHAPUS!"; //koneksi gagal
}

?>