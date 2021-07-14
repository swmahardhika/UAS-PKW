<?php

include './config.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$no_telp = $_POST['no_telp'];
$no_ktp = $_POST['no_ktp'];
$tahun_masuk = $_POST['tahun_masuk'];
$jumlah_masa_kerja = date("Y") - $tahun_masuk;

mysqli_query($koneksi, "update karyawan set nama = '$nama', no_telp = '$no_telp', tahun_masuk = '$tahun_masuk', jumlah_masa_kerja = '$jumlah_masa_kerja', no_ktp = '$no_ktp' where id = '$id'");

include 'index.php';
?>