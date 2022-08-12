<?php
/**
 *
 */
class NewClass
{
  public $name;
  public $age;
  public $height;
  function __construct($name,$age)
  {
    $this->name=$name;
    $this->age=$age;
  }

  function setName($x){
    $this->name=$x;
  }
  function getName(){
    return $this->name;
  }

}

 ?>
