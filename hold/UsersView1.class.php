<?php
namespace Views;
class UsersView extends Users {

  public function showUsers($name) 
  {
    $results = $this->getUsers($name);
    foreach ($results as $result) {
      echo $result['firstname'] . " 111 " . $result['lastname'] . "<br>";
    }

  }


}

?>