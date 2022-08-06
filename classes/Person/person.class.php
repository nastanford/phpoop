<?php

namespace Person;

class Person 
{
  private $first;
  private $last;
  private $age;

// constructor
  public function __construct($first, $last, $age)
  {
    $this->first = $first;
    $this->last = $last;
    $this->age = $age;
  }

  public function getPerson() {
    $result = $this->first." ".$this->last;
    return $result;
  }
}

