<?php
  namespace Views;
  class UsersView {
    // constructor
    public function __construct()
    {
      // echo "Views Users class is loaded<br>";
    }
    public function home() {
      echo '<h1>Home</h1>';
    }

    public function showUsers($name) 
    {
      $results = $this->getUsers($name);
      foreach ($results as $result) {
        echo $result['firstname'] . " " . $result['lastname'] . "<br>";
      }
    }
  }
?>