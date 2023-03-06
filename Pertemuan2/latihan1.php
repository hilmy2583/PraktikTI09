<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai Siswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <br>
    <h1>Form Nilai Siswa</h1>
    <hr>
    <br>
    <form method="GET" style="text-align: end; padding-right: 25%;">
        <div class="form-group row">
            <label for="nama" class="col-4 col-form-label"><b>Nama Lengkap</b></label>
            <div class="col-8">
                <input id="nama" name="nama" placeholder="Nama Lengkap" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="matkul" class="col-4 col-form-label"><b>Mata Kuliah</b></label>
            <div class="col-8">
                <select id="matkul" name="matkul" class="custom-select">
                    <option value="Dasar Dasar Pemrograman">Dasar Dasar Pemrograman</option>
                    <option value="Basis Data I">Basis Data I</option>
                    <option value="Pemrograman Web">Pemrograman Web</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="uts" class="col-4 col-form-label"><b>Nilai UTS</b></label>
            <div class="col-8">
                <input id="uts" name="uts" placeholder="Nilai UTS" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="uas" class="col-4 col-form-label"><b>Nilai UAS</b></label>
            <div class="col-8">
                <input id="uas" name="uas" placeholder="Nilai UAS" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="tugas" class="col-4 col-form-label"><b>Nilai Tugas/Praktikum</b></label>
            <div class="col-8">
                <input id="tugas" name="tugas" placeholder="Nilai Tugas" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <div class="offset-4 col-8">
                <button name="proses" type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </form>
    <?php
    error_reporting(0);

    $proses = $_GET['proses'];
    $nama_siswa = $_GET['nama'];
    $mata_kuliah = $_GET['matkul'];
    $nilai_uts = $_GET['uts'];
    $nilai_uas = $_GET['uas'];
    $nilai_tugas = $_GET['tugas'];

    echo 'Proses : '.$proses;
    echo '<br>Nama : '.$nama_siswa;
    echo '<br>Mata Kuliah : '.$mata_kuliah;
    echo '<br>Nilai UTS : '.$nilai_uts;
    echo '<br>NIlai UAS : '.$nilai_uas;
    echo '<br>Nilai Tugas Praktikum : '.$nilai_tugas;

    ?>
</body>

</html>