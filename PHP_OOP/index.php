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
require_once './modules/Person.php';
require_once './modules/Fruit.php';

       
$person1 = new Person();
echo Person::AVG_LIFE_SPAN;

$person1->printSomething();

echo $person1->getLastname() . ' ';
$person1->setLastname("Petr.");
echo $person1->getLastname() . ' ';

function __autoload($className) {
    $filePath = "./{$className}.php";
    print("__autoload() called!");
    if (is_readable($filePath))
        include_once $filePath;
}
echo "<br>===============<br>";


$zoo = array(
    new Animal("hipo", "gray", 55),
    new Animal("giraffe", "yellow", 22),
    new Animal('monkey', 'orange', 33)
);
echo('isvardintas zoo:');
foreach ($zoo as $animal) {
    echo('<pre>');
    echo($animal->getName() . ' ' . $animal->getColor() . ' ' . $animal->getAge() . "\n");
    echo('</pre>');
}
  
// function OldEnough($zoo) {
//     foreach ($zoo as $animal) {
//         if($animal->getAge() >= 25) 
//             return TRUE; 
//         else 
//             return FALSE;
        
//     }
// } 

function OldEnough($animal) {   
    
    if($animal->getAge() >= 21) 
        return TRUE; 
    else 
        return FALSE;
           
} 


$nufiltruotiGyvuliai = (array_filter($zoo, "OldEnough")); 
//print_r($x);
echo('<pre>');
echo "<br>========+++++++++++=======<br>";
if ($nufiltruotiGyvuliai){          //Jeigu yra gyvuliu virs 25 metu
    print('Animals older than enough:');
    echo('<pre>');
    foreach ($nufiltruotiGyvuliai as $animal) {
        print('Name: '.$animal->getName().'('.$animal->getAge().')');
        echo('<br>');
    //print_r($animal->getName());
    }
}else print('All animals are under age !!!!');


// var_dump(array_filter($zoo, "OldEnough"));

echo "<br>===============<br>";
$people = array(
    new Person("Jonas", "Jonaitis"),
    new Person("Petras", "Petraitis"),
    new Person("Antanas", "Antanaitis")
);
echo('people PRIES sorta:');
foreach($people as $person){
    echo('<pre>');
    print($person->getFirstname() . ' ' . $person->getLastname() . "\n");
    echo('</pre>');
}
sort($people);
echo('people PO sorto:');
foreach($people as $person){
    echo('<pre>');
    print($person->getFirstname() . ' ' . $person->getLastname() . "\n");
    echo('</pre>');
}

$apple = new Fruit();
$banana = new Fruit();
$apple->setName('Apple');
$banana->setName('Banana');

echo $apple->getName();
echo "<br>";
echo $banana->getName();
echo "<br>===============<br>";
// design PATERN
// class Singleton {
//     private static $instance = null;
//     private function __construct(){}

//     public static function getInstance(){
//         if (self::$instance == null){
//             self::$instance = new Singleton();
//         }
//         return self::$instance;
//     }
// }

class DbConnetion {
    private static $instance = null;
    private $connectionString;
    private function __construct($connectionString){
        $this->connectionString = $connectionString;
    }

    public static function getInstance($gg){
        if (self::$instance == null){ // niekada dar nebuvo kviestas, 0
            print("Returning new object!" . "<br>");
            self::$instance = new DbConnetion($gg);
        }
        return self::$instance;
    }
}

// Uncaught Error: Call to private DbConnetion::__construct()
// $dbConn = new DbConnetion();
$dbConn = DbConnetion::getInstance("A");
$dbConn1 = DbConnetion::getInstance("B");
$dbConn2 = DbConnetion::getInstance("C");

print("<pre>");
var_dump($dbConn);
var_dump($dbConn1);
var_dump($dbConn2);
print($dbConn === $dbConn1);
print("</pre>");
echo "<br>===============<br>";

class Employee extends Person {
    private $badgeId;
public function __construct($fn, $ln, $bi){
        parent::__construct($fn, $ln); // super();
          // $this->firstname = $fn;
          // $this->lastname = $ln;
      $this->badgeId = $bi;
}
public function getBadgeId(){
    return $this->badgeId;
}
}

$p1 = new Employee("Mindaugas", "Bern", "0551651");
echo $p1->getFirstname() . PHP_EOL;
echo $p1->getBadgeId() . PHP_EOL;

// $p1 = new Person("Mindaugas", "Bern", "0551651");
// echo $p1->getFirstname() . PHP_EOL;
// echo $p1->getBadgeId() . PHP_EOL; // Uncaught Error: Call to undefined method Person::getBadgeId()




?>
<br>
<br>
<a href="../index.php">Back to Main page</a></div>
</body>
</html>