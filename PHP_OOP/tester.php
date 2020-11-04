<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP</title>
</head>
<body>
<?php
error_reporting(E_ALL); 
ini_set('display_errors', 1);
require_once './modules/Animal.php';
// require_once './modules/Person.php';
require_once './modules/Fruit.php';

       
class Person {
		private $firstname; 
		private $lastname;
		
		public function __construct($fn, $ln){
		    $this->firstname = $fn;
		    $this->lastname = $ln;
		}
		
		public function getFirstname(){
		    return $this->firstname;    
		}
		
		public function getLastname(){
		    return $this->lastname;    
		}
   	}
   	
    class Employee extends Person {
        function someFun(){ print("ABC"); }
    }
    $people = array(
        // new Employee("Mindaugas", "Bern"), //no no
        new Person("Jonas", "Jonaitis"),
        new Person("Petras", "Petraitis")
        );

foreach($people as $person){
    echo('<pre>');
    print($person->getFirstname() . ' ' . $person->getLastname() . "\n");
   
// Uncaught Error: Call to undefined method Person::someFun()
    // print($person->getFirstname() . ' ' . $person->getLastname() . ' ' .  $person->someFun() . "\n");
    echo('</pre>');
}
