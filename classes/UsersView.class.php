<?php
class UsersView extends Users {

  public function showUsers($name) 
  {
    $results = $this->getUsers($name);
    foreach ($results as $result) {
      echo $result['firstname'] . " " . $result['lastname'] . "<br>";
    }

  }


}

?>