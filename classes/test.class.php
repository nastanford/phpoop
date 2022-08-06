<?php

class Test extends Database
{

  public function getUsers() 
  {
    $sql = "SELECT * FROM users";
    $stmt = $this->connect()->query($sql);
    while ($row = $stmt->fetch()) 
    {
      echo $row['firstname']." ".$row['lastname']." ".$row['birthdate']."<br>";
    }
  }

  public function getUsersStmt($firstname,$lastname) 
  {
    $sql = "SELECT * FROM users WHERE firstname like ? and lastname like ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$firstname,$lastname]);
    $names = $stmt->fetchAll();

    foreach($names as $name)
    {
      echo $name['firstname']." ".$name['lastname']." ".$name['birthdate']."<br>";
    }
  }


  public function setUserStmt($firstname,$lastname,$birthdate) 
  {
    $sql = "INSERT INTO users (firstname,lastname,birthdate) VALUES (?,?,?)";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$firstname,$lastname,$birthdate]);
  }
 
}
?>