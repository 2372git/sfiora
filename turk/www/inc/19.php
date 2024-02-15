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
$glagol_rus_old = $qqq['name_rus_old'];


$glagol_rus_prosh = rus_old_al($glagol_rus_old, $lar0);


$glagol_dim = di($glagol, $b-1, 0);




if ($bbb<>0) {$checked = "checked";}
else {$checked = "";}



$content .= "<font size=20 onclick=trans1.style.visibility='visible'> " . $kim_rus . " </font> ";
$content .= "<font size=20 onclick=trans2.style.visibility='visible'> " . $glagol_rus_prosh . ". </font><br>";
$content .= "<font size=20 style='visibility:hidden' id='trans1'> " . $kim . " </font> ";
$content .= "<font size=20 style='visibility:hidden' id='trans2'> " . $glagol . " </font><br>";

$content .= "<h1 style='visibility:hidden' id='transl'>" . $glagol_dim . ". <br> $addline &nbsp; </h1><br>";

$content .= "зафиксировать местоимение <input type='checkbox' name='bbb' value=$b $checked>&nbsp; &nbsp; &nbsp; ";

$fix_mestoim=1;


 mysqli_free_result($result);


?>