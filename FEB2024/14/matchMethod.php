<?php

// namespace FEB2024/07/;
$num = 12;

try{
$message = match($num){
    10 => "That's it" ,
    $num > 10 => "To High" ,
    $num < 10 => "To Low" ,
};
}
catch(UnhandledMatchError $e){
    echo 'This is happening because $num > 10 or <10 returns bool and match use identity operator';
}
echo $message;
?>