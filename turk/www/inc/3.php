<?php

if ( !defined('TURK') ) {die("*********************************************************************");exit;}


$a = rand(1, 6);
$b = rand(0, 7);

$name = array ("kim", "kimin", "kimi", "kime", "kimde", "kimden", "kimle", "kimce");
$name_rus = array ("кто", "чей", "кого", "кому", "у кого", "от кого", "с кем", "как");
$name = $name [$b];
$name_rus = $name_rus [$b];

$query = "SELECT * FROM  `BenSen` WHERE `id`='$a' LIMIT 1";
$result = mysqli_query($connect, $query) or die(mysqli_error($connect) . "<br>" . $query);
$qqq = mysqli_fetch_array ($result, MYSQLI_ASSOC);
$bensen = $qqq[$name];
$bensen_rus = $qqq[$name . "_rus"];




$content .= "<center><font size=20 onclick=trans1.style.visibility='visible'> (" . $name_rus . "?) " . $bensen_rus . " </font><br> ";
$content .= "<h1 style='visibility:hidden' id='transl'> (" . $name . "?) " . $bensen . " </h1><br><br>";



 mysqli_free_result($result);


?>