<?php
require_once 'classes/User.php'; 
 
$user = new User();

$id = $_GET['id'];
$data = $user->update_user($id);
$data = mysqli_fetch_assoc($data);
if(isset($_POST['save_users'])){
   $user->update_user_save($_POST);
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
        <input type="hidden" name="id" value="<?=$data['id']?>">
        <input type="text" name="name" placeholder="Name" value="<?=$data['name']?>"/><br/><br/>
        <input type="email" name="email" placeholder="Email" value="<?=$data['email']?>"/><br/><br/>
    
        <input type="submit" value="Update User" name="save_users"/>
    </form>
    <h3>
        <?php
        if(isset($u_msg)){
            echo $u_msg;
        }
        ?>
    </h3>

   

    <hr/>
</body>

</html>