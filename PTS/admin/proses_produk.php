<?php
require_once 'koneksi.php';
?>
<?php
$_kode = $_POST['kode'];
$_nama = $_POST['nama'];
$_hargajual = $_POST['harga_jual'];
$_hargabeli = $_POST['harga_beli'];
$_stok = $_POST['stok'];
$_minstok = $_POST['min_stok'];
$_deskripsi = $_POST['deskripsi'];
$_jenis = $_POST['jenis'];

$_proses = $_POST['proses'];

// array data
$ar_data[] = $_kode; // ? 1
$ar_data[] = $_nama; // ? 2
$ar_data[] = $_hargajual; // ? 3
$ar_data[] = $_hargabeli; // ? 4
$ar_data[] = $_stok; // ? 5
$ar_data[] = $_minstok; // ? 6
$ar_data[] = $_deskripsi; // ? 7
$ar_data[] = $_jenis; // ? 8

if ($_proses == "Simpan") {
  // data baru
  $sql = "INSERT INTO produk (kode,nama,harga_jual,harga_beli,stok,
    min_stok,deskripsi,kategori_produk_id) VALUES (?,?,?,?,?,?,?,?)";
} else if ($_proses == "Update") {
  $ar_data[] = $_POST['idedit']; // ? 9
  $sql = "UPDATE produk SET kode=?,nama=?,harga_jual=?,harga_beli=?,
    stok=?,min_stok=?,deskripsi=?,kategori_produk_id=? WHERE id=?";
}
if (isset($sql)) {
  $st = $dbh->prepare($sql);
  $st->execute($ar_data);
}

header('location:index.php?hal=produk');
?>