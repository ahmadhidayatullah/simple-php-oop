<?php

class robot{

  public $suara;
  public $berat;

  public function __construct($suara, $berat){
    $this->suara = $suara;
    $this->berat = $berat;
  }

  public function setSuara($suara){
    $this->suara = $suara;
  }

  public function getSuara(){
    return $this->suara;
  }

  public function setBerat($berat){
    $this->berat = $berat;
  }

  public function getBerat(){
    return $this->berat;
  }

}


 ?>
