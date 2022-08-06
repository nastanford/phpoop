<?php
spl_autoload_register(function ($class_name) {
    include 'classes/'.$class_name . '.class.php';
});

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

?>


</body>
</html>