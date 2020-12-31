<?php
class Animel{
    private $category;
    private $type;

    function setCat($a){
        $this->category = $a;
    }
    function getCat(){
        return $this->category;
    }
    function setDog($b){
        $this->type = $b;
    }
    function getDog(){
        return $this->type;
    }
    public function __clone(){
        $bird = new Animel;
        $bird -> setDog($this->type);
        return $bird;
    }
}
$animal = new Animel;

 $animal->setCat("CAT");
 $animal->setDog("DOG");
 

$ani =clone $animal;
$ani->setDog("BIG DOG");

 echo $animal->getCat();
 echo "<br>";
 echo $animal->getDog();
 echo "<br>";

 echo $ani->getCat();
 echo "<br>";
 echo $ani->getDog();

?>