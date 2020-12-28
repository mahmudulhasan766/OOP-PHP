
<!DOCTYPE html>
<html>
<body>
<!-- <from action="" method="post">
    <table>
        <tr>
            <td>Enter the first Number: </td>
            <td><input require type = "number" name = "num1"/></td>
        </tr>
        <tr>
            <td>Enter the second Number: </td>
            <td><input require type = "number" name = "num2"/></td>
        </tr>
        <tr>
            <td>Enter the second Number: </td>
            <td><input type = "submit" name = "calculat" value="Calculate"></td>
        </tr>
    </table>
</from> -->

<form action="" method="post">
    First Number : <input require type = "number" name = "num1"/><br/><br/>
    Second Number : <input require type = "number" name = "num2"/><br/><br/>
    

    <input type = "submit" name="calculat" value = "Submit">


</form>

    
</body>
</html>

<?php 
include "function.php";
//if ($_SERVER['REQUEST_METHOD']=='POST')
if (isset($_POST['calculat']))
{
    //$cal = $_POST['calculation'];
    $numOne = $_POST['num1'];
    $numTwo = $_POST['num2'];

    
    if(empty($numOne) or empty($numTwo)){
        echo "<span style='color:red'>fild must not be empty!</span>";
        
    }else{
        $cal = new Calculation;
        $cal->add($numOne,$numTwo);
        $cal->sub($numOne,$numTwo);
        $cal->mul($numOne,$numTwo);
        $cal->div($numOne,$numTwo);
    
    }
    
}

?>
