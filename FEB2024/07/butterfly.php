<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><br><br><h2>
    <form action="butterfly.php" method="GET">
        INPUT: <input type="text" name="input"> 
        <input type="submit" value="Submit"> 
    </form>
    </h2>
</body>
</html>

<?php
echo "<h2>";
$num = $_GET['input'];

for($i=1 ;$i<=$num ;$i++){
    for($j=1; $j<=$num ;$j++){
        if($i == $j || ($i+$j)== ($num+1) || $j==1 || $j == $num){
            echo " *&nbsp   ";
        }
        else{
            echo  "  &nbsp&nbsp&nbsp&nbsp";
        }
    }
    echo "<br>";
}
echo "</h2>";
?>