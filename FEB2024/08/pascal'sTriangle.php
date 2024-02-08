<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br><br><h2>
    <form action="pascal'sTriangle.php" method="POST">

    INPUT : <input type="text" name = "input">
    <input type="submit" value="Submit">
    </form></h2>
</body>
</html>


<?php

$num = $_POST['input'];
echo "<h2>";
for($i =1; $i<=$num; $i++){
        for($j = $i; $j<=$num; $j++){
            echo " &nbsp&nbsp";
        }
        for($j=1;$j<=$i;$j++){
                
            if($j==1  || $j == $i){
                echo"1 &nbsp&nbsp&nbsp";
            }
            else{
                echo ($i-1)."&nbsp &nbsp";
            }
        }
        echo "<br>";
}
echo "</h2>";
?>