<html>
    <head>
        <title>
            My app | Halaman Utama
        </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a href="#" class="navbar-brand">My App</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                    aria-expanded="false" aria-label="Toogle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb--lg-0">
                            <li class="nav-item">
                                <a href="pasien.php" class="nav-link" aria-current="page">Pasien</a>
</li>
                            <li class="nav-item">
                                <a href="#" class="nav-link" aria-current="page">Kunjungan</a>
</li>
                            <li class="nav-item">

                                <a href="dokter.php" class="nav-link" aria-current="page">Dokter</a>
</li>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="row nt-3">
                <div class="col-sm">
                    <h3>Tabel Kunjungan</h3>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <a href="tambahkunjungan.php" class="btn btn-primary btn-sm d-flex justify-content-center">Tambah Data</a>
                </div>
            </div>
            
<div class="row_mt-3">
<div class="col">
<table class="table table-striped table-hover tabel-sm">
<tr>
<th>No</th>
<th>ID Kunjungan</th>
<th>ID Pasien</th>
<th>ID Dokter</th>
<th>Tanggal</th>
<th>Keluhan</th>
<th>Action</th>
</tr>
<?php
include 'koneksi1.php';
$no = 1;
$hasil = $koneksi->query("SELECT * FROM kunjungan");
while ($row = $hasil->fetch_assoc()) {
?>
<tr>
<td><?= $no++; ?></td>
<td><?= $row['idKunjungan']; ?></td>
<td><?= $row['idPasien']; ?></td>
<td><?= $row['idDokter']; ?></td>
<td><?= $row['Tanggal']; ?></td>
<td><?= $row['keluhan']; ?></td>
<td><a href="editkunjungan.php?edit=<?= $row['idKunjungan']; ?>" class="btn btn-warning btn-sm">Edit</a><a href="koneksi1.php?idKunjungan=<?= $row['idKunjungan']; ?>" class="btn btn-danger btn-sm">Hapus</a></td>
</tr>
<?php } ?>
</table>
</div>
</div>
</div>
</body>
</html>
