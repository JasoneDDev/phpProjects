<html>
<body>
<!-- dictionaries ie associated array
can only call the key not the value
-->
<form action="array.php" method="post"> </br>
Check Score: <input type="text" name="student"> <br>
<input type="submit"> <br>
</form>

<?php 
    $grades = array("Jim"=>"80", "Ivy"=>"100", "bob"=>"45");
    echo $grades[$_POST["student"]];
?>
</body>
</html>