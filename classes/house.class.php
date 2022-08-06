<?php

class Person {
  private $first = "Jim";
  private $last = "Sample";
  private $age = "25";

  public function owner() {
    $result = $this->first." ".$this->last;
    return $result;
  }
}

class Pet {
  public function owner() {
    $result = $this->first." ".$this->last;
    return $result;
  }
}

?>