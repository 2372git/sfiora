<?php

if ( !defined('TURK') ) {die("*********************************************************************");exit;}

if (!isset($table_words)) {$table_words = "Profess";}



if ($bbb<>0) {$b=$bbb;}
else {$b = rand(1, 6);}

if ($b<4) {$lar0=0;}
	else {$lar0=1;}

$query = "SELECT * FROM  `BenSen` WHERE `id`='$b' LIMIT 1";
$result = mysqli_query($connect, $query) or die(mysqli_error($connect) . "<br>" . $query);
$qqq = mysqli_fetch_array ($result, MYSQLI_ASSOC);
$kim = $qqq['kim'];
$kim_rus = $qqq['kim_rus'];

$query = "SELECT * FROM  `$table_words` WHERE `id`='$a' LIMIT 1";
$result = mysqli_query($connect, $query) or die(mysqli_error($connect) . "<br>" . $query);
$qqq = mysqli_fetch_array ($result, MYSQLI_ASSOC);
$profess = $sush1 = $qqq['name'];
$profess_rus = $qqq['name_rus'];
$profess_rus_lar = $qqq['name_rus_lar'];

if ($lar0) {$profess_rus = $profess_rus_lar;}

$mi = miyim($profess, $b);




if ($b==6) {$addline = lar($profess) . " " . $mi . "?";}


if ($bbb<>0) {$checked = "checked";}
else {$checked = "";}



$content .= "<font size=20 onclick=trans1.style.visibility='visible'> " . $kim_rus . " </font> ";
$content .= "<font size=20 onclick=trans2.style.visibility='visible'> " . $profess_rus . "? </font><br>";
$content .= "<font size=20 style='visibility:hidden' id='trans1'> " . $kim . " </font> ";
$content .= "<font size=20 style='visibility:hidden' id='trans2'> " . $profess . " </font><br>";

$content .= "<h1 style='visibility:hidden' id='transl'> " . $kim . " " . $profess . " " . $mi . "? <br> $addline &nbsp; </h1><br>";
//$content .= "<input onclick=transl.style.visibility='visible' type='button' value='<==>'>&nbsp; &nbsp; &nbsp; &nbsp; ";
//$content .= "<input onclick='SendGet1($bl)' onmousedown=transl.style.visibility='visible' type='button' value='==>'></center>";
$content .= "зафиксировать местоимение <input type='checkbox' id='bbb' name='bbb' value=$b $checked>&nbsp; &nbsp; &nbsp; ";



 mysqli_free_result($result);


?>