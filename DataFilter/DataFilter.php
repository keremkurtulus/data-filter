<?php

/**
 *  
 */
class DataFilter extends Base
{

  function __construct(){
    //NULL
  }

  private function is_assoc($var){
    return is_array($var) && array_diff_key($var,array_keys(array_keys($var)));
  }

  // $data bir elemanlı dizi gelirse ekleniyor, birden fazla elemanlı gelirse direkt eşitleniyor.
  public function insertData($data = NULL){
    if($data!==NULL){
      if(!$this->is_assoc($data) && is_array($data)){  //bu birden fazla elamanı olan bir array dir.
        $this->Parametreler=$data;
        $this->Original_Parametreler = $data;
        return $this;
      }
      $this->Parametreler[] = $data;
      $this->Original_Parametreler[] = $data;
      return $this;
    }
  }
}


 ?>
