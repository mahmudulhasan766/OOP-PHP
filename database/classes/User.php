<?php
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
       mysqli_query($this->linkdb,$query);
  

       $msg = "Data save Success!";
       return $msg;
    }
    public function all_user(){
        $qu ="SELECT * FROM `users`";
        return mysqli_query($this->linkdb,$qu);
    }
    public function delete_user($id){
        //$d_query = "";
        mysqli_query($this->linkdb,"DELETE FROM `users` WHERE `id`='$id'");
        //header('Location:index.php');
        header('Location:index.php');
    }
    public function update_user($id){
        return mysqli_query($this->linkdb,"SELECT * FROM `users` WHERE `id`='$id'");
    }
    public function update_user_save($data){
       print_r($data);
       $id = $data['id'];
       $name = $data['name'];
       $email = $data['email'];
       
       mysqli_query($this->linkdb,"UPDATE `users` SET `name`='$name',`email`='$email' WHERE `id`='$id'");
       header('Location:index.php');
       $u_msg = "Update data seccessfully!!";
       return $u_msg;
    }

    public function loginChack($data){
       print_r ($data);

        $email = $data['email'];
        $password = $data['passworde']; 

        $sql = "SELECT * FROM `users` WHERE `email` = '$email' AND `password`='$password'";

        $result = mysqli_query($this->linkdb, $sql);

        if($result){
            if(mysqli_num_rows($result)==1){
                header('Location:index.php');
            }else {
                $login_error = "Email and Password invaild!";
            }
        }else{
            die();
        }
    }
} 
?>