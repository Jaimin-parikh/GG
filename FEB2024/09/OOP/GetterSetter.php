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

echo "<h2>";
$car1 = new Car;
$car1->set_name("Chiron");
echo $car1->get_name()." By  ";

$car1->set_brand("Buggati");
echo $car1->get_brand();
echo "<br> $car1->name by $car1->brand";
echo "</h2>";
?>