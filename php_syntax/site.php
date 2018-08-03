<html>
    <brody>

        
    <form action="site.php" method="get">
            Num1: <input type="number" name="num1">
            <br>
            Num2: <input type="number" name="num2">
            
            <input type="submit">
   <br>
    Answer = <?php echo $_GET["num1"] * $_GET["num2"] ?>        
    </body>
