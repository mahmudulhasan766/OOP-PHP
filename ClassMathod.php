<?php

include "Student.php";

if (class_exists("Students")){
    $student = new Students();
   // $student->describe();
    if (method_exists($student, "describeu")){
        $student->describe();
    }else{
        echo "Mathod is not found";
    }

}else {
    echo "Class not found";
}


?>