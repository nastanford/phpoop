<?php

class Database 
{
  private $host = "localhost";
  private $user = "root";
  private $password = "";
  private $database = "oop";

  function connect() {
    $dsn = "mysql:host=".$this->host.";dbname=".$this->database;
    $pdo = new PDO($dsn, $this->user, $this->password);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $pdo;
  }
}

?>