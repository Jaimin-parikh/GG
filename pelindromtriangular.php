<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><br><br><h2>
    <form action="pelindromtriangular.php" method="POST">
        INPUT: <input type="text" name="input"> 
        <input type="submit" value="Submit"> 
    </form>
    </h2>
</body>
</html>

<?php
echo "<h2>";
$num = $_POST['input'];
$arr = [];
for($i = 1; $i<= $num; $i++){
    for($j = 1; $j<= ($num-$i); $j++){
        echo "&nbsp&nbsp&nbsp&nbsp";
    }   
    for($j= $i; $j>1; $j--){
        echo $j."&nbsp&nbsp";
    }
    for($j = 1; $j<= $i; $j++){
        echo $j."&nbsp&nbsp";
    }
    echo "<br>";
}


echo "</h2>";
?>