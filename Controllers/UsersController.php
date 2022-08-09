<?php
namespace Controllers;
class UsersController 
// extends Users 
{
  // constructor
  public function __construct()
  {
    echo "Controllers Users class is loaded<br>";
    $users = new \Users();
    $data = new \Database();
    $usersView = new \Views\UsersView();
    $UserList = $users->getAll();
    $usersView->home();

//    $usersView = new \Views\UsersView();
  }
  public function getUsers()
  {
    $users = new \classes\Users();
    $users->getAll();
    return 'success getUsers';
  }
}
?>