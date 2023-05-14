<?php
require_once '../admin/koneksi.php';
?>

<?php
$_tanggal = $_POST['tanggal'];
$_nama = $_POST['nama_pemesanan'];
$_alamat = $_POST['alamat_pemesanan'];
$_nomor = $_POST['no_hp'];
$_email = $_POST['email'];
$_jumlah = $_POST['jumlah_pesanan'];
$_deskripsi = $_POST['deskripsi'];
$_jenis = $_POST['jenis'];

$_proses = $_POST['proses'];

// array data
$ar_data[] = $_tanggal; // ? 1
$ar_data[] = $_nama; // ? 2
$ar_data[] = $_alamat; // ? 3
$ar_data[] = $_nomor; // ? 4
$ar_data[] = $_email; // ? 5
$ar_data[] = $_jumlah; // ? 6
$ar_data[] = $_deskripsi; // ? 7
$ar_data[] = $_jenis; // ? 8

if ($_proses == "Order") {
    // data baru
    $sql = "INSERT INTO pesanan (tanggal,nama_pemesanan,alamat_pemesanan,no_hp,email,jumlah_pesanan,deskripsi,produk_id) VALUES (?,?,?,?,?,?,?,?)";
}
if (isset($sql)) {
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
}

header('location:index.php');
