<?php




class Student {
   public $name;

   public function describe(){
       echo "I am a student<br>";
   }

public function __get($pm){
    echo "$pm does not exist<br/>";
}
public function __set($pm,$value){
    echo "We set $pm= $value<br/>";
}

public function __call($pm,$value){
    echo "There is no <b>$pm.</b> <br> mathod and argument:.".implode(',',$value)."<br/>";
}


}

$st =new Student();
$st->describe();
$st->Hasan;
$st->age=15;

$st->notExistMethod('3','6','4');

?>