<?php
include 'config.php';
$id = $_GET['id'];
$karyawan = mysqli_query($koneksi, "select * from data_karyawan where id='$id'");
while ($data = mysqli_fetch_assoc($karyawan)){
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" />
        <title><?php echo $data['nama'] ?></title>
    </head>
    <body onload="window.print();">
        <div class="container mt-5">
            <p class="fw-bold">Profil Karyawan</p>
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
        </div>
    <?php
}
    ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    </body>
    </html>

