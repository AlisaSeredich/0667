<?php
class Person{
  private $name;
  private $lastname;
  private $age;
  private $hp;
  private $mother;
  private $father;

  function __construct($name, $lastname, $age, $mother=null, $father=null)
  {
    $this->name = $name;
    $this->lastname = $lastname;
    $this->age = $age;
    $this->hp = 100;
    $this->mother = $mother;
    $this->father = $father;

  }
  function sayHi($name) {
    return "Hi, $name, I`m ".$this->name;
  }
  function sethp($hp) {
    if ($this->hp + $hp >= 100) $this->hp = 100;
    else $this->hp = $this->hp + $hp;
  }
  function gethp() {
    return $this->hp;
  }
  function getName() {
    return $this->name;
  }
  function getMother(){
    return $this->mother;
  }
  function getFather(){
    return $this->father;
  }
  function getInfo(){
    return "
    <h3>A few words about myself</h3><br>"."My name is ".$this->getName()."<br>"."My mother`s name is ".$this->getMother()->getName()."<br>"."My father`s name is ".$this->getFather()->getName()."<br>"."My grandmother`s names are ".$this->getMother()->getMother()->getName()
    ." and ".$this->getFather()->getMother()->getName()."<br>"."My grandfather`s names are ".$this->getMother()->getFather()->getName()." and ".$this->getFather()->getFather()->getName()
    ;
  }
}
// $medKit = 50;
$igor = new Person("Igor", "Petrov", 68, null, null);
$nina = new Person("Nina", "Petrova", 68, null, null);

$oleg = new Person("Oleg", "Sidorov", 65, null, null);
$natasha = new Person("Natasha", "Sidorova", 65, null, null);

$alex = new Person("Alex", "Ivanov", 42, $natasha, $oleg);
$olga = new Person("Olga", "Ivanova", 42, $nina, $igor);
$valera = new Person("Valera", "Ivanov", 15, $olga, $alex);

echo $valera->getInfo();

// echo $valera->getMother()->getFather()->getName();

// $alex->hp = $alex->hp - 30;  
// echo $alex->hp."<br>";
// $alex->hp = $alex->hp + $medKit;
// echo $alex->hp;

// $alex->sethp(-30);
// echo $alex->gethp()."<br>";
// $alex->sethp($medKit);
// echo $alex->gethp()."<br>";