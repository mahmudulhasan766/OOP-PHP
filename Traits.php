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