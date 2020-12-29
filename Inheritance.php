<?php
class UserData{
    public $user;
    protected $password;

    public function __construct($user,$pass){
        $this->user = $user;
        $this->password = $pass;
    }
    public function display(){
        echo "User name is : {$this->user}<br>";
        echo "Password is : {$this->password}<br><br>";
    }
}
class Admin extends UserData{
    public $phone;
    public function display(){
        echo "User name is : {$this->user}<br>";
        echo "Password is : {$this->password}<br>";
        echo "Phone is : {$this->phone}<br>";
    }
}


$user = "hasan";
$ps = "2324254";

$ud = new UserData($user, $ps);
$ud->display();
$admin = new Admin($user,$ps);
$admin->phone= "01913767156";
$admin->display();

if ($admin instanceof UserData){
    echo "Inherited";
}
?>