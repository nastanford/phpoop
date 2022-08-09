<?php
namespace Models;
class Users extends Database
{
  // constructor
  public function __construct()
  {
    // echo "Models Users class is loaded<br>";
  }

  protected function getUsers($firstname) 
  {
    $sql = "SELECT * FROM users WHERE firstname = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$firstname]);
    $results = $stmt->fetchAll();
    return $results;
  }  
  
  public function getAll() 
  {
    $sql = "SELECT * FROM users";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute();
    $results = $stmt->fetchAll();
    return $results;
  }
}

?>