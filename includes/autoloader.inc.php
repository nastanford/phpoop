<?php
spl_autoload_register(function ($class_name) {
  $path = 'classes/';
  $extension = '.class.php';
  $filepath = $path.$class_name.$extension;

  if (!file_exists($filepath)) {
    return false;
  }
  include_once $filepath;
});
?>