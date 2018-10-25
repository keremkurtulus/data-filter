<?php
/**
 * index.php
 */

require_once('DataFilter/index.php');

$df = new DataFilter;

$df->add([
  1,8,3,6,2,56,43,2,5,3,4,3,4,3,4,343
]);


          $df->Filter(true)
                ->bigger(5)->orderBy("DESC");

          $df->Formatter(true)
                ->money()
             ->Editor(true)
                ->edit("₺%s");

$myArr = $df->get();




foreach ($myArr as $key => $value) {
 echo $key." = ".$value."<br>";
}

?>
