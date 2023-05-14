<?php
require_once 'koneksi.php';
?>

<form method="POST" action="proses_pesanan.php">
    <br>
    <div class="form-group row">
        <label for="tanggal" class="col-4 col-form-label">Tanggal</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-anchor"></i>
                    </div>
                </div>
                <input id="tanggal" name="tanggal" type="date" class="form-control" value="">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="nama_pemesanan" class="col-4 col-form-label">Nama Pemesanan</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-adjust"></i>
                    </div>
                </div>
                <input id="nama_pemesanan" name="nama_pemesanan" type="text" class="form-control" value="">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="alamat_pemesanan" class="col-4 col-form-label">Alamat Pemesanan</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-adjust"></i>
                    </div>
                </div>
                <input id="alamat_pemesanan" name="alamat_pemesanan" type="text" class="form-control" value="">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="no_hp" class="col-4 col-form-label">Nomor Handphone</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-arrow-circle-right"></i>
                    </div>
                </div>
                <input id="no_hp" name="no_hp" value="" type="tel" class="form-control">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="email" class="col-4 col-form-label">Email</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-arrow-circle-up"></i>
                    </div>
                </div>
                <input id="email" name="email" value="" type="email" class="form-control">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="jumlah_pesanan" class="col-4 col-form-label">Jumlah Pesanan</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-arrow-circle-right"></i>
                    </div>
                </div>
                <input id="jumlah_pesanan" name="jumlah_pesanan" value="" type="number" class="form-control">
            </div>
        </div>
    </div>
    <div class="form-group row">
    <label for="deskripsi" class="col-4 col-form-label">Deskripsi</label>
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-adjust"></i>
          </div>
        </div>
        <textarea id="deskripsi" name="deskripsi" cols="80%" rows="10"></textarea>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="jenis" class="col-4 col-form-label">Jenis Produk</label>
    <div class="col-8">
      <?php
      $sqljenis = "SELECT * FROM produk";
      $rsjenis = $dbh->query($sqljenis);
      ?>
      <select id="jenis" name="jenis" class="custom-select">
        <?php
        foreach ($rsjenis as $rowjenis) {
        ?>
          <option value="<?= $rowjenis['id'] ?>"><?= $rowjenis['nama'] ?></option>
        <?php
        }
        ?>
        <!--
        <option value="1">Elektronik</option>
        <option value="2">Furniture</option>
        <option value="3">Makanan</option>-->

      </select>
    </div>
  </div>
    <div class="form-group row">
        <div class="offset-4 col-8">
            <input type="submit" name="proses" type="submit" class="btn btn-primary" value="Simpan" />
        </div>
    </div>
</form>