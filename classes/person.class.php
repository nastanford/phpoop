<?php

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

class Pet 
{
  public function owner() {
    $result = $this->first." ".$this->last;
    return $result;
  }
}

// function loadModel($class) 
// {
//   $path = $DOCUMENT_ROOT . '/models/';
//   require_once $path . $class .'.php';
// }

// function loadView($class) 
// {
//   $path = $DOCUMENT_ROOT . '/views/';
//   require_once $path . $class .'.php';
// }

// spl_autoload_register('loadModel');
// spl_autoload_register('loadView');

