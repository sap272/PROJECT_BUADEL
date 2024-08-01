<html>
<head>
<title>My App | Halaman Utama</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container">
<div class="row mt-3">
<div class="col-4">
<h3>Edit Data Kunjungan</h3>
<?php
include 'koneksi1.php';
$panggil = $koneksi->query("SELECT * FROM kunjungan WHERE idKunjungan='$_GET[edit]'");
while ($row = $panggil->fetch_assoc()) {
?>
<form action="koneksi1.php" method="POST">
    <input type="hidden" name="idKunjunganLama" value="<?= $row['idKunjungan'] ?>">
    <div class="form-group">
        <label for="idKunjungan">ID Kunjungan</label>
        <input type="text" class="form-control mb-3" name="idKunjungan" placeholder="ID Kunjungan" value="<?= $row['idKunjungan'] ?>">
    </div>
    <div class="form-group">
        <label for="idPasien">ID Pasien</label>
        <input type="text" class="form-control mb-3" name="idPasien" placeholder="ID Pasien" value="<?= $row['idPasien'] ?>">
    </div>
    <div class="form-group">
        <label for="idDokter">ID Dokter</label>
        <input type="text" class="form-control mb-3" name="idDokter" placeholder="ID Dokter" value="<?= $row['idDokter'] ?>">
    </div>
    <div class="form-group">
        <label for="tanggal">Tanggal</label>
        <input type="date" class="form-control mb-3" name="tanggal" placeholder="Tanggal" value="<?= $row['tanggal'] ?>">
    </div>
    <div class="form-group mt-3">
        <label for="keluhan">Keluhan</label>
        <textarea class="form-control" name="keluhan" id="keluhan" cols="5" rows="3" placeholder="Keluhan"><?= $row['keluhan'] ?></textarea>
    </div>
    <div class="form-group mt-3">
        <input type="submit" name="edit" value="Simpan" class="form-control btn btn-primary">
    </div>
</form>
<?php } ?>
</div>
</div>
</div>
</body>