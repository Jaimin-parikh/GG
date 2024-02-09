<?php

$n = 5;
$k = $n;

echo "<h1>";

$arr = [];

for($i=0; $i<$n; $i++){
    if($i == 0){
        $k = $arr[0] = 1;
    for($j=0; $j<4; $j++){
        if($j %2 == 0)
            array_push($arr,($k += 9) );
        else
        array_push($arr,($k += 1) );   
        }
        foreach($arr as $a){
            echo "$a&nbsp";
        }
        echo"<br>";
}
    else{
        for($j=0; $j<$n;$j++){
            $k = $arr[0];
        if($j %2 == 0)
           $arr[$j] += 1 ;
        else
            $arr[$j] -= 1;
        }
        foreach($arr as $a){
            echo "$a&nbsp";
        }
        echo"<br>";
    }
}

echo "<h1>";
?>