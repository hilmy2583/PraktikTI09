<?php
require_once 'class_persegiPanjang.php';

$perPanjang1 = new PersegiPanjang(4, 7);
$perPanjang2 = new PersegiPanjang(5, 12);

echo 'Luas Persegi Panjang I :' . $perPanjang1->getLuas();
echo '<br>Luas Persegi Panjang II:' . $perPanjang2->getLuas();

echo '<br>Keliling Persegi Panjang I :' . $perPanjang1->getKeliling();
echo '<br>Keliling Persegi Panjang II:' . $perPanjang2->getKeliling();
?>