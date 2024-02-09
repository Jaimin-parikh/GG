<?php

class Base_class{
    public function identify(){
        echo "<h2><br>This is from base class</h2>";
    }
}

class Derived_class extends Base_class{
    function identify()
    {
        echo "<h2><br>This is from Derived class</h2>";
        parent::identify();
    }
}
$obj1 = new Derived_class();
$obj1->identify();

?>