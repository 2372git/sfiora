<?php

if ( !defined('TURK') ) {die("*********************************************************************");exit;}


$table_words = 'Sush';


if ($bbb<>0) {$bensen=$bbb-1;}
else {$bensen = rand(0, 5);}

$lar    = rand(0, 1);


$query = "SELECT * FROM  `$table_words` WHERE `id`='$a' LIMIT 1";
$result = mysqli_query($connect, $query) or die(mysqli_error($connect) . "<br>" . $query);
$qqq = mysqli_fetch_array ($result, MYSQLI_ASSOC);
$sush = $sush0 = $qqq['name'];
$sush_rus = $qqq['name_rus'];
$sush_rus_lar = $qqq['name_rus_lar'];
$rod = $qqq['rod'];

if ($rod<>3 AND $lar) {
	$sush_rus = $sush_rus_lar; 
	$sush = lar ($sush);
	$rod=3;
  }

$benim_rus = $kimin_rus [$bensen][$rod];
$benim = $kimin[$bensen];

$sush_am = am($sush, $bensen);





if ($bensen==5 AND !$lar) {$addline = leri($sush);}


if ($bbb<>0) {$checked = "checked";}
else {$checked = "";}

$b=$bensen+1;



$content .= "<font size=20 onclick=trans1.style.visibility='visible'> " . $benim_rus . " </font> ";
$content .= "<font size=20 onclick=trans2.style.visibility='visible'> " . $sush_rus . " </font><br>";
$content .= "<font size=20 style='visibility:hidden' id='trans1'> " . $benim . " </font> ";
$content .= "<font size=20 style='visibility:hidden' id='trans2'> " . $sush0 . " </font><br>";

$content .= "<h1 style='visibility:hidden' id='transl'> " . $benim . " " . $sush_am . " <br> $addline &nbsp; </h1><br>";
$content .= "зафиксировать местоимение <input type='checkbox' id='bbb' name='bbb' value=$b $checked>&nbsp; &nbsp; &nbsp; ";



 mysqli_free_result($result);


?>