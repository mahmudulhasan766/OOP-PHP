
<!DOCTYPE html>
<html>
<body>
<!-- <from action="" method = "POST">
    <table>
        <tr>
            <td>Enter the first Number: </td>
            <td><input type = "number" name = "num1"/></td>
        </tr>
        <tr>
            <td>Enter the second Number: </td>
            <td><input type = "number" name = "num2"/></td>
        </tr>
        <tr>
            <td>Enter the second Number: </td>
            <td><input type = "submit" name = "calculation" value="Calculate"/></td>
        </tr>
    </table>
</from> -->
<form action="" method="post">
    Name : <input require type = "number" name = "num1"/><br/><br/>
    Email : <input require type = "number" name = "num2"/><br/><br/>
    
    Dristic: 
    <select name="dristic" require>
        <option value = "">Select Dristic</option>
        <option value = "jamalpur">Jamalpur</option>
        <option value = "dhaka">Dhaka</option>
        <option value = "rongpur">Rongpur</option>
        <option value = "tangail">Tangail</option>
    </select>
    <br><br>
    <input type = "submit" value = "Submit">


</form>

    
</body>
</html>

<?php 
include "function.php";
if ($_SERVER['REQUEST_METHOD']=='POST'){
    //$cal = $_POST['calculation'];
    $numOne = $_POST['num1'];
    $numTwo = $_POST['num2'];

    echo  "hasan";
    if(empty($numOne) or empty($numTwo)){
        echo "<span style='color:red'>fild must not be empty!</span>";
        
    }
    $cal = new Calculation;
        $cal->add($numOne,$numTwo);
        $cal->sub($numOne,$numTwo);
        $cal->mul($numOne,$numTwo);
        $cal->div($numOne,$numTwo);
    
}

?>
