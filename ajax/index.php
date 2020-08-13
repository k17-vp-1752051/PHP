<?php
class Student
{
  private $first_name;
  private $last_name;
  private $age;
  
  public function __construct($first_name, $last_name, $age)
  {
    $this->first_name = $first_name;
    $this->last_name = $last_name;
    $this->age = $age;
  }
 
  public function getFirstName()
  {
    return $this->first_name;
  }
 
  public function getLastName()
  {
    return $this->last_name;
  }
 
  public function getAge()
  {
    return $this->age;
  }

  public function getData (){
    $data = [ 
    'first_name' => $this->first_name, 
    'last_name'=> $this->last_name, 
    'age' => $this->age];
    return $data;
  }

}

?>


