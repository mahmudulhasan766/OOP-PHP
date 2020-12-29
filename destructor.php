<?php

class Person{
    public $name ;
    public $age ;
    public $id;

    public function __construct($n,$a){
        $this->name=$n;
        $this->age=$a;
    }

    public function setId($id){
        $this->id = $id;
        //echo $id;
    }

    public function __destruct(){

       // mysql_close();
        if (!empty($this->id)){
            echo "Saving person"; 
        }
    }  
}
$personOne=new Person("Hasan","24");
$personOne->setId(56);
//unset($personOne);


?>
