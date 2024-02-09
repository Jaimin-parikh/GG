<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br><br><h2>
    <form action="Hollow_hourglass.php" method="POST">

    INPUT : <input type="text" name = "input">
    <input type="submit" value="Submit">
    </form></h2>
</body>
</html>


<?php

$n = $_POST['input'];
echo "<h2>";
$k = 2*$n -1;

for($i=1; $i <= $n; $i++){
    echo "<br>";
    for($j=1; $j <= $k; $j++){
        if($i==1 || $i == $j || ($i+$j) == 2*$n){
            echo "*";
        }
        else{
            echo "&nbsp&nbsp";
        }
    }
}
for($i=1; $i < $n; $i++){
    echo "<br>";
    for($j=1; $j <= $k; $j++){
        if((($i+$j) == $n) || $i == ($n-1) || ($n-$i) == (2*$n-$j)){
            echo "*";
        }
        else{
            echo "&nbsp&nbsp";
        }
    }
}

echo "</h2>";


?>