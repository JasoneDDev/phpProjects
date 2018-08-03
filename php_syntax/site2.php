<html>
    <body>
    <form action="site2.php" method="get">
        color: <input type="text" name="color"> <br>
        Plural noun: <input type="text" name="pnoun"> <br>
        Celebrity: <input type="text" name = "celeb"> <br>
        <input type="submit">
        <br>
        <br>
        <br>
        <?php  
            $color = $_GET["color"];
            $pnoun = $_GET["pnoun"];
            $celeb = $_GET["celeb"];

            echo "Roses are $color, <br>";
            echo "$pnoun are blue, <br>";
            echo "$celeb is too. <br>";
            ?>
    </body>
</html>