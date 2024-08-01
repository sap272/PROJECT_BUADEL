<?php
$koneksi = new mysqli('localhost', 'root', '', 'sap_xipplg2') or die(mysqli_error($koneksi));

// Menyimpan data
if (isset($_POST['simpan'])) {
    $idKunjungan = $_POST['idKunjungan'];
    $idPasien = $_POST['idPasien'];
    $idDokter = $_POST['idDokter'];
    $tanggal = $_POST['tanggal'];
    $keluhan = $_POST['keluhan'];

    $koneksi->query("INSERT INTO kunjungan (idKunjungan, idPasien, idDokter, tanggal, keluhan) VALUES ('$idKunjungan', '$idPasien', '$idDokter', '$tanggal', '$keluhan')");

    header('Location: kunjungan.php');
    exit();
}

// Menghapus data
if (isset($_GET['idKunjungan'])) {
    $idKunjungan = $_GET['idKunjungan'];
    $koneksi->query("DELETE FROM kunjungan WHERE idKunjungan = '$idKunjungan'");
    header("Location: kunjungan.php");
    exit();
}

// Mengedit data
if (isset($_POST['edit'])) {
    $idKunjunganLama = $_POST['idKunjunganLama'];
    $idKunjunganBaru = $_POST['idKunjungan'];
    $idPasien = $_POST['idPasien'];
    $idDokter = $_POST['idDokter'];
    $tanggal = $_POST['tanggal'];
    $keluhan = $_POST['keluhan'];

    $koneksi->query("UPDATE kunjungan SET idKunjungan='$idKunjunganBaru', idPasien='$idPasien', idDokter='$idDokter', tanggal='$tanggal', keluhan='$keluhan' WHERE idKunjungan='$idKunjunganLama'");
    header("Location: kunjungan.php");
    exit();
}
?>
