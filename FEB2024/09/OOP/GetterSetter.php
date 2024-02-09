<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><h2>
<form action"GetterSetter.php" method="post">
    Brand : <input type="text" name="brand"><br>
    Model : <input type="text" name="model" ><br>
    <input type="submit" value="Submit">
</form>
    </h2>
</body>
</html>
<?php

class Car{
    public $name ;
    public $brand;

    // function set_name($name){
    //         $this->name = $name;
    // }
    // function get_name(){
    //     return $this->name;
    // }
    // function set_brand($brand){
    //         $this->brand = $brand;
    // }
    // function get_brand(){
    //     return $this->brand;
    // }
    function __construct($name, $brand){
        $this->name = $name;
        $this->brand = $brand;

        echo"<br> $name by $brand";
    }

}
class Watch{
    static $watch_name = "Skeleton";

    private function set_watch_name($watch_name){
        $this->watch_name = $watch_name;
    }
    private function get_watch_name(){
        echo "<br> $this->watch_name";
    }
    static function print_watch_name(){
        echo "Hi i'm static function";
    }
}

echo "<h2>";
$car = new Car($_POST['model'],$_POST['brand']);
// $car->name = "supercar";
// echo $car->name;

// echo "<br>";
// Watch::print_watch_name();
// echo "<br>";
// echo Watch::$watch_name;
// echo "</h2>";
?>