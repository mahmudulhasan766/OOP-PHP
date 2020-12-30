<?php

class Calculation{
    public function getArray(array $x){
        foreach ($x as $value){
            echo $value[0];
            echo " : ";
            echo $value[1]*$value[2]."<br/>";
        }
    }
}

$cal = new Calculation();
$name = array(
        array('Number One',10,10),
        array('Number One',30,67),
);
$cal->getArray($name);
?>