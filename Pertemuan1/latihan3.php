<?php
$ns1 = ['id'=>1, 'nim'=>'0110222208', 'uts'=>90, 'tugas'=>85];
$ns2 = ['id'=>2, 'nim'=>'0110222209', 'uts'=>80, 'tugas'=>90];
$ns3 = ['id'=>3, 'nim'=>'0110222207', 'uts'=>85, 'tugas'=>80];
$ns4 = ['id'=>4, 'nim'=>'0110222205', 'uts'=>95, 'tugas'=>95];
$ar_nilai = [$ns1,$ns2,$ns3,$ns4];
?>

<h3>Daftar Nilai Mahasiswa</h3>
<table border="1" style="border-spacing: 2; text-align: center;">
  <thead>
    <tr>
      <th>No</th>
      <th>NIM</th>
      <th>UTS</th>
      <th>Tugas</th>
      <th>Nilai Akhir</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $no = 1;
    foreach ($ar_nilai as $ns) {
      echo '<tr><td>' .$no. '</td>';
      echo '<td>'.$ns['nim'].'</td>';
      echo '<td>'.$ns['uts'].'</td>';
      echo '<td>'.$ns['tugas'].'</td>';
      $nilai_akhir = ($ns['uts'] +$ns['tugas'])/2;
      echo '<td>'.number_format($nilai_akhir,2,',','.').'</td>';
      echo '</tr>';
      $no++;
    }
    ?>
  </tbody>
</table>