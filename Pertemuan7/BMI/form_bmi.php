<?php
session_start();

require_once 'class_bmipasien.php';

if(!isset($_SESSION['data'])) {
  $_SESSION['data'] = array();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $pasien = new BmiPasien();
  $pasien->nama = $_POST['nama'];
  $pasien->umur = $_POST['umur'];
  $pasien->jk = $_POST['jk'];
  $pasien->berat = $_POST['berat'];
  $pasien->tinggi = $_POST['tinggi'];

  $bmi = $pasien->hasilBMI();

  $_SESSION['data'][] = array('name' => $pasien->nama, 'umur' => $pasien->umur, 'jk' => $pasien->jk, 'berat' => $pasien->berat, 'tinggi' => $pasien->tinggi, 'bmi' => $bmi, 'kondisi' => $pasien->statusBMI());
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Menghitung BMI</title>
  <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
  <link href="css/styles.css" rel="stylesheet" />
  <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body>
  <form method="POST" action="" class="p-5">
    <div class="form-group row">
      <label for="nama" class="col-4 col-form-label">Nama Pasien</label>
      <div class="col-8">
        <div class="input-group">
          <input id="nama" name="nama" type="text" class="form-control" value="">
        </div>
      </div>
    </div>
    <br>
    <div class="form-group row">
      <label for="umur" class="col-4 col-form-label">Umur Pasien</label>
      <div class="col-8">
        <div class="input-group">
          <input id="umur" name="umur" type="number" class="form-control" value="">
        </div>
      </div>
    </div>
    <br>
    <div class="form-group row">
      <label for="jk" class="col-4 col-form-label">Jenis Kelamin</label>
      <div class="col-8">
        <select id="jk" name="jk" class="form-control" style="text-align:center">
          <option value="">Pilih Jenis Kelamin</option>
          <option value="Laki-laki">Laki-laki</option>
          <option value="Perempuan">Perempuan</option>
        </select>
      </div>
    </div>
    <br>
    <div class="form-group row">
      <label for="berat" class="col-4 col-form-label">Berat Pasien(Kg)</label>
      <div class="col-8">
        <div class="input-group">
          <input id="berat" name="berat" type="number" class="form-control" value="">
        </div>
      </div>
    </div>
    <br>
    <div class="form-group row">
      <label for="tinggi" class="col-4 col-form-label">Tinggi Pasien(cm)</label>
      <div class="col-8">
        <div class="input-group">
          <input id="tinggi" name="tinggi" type="number" class="form-control" value="">
        </div>
      </div>
    </div>
    <br>
    <div class="form-group row">
      <div class="offset-4 col-8">
        <input type="submit" name="proses" type="submit" class="btn btn-primary" value="Simpan" />
      </div>
    </div>
  </form>

  <form class="p-5">
    <?php if ($_SERVER['REQUEST_METHOD'] == 'POST') { ?>
      <h2 style="text-align:center">Hasil BMI</h2>
      <p>Nama: <?php echo $pasien->nama; ?></p>
      <p>Umur: <?php echo $pasien->umur; ?></p>
      <p>Jenis Kelamin: <?php echo $pasien->jk; ?></p>
      <p>Berat: <?php echo $pasien->berat; ?> kg</p>
      <p>Tinggi: <?php echo $pasien->tinggi; ?> cm</p>
      <p>BMI: <?php echo $bmi; ?></p>
      <p>Status: <?php echo $pasien->statusBMI(); ?></p>
    <?php } ?>
  </form>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  <script src="js/scripts.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
  <script src="assets/demo/chart-area-demo.js"></script>
  <script src="assets/demo/chart-bar-demo.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
  <script src="js/datatables-simple-demo.js"></script>
</body>

</html>