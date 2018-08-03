<html>
<body>

<form action="site3.php" method="post">
Name: <input type="text" name="name1">
Password: <input type="password" name="pass"> <br>
        <input type="submit"> <br>


        <?php 
        echo "Thanks $name1, you're now logged in. <br>";
        echo $_POST["pass"];
         ?>

</body>
</html>