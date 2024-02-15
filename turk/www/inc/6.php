<?php

if ( !defined('TURK') ) {die("*********************************************************************");exit;}


if (rand(0,1)) {$table = 'Profess';}
else {$table = 'Animals';}

$table_words = 'Sush';

//$a = rand(1, $Table_lines['Sush']);
$b = rand(1, $Table_lines[$table]);

$lar1 = rand(0, 3);
$lar2 = rand(0, 3);


$query = "SELECT * FROM  `Sush` WHERE `id`='$a' LIMIT 1";
$result = mysqli_query($connect, $query) or die(mysqli_error($connect) . "<br>" . $query);

$qqq = mysqli_fetch_array ($result, MYSQLI_ASSOC);
$sush1_ = $sush1 = $qqq['name'];
$sush1_rus = $qqq['name_rus'];
$sush1_rus_lar = $qqq['name_rus_lar'];

$query = "SELECT * FROM  `$table` WHERE `id`='$b' LIMIT 1";
$result = mysqli_query($connect, $query) or die(mysqli_error($connect) . "<br>" . $query);

$qqq = mysqli_fetch_array ($result, MYSQLI_ASSOC);
$sush2_ = $sush2 = $qqq['name'];
$sush2_rus_rod = $qqq['name_rus_rod'];
$sush2_rus_lar_rod = $qqq['name_rus_lar_rod'];

if (!$lar1) {$sush1_rus = $sush1_rus_lar; $sush1_ = lar ($sush1_);}
if (!$lar2) {$sush2_rus_rod = $sush2_rus_lar_rod; $sush2_ = lar ($sush2_);}

$sush_in = in($sush2_);
$sush_i = i($sush1_);











$content .= "<center><font size=20 onclick=trans1.style.visibility='visible'> " . $sush1_rus . " </font> ";
$content .= "<font size=20 onclick=trans2.style.visibility='visible'> " . $sush2_rus_rod . " </font><br>";
$content .= "<font size=20 style='visibility:hidden' id='trans1'> " . $sush1 . " </font> ";
$content .= "<font size=20 style='visibility:hidden' id='trans2'> " . $sush2 . " </font><br>";

$content .= "<h1 style='visibility:hidden' id='transl'> " . $sush_in . " " . $sush_i . " </h1><br>";


 mysqli_free_result($result);


?>