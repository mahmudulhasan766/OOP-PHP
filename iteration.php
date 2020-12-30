<?php
class Person{
    public $name = "Hasan";
    public $Age  = "24";
    public $Skill= "Beginar";

    private $Email = "hasan@gmail.com";
    protected $Password = "123456";
    
    function iteratorINNer(){
        echo "Inside Class<br>";
        foreach($this as $key => $value){
            echo "<br>";
            echo "$key : $value";
            //echo "</pre>";
        }
    }

}

$obj = new Person;
foreach($obj as $key => $value){
    echo "<pre>";
    echo "$key : $value";
    echo "</pre>";
}
$obj->iteratorINNer();

?>