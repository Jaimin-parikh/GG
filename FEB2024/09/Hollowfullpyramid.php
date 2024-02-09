<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><br><br><h2>
    <form action="Hollowfullpyramid.php" method="GET">
        INPUT : <input type="text" name="input" >
        <input type="submit" value="Submit">
    </form>
</h2>
</body>
</html>

<?php

$n = $_GET['input'];
$k = 2*$n -1;
echo "<h2>";
for($i = 1; $i <= $n; $i++){
    echo"<br>";
    for($j=1; $j < $k; $j++){
            if($i == $n || ($j == $n && $i == 1) || ($j + $i) == ($n+1) || (($n-$i)==($k-$j))){
                echo "*&nbsp";
            }
            else{
                echo "&nbsp&nbsp&nbsp";
            }
    }
}
echo"*";
echo "</h2>";
?>