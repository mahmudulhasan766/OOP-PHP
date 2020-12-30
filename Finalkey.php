<?php

 final class MyClass{
     function myFunc(){
        echo "This is the final keyword<br/>";
    
    }
//mathod not be use 'final' key word
     function myNdFunc(){
        echo "this is me";
    }
}
class MySubClass extends MyClass{
  //echo "I ma a sub class";

  function mySubFunc(){
      echo "I am a sub class<br/>";
  }
}

$obj = new MySubClass;
$obj->myFunc();
$obj->mySubFunc();
$obj->myNdFunc();

?>