<?php
class Car {
    // no dependency injection - Car class creates it's dependency i.e. engine
       // ... this is not a recommended way to initialize objects / structure the app
       // private $engine = new Engine();

       private $engine;
       
       // depency injection : constructor injection
       function __construct(Engine $e){
           $this->engine = $e;
       }
       // depency injection : setter injection
       function setEngine(Engine $e){
           $this->engine = $e;
       }
   }
   class Engine {
    function __construct(){
        print("Engine is ON ON ONNN!");
    }
}

$car1 = new Car(new Engine());

$engine = new Engine();
$car2 = new Car($engine);


?>