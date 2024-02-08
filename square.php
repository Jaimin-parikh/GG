<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><br><br><h2>
    <form action="square.php" method="get">
        INPUT : <input type="text" name="input">
        <input type="submit" value="Submit">
    </form></h2>
</body>
</html>

<?php
set_time_limit(15);
// $start_end = [];
// $mid = [];
$num = $_GET['input'];
// for($i = 0; $i < $num ;$i++){
//     array_push($start_end, '*');
//     if($i == 0 || $i == ($num-1)){
//         array_push($mid, '*');
//     }
//     else{
//         array_push($mid, '&nbsp&nbsp');
//     }
// }
// foreach($start_end as $k){
//     echo " $k";
// }
// echo "<br>";
// $i =0;
// while($i<($num - 2))
// {
//     foreach($mid as $k){
//     echo " $k";
// }
// echo "<br>";
// $i++;
// }
// foreach($start_end as $k){
//     echo " $k";
// } HERE COMES A BETTER APPROACH

$i =  0;
while($i < $num){
    $j = 0;
    while($j < $num){
        if($i == 0 || $j==0 || $i == ($num -1) || $j == ($num -1)){
            echo "* ";
        }
        else
        echo "&nbsp&nbsp ";
        $j++;
    }
    echo "<br>";
    $i++;
}
?>
