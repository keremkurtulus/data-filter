<?php
/*
*   Calculator Class
*/

class Calculator extends Base{

  /**
   * @param string $key : column name
   */
  public function addition($key=NULL){
    if($key===NULL){
      for ($i=0; $i < count($this->Parametreler); $i++) {
      $deger += $this->Parametreler[$i];
       }
    }else{
      for ($i=0; $i < count($this->Parametreler); $i++) {
      $deger += $this->Parametreler[$i][$key];
     }
    }
    // Yeni obje oluşturuyoruz çünkü Parametreleri kaybetmek istemiyoruz.
    return ($deger);
  }


  public function count(){
      $count = count($this->Parametreler);
      // Yeni obje oluşturuyoruz çünkü Parametreleri kaybetmek istemiyoruz.
      return ($count);
  }
}


 ?>
