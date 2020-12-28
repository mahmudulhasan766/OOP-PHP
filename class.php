<?php

class Person{
    public $name = "Hasan";
    public $age = "24";

    public function personName(){
        echo "<br>Person name is : ".$this->name;
    }
    public function personAge($id){
        echo "<br>Person name is : ".$this->age=$id;
    }

}
$personOne= New Person();

echo "My name is :".$personOne->name;
echo "<br>My age is :".$personOne->age;
echo $personOne->personName();
echo $personOne->personAge(56);

?>
