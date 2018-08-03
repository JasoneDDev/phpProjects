<html>
<body>

<form action="switch.php" method="post">
<input type="text" name="grade"> <br>
<input type = "submit">
</form>

<?php 
$grade = $_POST["grade"];

switch($grade){
    case "A":
        echo " You did amazing";
        break;
    case "B":
        echo "not too bad";
        break;  
    default:
        echo "We don't mark that low :P";
        break;    

}
?>
</body>
</html>