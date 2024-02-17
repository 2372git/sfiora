<?php

if ( !defined('TURK') ) {die("*********************************************************************");exit;}

if (rand(0,1)) {$table = 'Profess';}
else {$table = 'Animals';}


$a = rand(1, $Table_lines['Sush']);
$b = rand(1, $Table_lines[$table]);


$query = "SELECT * FROM  `$table` WHERE `id`='$b' LIMIT 1";
$result = mysqli_query($connect, $query) or die(mysqli_error($connect) . "<br>" . $query);

$qqq = mysqli_fetch_array ($result, MYSQLI_ASSOC);
$sush2_ = $sush2 = $qqq['name'];
$sush2_rus_rod = $qqq['name_rus_rod'];
$sush2_rus_lar_rod = $qqq['name_rus_lar_rod'];
$rod = $qqq['rod'];



$query = "SELECT * FROM  `Sush` WHERE `id`='$a' LIMIT 1";
$result = mysqli_query($connect, $query) or die(mysqli_error($connect) . "<br>" . $query);

$qqq = mysqli_fetch_array ($result, MYSQLI_ASSOC);
$sush1_ = $sush1 = $qqq['name'];
$sush1_rus = $qqq['name_rus'];
$sush1_rus_lar = $qqq['name_rus_lar'];


$lar1 = rand(0, 3);
$lar2 = rand(0, 3);
if (!$lar1) {$sush1_rus = $sush1_rus_lar; $sush1_ = lar ($sush1_);}
if (!$lar2) {$sush2_rus_rod = $sush2_rus_lar_rod; $sush2_ = lar ($sush2_); $rod=3;}

$sush_i = i($sush1_);


$c = rand(1, 6);
$query = "SELECT * FROM  `BenSen` WHERE `id`='$c' LIMIT 1";
$result = mysqli_query($connect, $query) or die(mysqli_error($connect) . "<br>" . $query);

$qqq = mysqli_fetch_array ($result, MYSQLI_ASSOC);
$bensen_rus = $qqq['kimin_rus_rod' . $rod];


$sush_um = am($sush2_, $c);
$sush_in = in($sush_um);

















$content .= "<center><font size=20 onclick=trans1.style.visibility='visible'> " . $sush1_rus . " </font> ";
$content .= "<font size=20> " . $bensen_rus . " </font> ";
$content .= "<font size=20 onclick=trans2.style.visibility='visible'> " . $sush2_rus_rod . " </font><br>";
$content .= "<font size=20 style='visibility:hidden' id='trans1'> " . $sush1 . " </font> ";
$content .= "<font size=20 style='visibility:hidden' id='trans2'> " . $sush2 . " </font><br>";

$content .= "<h1 style='visibility:hidden' id='transl'> " . $sush_in . " " . $sush_i . " </h1><br>";


 mysqli_free_result($result);


?>