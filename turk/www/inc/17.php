<?php

if ( !defined('TURK') ) {die("*********************************************************************");exit;}


$table_words = 'Glagoly';

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
$glagol = $sush1 = $qqq['name'];
$glagol_rus = $qqq['name_rus' . $b];

if ($lar0) {$profess_rus = $profess_rus_lar;}

$glagol_miyor = miyor($glagol);
$glagol_miyorum = um($glagol_miyor, $b, 1);





//if ($b==6) {$addline = lar ($glagol_);}
//else {$addline = "";}



if ($bbb<>0) {$checked = "checked";}
else {$checked = "";}




$content .= "<center><font size=20 onclick=trans1.style.visibility='visible'> " . $kim_rus . " не </font> ";
$content .= "<font size=20 onclick=trans2.style.visibility='visible'> " . $glagol_rus . ". </font><br>";
$content .= "<font size=20 style='visibility:hidden' id='trans1'> " . $kim . " </font> ";
$content .= "<font size=20 style='visibility:hidden' id='trans2'> " . $glagol . " </font><br>";

$content .= "<h1 style='visibility:hidden' id='transl'>" . $glagol_miyorum . ". <br> $addline &nbsp; </h1><br>";

$content .= "зафиксировать местоимение <input type='checkbox' id='bbb' name='bbb' value=$b $checked>&nbsp; &nbsp; &nbsp; ";



 mysqli_free_result($result);


?>