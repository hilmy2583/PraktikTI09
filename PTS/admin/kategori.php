<?php
//batas edit
require_once 'koneksi.php';
?>
<?php
$sql = "SELECT * FROM kategori_produk";
$rs = $dbh->query($sql);
?>
<!-- <h1 class="mt-4">Tables</h1> -->
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="index.php?hal=dashboard">Dashboard</a></li>
    <li class="breadcrumb-item active">Kategori</li>
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
        <a class="btn btn-primary" href="index.php?hal=form_kategori">Create</a>

    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Kategori</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>No</th>
                    <th>Nama Kategori</th>
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
                            <?= $row['nama'] ?>
                        </td>
                        <td>
                            <a class="btn btn-sm btn-primary" href="index.php?hal=view_kategori&id=<?= $row['id'] ?>">View</a>
                            <a class="btn btn-sm btn-primary" href="index.php?hal=form_kategori&idedit=<?= $row['id'] ?>">Edit</a>
                            <a class="btn btn-sm btn-primary" href="index.php?hal=proses_kategori&iddel=<?= $row['id'] ?>" onclick="if(!confirm('Anda Yakin Hapus Data Produk <?= $row['nama'] ?>?')) {return false}">Delete</a>
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