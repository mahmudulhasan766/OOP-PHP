<?php

class Calculation{
    public $a = 0;
    public $b = 0;
    public $result;

    function getValue($x,$y){
        $this->a=$x;
        $this->b=$y;
        return $this;
        


    }
    function getResult(){
        $this->result=$this->a+$this->b;
        return $this->result;


    }
}

$cal = new Calculation();
//$cal -> getValue(34,34);
echo "Result is : ".$cal -> getValue(34,34)->getResult();
//echo "Result is : ".$cal -> getResult();

?>