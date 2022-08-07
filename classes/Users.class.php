<?php

class Users extends Database
{
  protected function getUsers($firstname) 
  {
    $sql = "SELECT * FROM users WHERE firstname = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$firstname]);
    $results = $stmt->fetchAll();
    return $results;
  }
}

?>