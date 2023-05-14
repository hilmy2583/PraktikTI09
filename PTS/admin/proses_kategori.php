<?php
require_once 'koneksi.php';


if (isset($_POST['proses'])) {
    $_proses = $_POST['proses'];
    $_nama = $_POST['nama'];

    // array data
    $ar_data[] = $_nama; // ? 1

}


if (isset($_GET['iddel']) && empty($_proses)) {
    $sql = "DELETE FROM kategori_produk WHERE id=?";
    $ar_data[] = $_GET['iddel'];
} else if ($_proses == "Simpan") {
    // data baru
    $sql = "INSERT INTO kategori_produk (nama) VALUES (?)";
} else if ($_proses == "Update") {
    $ar_data[] = $_POST['idedit']; // ? 8
    $sql = "UPDATE kategori_produk SET nama=? WHERE id=?";
}
if (isset($sql)) {
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
}

header('location:index.php?hal=kategori');
?>