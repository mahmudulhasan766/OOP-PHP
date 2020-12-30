<?php

spl_autoload_register(function($class_name){

    echo "$class_name:<br>";
    include "myFld/".$class_name.".php";
});

// function __autoload($class_name){
//     include "myFld/".$class_name.".php";
// }

$ruby = new Ruby;
$java = new Java;
$python = new Python;

?>