<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOLID</title>
</head>
<body>
<?php
// SOLID is an acronym that stands for the following:

//     Single responsibility principle
//     Open/closed principle
//     Liskov substitution principle
//     Interface segregation principle
//     Dependency inversion principle 


    // S - SRP → single responsibility principle: klasė atsakinga už vieną aspektą programoje. 
    //     Tarkim Person klasė savyje turi tai kas atsocijuojama “žmonėmis” ir neturėsime tokių dalykų 
    //     kaip calculateSalary() / readFromFile() ir pan.;

    //     Modify the Page class so that is only knows about the data it handles. We then create a secondary 
    //     class called JsonPageFormatter that is used to format the Page objects into JSON.


class Page {
    protected $title;


    public function getTitle(){
        return $this->title;
        }

    public function getPage($title){
    return $this->title;
    }
}
 
class JsonPageFormatter {
    public function format(Page $page) {
        return json_encode($page->getTitle());
    }
}

// O - OCP → open-closed principas: klasės turi būti atviros funkcionalumo praplėtimui, 
//      bet uždaros funkcionalumo modifikavimui. “Nekeisk seno kodo - praplėsk”.

// The correct way to approach this problem is to move the area calculation code into the shape class 
// and have all shape classes extend a Shape interface. 
// We can now create a Rectangle and Circle shape classes that will calculate their area when asked.

interface Shape {
    public function area();
 }
  
 class Rectangle implements Shape {
   public function area() {
     return $this->width * $this->height;
   }
 }
  
 class Circle implements Shape {
   public function area() {
     return $this->radius * $this->radius * pi();
   }
 }
 class Board {
    public $shapes;
   
    public function calculateArea() {
      $area = 0;
      foreach ($this->shapes as $shape) {
        $area+= $shape->area();
      }
      return $area;
    }
  }

//   L - LSP → Liskov (mot.) substitucijos pricipas → turime galėti pakeisti visas tėvines klases vaikinėmis klasėmis
//    ir kodas turi veikti toliau ( jokių if($o instanceof C) ).

// objects should be replaceable by their subtypes without altering how the program works.

class Rectanguler {
    public function setWidth($w) { 
        $this->width = $w;
    }
   
    public function setHeight($h) {
        $this->height = $h;
    }
   
    public function getArea() {
        return $this->height * $this->width;
    }
  }

  class Square extends Rectanguler {
    public function setWidth($w) {
      $this->width = $w;
      $this->height = $w;
    }
   
    public function setHeight($h) {
      $this->height = $h;
      $this->width = $h;
    }
  }
//   One solution to the rectangle vs square situation is to create an interface called Quadrilateral 
//   and implement this in separate Rectangle and Square classes. In this situation we are allowing the classes 
//   to be responsible for their own data, but enforcing the need for certain method footprints being available.

interface Quadrilateral {
    public function setHeight($h);
    public function setWidth($w);
    public function getArea();
  }
   
  class Rectangula implements Quadrilateral{
    public function setHeight($h){
        echo "Method Called"; 
    }
    public function setWidth($w){
        echo "Method Called"; 
    }
    public function getArea(){
        echo "Method Called"; 
    }
  }
   
  class Squaree implements Quadrilateral{
    public function setHeight($h){
        echo "Method Called"; 
    }
    public function setWidth($w){
        echo "Method Called"; 
    }
    public function getArea(){
        echo "Method Called"; 
    }
  }

//   I - ISP → Inteface segregation principas → turėti daug mažų interface’ų yra geriau nei vieną didelį
//    (Pair<T, E> vs. ReadOnlyPair / ImutablePair + WritablePair / MutablePair);

// Many client-specific interfaces are better than one general-purpose interface. 
// In other words, classes should not be forced to implement interfaces they do not use.

// interface Worker {
//     public function takeBreak()
//     public function code()
//     public function callToClient()
//     public function attendMeetings()
//     public function getPaid()
//   }
// Here, we split out a Coder and ClientFacer interface from our generic Worker interface.

interface Worker {
    public function takeBreak();
    public function getPaid();
  }
   
  interface Coder {
    public function code();
  }
   
  interface ClientFacer {
    public function callToClient();
    public function attendMeetings();
  }

class Developer implements Worker, Coder {
    public function takeBreak(){echo "Method Called";}
    public function getPaid(){echo "Method Called";}
    public function code(){echo "Method Called";}
}
 
// class Manager implements Worker, ClientFacer {
// }

// D - DI → dependency inversion: kodas (metodai) turi priklausyti nuo abstraktybių, ne nuo konkretybių. 
// Reiškia metodą stegiamės parašyti tokį, kad jis veiktų su super tipais (tėvinėmis klasėmis / tėviniais 
// interface’ais). Metodų perpanaudojimą agituoja. Pritaikomas ir aukštesnio lygio koncepcijoms: klasėms / moduliams.

// simplest of the principles, this states that classes should depend upon abstractions, not concretions. 
// Essentially, don't depend on concrete classes, depend upon interfaces

interface DbConnectionInterface {
  public function connect();
} 

class MySqlConnection implements DbConnectionInterface {
  public function connect() {}
}

class PageLoader {
  private $dbConnection;
  public function __construct(DbConnectionInterface $dbConnection) {
      $this->dbConnection = $dbConnection;
  }
}

?>



<br>
<br>
<a href="../index.php">Back to Main page</a></div>
</body>
</html>