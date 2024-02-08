<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br><br><h2>
    <form action="mirrorimagetrianglepattern.php" method="POST">

    INPUT : <input type="text" name = "input">
    <input type="submit" value="Submit">
    </form></h2>
    <br>
</body>
</html>


<?php

$num = $_POST['input'];
echo "<h2>";
for($i=1 ;$i<=$num;$i++){
    echo "<br>";
    for($j=1;$j<=($i);$j++){
            echo "&nbsp&nbsp";
    }
    for($j=$i; $j<=$num;$j++){
        echo "$j &nbsp&nbsp";
    }

}

for($i = 1;$i < $num;$i++){
    echo "<br>";
    for($j=($num - $i);$j>1;$j--){
        echo "&nbsp&nbsp";
    }
    for($j=($num - $i);$j<=$num;$j++){
        echo " $j&nbsp&nbsp";
    }

}
echo "</h2>";
?>