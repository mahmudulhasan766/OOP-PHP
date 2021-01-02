<?php

require_once 'classes/User.php'; 
 
 $user = new User();
 if(isset($_POST['save_users'])){
     $msg =  $user->save_user($_POST);
 }

 $all_users=$user->all_user();
 //print_r($all_users);

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
    <h3>
        <?php
        if(isset($msg)){
            echo $msg;
        }
        ?>
    </h3>

    <hr/>
    <table border>
        <tr>
            <th>Name</th>
            <th>Emali</th>
            <th>Action</th>
        </tr>

        <?php
        while ($row=mysqli_fetch_assoc($all_users)){ 
            ?>
            <tr>
            <td><?=$row['name'] ?></td>
            <td><?=$row['email'] ?></td>
            <td>
                <a href="edit.php?id=<?=$row['id']?>">Edit</a>
                <a href="delete.php?id=<?=$row['id']?>">Delete</a>
            </td>
            </tr>


            <?php
        }
        ?>
    </table>
</body>

</html>