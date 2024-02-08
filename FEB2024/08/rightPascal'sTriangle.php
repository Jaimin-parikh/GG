<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br><br><h2>
    <form action="rightPascal'sTriangle.php" method="POST">

    INPUT : <input type="text" name = "input">
    <input type="submit" value="Submit">
    </form></h2>
</body>
</html>


<?php

$num = $_POST['input'];
echo "<h2>";
for($i = 1;$i <=($num*2)-1; $i++){
    if($i <= $num){
        for($j=1;$j<= $i; $j++){
            echo "*&nbsp";
        }
    }
    else{
        for($j=1; $j <=( 2*$num - $i);$j++){
            echo "*&nbsp";
        }
    }
    echo "<br>";
}
echo "</h2>";
?>