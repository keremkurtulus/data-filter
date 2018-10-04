<?php
/**
 * index.php
 */

require_once('DataFilter/index.php');

$df = new DataFilter;

$df->insertData([
  1,8,3,6,2,56,43,2,5,3,4,3,4,3,4,343
]);


          $df->Filter(1)
                ->bigger(5)->orderBy("DESC");

          $df->Formatter(1)
                ->money()
             ->Editor(1)
                ->edit("₺%s");

$df->removeAll();
$myArr = $df->get();




foreach ($myArr as $key => $value) {
 echo $key." = ".$value."<br>";
}

?>
