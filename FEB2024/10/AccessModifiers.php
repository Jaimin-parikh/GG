<?php

class AccessModifiers{
    public $public = 'This is a Public property ';
    private $private = 'This is a private property ';
    protected $protected = 'This is a protected property ';

    function print_property(){
        echo $this->public."<br>";
        echo $this->private."<br>";
        echo $this->protected."<br>";
    }
}

$temp = new AccessModifiers();
echo $temp->public."<br>";
// $temp->private; it can only be accesed into the class that defines it
// $temp->protected; It can be used in the class that defines it and it's child classes.
$temp->print_property();


?>