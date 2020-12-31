<?php
namespace Elements;
include "lib/helper.php";
include "lib/module.php";

function helloWorld(){
    echo "I am hello";
}

use lib\module;
//\elements as moduleElements;

class elements{
    public function __construct(){
        echo "Hello World";
    }
}
$obj = new \Elements\elements;
echo"<br>";

//$ob = new moduleElements;
$module = new \module\elements;
echo"<br>";
helloWorld();
echo"<br>";
$helper = new \Helper\elements;
echo"<br>";
\module\helloWorld();
echo"<br>";
echo \module\VER;



?>