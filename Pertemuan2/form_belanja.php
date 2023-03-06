<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Belanja Online</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <div class="row">
    <div class="col-8">
      <br>
      <h2 style="margin-left: 2%;">Belanja Online</h2>
      <hr>
      <form method="POST" action="form_belanja.php" style="text-align: end; padding-right: 25%;">
        <div class="form-group row">
          <label for="customer" class="col-4 col-form-label">Customer</label>
          <div class="col-8">
            <input id="customer" name="customer" placeholder="Nama Customer" type="text" class="form-control">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-4">Pilih Produk</label>
          <div class="col-8">
            <div class="custom-control custom-radio custom-control-inline">
              <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="TV">
              <label for="produk_0" class="custom-control-label">TV</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="KULKAS">
              <label for="produk_1" class="custom-control-label">KULKAS</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="MESIN CUCI">
              <label for="produk_2" class="custom-control-label">MESIN CUCI</label>
            </div>
          </div>
        </div>
        <div class="form-group row">
          <label for="jumlah" class="col-4 col-form-label">Jumlah</label>
          <div class="col-8">
            <input id="jumlah" name="jumlah" placeholder="Jumlah" type="number" class="form-control">
          </div>
        </div>
        <div class="form-group row">
          <div class="offset-4 col-8">
            <button name="proses" value="Kirim" type="submit" class="btn btn-primary">Kirim</button>
          </div>
        </div>
      </form>
    </div>
    <div class="col-4">
      <br>
      <table border="1" style="border-radius: 30%; width: 90%; height: 50%;">
        <tr style="background-color: blue;">
          <th>Daftar Harga</th>
        </tr>
        <tr>
          <th>TV : 4.200.000</th>
        </tr>
        <tr>
          <th>Kulkas : 3.100.000</th>
        </tr>
        <tr>
          <th>Mesin Cuci : 3.800.000</th>
        </tr>
        <tr>
          <th style="background-color: blue;">Harga Dapat Berubah Setiap Saat</th>
        </tr>
      </table>
    </div>
  </div>
  <hr>
  <div class="row" style="margin-left: 5%;">
    <?php
    $proses = $_POST['proses'];
    $customer = $_POST['customer'];
    $produk = $_POST['produk'];
    $jumlah = $_POST['jumlah'];

    if ($produk == 'TV') {
      $harga = 4200000;
    } elseif ($produk == 'KULKAS') {
      $harga = 3100000;
    } elseif ($produk == 'MESIN CUCI') {
      $harga = 3800000;
    }

    $total = $jumlah * $harga;

    if (!empty($proses)) {
      echo 'Nama Customer : ' . $customer;
      echo '<br>Produk Pilihan : ' . $produk;
      echo '<br>Jumlah Beli : ' . $jumlah;
      echo '<br>Total Belanja : ' . number_format($total);
    }
    ?>
  </div>
</body>

</html>