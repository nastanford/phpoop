<?php
  include_once 'includes/autoloader.inc.php';
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
    $usersearch = new UsersView();
    $usersearch->showUsers('Jim');

  ?>


</body>
</html>