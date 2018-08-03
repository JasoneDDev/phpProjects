<html>
<body>

<?php 
    function sayHi($name){
        echo "Hello $name <br>";
    }
    sayHi("Ivy");

    function cubed($num){
        return $num * $num * $num;
        
    }

    echo cubed(3),"<br>";

    function ifSyntax($a){
        $other = true;

        if($a == "a" && $other){
            echo "a = a";
        }
        else if($a == "b" || !$other){
            echo "a != a";
        }else {
            echo "nothing to show";
        }

    }

    ifSyntax("a");

    echo"<br>",  max(3, 6);
?>

</body>
</html>