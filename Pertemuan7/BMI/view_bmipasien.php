<?php
session_start();

$data = $_SESSION['data'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Pasien</title>
  <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
  <link href="css/styles.css" rel="stylesheet" />
  <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body>
  <div class="card-body p-5">
    <table id="datatablesSimple">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Umur</th>
          <th>Jenis Kelamin</th>
          <th>Berat Badan</th>
          <th>Tinggi Badan</th>
          <th>Nomor BMI</th>
          <th>Status</th>
        </tr>
      </thead>
      <tfoot>
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Umur</th>
          <th>Jenis Kelamin</th>
          <th>Iuran</th>
          <th>Tinggi Badan</th>
          <th>Nomor BMI</th>
          <th>Status</th>
        </tr>
      </tfoot>
      <tbody>
        <?php
        $nomor = 1;
        foreach ($data as $row) {
        ?>
          <tr>
            <td>
              <?= $nomor ?>
            </td>
            <td>
              <?= $row['name'] ?>
            </td>
            <td>
              <?= $row['umur'] ?>
            </td>
            <td>
              <?= $row['jk'] ?>
            </td>
            <td>
              <?= $row['berat'] ?>
            </td>
            <td>
              <?= $row['tinggi'] ?>
            </td>
            <td>
              <?= $row['bmi'] ?>
            </td>
            <td>
              <?= $row['kondisi'] ?>
            </td>
          </tr>
        <?php
          $nomor++;
        }
        ?>
      </tbody>

    </table>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  <script src="js/scripts.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
  <script src="assets/demo/chart-area-demo.js"></script>
  <script src="assets/demo/chart-bar-demo.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
  <script src="js/datatables-simple-demo.js"></script>
</body>

</html>