<?php
include "startlogin.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap5.min.css">
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <title>Data Karyawan</title>
</head>
<body>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="#">Data Karyawan</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <div class="navbar-nav ms-auto">
            <a class="nav-link active" aria-current="page" href="#">Tambah Karyawan</a>
            <a class="nav-link" href="login.php">LogOut</a>
          </div>
        </div>
      </div>
    </nav>
    <!--Akhir Navbar-->

    
    <!-- Modal -->
    <div class="container data-mahasiswa mt-5">
        <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#tambahData">
            Tambah Data
        </button>
        <!--Modal tambah data-->
        <div class="modal fade" id="tambahData" tabindex="-1" aria-labelledby="tambahDataLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                   <form method="post" action="create.php" name="form">
                        <div class="modal-header">
                            <h5 class="modal-title" id="tambahDataLabel">Tambahkan Data Karyawan</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="nama" class="form-label">Nama</label>
                                    <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama Karyawan" name="nama" required>
                                </div>
                                <div class="mb-3">
                                    <label for="NoKTP" class="form-label">No.KTP</label>
                                    <input type="text" class="form-control" id="NoKTP" placeholder="Masukkan No.KTP Karyawan" name="no_ktp" required>
                                </div>
                                <div class="mb-3">
                                    <label for="NoTelp" class="form-label">No.Telp</label>
                                    <input type="text" class="form-control" id="NoTelp" placeholder="Masukkan No.Telp Karyawan" name="no_telp" required>
                                </div>
                                <div class="mb-3">
                                    <label for="ThnMasuk" class="form-label">Tahun Masuk</label>
                                    <input type="text" class="form-control" id="ThnMasuk" placeholder="Masukkan Tahun Masuk Karyawan" name="tahun_masuk" required>
                                </div>
                            </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" value="SIMPAN">Tambah</button>
                        </div>
                   </form>
                </div>
            </div>
        </div>
    </div>
    <!--Akhir Modal-->

    <!--tabel-->
    <div class="container mt-5">
      <table class="table table-striped" id="tabelMahasiswa">
        <thead>
          <tr>
          <th scope="col">No.</th>
            <th scope="col">Nama</th>
            <th scope="col">No.KTP</th>
            <th scope="col">No.Telpon</th>
            <th scope="col">Tahun Masuk</th>
            <th scope="col">Jumlah Masa Kerja</th>
          </tr>
        </thead>

      <tbody>
          <?php
          include 'config.php';
          $no = 1;
          $data_karyawan = mysqli_query($koneksi, "select * from data_karyawan");
          while ($data = mysqli_fetch_array($data_karyawan)){
            ?>
              <tr>
                  <td><?php echo $no++; ?> </td>
                  <td><?php echo $data['nama']; ?></td>
                  <td><?php echo $data['no_ktp']; ?></td>
                  <td><?php echo $data['no_telp']; ?></td>
                  <td><?php echo $data['tahun_masuk']; ?></td>
                  <td><?php echo $data['jumlah_masa_kerja']; ?> Tahun</td>
                  <td>
                      <a href="detail.php?id=<?php echo $data['id']; ?>" class= "btn btn-primary btn-sm text-white">DETAIL</a>
                      <a href="print.php?id=<?php echo $data['id']; ?>" class="btn btn-success btn-sm text-white">PRINT</a>
                      <a href="edit.php?id=<?php echo $data['id']; ?>" class= "btn btn-warning btn-sm text-white">EDIT</a>
                      <a href="delete.php?id=<?php echo $data['id']; ?>" class= "btn btn-danger btn-sm mt-1" onclick="return confirm('Anda yakin akan menghapus data karyawan ini?')">HAPUS</a>
                  </td>
              </tr>
            <?php
          }
          ?>
      </tbody>
      </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap5.min.js"></script>
    
    <script>
        $(document).ready(function(){
            $('#data_karyawan').DataTable();
        });
    </script>
</body>
</html>