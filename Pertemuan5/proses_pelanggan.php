<?php
require_once 'dbkoneksi.php';
?>
<?php
$_kode = $_POST['kode'];
$_nama = $_POST['nama'];
$_jk = $_POST['jk'];
$_tmp = $_POST['tmp'];
$_tgl = $_POST['tgl'];
$_email = $_POST['email'];
$_kartu = $_POST['kartu'];

$_proses = $_POST['proses'];

// array data
$ar_data[] = $_kode; // ? 1
$ar_data[] = $_nama; // ? 2
$ar_data[] = $_jk; // 3
$ar_data[] = $_tmp;
$ar_data[] = $_tgl;
$ar_data[] = $_email;
$ar_data[] = $_kartu;

if ($_proses == "Simpan") {
  // data baru
  $sql = "INSERT INTO pelanggan (kode,nama,jk,tmp_lahir,tgl_lahir,email,kartu_id) VALUES (?,?,?,?,?,?,?)";
} else if ($_proses == "Update") {
  $ar_data[] = $_POST['idedit']; // ? 8
  $sql = "UPDATE pelanggan SET kode=?,nama=?,jk=?,tmp_lahir=?,tgl_lahir=?,email=?,kartu_id=? WHERE id=?";
}
if (isset($sql)) {
  $st = $dbh->prepare($sql);
  $st->execute($ar_data);
}

header('location:list_pelanggan.php');
?>