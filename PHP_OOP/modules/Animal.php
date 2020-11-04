<?php
class Animal {
    private $age;
    private $name;
    private $color;
    	
    public function getName(){
        return $this->name;
    }
    
    public function setName($name){
        $this->name = $name;
    }

    public function getColor(){
        return $this->color;
    }
    
    public function setColor($color){
        $this->color = $color;
    }
    
    public function getAge(){
        return $this->age;
    }
    public function setAge($age){
        $this->age = $age;
    }

    function __construct($aniName, $color, $age){
        print("In animal constructor<br>");
        $this->name = $aniName;
        $this->color = $color; 
        $this->age = $age;
    }
}

?>