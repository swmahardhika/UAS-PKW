<?php
include 'config.php';

$id = $_GET['id'];

mysqli_query($koneksi, "delete from data_karyawan where id='$id'");

header("location:index.php");