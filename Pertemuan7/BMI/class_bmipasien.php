<?php
class BmiPasien{
  
  public $nama;
  public $umur;
  public $jk;
  public $berat;
  public $tinggi;

  function hasilBMI()
  {
    $tg = $this->tinggi / 100;
    $bmi = $this->berat / ($tg * $tg);
    return $bmi;
  }
  function statusBMI()
  {
    $bmi = $this->hasilBMI();
    if($bmi < 18.5){
      echo 'Kekurangan Berat Badan';
    } elseif($bmi < 25 and $bmi >= 18.5){
      echo 'Normal(ideal)';
    } elseif($bmi < 30 and $bmi >= 25){
      echo 'Kelebihan Berat Badan';
    } else{
      echo 'Kegemukan(Obesitas)';
    }
  }
}
?>