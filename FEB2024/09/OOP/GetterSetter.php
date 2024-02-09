<?php

class Car{
    public $name ;
    public $brand;

    function set_name($name){
            $this->name = $name;
    }
    function get_name(){
        return $this->name;
    }
    function set_brand($brand){
            $this->brand = $brand;
    }
    function get_brand(){
        return $this->brand;
    }
}
class Watch{
    private $watch_name = "Skeleton";

    private function set_watch_name($watch_name){
        $this->watch_name = $watch_name;
    }
    private function get_watch_name(){
        echo "<br> $this->watch_name";
    }
}

echo "<h2>";
$car = new Car();
$car->name = "supercar";
echo $car->name;

echo "</h2>";
?>