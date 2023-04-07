<?php
class PersegiPanjang{
  private $sisi1;
  private $sisi2;

  function __construct($s1, $s2)
  {
    $this->sisi1 = $s1;
    $this->sisi2 = $s2;
  }
  function getLuas()
  {
    return $this->sisi1 * $this->sisi2;
  }
  function getKeliling()
  {
    return ($this->sisi1 + $this->sisi2) * 2;
  }
}
?>