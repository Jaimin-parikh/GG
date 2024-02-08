<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><br><br><h2>
    <form action="kpattern.php" method="POST">
        INPUT: <input type="text" name="input"> 
        <input type="submit" value="Submit"> 
    </form>
    </h2>
</body>
</html>

<?php
echo "<h2>";
$num = $_POST['input'];

for($i=$num; $i>=1; $i--){
    echo "<br>";
    for($j =1;$j<$i;$j++){
        echo " *&nbsp&nbsp";
    }
    
}
for($j=3;$j<=$num;$j++){
    
    for($i =$num;$i>($num-$j+1);$i--){
            echo " *&nbsp&nbsp";
    }
    echo"<br>";
}
echo "</h2>";
?>