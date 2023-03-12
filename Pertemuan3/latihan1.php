<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Registrasi</title>
</head>

<body>
  <?php
  $ar_prodi = ['SI' => 'Sistem Informasi', 'TI' => 'Teknik Informatika', 'BD' => 'Bisnis Digital'];
  $ar_skill = ['HTML' => 10, 'CSS' => 10, 'Javascript' => 20, 'RWD Bootstrap' => 20, 'PHP' => 30, 'Python' => 30, 'Java' => 50];
  $ar_domisili = ['Jakarta', 'Bogor', 'Depok', 'Tanggerang', 'Bekasi', 'Lainnya'];
  ?>
  <fieldset style="background-color: bisque;">

    <legend>Form Registrasi IT Club Data Science</legend>

    <table style="width: 100%;">

      <tr>
        <th>
          <form method="POST" action="latihan1.php">
        </th>
      </tr>
      <tr>
        <td>NIM</td>
        <td><input type="text" name="nim" value="" size="30"></td>
      </tr>
      <tr>
        <td>Nama Lengkap</td>
        <td><input type="text" name="nama" value="" size="30"></td>
      </tr>
      <tr>
        <td>Jenis Kelamin</td>
        <td>
          <input type="radio" name="jkelamin" value="Laki-laki" size="30">Laki-laki
          <input type="radio" name="jkelamin" value="Perempuan" size="30">Perempuan
        </td>
      </tr>
      <tr>
        <td>Program Studi</td>
        <td>
          <select name="prodi">
            <?php
            foreach ($ar_prodi as $prodi => $p) { ?>
              <option value="<?= $prodi ?>"><?= $p ?></option>
            <?php } ?>
          </select>
        </td>
      </tr>
      <tr>
        <td>Skill Web & Programming</td>
        <td>
          <?php
          foreach ($ar_skill as $skill => $s) { ?>
            <input type="checkbox" name="skills[<?= $skill ?>]" value="<?= $s ?>"><?= $skill ?>
          <?php } ?>
        </td>
      </tr>
      <tr>
        <td>Tempat Domisili</td>
        <td>
          <select name="domisili">
            <?php
            foreach ($ar_domisili as $domisili) { ?>
              <option value="<?= $domisili ?>"><?= $domisili ?></option>
            <?php } ?>
          </select>
        </td>
      </tr>
      <tr>
        <td>Email</td>
        <td><input type="email" name="email" value="" size="30"></td>
      </tr>
      <tr>
        <td></td>
        <td>
          <button name="proses">Simpan</button>
        </td>
      </tr>
      </form>
    </table>

  </fieldset>

  <?php
  if (isset($_POST['proses'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jk = $_POST['jkelamin'];
    $prodim = $_POST['prodi'];
    $skills = $_POST['skills'];
    $skils = implode(", ", array_keys($skills));
    $email = $_POST['email'];
  }
  ?>

  NIM : <?= $nim ?><br>
  Nama : <?= $nama ?><br>
  Jenis Kelamin : <?= $jk ?><br>
  Program Studi : <?= $prodim ?><br>

  <?php
  print($skills);
  ?>

  <?php
  $total = 0;
  foreach ($skills as $skil => $s) {
    $total += $s;
  } ?>
  Skill : <?= $skils ?><br>
  
  Skor Skill :
  <?php
  if (isset($_POST['proses'])){ ?>
    <?= $total ?>
  <?php } ?><br>

  <?php
  function skor_skill($total)
  {
    if ($total >= 100 && $total <= 150) {
      return 'Sangat Baik';
    } elseif ($total > 60 && $total < 100) {
      return 'Baik';
    } elseif ($total > 40 && $total <= 60) {
      return 'Cukup';
    } elseif ($total > 0 && $total <= 40) {
      return 'Kurang';
    } else {
      return 'Tidak Memadai';
    }
  }
  $kategori = skor_skill($total);
  ?>

  Kategori Skill : 
  <?php
  if (isset($_POST['proses'])){ ?>
    <?= $kategori ?>
  <?php } ?><br>
  Email : <?= $email ?><br>

</body>

</html>