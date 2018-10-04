<?php
/**
 * Editor class
 */
class Editor extends Base{

  /**
   * @param string $newValue : updated value for each column (can you use "%s" for return exists value)
   * @param string $key : column name
   */
  public function edit($newValue=NULL,$key = NULL){
    if(!is_array($this->Parametreler)){
      $this->Parametreler = strtr($newValue, array("%s" => $this->Parametreler));
      return $this;
    }
    if($key!==NULL){
      for ($i=0; $i < count($this->Parametreler); $i++) {
        $this->Parametreler[$i][$key] = strtr($newValue, array("%s" => $this->Parametreler[$i][$key]));
      }
    }else{
      for ($i=0; $i < count($this->Parametreler); $i++) {
        $this->Parametreler[$i] = strtr($newValue, array("%s" => $this->Parametreler[$i]));
      }
    }
    return $this;
  }
}


 ?>
