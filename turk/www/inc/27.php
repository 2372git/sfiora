<?php

if ( !defined('TURK') ) {die("*********************************************************************");exit;}

// он наш доктор  b b1 profess

if (!isset($table_words)) {$table_words = "Profess";}


// $bbb - если передается фиксированное местоимение
if ($bbb<>0) {$b=$bbb;}
else {$b = rand(1, 6);}


// вычисляем определяющее множественное число
if ($b<4) {$lar=0;}
else if ($b==5) {$lar=rand(0, 1);}
	else {$lar=1;}


// генерим второе местоимение
do{
	$b1 = rand(1, 6);
//	print $b . " ".  $b1 . ", ";
} while ($b1==$b AND $b<>3);

// $b1 = rand(1, 6);

$b1--;  // притяжательный афииксы работают из массива с нулевого элемента


// материализуем первое местоимение
$query = "SELECT * FROM  `BenSen` WHERE `id`='$b' LIMIT 1";
$result = mysqli_query($connect, $query) or die(mysqli_error($connect) . "<br>" . $query);
$qqq = mysqli_fetch_array ($result, MYSQLI_ASSOC);
$kim = $qqq['kim'];
$kim_rus = $qqq['kim_rus'];




$query = "SELECT * FROM  `$table_words` WHERE `id`='$a' LIMIT 1";
$result = mysqli_query($connect, $query) or die(mysqli_error($connect) . "<br>" . $query);
$qqq = mysqli_fetch_array ($result, MYSQLI_ASSOC);
$profess = $profess0 = $qqq['name'];
$profess_rus = $qqq['name_rus'];
$profess_rus_lar = $qqq['name_rus_lar'];
$rod = $qqq['rod'];


 if ($lar) {$rod=3;}  // если множественное число фразы, то род притяжательного местоимения делаем множественным

// материализуем второе местоимение на основе массивов
$kimin = $kimin[$b1];
$kimin_rus = $kimin_rus[$b1][$rod];

/*  вот этих массивов
$kimin = array ("benim", "senin", "onun", "bizim", "sizin", "onlarin");
$kimin_rus [0] = array ("моя", "мой", "моё", "мои");
$kimin_rus [1] = array ("твоя", "твой", "твоё", "твои");
$kimin_rus [2] = array ("его", "её", "его", "её");
$kimin_rus [3] = array ("наша", "наш", "наше", "наши");
$kimin_rus [4] = array ("ваша", "ваш", "ваше", "ваши");
$kimin_rus [5] = array ("их", "их", "их", "их");
*/


if ($lar) 
{
	$profess_rus = $profess_rus_lar;
	$profess0 = lar($profess0);
	}

$profess_b1 = aff_pritjazh($profess0, $b1);
//$profess_b1_b = aff_skazuem1($profess_b1, $b, 0);


$mi = miyim($profess_b1, $b);



if ($bbb<>0) {$checked_b = "checked";}
else {$checked_c = "";}





$content .= "<font size=20 onclick=trans1.style.visibility='visible'> " . $kim_rus . " </font> ";
$content .= "<font size=20 onclick=trans3.style.visibility='visible'> " . $kimin_rus . " </font> ";
$content .= "<font size=20 onclick=trans2.style.visibility='visible'> " . $profess_rus . "? </font><br>";
$content .= "<font size=20 style='visibility:hidden' id='trans1'> " . $kim . " </font> ";
$content .= "<font size=20 style='visibility:hidden' id='trans3'> " . $kimin . " </font> ";
$content .= "<font size=20 style='visibility:hidden' id='trans2'> " . $profess . " </font><br>";

$content .= "<h1 style='visibility:hidden' id='transl'> " . $profess_b1 .  " " . $mi . "?</h1><br>";

$content .= "зафиксировать местоимение <input type='checkbox' id='bbb' name='bbb' value=$b $checked_b>&nbsp; &nbsp; &nbsp; ";



 mysqli_free_result($result);


?>