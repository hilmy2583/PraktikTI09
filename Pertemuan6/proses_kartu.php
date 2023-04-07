<?php
require_once 'koneksi.php';


if (isset($_POST['proses'])) {
    $_proses = $_POST['proses'];
    $_kode = $_POST['kode'];
    $_nama = $_POST['nama'];
    $_diskon = $_POST['diskon'];
    $_iuran = $_POST['iuran'];

    // array data
    $ar_data[] = $_kode; // ? 1
    $ar_data[] = $_nama; // ? 2
    $ar_data[] = 100 * $_diskon; // 3
    $ar_data[] = $_iuran; // 4

}


if (isset($_GET['iddel']) && empty($_proses)) {
    $sql = "DELETE FROM kartu WHERE id=?";
    $ar_data[] = $_GET['iddel'];
} else if ($_proses == "Simpan") {
    // data baru
    $sql = "INSERT INTO kartu (kode,nama,diskon,iuran) VALUES (?,?,?,?)";
} else if ($_proses == "Update") {
    $ar_data[] = $_POST['idedit']; // ? 8
    $sql = "UPDATE kartu SET kode=?,nama=?,diskon=?,iuran=? WHERE id=?";
}
if (isset($sql)) {
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
}

header('location:index.php?hal=kartu');
?>