<html>
<body>

<form action="fruit.php" method="post">
Apples: <input type="checkbox" name="fruits[]" value="Apples"> <br>
Pears: <input type="checkbox" name="fruits[]" value="Pears"> <br>
Oranges: <input type="checkbox" name="fruits[]" value="Oranges"> <br>
<input type="submit">
<input="submit"> <br>

<?php 
    $fruits = $_POST["fruits"];
    echo $fruits[2];
?>

</body>
</html>