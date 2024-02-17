<?php

if ( !defined('TURK') ) {die("*********************************************************************");exit;}


$a = rand(1, $Table_lines['Sush']);
$b = rand(1, $Table_lines['Sush_pril']);
$lar0 = rand(0, 1);


$query = "SELECT * FROM  `Sush` WHERE `id`='$a' LIMIT 1";
$result = mysqli_query($connect, $query) or die(mysqli_error($connect) . "<br>" . $query);
$qqq = mysqli_fetch_array ($result, MYSQLI_ASSOC);
$sush = $sush_ = $qqq['name'];
$sush_rus = $qqq['name_rus'];
$sush_rus_lar = $qqq['name_rus_lar'];
$sush_rod = $qqq['rod'];

$query = "SELECT * FROM  `Sush_pril` WHERE `id`='$b' LIMIT 1";
$result = mysqli_query($connect, $query) or die(mysqli_error($connect) . "<br>" . $query);
$qqq = mysqli_fetch_array ($result, MYSQLI_ASSOC);
$sush_pril = $qqq['name'];
$sush_pril_rus = $qqq['name_rus'];


if ($lar0) { 
 $sush_rod=3;
 $sush_rus = $sush_rus_lar;
 $sush_ = lar ($sush_);
 }



$sush_pril_rus = ij_oe($sush_pril_rus, $sush_rod);
$sushi = i($sush_);











$content .= "<center><font size=20 onclick=trans1.style.visibility='visible'> " . $sush_pril_rus . " </font> ";
$content .= "<font size=20 onclick=trans2.style.visibility='visible'> " . $sush_rus . " </font><br>";
$content .= "<font size=20 style='visibility:hidden' id='trans1'> " . $sush_pril . " </font> ";
$content .= "<font size=20 style='visibility:hidden' id='trans2'> " . $sush . " </font><br>";

$content .= "<h1 style='visibility:hidden' id='transl'> " . $sush_pril . " " . $sushi . " </h1><br>";
//$content .= "добавить множественные <input type='checkbox' id='bbb' name='bbb' value='1' $checked> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ";


 mysqli_free_result($result);


?>