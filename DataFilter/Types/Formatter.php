<?php



class Formatter extends Base{

  /**
   * [date description]
   * @param  string $newFormat : date format
   * @param  string $key       : column name
   * @return class  $this
   */
  public function date($newFormat = 'm-d-Y',$key=NULL){
        if($key===NULL){
            if(is_array($this->Parametreler)){
               for ($i=0; $i < count($this->Parametreler); $i++) {
                  $this->Parametreler[$i] = date( $newFormat, strtotime($this->Parametreler[$i]));
                }
            }else{
              $this->Parametreler = date( $newFormat, strtotime($this->Parametreler));
            }
        }else{
          for ($i=0; $i < count($this->Parametreler); $i++) {
            $this->Parametreler[$i][$key] = date( $newFormat, strtotime($this->Parametreler[$i][$key]));
          }
        }
      return $this;
  }

  /**
   * [money description]
   * @param  string $key : column name
   * @return class  $this    
   */
  public function money($key=NULL){
         if($key===NULL){
          if(is_array($this->Parametreler)){
            for ($i=0; $i < count($this->Parametreler); $i++) {
              $this->Parametreler[$i] = number_format($this->Parametreler[$i], 2, ',', '.');
            }
          }else{
            $this->Parametreler = number_format($this->Parametreler, 2, ',', '.');
          }
         }else{
            for ($i=0; $i < count($this->Parametreler); $i++) {
              $this->Parametreler[$i][$key] = number_format($this->Parametreler[$i][$key], 2, ',', '.');
            }
         }
      return $this;
  }
}


 ?>
