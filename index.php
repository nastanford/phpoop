<?php


spl_autoload_register(function ($class_name) {
    include 'classes/'.$class_name . '.class.php';
});

// $obj  = new MyClass1();
// $obj2 = new MyClass2(); 




// create autoloader
// function autoloader($class) { 
//   include_once('classes/' . $class . '.class.php');

// }

// function loadModel($class) {
//   $path = $DOCUMENT_ROOT . '/models/';
//   require_once $path . $class .'.php';
// }

// function loadView($class) {
// $path = $DOCUMENT_ROOT . '/views/';
// require_once $path . $class .'.php';
// }


  // spl_autoload_register('myAutoloader');

  // function myAutoloader($class) {
  //   $path = 'classes/';
  //   $extension = 'class.php';
  //   $fullpath = $path . $class .$extension;

  //   include_once $fullpath;
  // }

// include_once 'classes/person.class.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP OOP</title>
</head>
<body>
<?php 
  $person = new person("Jim", "Sample", "25");
  echo $person->getPerson();


  // $house = new house();
  // echo $house->owner();


?>


</body>
</html>