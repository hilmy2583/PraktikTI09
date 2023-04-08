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
      $status = 'Kekurangan Berat Badan';
      return $status;
    } elseif($bmi < 25 and $bmi >= 18.5){
      $status = 'Normal(ideal)';
      return $status;
    } elseif($bmi < 30 and $bmi >= 25){
      $status = 'Kelebihan Berat Badan';
      return $status;
    } else{
      $status = 'Kegemukan(Obesitas)';
      return $status;
    }
  }
}
?>