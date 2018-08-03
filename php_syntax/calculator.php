<html>
<body>

<form action="calculator.php" method="post">
    First Number: <input type="float" name="num1"> <br>
    Operator: <input type="text" name="op"> <br>
    Second Number: <input type="float" name="num2"> <br>
    <input type="submit">
</form>    

<?php 
$num1 = $_POST["num1"];
$num2 = $_POST["num2"];
$op = $_POST["op"];


if($op == "+"){
    echo $num1 + $num2;
}
else if($op == "*"){
    echo $num1 * $num2;
}else if($op == "/"){
    echo $num1 / $num2;
}else if($op == "-"){
    echo $num1 - $num2;
}else{
    echo "invalid operator";
}
?>

</body>
</html>