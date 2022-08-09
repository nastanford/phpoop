<?php
// include_once 'classes/database.class.php';
  
  // include_once 'Models/database.class.php';
  // include_once 'Models/users.class.php';
  
  // include_once 'classes/database.class.php';
  
  include_once 'includes/autoloader.php';
  // include_once 'controllers/UsersController.class.php';
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
  <h1>PHP OOP</h1>
  <?php 

  // echo __DIR__;
  // echo "<hr>";
  // echo dirname(path:__DIR__) . DIRECTORY_SEPARATOR;
  // echo "<hr>";
  // echo DIRECTORY_SEPARATOR;
  // echo "<hr>";

  // $users = new Models\Users();
  // $usersView = new Views\UsersView();
  $usersController = new Controllers\UsersController();
  // $usersController->getUsers();

  // define('ROOT', dirname(path:__DIR__) . DIRECTORY_SEPARATOR);
  // // define('APP',         ROOT . 'app' . DIRECTORY_SEPARATOR);
  // define('VIEW',        ROOT . 'app' . DIRECTORY_SEPARATOR. 'view' . DIRECTORY_SEPARATOR);
  // define('MODEL',       ROOT . 'app' . DIRECTORY_SEPARATOR. 'model' . DIRECTORY_SEPARATOR);
  // // define('DATA',        ROOT . 'app' . DIRECTORY_SEPARATOR. 'data' . DIRECTORY_SEPARATOR);
  // // define('CORE',        ROOT . 'app' . DIRECTORY_SEPARATOR. 'core' . DIRECTORY_SEPARATOR);
  // define('CONTROLLER',  ROOT . 'app' . DIRECTORY_SEPARATOR. 'controller' . DIRECTORY_SEPARATOR);
  // // $modules = [ROOT,APP,CORE,CONTROLLER,DATA];
  // $modules = [ROOT,CONTROLLER];
  
  // set_include_path( get_include_path() . PATH_SEPARATOR . implode(PATH_SEPARATOR, $modules));
  // spl_autoload_register('spl_autoload',false);
  // // new Application();
  // var_dump($_SERVER['REQUEST_URI']);
  
  
  ?>


</body>
</html>