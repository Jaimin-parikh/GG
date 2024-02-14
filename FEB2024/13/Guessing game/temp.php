<?php

function take_input() {
    echo    "<!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Document</title>
    </head>
    <body><br><br><h2>
        <form action='temp.php' method = 'POST'>
            Enter a Number : <input type='number' name='input'>
            <br><input type='submit' value='Submit' style='margin-left: 300px;margin-top: 30px'>
        </form>
    </h2>
    </body>
    </html>";
    return $_POST['input'];
}

$n = rand(1, 100);
echo " $n";
$lives = 10;
$input = take_input();
while($lives > 0)
{
    
    // if(!isset($_POST['input'])) {
    //     continue;
    // }

    $guess = (int)$input;
    if($guess > $n) {
        echo "<br> Too High";
        $input = take_input();
    } elseif ($guess < $n) {
        echo "<br> Too Low";
        $input = take_input();
    } else {
        echo "Congratulations! You have guessed it.";
        $lives = 0;
        break;
    }

    $lives--;

    if($lives == 0) {
        echo "<br> Game Over! The number was $n";
    }
}

?>