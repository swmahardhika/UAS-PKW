<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" />
    <title>Data Karyawan</title>
</head>

<body>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="#">Daftar Karyawan</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <div class="navbar-nav ms-auto">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            <a class="nav-link" href="index.php">LOGOUT</a>
          </div>
        </div>
      </div>
    </nav>
    <!--Akhir Navbar-->

    <?php
        include 'config.php';
        $id = $_GET['id'];
        $karyawan = mysqli_query($koneksi, "select * from data_karyawan where id='$id'");
        while ($data = mysqli_fetch_assoc($karyawan)){
        ?>
            <div class="container mt-5">
                <p><a href="index.php">Home</a> / Detail Karyawan / <?php echo $data['nama'] ?></p>
                <div class="card">
                    <div class="card-header">
                        <p class="fw-bold">Profil Karyawan</p>
                    </div>
                    <div>
                      <table cellpadding="10">
                        <tr>
                          <td >Nama</td>
                          <td class="fw-bold">: <?php  echo $data['nama'] ?></td>
                        </tr>
                        <tr>
                          <td>No.KTP</td>
                          <td class="fw-bold">: <?php echo $data['no_ktp'] ?></td>
                        </tr>
                        <tr>
                          <td>No.Telpon</td>
                          <td class="fw-bold">: <?php echo $data['no_telp'] ?></td>
                        </tr>
                        <tr>
                          <td>Tahun Masuk</td>
                          <td class="fw-bold">: <?php echo $data['tahun_masuk'] ?></td>
                        </tr>
                        <tr>
                          <td>Jumlah Masa Kerja</td>
                          <td class="fw-bold">: <?php echo $data['jumlah_masa_kerja']?> Tahun</td>
                        </tr>
                      </table>
                      <a href="print.php?id=<?php echo $data['id']; ?>" class="btn btn-primary btn-sm text-white">CETAK</a>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>