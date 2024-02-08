<?php
$arr = [
    'name'=> 'Alice',
    'age'=> 20,
    'major'=> 'Computer Science',
    'gpa'=> 3.8,
    ];

function change_key_case_By_me($arr)
{
    echo "<h1>";
    foreach($arr as $key=>$values){
        echo "$key<br>";
        $key = strtoupper($key);
        echo " $key<br>";
        echo "<br>";
    }
    echo "</h1>";
}
change_key_case_By_me($arr);

?>