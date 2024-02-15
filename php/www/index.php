<?php


define('ISTOK2', true);


error_reporting(-1);
//ini_set('display_errors',1);
//error_reporting(E_ALL);


//print "END";


// ============= Solution 38 =================================
class Solution {

    /**
     * @param Integer[] $candidates
     * @param Integer $target
     * @return Integer[][]
     */ 
    function combinationSum2($candidates, $target) {
        sort($candidates);
        if (in_array(0, $candidates)){return;}
        print "1 1 2 5 6 7 10 <br>";
        $l = sizeof($candidates);
        $out=Array();
        $stek=Array();

        $this->findsum(0, 0, $stek, $candidates, $target, $out, $l);
        return $out;
    }

    function findsum($sum, $num, $stek, &$candidates, $target, &$out, $l) {
//            if ($num>=$l) {print "<br><br><br>"; return;}
//            if ($sum > $target AND $c>0) {print ">target<br><br>"; return;}
            if ($sum == $target) {
                $out[]=$stek;
                print_r($stek);
                print "==target<br>"; 
//                return;
            }

                for($i=$num; $i<$l; $i++) {
                $c = $candidates[$i];
                $stek
                print "i=" . $i . " sum=" . $sum . " num=" . $num+1 . " c[]=" . $c . "<br>";
                $this->findsum($sum+$c, $i+1, $stek, $candidates, $target, $out, $l);
            }
        return;
        }
/*
    function findsum($sum, $num, $stek, &$candidates, $target, &$out, $l) {
                for($i=$num; $i<$l; $i++){
                $c = $candidates[$i];
                array_push($stek, $c);
                print "i=" . $i . " sum=" . $sum . " num=" . $num+1 . " c[]=" . $c . "<br>";
                print_r($stek);
                print "<br>";
                $this->findsum($sum, $i+1, $stek, $candidates, $target, $out, $l);
            }
        return;
        }
*/
        
        
                }



$w=new Solution();
$candidates=[10,1,2,7,6,1,5];
$target=8;
$out = $w->combinationSum2($candidates, $target);
print_r($out);

exit;


//======= City ============================================================
/*
require_once 'City.php';
$cities = [
    new City('Tokio',   100000),
    new City('Shanhai', 120000),
    new City('Deli',    135000),
    new City('Ankara',  50000),
    new City('London',  98000),
    ];

foreach ($cities as $city)
{
	print $city->getName() . "=" . $city->getPopulation() . "<br>";
}
*/
  



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
