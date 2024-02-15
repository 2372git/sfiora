<?php

if ( !defined('TURK') ) {die("*********************************************************************");exit;}


$table_words = 'Sush';

$query = "SELECT * FROM  `$table_words` WHERE `id`='$a' LIMIT 1";
$result = mysqli_query($connect, $query) or die(mysqli_error($connect) . "<br>" . $query);
$qqq = mysqli_fetch_array ($result, MYSQLI_ASSOC);
$sush_ = $qqq['name'];
$sush_rus_lar = $qqq['name_rus_lar'];



$sush_lar = lar ($sush_);


$content .= "<center><font size=20 onclick=trans1.style.visibility='visible'> " . $sush_rus_lar . " </font><br>";
$content .= "<font size=20 style='visibility:hidden' id='trans1'> " . $sush_ . " </font><br>";

$content .= "<h1 style='visibility:hidden' id='transl'> " . $sush_lar . " </h1><br>";


 mysqli_free_result($result);


?>