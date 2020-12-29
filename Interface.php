<?php

interface School{
    public function mySchool();
}
interface College{
    public function myCollege();
}
interface Versity{
    public function myVersity();
}
class Teacher implements School,College,Versity{
    public function __construct(){
        $this->mySchool();
        $this->myCollege();
        $this->myVersity();
    }
    public function mySchool(){
        echo "I am a school teacher.<br>";
    }
    public function myCollege(){
        echo "I am a College teacher.<br>";
    }
    public function myVersity(){
        echo "I am a Versity teacher.<br><br>";
    }
}

class Student implements School,College,Versity{
    public function __construct(){
        $this->mySchool();
        $this->myCollege();
        $this->myVersity();
    }
    public function mySchool(){
        echo "I am a school Student.<br>";
    }
    public function myCollege(){
        echo "I am a College Student.<br>";
    }
    public function myVersity(){
        echo "I am a Versity Student.<br>";
    }
}


$teacher = new Teacher();
$student = new Student();

?>