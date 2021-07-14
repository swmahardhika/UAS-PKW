<?php
require_once './config.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$no_ktp = $_POST['no_ktp'];
$no_telp = $_POST['no_telp'];
$tahun_masuk = $_POST['tahun_masuk'];
$jumlah_masa_kerja = date("Y") - $tahun_masuk;

$result = $koneksi->
    query("INSERT INTO data_karyawan VALUES(0,'$nama', '$no_ktp', '$no_telp', '$tahun_masuk', '$jumlah_masa_kerja')");
    if($result){
        header("location:./index.php");
    }else {
        echo $koneksi->error; 
    }
?>