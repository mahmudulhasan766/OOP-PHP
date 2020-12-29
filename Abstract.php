<?php
abstract class Student{
    public $name;
    public $age;

    public function details(){
        echo $this->name." is ".$this->age. "Years old <br>";
    }
    abstract public function School();
}
class Boy extends Student{
    public function describe(){
        return parent::details()."And I am a high school student.<br>";
    }
    public function School(){
        return "I Like to read story book.";
    }
}

$boy = new Boy();
$boy->name="Hasan";
$boy->age="23";

echo $boy->describe();
echo $boy->School();

?>