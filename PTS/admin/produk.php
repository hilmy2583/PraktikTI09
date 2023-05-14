<?php
//batas edit
require_once 'koneksi.php';
?>
<?php
$sql = "SELECT * FROM produk";
$rs = $dbh->query($sql);
?>
<!-- <h1 class="mt-4">Tables</h1> -->
<ol class="breadcrumb mb-4">
  <li class="breadcrumb-item"><a href="index.php?hal=dashboard">Dashboard</a></li>
  <li class="breadcrumb-item active">Produk</li>
</ol>
<!-- <div class="card mb-4">
                            <div class="card-body">
                                DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the
                                <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
                                .
                            </div>
                        </div> -->
<div class="card mb-4">
  <div class="card-header">
    <i class="fas fa-table me-1"></i>
    <a class="btn btn-primary" href="index.php?hal=form_produk">Create</a>

  </div>
  <div class="card-body">
    <table id="datatablesSimple">
      <thead>
        <tr>
          <th>No</th>
          <th>Kode</th>
          <th>Nama</th>
          <th>Harga Jual</th>
          <th>Harga Beli</th>
          <th>Stok</th>
          <th>Stok Minimal</th>
          <th>Deskripsi</th>
          <th>Kategori ID</th>
          <th>Action</th>
        </tr>
      </thead>
      <tfoot>
        <tr>
          <th>No</th>
          <th>Kode</th>
          <th>Nama</th>
          <th>Harga Jual</th>
          <th>Harga Beli</th>
          <th>Stok</th>
          <th>Stok Minimal</th>
          <th>Deskripsi</th>
          <th>Kategori ID</th>
          <th>Action</th>
        </tr>
      </tfoot>
      <tbody>
        <?php
        $nomor = 1;
        foreach ($rs as $row) {
        ?>
          <tr>
            <td>
              <?= $nomor ?>
            </td>
            <td>
              <?= $row['kode'] ?>
            </td>
            <td>
              <?= $row['nama'] ?>
            </td>
            <td>
              Rp <?= $row['harga_jual'] ?>
            </td>
            <td>
              Rp <?= $row['harga_beli'] ?>
            </td>
            <td>
              <?= $row['stok'] ?>
            </td>
            <td>
              <?= $row['min_stok'] ?>
            </td>
            <td>
              <?= $row['deskripsi'] ?>
            </td>
            <td>
              <?= $row['kategori_produk_id'] ?>
            </td>
            <td>
              <a class="btn btn-sm btn-primary" href="index.php?hal=view_produk&id=<?= $row['id'] ?>">View</a>
              <a class="btn btn-sm btn-primary" href="index.php?hal=form_produk&idedit=<?= $row['id'] ?>">Edit</a>
              <a class="btn btn-sm btn-primary" href="index.php?hal=proses_produk&iddel=<?= $row['id'] ?>" onclick="if(!confirm('Anda Yakin Hapus Data Produk <?= $row['nama'] ?>?')) {return false}">Delete</a>
            </td>
          </tr>
        <?php
          $nomor++;
        }
        ?>
      </tbody>

    </table>
  </div>
</div>