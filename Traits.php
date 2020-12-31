<?php
trait Java{
    public function javaCode(){
        echo "I am Java<br>";
    }
}

trait Php{
    public function phpCode(){
        echo "I am PhP<pre>";
    }
}
class CodeOne{
    use Java;
    use Php;
}
class CodeTwo{
    use Java;
    use Php;
}

$obj = new CodeOne;
echo $obj->javaCode();
echo $obj->phpCode();
$objT = new CodeTwo;
echo $objT->javaCode();
echo $objT->phpCode();

?>


<?php

trait Hi{
    public function Boy(){
        echo "hi! i am a boy.<br>";
    }
}

trait Hello{
    public function Boy(){
        echo "hello! i am a boy.";
    }
}

class myClas{
    use Hi,Hello{
        Hi::Boy insteadOf Hello;
        Hi::Boy as hiBoy;
        Hello::Boy as heBoy;
    }
}

$obj = new myClas;

$obj->hiBoy();
$obj->heBoy();

?>