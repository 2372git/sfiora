<?php

if ( !defined('TURK') ) {die("*********************************************************************");exit;}


$table_words = 'Glagoly';

if ($bbb<>0) {$b=$bbb;}
else {
$b = 1 + rand(1, 4);
if ($b>3) {$b++;}
if ($b<4) {$lar0=0;}
	else {$lar0=1;}
}


$query = "SELECT * FROM  `BenSen` WHERE `id`='$b' LIMIT 1";
$result = mysqli_query($connect, $query) or die(mysqli_error($connect) . "<br>" . $query);
$qqq = mysqli_fetch_array ($result, MYSQLI_ASSOC);
$kim = $qqq['kim'];
$kim_rus = $qqq['kim_rus'];

$query = "SELECT * FROM  `$table_words` WHERE `id`='$a' LIMIT 1";
$result = mysqli_query($connect, $query) or die(mysqli_error($connect) . "<br>" . $query);
$qqq = mysqli_fetch_array ($result, MYSQLI_ASSOC);
$glagol = $qqq['name'];
$glagol_rus0 = $qqq['name_rus'];
$glagol_rus_povel = $qqq['name_rus_povel'];
$glagol_rus36 = $qqq['name_rus' . $b];


list ($glagol_povel, $me)   = povel($glagol, $b-1);
$glagol_mapovel = mapovel($glagol, $b-1);


if ($b == 3)
{
$glagol_rus = "пусть " . $glagol_rus36;
$ne_glagol_rus = "пусть не " . $glagol_rus36;
$glagol_rus_vopr = "Ему " . $glagol_rus0 . "?";
$glagol_povelmi = " = " . $glagol_povel . " $me?";
}
else if ($b == 6)
{
$glagol_rus = "пусть " . $glagol_rus36;
$ne_glagol_rus = "пусть не " . $glagol_rus36;
$glagol_rus_vopr = "Им " . $glagol_rus0 . "?";
$glagol_povelmi = " = " . $glagol_povel . " $me?";
}
else if ($b == 2)
{
$glagol_rus = $glagol_rus_povel;
$ne_glagol_rus = "не " . $glagol_rus;
}
else if ($b == 5)
{
if (preg_match ("/сь$/iu", $glagol_rus_povel)) {$glagol_rus = preg_replace("/сь$/iu", "тесь", $glagol_rus_povel);}
else {$glagol_rus = $glagol_rus_povel . "те";}
$ne_glagol_rus = "не " . $glagol_rus;
}







if ($bbb<>0) {$checked = "checked";}
else {$checked = "";}




$content .= "<table width=90%><tr><td align=right>";

$content .= "<font size=20 onclick=trans1.style.visibility='visible'> " . $kim_rus . " </font> ";
$content .= "<font size=20 onclick=trans2.style.visibility='visible'> " . $glagol_rus . " </font><br>";

$content .= "<font size=20 onclick=trans1.style.visibility='visible'> " . $kim_rus . " </font> ";
$content .= "<font size=20 onclick=trans2.style.visibility='visible'> " . $ne_glagol_rus . " </font><br>";

$content .= "<font size=20 onclick=trans1.style.visibility='visible'> " . "" . " </font> ";
$content .= "<font size=20 onclick=trans2.style.visibility='visible'> " . $glagol_rus_vopr . " </font><br>";

$content .= "</td><td align=left style='visibility:hidden' id='transl'>";

$content .= "<font size=20> = " . $glagol_povel . "<br>";
$content .= " = " . $glagol_mapovel . "<br>";
$content .= $glagol_povelmi . "</font><br>";

$content .= "</td></tr><tr><td align=right>";

$content .= "<font size=20 style='visibility:hidden' id='trans1'> " . $kim . " </font> ";
$content .= "<font size=20 style='visibility:hidden' id='trans2'> " . $glagol . " </font><br>";

$content .= "</td><td></td></tr></table>";


$content .= "зафиксировать местоимение <input type='checkbox' id='bbb' name='bbb' value=$b $checked>&nbsp; &nbsp; &nbsp; ";



 mysqli_free_result($result);


?>