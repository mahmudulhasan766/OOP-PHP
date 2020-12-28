<?php

class Person{
    public $name ;
    public $age ;

    public function __construct($n,$a){
        $this->name=$n;
        $this->age=$a;
    }

    public function personName(){
        echo "My name Is : {$this->name} <br> My age is : {$this->age}";
    }
    

}
$personOne= New Person("hasan","24");
echo $personOne->personName();


?>
