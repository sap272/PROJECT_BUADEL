<html>
<head>
<title>My App | Halaman Utama</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container">
<div class="row mt-3">
<div class="col-4">
<h3>Edit Data Dokter</h3>
<?php
include 'koneksi2.php';
$panggil = $koneksi->query("SELECT * FROM dokter WHERE idDokter='$_GET[edit]'");
while ($row = $panggil->fetch_assoc()) {
?>
<form action="koneksi2.php" method="POST">
    <input type="hidden" name="idDokterLama" value="<?= $row['idDokter'] ?>">
    <div class="form-group">
        <label for="idDokter">ID Dokter</label>
        <input type="text" class="form-control mb-3" name="idDokter" placeholder="ID Dokter" value="<?= $row['idDokter'] ?>">
    </div>
    <div class="form-group">
        <label for="nmDokter">Nama Dokter</label>
        <input type="text" class="form-control mb-3" name="nmDokter" placeholder="Nama Dokter" value="<?= $row['nmDokter'] ?>">
    </div>
    <div class="form-group">
        <label for="spesialisasi">Spesialisasi</label>
        <input type="text" class="form-control mb-3" name="spesialisasi" placeholder="Spesialisasi" value="<?= $row['spesialisasi'] ?>">
    </div>
    <div class="form-group">
        <label for="noTelp">Nomor Handphone</label>
        <input type="number" class="form-control mb-3" name="noTelp" placeholder="Nomor Handphone" value="<?= $row['noTelp'] ?>">
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
</html>
