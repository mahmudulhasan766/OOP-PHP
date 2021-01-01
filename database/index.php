<?php

require_once 'classes/User.php'; 
 
 $user = new User();
 if(isset($_POST['save_users'])){
     $user->save_user($_POST);
 }

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>detaBase</title>
<h1>Hello DataBase</h1>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="name" placeholder="Name"/><br/><br/>
        <input type="email" name="email" placeholder="Email"/><br/><br/>
        <input type="password" name="passworde" placeholder="Password"/><br/><br/>
        <input type="submit" value="Save User" name="save_users"/>

    </form>



</body>

</html>