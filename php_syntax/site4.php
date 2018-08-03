<html>
<head>
<meta charset="utf=8">
<title></title>
</head>
<body>

<?php 
    $friends = array("john", "justin", "blake", "micah", "aaron");
    $friends[5] = "dude";
    echo $friends[count($friends)-4];
?>
</body>
</html>