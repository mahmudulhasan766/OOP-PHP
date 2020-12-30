<?php

include "Student.php";

if (class_exists("Students")){
    $student = new Students();
    $student->describe();
}else {
    echo "Class not found";
}


?>