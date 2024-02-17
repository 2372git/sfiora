<?php

if ( !defined('TURK') ) {die("*********************************************************************");exit;}


if (!$aaa) {$aaa = 1000;}
$b = rand(1, $aaa);
$line = number_format ($b, 0, ".", "'");

$word="";
$i=1;


do {
$c = $b % 10;
$b = (int) ($b / 10);

if     ($i==1)  {$word = $numbers[$c] . " " . $word;}
elseif ($i==4)  {$word = $numbers[$c] . " bin, " . $word;}
elseif ($i==7)  {$word = $numbers[$c] . " milyon, " . $word;}
elseif ($i==10) {$word = $numbers[$c] . " milyar, " . $word;}
elseif ($i==2 OR $i==5 OR $i==8 OR $i==11)  {$word = $numbers0[$c] . " " . $word;}
elseif (($i==3 OR $i==6 OR $i==9 OR $i==12) AND $c>1)  {$word = $numbers[$c] . " yüz " . $word;}
elseif (($i==3 OR $i==6 OR $i==9 OR $i==12) AND $c==1)  {$word = " yüz " . $word;}


$i++;
}
while ($b);



$content .= "<center><h1> $line </h1><br>";
$content .= "<h1 style='visibility:hidden' id='transl'> " . $word . " </h1><br>";
$content0 .= "цифры от 0 до <input type='text' name='aaa' maxlength=12 value=$aaa><br>";
//$content .= "<center><h1>  </h1><br>";




?>