<html>
<body>

<?php 

// it's a comment :P

/*
here is a comment block tada

*/

$count =0;

echo "-- while--- <br>";

while($count < 10){

    echo $count, "<br>";
    $count++;
}

$friends = ["john", "brian", "alex"];

echo "--do while--- <br>";

$count = 0;
do{

    echo $count, "<br>";
    $count++;
}while($count <= 10);


echo "---for loop---- <br>";

for ($i=0; $i<=10; $i++){
    echo $i, "<br>";

}

echo "---foreach loop---- <br>";

foreach($friends as $item){
    echo $item, "<br>";
}

?>

</body>
</html>