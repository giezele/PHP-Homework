<?php
class Person {
        const AVG_LIFE_SPAN = 79;
        private $firstname = "Mindaugas_4eil"; 
        private $lastname = "Ber.";
    function __construct($firstname = "Mindaugas", $lastname = "Ber."){
            $this->firstname = $firstname; 
            $this->lastname = $lastname;
    }
    
    function getFirstname(){
            return $this->firstname;
    }
    
    function setFirstname($firstname){
            $this->firstname = $firstname;
    }
    
    function getLastname(){
            return $this->lastname;
    }
    
    function setLastname($lastname){
            $this->lastname = $lastname;
    }
    function printSomething(){
        //         print("Something");
        //     }
   }
}

?>