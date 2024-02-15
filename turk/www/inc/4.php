<?php

if ( !defined('TURK') ) {die("*********************************************************************");exit;}


$table_words = 'Sush';


$b = rand(1, $Table_lines['Sush_material']);
//$a = rand(1, $Table_lines['Sush']);
$lar0 = rand(0, 1);


$query = "SELECT * FROM  `Sush_material` WHERE `id`='$b' LIMIT 1";
$result = mysqli_query($connect, $query) or die(mysqli_error($connect) . "<br>" . $query);
$qqq = mysqli_fetch_array ($result, MYSQLI_ASSOC);
$sush_mater = $qqq['name'];
$sush_mater_rus = $qqq['name_rus'];

$query = "SELECT * FROM  `Sush` WHERE `id`='$a' LIMIT 1";
$result = mysqli_query($connect, $query) or die(mysqli_error($connect) . "<br>" . $query);
$qqq = mysqli_fetch_array ($result, MYSQLI_ASSOC);
$sush_ = $sush0 = $qqq['name'];
$sush_rus = $qqq['name_rus'];
$sush_rus_lar = $qqq['name_rus_lar'];
$sush_rod = $qqq['rod'];


if ($lar0) { 
 $sush_rod=3;
 $sush_rus = $sush_rus_lar;
 $sush_ = lar ($sush_);
 }


$sush_mater_rus = ij_oe($sush_mater_rus, $sush_rod);






$content .= "<center><font size=20 onclick=trans1.style.visibility='visible'> " . $sush_mater_rus . " </font> ";
$content .= "<font size=20 onclick=trans2.style.visibility='visible'> " . $sush_rus . " </font><br>";
$content .= "<font size=20 style='visibility:hidden' id='trans1'> " . $sush_mater . " </font> ";
$content .= "<font size=20 style='visibility:hidden' id='trans2'> " . $sush0 . " </font><br>";

$content .= "<h1 style='visibility:hidden' id='transl'> " . $sush_mater . " " . $sush_ . " </h1><br>";


 mysqli_free_result($result);


?>