<?php
spl_autoload_register(function ($class_name) {
  $fullpath ='classes/'.$class_name . '.class.php';
  if (!file_exists($fullpath)) {
    return false;
  }
  include_once $fullpath;
});
?>