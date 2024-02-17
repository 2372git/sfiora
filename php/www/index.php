<?php


define('ISTOK2', true);


error_reporting(-1);
//ini_set('display_errors',1);
//error_reporting(E_ALL);


//print "END";


// ============= Solution 38 =================================
/*
$candidates = [2,3,6,7];
$target=7;
        $l = sizeof($candidates);
        sort ($candidates);

        $candidates_new = Array();
        for($i=0; $i<$l; $i++) {
            $cand = $candidates[$i];
            $nn = (int)($target/$cand);
            print $nn . " ";
            if ($nn>1){
                $candidates_new = array_merge($candidates_new, array_fill(0, $nn, $cand));
            }
            else {break;}
        }
        $candidates = array_merge($candidates_new, array_slice($candidates, $i, $l));
        $l = sizeof($candidates);

print_r($candidates);

exit;
*/



















//======= City ============================================================

require_once 'City.php';
$cities = [
    new City('Tokio',   100000, 1052),
    new City('Shanhai', 120000, 15),
    new City('Deli',    135000,  -520),
    new City('Ankara',  50000, 1950),
    new City('London',  98000, 100),
    ];

/*
foreach ($cities as $city)
{
	print $city->getName() . "=" . $city->getPopulation() . "<br>";
}
*/
 
/*
$props = ['name','foundation','population'];
foreach ($cities as $city){
    foreach ($props as $prop){
        print $city->$prop . " = ";
    }
    print "<br>";
}

$cityName = new CityProp('name');
print $cities[3]->{$cityName->propName};
*/

$methods = ['method1' => 'getName', 'method2' => 'getPopulation'];

foreach ($cities as $city){
    foreach ($methods as $method){
       print $city->$method() . " = "; 
    }
    print "<br>";
}





// ============= Solution =================================
/*
class Solution {

//public $stek, $length, $width, $height;

    function exist($board, $word) {
global $stek, $board, $word, $length, $width, $height;
         $stek = Array(Array());
         $length = strlen($word);
         $width = sizeof($board[0]);
         $height = sizeof($board);
        if ($width == 0 OR $height == 0) {return false;}
//        if ($width == 1) {return 1;}
//        if ($height == 1) {return 1;}

        for($i=0; $i<$width; $i++)
        {
            for($j=0; $j<$height; $j++)
            {
                if ($this->findNext($stek, $i, $j, 0) === true) {return true;}
            }
        }
    return false;
    }


//$width, $height, $board, $word, $length

function findNext ($stek, $x, $y, $num) {
global $stek, $board, $word, $length, $width, $height;
	print $x . " = " . $y . " = " . $num . " = " . $length . "<br>";
        if ($num >= $length) {return true;}
        if ($x<0 OR $x >=$width OR $y<0 OR $y >=$height) {return false;}
        if (in_array(Array($x, $y), $stek, true)) {return false;}

        if ($board[$y][$x]===$word[$num]) {
            array_push($stek, Array($x, $y));
            if ($this->findNext ($stek, $x+1, $y, $num+1) == true) {return true;}
            if ($this->findNext ($stek, $x-1, $y, $num+1) == true) {return true;}
            if ($this->findNext ($stek, $x, $y+1, $num+1) == true) {return true;}
            if ($this->findNext ($stek, $x, $y-1, $num+1) == true) {return true;}
        }
        return false;
}


}





$sol = new Solution;

$board = Array(Array("A","B","C","E"),Array("S","F","C","S"),Array("A","D","E","E"));
$word = "ABCB";
if ($sol->exist ($board, $word)) {print " OK <br>"; }
else {print " NOK <br>"; }


$board = Array(Array("A","B","C","E"),Array("S","F","C","S"),Array("A","D","E","E"));
$word = "ABCC";
if ($sol->exist ($board, $word)) {print " OK <br>"; }
else {print " NOK <br>"; }



exit;

*/






//====== Node ===============================================
/*
class Node {
      public $val = 0;
      public $next = null;
      function __construct($val = 0, $next = null) {
          $this->val = $val;
          $this->next = $next;
      }
  }
  */
  



//======= Student ============================================================
/*
require_once 'Student.php';

$students[0] = new Student('john');
$students[1] = new Student('eric');
$students[2] = new Student('linda');


for ($i=0; $i<7; $i++)
{
	foreach ($students as $person)
	{
		print $person->getName() . "=" . $person->getCourse() . "<br>";
		$person->nextCourse();
	}
print "=======================<br>";
}
*/
  
  

//======= Arr ============================================================
/*
require_once 'Arr.php';

$numbers = new Arr;
print_r ($numbers->getAvg());
print "<br>=======================<br>";

$numbers->addArray([4,5,9,86,10]);
print_r ($numbers->getAvg());
print "<br>=======================<br>";


$numbers->addArray([4,50,9,86,10]);
print_r ($numbers->getAvg());
print "<br>=======================<br>";

$numbers->addOne(40000);
print_r ($numbers->getAvg());
print "<br>=======================<br>";
*/

  


//======= Employee ============================================================
/*  
require_once 'Employee.php';

$users[0] = new Employee('John', 'Walter', 25, 1000);
$users[1] = new Employee('Eric', 'Dopple', 36, 2000);
$users[2] = new Employee('Linda', 'Maiz', 18, 3000);

print_r ($users[0]->getSalary() . $users[2]->getSalary());

//var_dump($users);

foreach ($users as $user)
{
print $user->getName() . "=" . $user->getSalary() . "<br>";
}

foreach ($users as $user)
{
print $user->getName() . "=" . $users[0]->subAge(4) . "<br>";
}
*/




//=======Rectangle============================================================
/*
require_once 'Rectangle.php';

$rect = new Rectangle;
$rect->width = 5;
$rect->high  = 10;
print $rect->getPerimeter();
*/


  

//======= LinkedList ============================================================
/*
 class LinkedList {
	 private $head;
     public function __construct ($this->head = null) 
 }
	$head = new Node(1, null);
        $head = new Node(2, $head);
        $head = new Node(3, $head);
        $head = new Node(4, $head);
        $head = new Node(5, $head);
        $head = new Node(6, $head);
        $head = new Node(7, $head);
        $head = new Node(8, $head);


print "<br>";
//print_r($head);
print "<br>";

        while ($head->next != null) {
            $head->val += 1;
            $head = $head->next;
        }


//print_r($head);
*/


	
// =============================================================
