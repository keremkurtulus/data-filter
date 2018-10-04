<?php
/*
*   DataFilter/index.php
*/

// types folder autoloader
function types_autoloader($class) {
  include 'Types/' . $class . '.php';
}

// register the autoloader
spl_autoload_register('types_autoloader');


require_once('DataFilter.php');


 ?>
