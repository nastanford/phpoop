<?php
class House 
{
  private $number;
  private $street;

// constructor
  public function __construct($number, $street)
  {
    $this->number = $number;
    $this->street = $street;
  }

  public function getAddress() {
    $result = $this->number." ".$this->street;
    return $result;
  }
}

