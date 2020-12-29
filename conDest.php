<?php
class UserData{
    public $user;
    public $password;

    public static $age ="24";

    //.........
    const NAME = "  Hasan";

    public static function display(){
        echo "My name is ".UserData::NAME."<br/>";
        echo "My age is : ".self::$age;
    }
    //.........   

    public function __construct($user,$pass){
        $this->user = $user;
        $this->password = $pass;

        echo "hasan<br>";

        echo "Usrename is :{$this->user}<br>and password is :{$this->password}<br>";
    }

   

    public function __destruct(){
      unset($this->user);
      unset($this->password);

      // echo "Usrename is :{$this->user}<br>and password is :{$this->password}<br>";
    }
}
$user = "hasan";
$ps = "2324254";

$ud= new UserData($user, $ps);
UserData::display();
?>