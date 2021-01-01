<?php


    // define("DB_SERVER", "localhost");
    // define("DB_USERNAME", "root");
    // define("DB_PASSWORD", "");
    // define("DB_DATABASE", "oop");

    // $db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

class User{
    public function __construct()
    {
        $host = "localhost";
        $user = "root";
        $password = "";
        $database = "oop";
        $this->linkdb = mysqli_connect($host,$user,$password,$database);
    }

    public function save_user($data){
      // print_r($data);
       $name = $data['name'];
       $email = $data['email'];
       $password = $data['passworde'];

       $query ="INSERT INTO `users`( `name`, `email`, `password`) VALUES ('$name','$email','$password')";

       mysqli_query( $this->linkdb,$query);

       echo $name."<br>";
       echo $email."<br>";
       echo $password;
    }
}
?>