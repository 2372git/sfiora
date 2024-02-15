<?php

if ( !defined('TURK') ) {die("*********************************************************************");exit;}


$table_words = 'Glagoly';


// $bbb - если передается фиксированное местоимение
if ($bbb<>0) {$b=$bbb;}
else {$b = rand(1, 6);}


// вычисляем множественное число
if ($b<4) {$lar=0;}
else if ($b==5) {$lar=rand(0, 1);}
else {$lar=1;}

$hergun = rand(1, $Table_lines['HerGun']);


$query = "SELECT * FROM  `BenSen` WHERE `id`='$b' LIMIT 1";
$result = mysqli_query($connect, $query) or die(mysqli_error($connect) . "<br>" . $query);
$qqq = mysqli_fetch_array ($result, MYSQLI_ASSOC);
$kim = $qqq['kim'];
$kim_rus = $qqq['kim_rus'];


$query = "SELECT * FROM  `HerGun` WHERE `id`='$hergun' LIMIT 1";
$result = mysqli_query($connect, $query) or die(mysqli_error($connect) . "<br>" . $query);
$qqq = mysqli_fetch_array ($result, MYSQLI_ASSOC);
$hergun = $qqq['name'];
$hergun_rus = $qqq['name_rus'];


$query = "SELECT * FROM  `$table_words` WHERE `id`='$a' LIMIT 1";
$result = mysqli_query($connect, $query) or die(mysqli_error($connect) . "<br>" . $query);
$qqq = mysqli_fetch_array ($result, MYSQLI_ASSOC);
$glagol = $sush1 = $qqq['name'];
//$glagol_rus = $qqq['name_rus' . $b];
$glagol_rus = $qqq['name_rus' . $b];

//if (rand(0, 1) ) {$glagol_rus = $glagol_rus_bud;}
//else {$glagol_rus = $glagol_rus_nast;}



$glagol_ar = aff_shir($glagol, $b, $lar);




if ($bbb<>0) {$checked = "checked";}
else {$checked = "";}



$content .= "<font size=20 onclick=trans1.style.visibility='visible'> " . $kim_rus . " </font> ";
$content .= "<font size=20 onclick=trans2.style.visibility='visible'> " . $hergun_rus . " </font> ";
$content .= "<font size=20 onclick=trans3.style.visibility='visible'> " . $glagol_rus . ". </font><br>";

$content .= "<font size=20 style='visibility:hidden' id='trans1'> " . $kim . " </font> ";
$content .= "<font size=20 style='visibility:hidden' id='trans2'> " . $hergun . " </font> ";
$content .= "<font size=20 style='visibility:hidden' id='trans3'> " . $glagol . " </font><br>";

$content .= "<h1 style='visibility:hidden' id='transl'>" . $hergun . " " . $glagol_ar . ". <br> $addline &nbsp; </h1><br>";

$content .= "зафиксировать местоимение <input type='checkbox' name='bbb' value=$b $checked>&nbsp; &nbsp; &nbsp; ";

$fix_mestoim=1;


 mysqli_free_result($result);


?>