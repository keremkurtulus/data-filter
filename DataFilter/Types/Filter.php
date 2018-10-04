<?php

/**
 * Filter class
 */

class Filter extends Base{

  /**
   * [equal description]
   * @param  string,int $val : compareble veriable for each elements
   * @param  string $key : column name
   * @return class $this
   */
  public function equal($val='',$key=NULL){
    if($key !== NULL){
      $temp = array();
      for ($i=0; $i < count($this->Parametreler); $i++) {
        if($this->Parametreler[$i][$key]==$val){
          $temp[]=$this->Parametreler[$i];
          // unset($this->Parametreler[$i]);
          // $this->Parametreler = array_values($this->Parametreler);
        }
      }
      $this->Parametreler = $temp;
      return $this;
    }
      $temp = array();
      for ($i=0; $i < count($this->Parametreler); $i++) {
        if($this->Parametreler[$i]==$val){
          $temp[]=$this->Parametreler[$i];
          // unset($this->Parametreler[$i]);
          // $this->Parametreler = array_values($this->Parametreler);
        }
      }
      $this->Parametreler = $temp;
      return $this;
  }

  /**
   * [bigger description]
   * @param  string $val compareble veriable for each elements
   * @param  string $key column name
   * @return class  $this
   */
  public function bigger($val='',$key=NULL){
    if($key !== NULL){
      $temp = array();
      for ($i=0; $i < count($this->Parametreler); $i++) {
        if($this->Parametreler[$i][$key]>$val){
          $temp[]=$this->Parametreler[$i];
          // unset($this->Parametreler[$i]);
          // $this->Parametreler = array_values($this->Parametreler);
        }
      }
      $this->Parametreler = $temp;
      return $this;
    }
      $temp = array();
      for ($i=0; $i < count($this->Parametreler); $i++) {
        if($this->Parametreler[$i]>$val){
          $temp[]=$this->Parametreler[$i];
          // unset($this->Parametreler[$i]);
          // $this->Parametreler = array_values($this->Parametreler);
        }
      }
      $this->Parametreler = $temp;
      return $this;
  }

  /**
   * [smaller description]
   * @param  string $val compareble veriable for each elements
   * @param  string $key column name
   * @return class  $this
   */
  public function smaller($val = '',$key = NULL){
    if($key !== NULL){
      $temp = array();
      for ($i=0; $i < count($this->Parametreler); $i++) {
        if($this->Parametreler[$i][$key]<$val){
          $temp[]=$this->Parametreler[$i];
          // unset($this->Parametreler[$i]);
          // $this->Parametreler = array_values($this->Parametreler);
        }
      }
      $this->Parametreler = $temp;
      return $this;
    }
      $temp = array();
      for ($i=0; $i < count($this->Parametreler); $i++) {
        if($this->Parametreler[$i]<$val){
          $temp[]=$this->Parametreler[$i];
          // unset($this->Parametreler[$i]);
          // $this->Parametreler = array_values($this->Parametreler);
        }
      }
      $this->Parametreler = $temp;
      return $this;
  }

  /**
   * [biggerEqual description]
   * @param  string $val compareble veriable for each elements
   * @param  string $key column name
   * @return class  $this
   */
  public function biggerEqual($val = '',$key = NULL){
    if($key !== NULL){
      $temp = array();
      for ($i=0; $i < count($this->Parametreler); $i++) {
        if($this->Parametreler[$i][$key]>=$val){
          $temp[]=$this->Parametreler[$i];
          // unset($this->Parametreler[$i]);
          // $this->Parametreler = array_values($this->Parametreler);
        }
      }
      $this->Parametreler = $temp;
      return $this;
    }
      $temp = array();
      for ($i=0; $i < count($this->Parametreler); $i++) {
        if($this->Parametreler[$i]>=$val){
          $temp[]=$this->Parametreler[$i];
          // unset($this->Parametreler[$i]);
          // $this->Parametreler = array_values($this->Parametreler);
        }
      }
      $this->Parametreler = $temp;
      return $this;
  }

  /**
   * [smallerEqual description]
   * @param  string $val compareble veriable for each elements
   * @param  string $key column name
   * @return class  $this
   */
  public function smallerEqual($val = '',$key = NULL){
    if($key !== NULL){
      $temp = array();
      for ($i=0; $i < count($this->Parametreler); $i++) {
        if($this->Parametreler[$i][$key]<=$val){
          $temp[]=$this->Parametreler[$i];
          // unset($this->Parametreler[$i]);
          // $this->Parametreler = array_values($this->Parametreler);
        }
      }
      $this->Parametreler = $temp;
      return $this;
    }
      $temp = array();
      for ($i=0; $i < count($this->Parametreler); $i++) {
        if($this->Parametreler[$i]<=$val){
          $temp[]=$this->Parametreler[$i];
          // unset($this->Parametreler[$i]);
          // $this->Parametreler = array_values($this->Parametreler);
        }
      }
      $this->Parametreler = $temp;
      return $this;
  }

  /**
   * [notEqual description]
   * @param  string $val compareble veriable for each elements
   * @param  string $key column name
   * @return class  $this
   */
  public function notEqual($val = '',$key = NULL){
    if($key !== NULL){
      $temp = array();
      for ($i=0; $i < count($this->Parametreler); $i++) {
        if($this->Parametreler[$i][$key]!=$val){
          $temp[]=$this->Parametreler[$i];
          // unset($this->Parametreler[$i]);
          // $this->Parametreler = array_values($this->Parametreler);
        }
      }
      $this->Parametreler = $temp;
      return $this;
    }
      $temp = array();
      for ($i=0; $i < count($this->Parametreler); $i++) {
        if($this->Parametreler[$i]!=$val){
          $temp[]=$this->Parametreler[$i];
          // unset($this->Parametreler[$i]);
          // $this->Parametreler = array_values($this->Parametreler);
        }
      }
      $this->Parametreler = $temp;
      return $this;
  }


  function __destruct(){
    
  }
}


 ?>
