<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><br><br><h2>
    <form action="zeroone.php" method="POST">
        INPUT: <input type="text" name="input"> 
        <input type="submit" value="Submit"> 
    </form>
    </h2>
</body>
</html>

<?php
echo "<h2>";
$num = $_POST['input'];
for($i = 1; $i <= $num; $i++){
    for($j = 1; $j <= $i; $j++){
        if(($i +$j )%2 == 0){
            echo "1 &nbsp";
        }
        else{
        echo "0 &nbsp";}
    }
    echo "<br>";
}

echo "</h2>";
?>