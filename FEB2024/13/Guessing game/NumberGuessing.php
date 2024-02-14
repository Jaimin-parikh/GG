<?php 
include('random.php');?>
<!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Document</title>
    </head>
    <body><br><br><h2>
        <form action='NumberGuessing.php' method = 'POST'>
            Enter a Number : <input type='number' name='input'>
            <br><input type='submit' value='Submit' style='margin-left: 300px;margin-top: 30px'>
        </form>
    </h2>
    </body>
    </html>

<?php
global $n;
echo "<br>guess should be: $n";
$input = $_POST['input'];
$lives = 10;

while($lives > 0){
switch( $input){
    case $input  >$n:
        echo "<br>Too High";
        $lives--;
        
        break;
    case $input  < $n:
        echo "<br>Too low";
        $lives--;
        break;
    default:
        echo "<br>That's it!";
        $lives == 0;
        break;
}
echo "<br> $input";
}


?>

