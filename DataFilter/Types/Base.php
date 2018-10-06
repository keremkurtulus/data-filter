<?php

   /**
   *
   */
  abstract class Base
  {
    protected $Parametreler;

    function __construct(Array &$_Params = array(), $save = 0){
      if($save!=0){
        $this->Parametreler =& $_Params;
      }else{
        $this->Parametreler = $_Params;
      }

    }

    public function get(){
      return $this->Parametreler;
    }
    public function Filter($save = 0){
      return new Filter($this->Parametreler,$save);
    }
    public function Editor($save = 0){
      return new Editor($this->Parametreler,$save);
    }
    public function Calculator($save = 0){
      return new Calculator($this->Parametreler,$save);
    }
    public function Formatter($save = 0){
      return new Formatter($this->Parametreler,$save);
    }

  /**
   * [orderBy description]
   * @param  string $orderType : ASC or DESC
   * @param  string $key       : column name
   * @return class  $this
   */
    public function orderBy($orderType='',$key = NULL){
      if(!is_array($this->Parametreler)){
        return;
      }
      if($orderType=="ASC"){
        if($key===NULL){
              uasort($this->Parametreler, function($a, $b){ //Sort the array using a user defined function
              if($a>$b){
                return 1;
              }else if($a<$b){
                return -1;
              }else{
                return 0;
              }
            });
        }else{
              uasort($this->Parametreler, function($a, $b) use ($key) { //Sort the array using a user defined function
              if($a[$key]>$b[$key]){
                return 1;
              }else if($a[$key]<$b[$key]){
                return -1;
              }else{
                return 0;
              }
            });
        }
      }else if($orderType==='DESC'){
         if($key===NULL){
             uasort($this->Parametreler, function($a, $b){ //Sort the array using a user defined function
              if($a>$b){
                return -1;
              }else if($a<$b){
                return 1;
              }else{
                return 0;
              }
              });
        }else{
            uasort($this->Parametreler, function($a, $b) use ($key) { //Sort the array using a user defined function
            if($a[$key]>$b[$key]){
              return -1;
            }else if($a[$key]<$b[$key]){
              return 1;
            }else{
              return 0;
            }
            });
        }
      }
        $this->Parametreler= array_values($this->Parametreler);
        return $this;
    }


  }




 ?>
