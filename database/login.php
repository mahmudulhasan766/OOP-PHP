<?php

require_once 'classes/User.php'; 
 
$login = new User();

if(isset($_POST['login'])){
    $login->loginChack($_POST);
    echo "hello";
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
        <input type="email" name="email" placeholder="Email"/><br/><br/>
        <input type="password" name="passworde" placeholder="Password"/><br/><br/>
        <input type="submit" value="Save User" name="login"/>

    </form>
    <hr/>  
</body>

</html>