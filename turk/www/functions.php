<?php

if ( !defined('TURK') ) {die("*********************************************************************");exit;}



function cheki_boxy($j)
{
$content="";
//print $table_words;

global $cc_;
 for ($i=1; $i<=$j; $i++)
	{
	if (isset($cc_[$i])) {$chkd = "checked";}
	else {$chkd="";}
	$do=$i*10; $ot=$do-9;
	$content .= " " . (string)$ot . "-" . (string)$do . ":<input type='checkbox' name='ccc[]' $chkd value=$i> &nbsp; ";
	}
return $content . "<br>";
}


$numbers = array ("", "bir", "iki", "üç", "dört", "beş", "altı", "yedı", "sekiz", "dokuz");
$numbers0 = array ("", "on", "yirmi", "otuz", "kırk", "elli", "altmış", "yetmiş", "seksen", "doksan");
$numbers00 = array ("yüz", "bin", "milyon", "milyar");



$kimin = array ("benim", "senin", "onun", "bizim", "sizin", "onlarin");
$kimin_rus [0] = array ("моя", "мой", "моё", "мои");
$kimin_rus [1] = array ("твоя", "твой", "твоё", "твои");
$kimin_rus [2] = array ("его", "её", "его", "её");
$kimin_rus [3] = array ("наша", "наш", "наше", "наши");
$kimin_rus [4] = array ("ваша", "ваш", "ваше", "ваши");
$kimin_rus [5] = array ("их", "их", "их", "их");



function param_slova ($line)    {  // параметры слова (последняя гласная, последняя ли она, сколько слогов)
 $line = trim ($line);
 //print $line;
 $line = end(explode(" ", $line));
 //print $line;
 $num = preg_match_all ("/[aıoueiöü]/iu", $line, $matches);
 $last_gl = $matches[0][$num-1];
 if (preg_match ("/[aıoueiöü]$/iu", $line)) {$last_sogl = 0;}
 else {$last_sogl = 1;}
return Array ($num, $last_gl, $last_sogl, $line);  // кол-во слогов, последняя значимая глассная, последний символ согласный?, последний глагол
}



function ij_oe ($line, $rod)    {  // русские рода
 //	      0    1     2     3
 $rod_end0 = array ("ая", "ый", "ое", "ые");
 $rod_end1 = array ("яя", "ий", "ее", "ие");
 $rod_end2 = array ("ая", "ой", "ое", "ые");
 $line = trim ($line);
 if ($rod != 1) {
	$line = preg_replace("/ый$/iu", $rod_end0 [$rod], $line); 
	$line = preg_replace("/ий$/iu", $rod_end1 [$rod], $line); 
	$line = preg_replace("/ой$/iu", $rod_end2 [$rod], $line); 
  }
return $line;
}



function lar ($line)    {   // множественное число
 list ($num, $last_gl, $last_sogl,) = param_slova ($line);
 $lar_end = array ("a"=>"lar", "ı"=>"lar", "o"=>"lar", "u"=>"lar", "e"=>"ler", "i"=>"ler", "ö"=>"ler", "ü"=>"ler");
 $line .= $lar_end[$last_gl];
return $line;
}

function leri ($line)    {   // множественное число + 3лицо (изафет)
 list ($num, $last_gl, $last_sogl,) = param_slova ($line);
 $lar_end = array ("a"=>"ları", "ı"=>"ları", "o"=>"ları", "u"=>"ları", "e"=>"leri", "i"=>"leri", "ö"=>"leri", "ü"=>"leri");
 $line .= $lar_end[$last_gl];
return $line;
}


function pb ($line)    {  // изменение последнего согласного
   $line = preg_replace("/nk$/iu", "ng", $line);
   $line = preg_replace("/k$/iu", "ğ", $line);
   $line = preg_replace("/ç$/iu", "c", $line);
   $line = preg_replace("/p$/iu", "b", $line);
   $line = preg_replace("/t$/iu", "d", $line);
return $line;
}



function ozvonchenie ($line)    {  // озвончение последнего согласного
   $line = preg_replace("/nk$/iu", "ng", $line);
   $line = preg_replace("/k$/iu", "ğ", $line);
   $line = preg_replace("/ç$/iu", "c", $line);
   $line = preg_replace("/p$/iu", "b", $line);
   $line = preg_replace("/t$/iu", "d", $line);
return $line;
}



function i ($line)    {   // аффикс i винительный, 
 $i_end = array ("a"=>"ı", "ı"=>"ı", "o"=>"u", "u"=>"u", "e"=>"i", "i"=>"i", "ö"=>"ü", "ü"=>"ü");
 list ($num, $last_gl, $last_sogl,) = param_slova ($line);
 if ($last_sogl==0) {$line .= "s";}
 else {  $line = pb ($line);  }
 $line .= $i_end[$last_gl];
return $line;
}



function in($line)    {    // аффикс in un притяжательный
 $in_end = array ("a"=>"ın", "ı"=>"ın", "o"=>"un", "u"=>"un", "e"=>"in", "i"=>"in", "ö"=>"ün", "ü"=>"ün");
 list ($num, $last_gl, $last_sogl,) = param_slova ($line);
 if ($last_sogl==0 ) {$line .= "n";}
 else {  $line = pb ($line);  }
 $line .= $in_end[$last_gl];
return $line;
}



function um($line, $b, $lar)    {    // личные аффиксы сказуемости 1й степени
 $um_end [1]= array ("a"=>"ım", "ı"=>"ım", "o"=>"um", "u"=>"um", "e"=>"im", "i"=>"im", "ö"=>"üm", "ü"=>"üm");
 $um_end [2]= array ("a"=>"sın", "ı"=>"sın", "o"=>"sun", "u"=>"sun", "e"=>"sin", "i"=>"sin", "ö"=>"sün", "ü"=>"sün");
 $um_end [3]= array ("a"=>"", "ı"=>"", "o"=>"", "u"=>"", "e"=>"", "i"=>"", "ö"=>"", "ü"=>"");
 $um_end [4]= array ("a"=>"ız", "ı"=>"ız", "o"=>"uz", "u"=>"uz", "e"=>"iz", "i"=>"iz", "ö"=>"üz", "ü"=>"üz");
 $um_end [5]= array ("a"=>"sınız", "ı"=>"sınız", "o"=>"sunuz", "u"=>"sunuz", "e"=>"siniz", "i"=>"siniz", "ö"=>"sünüz", "ü"=>"sünüz");
 $um_end [6]= array ("a"=>"", "ı"=>"", "o"=>"", "u"=>"", "e"=>"", "i"=>"", "ö"=>"", "ü"=>"");
 $um_end [7]= array ("a"=>"lar", "ı"=>"lar", "o"=>"lar", "u"=>"lar", "e"=>"ler", "i"=>"ler", "ö"=>"ler", "ü"=>"ler");
 $line = trim ($line);

 list ($num, $last_gl, $last_sogl,) = param_slova ($line);
 if ($last_sogl==0  AND ($b==1 OR $b==4)) {$line .= "y";}
 elseif ($b==1) {  $line = pb ($line);  }
  if ($b==6 AND $lar) {$b++;}
 $line .= $um_end[$b][$last_gl];
return $line;
}




function aff_skazuem($last_gl, $b, $lar)    {    // личные аффиксы сказуемости 1й степени
 $um_end [1]= array ("a"=>"ım", "ı"=>"ım", "o"=>"um", "u"=>"um", "e"=>"im", "i"=>"im", "ö"=>"üm", "ü"=>"üm");
 $um_end [2]= array ("a"=>"sın", "ı"=>"sın", "o"=>"sun", "u"=>"sun", "e"=>"sin", "i"=>"sin", "ö"=>"sün", "ü"=>"sün");
 $um_end [3]= array ("a"=>"", "ı"=>"", "o"=>"", "u"=>"", "e"=>"", "i"=>"", "ö"=>"", "ü"=>"");
 $um_end [4]= array ("a"=>"ız", "ı"=>"ız", "o"=>"uz", "u"=>"uz", "e"=>"iz", "i"=>"iz", "ö"=>"üz", "ü"=>"üz");
 $um_end [5]= array ("a"=>"sınız", "ı"=>"sınız", "o"=>"sunuz", "u"=>"sunuz", "e"=>"siniz", "i"=>"siniz", "ö"=>"sünüz", "ü"=>"sünüz");
// $um_end [6]= array ("a"=>"", "ı"=>"", "o"=>"", "u"=>"", "e"=>"", "i"=>"", "ö"=>"", "ü"=>"");
 $um_end [6]= array ("a"=>"lar", "ı"=>"lar", "o"=>"lar", "u"=>"lar", "e"=>"ler", "i"=>"ler", "ö"=>"ler", "ü"=>"ler");

return $um_end[$b][$last_gl];
}






function degilim($b)    {    // отрицание профессии
 $degil_end = array ("", "değilim", "değilsin", "değil", "değiliz", "değilsiniz", "değil");
return $degil_end[$b];
}


function miyim($line, $b)    {    // вопрос профессии
 $miyim_end = array ("", "m%y%m", "m%s%n", "m%", "m%y%z", "m%s%n%z", "m%");
 $i = array ("a"=>"ı", "ı"=>"ı", "o"=>"u", "u"=>"u", "e"=>"i", "i"=>"i", "ö"=>"ü", "ü"=>"ü");
 list ($num, $last_gl, $last_sogl,) = param_slova ($line);
return preg_replace("/%/iu", $i[$last_gl], $miyim_end[$b]);
}






function am($line, $b)    {    // притяжательные аффиксы в зависимости от местоимения
 $i = array ("a"=>"ı", "ı"=>"ı", "o"=>"u", "u"=>"u", "e"=>"i", "i"=>"i", "ö"=>"ü", "ü"=>"ü");
 $gl_end  = array ("m", "n", "s%", "m%z", "n%z", "s%");
 $sgl_end = array ("%m", "%n", "%", "%m%z", "%n%z", "%");

 list ($num, $last_gl, $last_sogl,) = param_slova ($line);
 $line = pb ($line);

// если последняя гласная 
 if ($last_sogl==0) { $end =   preg_replace("/%/iu", $i[$last_gl], $gl_end[$b]); }
 else { $end =  preg_replace("/%/iu", $i[$last_gl], $sgl_end[$b]); }

return $line . $end;
}


function aff_pritjazh($line, $b)    {    // притяжательные аффиксы в зависимости от местоимения $b
 $i = array ("a"=>"ı", "ı"=>"ı", "o"=>"u", "u"=>"u", "e"=>"i", "i"=>"i", "ö"=>"ü", "ü"=>"ü");
 $gl_end  = array ("m", "n", "s%", "m%z", "n%z", "s%");
 $sgl_end = array ("%m", "%n", "%", "%m%z", "%n%z", "%");

 list ($num, $last_gl, $last_sogl,) = param_slova ($line);
 $line = pb ($line);

// если последняя гласная 
 if ($last_sogl==0) { $end =   preg_replace("/%/iu", $i[$last_gl], $gl_end[$b]); }
 else { $end =  preg_replace("/%/iu", $i[$last_gl], $sgl_end[$b]); }

return $line . $end;
}



function del_mek($line)    {    // убрать последний mek из глагола 
 $line = trim ($line);
 return preg_replace("/m[ea]k$/iu", '', $line); 
}


/*
function suzhenie($line)        // сужение последней гласной перед "y"
{
 $i = array ("a"=>"ı", "ı"=>"ı", "o"=>"u", "u"=>"u", "e"=>"i", "i"=>"i", "ö"=>"ü", "ü"=>"ü");
 list ($num, $last_gl, $last_sogl,) = param_slova ($line);
	if ($last_gl ==="a"  OR $last_gl ==="e")  // если она a или e
	{
	if ($num>1) {$num--;}
	$line = preg_replace("/.&/iu", $i[$matches[$num]], $line);
	}
  }
 return preg_replace("/[aıoueiöü]$/iu", '', $line); 
}
*/


function iyor($line)    {    // настоящее время глагола 
 $i_end = array ("a"=>"ı", "ı"=>"ı", "o"=>"u", "u"=>"u", "e"=>"i", "i"=>"i", "ö"=>"ü", "ü"=>"ü");
 $line = del_mek($line);
 $line = preg_replace ("/[aıoueiöü]$/iu", "", $line); // убрать последнюю гласную
 if (strlen($line) == 1) {$line .= "iyor";}
 else { // добавить гласную и yor
	list ($num, $last_gl, $last_sogl,) = param_slova ($line);
	$line .= $i_end[$last_gl] . "yor";
      }  
return $line;
}



function miyor($line)    {    // настоящее время глагола с отрицанием
 $i_end = array ("a"=>"ı", "ı"=>"ı", "o"=>"u", "u"=>"u", "e"=>"i", "i"=>"i", "ö"=>"ü", "ü"=>"ü");
 $line = del_mek($line);
 list ($num, $last_gl, $last_sogl,) = param_slova ($line);
 $line .= "m" . $i_end[$last_gl] . "yor";
return $line;
}




function rus_al($line, $lar)   {    // прошедшее время от русского глагола

if ($line === "идти")  // обработать неопределенности 
 {
 if ($lar) {$line = "шли";}
 else {$line = "шел";}
 }
else 
 {
$al  = array("л", "ли");
$als = array("лся", "лись");
$line = trim ($line);
$line = preg_replace( "/сть$/iu", $al[$lar], $line);
$line = preg_replace(  "/ть$/iu", $al[$lar], $line);
$line = preg_replace("/ться$/iu", $als[$lar], $line);
 }
return $line;
}





function rus_old_al($line, $lar)   {    // прошедшее время от русского глагола

if ($lar) 
 {
$al  = array("л", "ли");
$als = array("лся", "лись");
$line0 = explode (",", $line, 3);
$line1 = Array();

foreach ($line0 as $lin)
  {
$lin = trim ($lin);
$lin = preg_replace( "/шел$/iu", "шл", $lin);
$lin = preg_replace( "/л$/iu", $al[$lar], $lin);
$lin = preg_replace( "/з$/iu", "з".$al[$lar], $lin);
$lin = preg_replace(  "/к$/iu", "k".$al[$lar], $lin);
$lin = preg_replace("/лся$/iu", $als[$lar], $lin);
$line1[] = $lin;
  }
$line = implode(", ", $line1);
 }
return $line;
}





function um2($line, $bensen, $last_gl)    {    // личные аффиксы сказуемости 2й степени
 $um2_end = array ("m", "n", "", "k", "", "");
 $niz_end = array ("a"=>"nız", "ı"=>"nız", "o"=>"nuz", "u"=>"nuz", "e"=>"niz", "i"=>"niz", "ö"=>"nüz", "ü"=>"nüz");
 $lar_end = array ("a"=>"lar", "ı"=>"lar", "o"=>"lar", "u"=>"lar", "e"=>"ler", "i"=>"ler", "ö"=>"ler", "ü"=>"ler");

//echo $line . "=" . $bensen . "=" . $last_gl  . "<br>" ;

 if     ($bensen == 4) {$line .= $niz_end[$last_gl];}
 elseif ($bensen == 5) {$line .= $lar_end[$last_gl];}
 else {$line .= $um2_end[$bensen];}

return $line;
}





function di($line, $bensen, $me)    {    // прошедшее время глагола 
 $di_end = array ("a"=>"ı", "ı"=>"ı", "o"=>"u", "u"=>"u", "e"=>"i", "i"=>"i", "ö"=>"ü", "ü"=>"ü");
 $mi_end = array ("a"=>"ı", "ı"=>"ı", "o"=>"ı", "u"=>"ı", "e"=>"i", "i"=>"i", "ö"=>"i", "ü"=>"i");
 $line = del_mek($line);
 $num = preg_match_all ("/[aıoueiöü]/iu", $line, $matches);
 $last_gl = $matches[0][$num-1];
  if (preg_match ("/[çfhkpsşt]$/iu", $line)) {$line .= "t"; }
  else {$line .= "d"; }
 $line .= $di_end[$last_gl];
 $line =  um2($line, $bensen, $last_gl);

if ($me) 
  {
   if ($bensen <> 5) {$line .= " m" . $di_end[$last_gl];}
   else {$line .= " m" . $mi_end[$last_gl];}
  }

return $line;
}





function medi($line, $bensen)    {    // прошедшее время глагола с отрицанием
 $medi_end["e"] = array ("dim", "din", "di", "dik", "diniz", "diler");
 $medi_end["a"] = array ("dım", "dın", "dı", "dık", "dınız", "dılar");
 $line = substr($line,0,-1); 
 $last_gl = substr($line,-1); 
 $line .= $medi_end[$last_gl][$bensen];
return $line;
}




function mis($line, $bensen)    {    // прошедшее субъективное время глагола 
 $i = 	array ("a"=>"ı", "ı"=>"ı", "o"=>"u", "u"=>"u", "e"=>"i", "i"=>"i", "ö"=>"ü", "ü"=>"ü");
 $lar = array ("a"=>"a", "ı"=>"a", "o"=>"a", "u"=>"a", "e"=>"e", "i"=>"e", "ö"=>"e", "ü"=>"e");
 $misim_end = array ("m%ş%m", "m%şs%n", "m%ş", "m%ş%z", "m%şs%n%z", "m%şl#r");

 $line = del_mek($line);
 $num = preg_match_all ("/[aıoueiöü]/iu", $line, $matches);
 $last_gl = $matches[0][$num-1];

 $end = preg_replace("/#/iu", $lar[$last_gl], $misim_end[$bensen]);
 $line .= preg_replace("/%/iu", $i[$last_gl], $end);

return $line;
}




function memis($line, $bensen)    {    // отрицание прошедшее субъективное время глагола 
 $i = 	array ("a"=>"ı", "ı"=>"ı", "o"=>"ı", "u"=>"ı", "e"=>"i", "i"=>"i", "ö"=>"i", "ü"=>"i");
 $lar = array ("a"=>"a", "ı"=>"a", "o"=>"a", "u"=>"a", "e"=>"e", "i"=>"e", "ö"=>"e", "ü"=>"e");
 $misim_end = array ("m#m%ş%m", "m#m%şs%n", "m#m%ş", "m#m%ş%z", "m#m%şs%n%z", "m#m%şl#r");


 $line = del_mek($line);
 $num = preg_match_all ("/[aıoueiöü]/iu", $line, $matches);
 $last_gl = $matches[0][$num-1];
 $misim_end[$bensen] = preg_replace("/#/iu", $lar[$last_gl], $misim_end[$bensen]);
 $line .= preg_replace("/%/iu", $i[$last_gl], $misim_end[$bensen]);


return $line;
}



function mismi($line, $bensen)    {    // вопрос прошедшее субъективное время глагола 
 $i = 	array ("a"=>"ı", "ı"=>"ı", "o"=>"u", "u"=>"u", "e"=>"i", "i"=>"i", "ö"=>"ü", "ü"=>"ü");
 $i_ = 	array ("a"=>"ı", "ı"=>"ı", "o"=>"ı", "u"=>"ı", "e"=>"i", "i"=>"i", "ö"=>"i", "ü"=>"i");
 $lar = array ("a"=>"a", "ı"=>"a", "o"=>"a", "u"=>"a", "e"=>"e", "i"=>"e", "ö"=>"e", "ü"=>"e");
 $misme_end = array ("m%ş m%y%m", "m%ş m%s%n", "m%ş m%", "m%ş m%y%z", "m%ş m%s%n%z", "m%şl#r m_");


 $line = del_mek($line);
 $num = preg_match_all ("/[aıoueiöü]/iu", $line, $matches);
 $last_gl = $matches[0][$num-1];

 $end = preg_replace("/#/iu", $lar[$last_gl], $misme_end[$bensen]);
 $end = preg_replace("/_/iu", $i_[$last_gl], $end);
 $end = preg_replace("/%/iu", $i[$last_gl], $end);
 $line .= $end;

return $line;
}




function acak($line, $bensen)    {    // будущее время глагола 
 $acag1_end = array ("acağım", "acaksın", "acak", "acağız", "acaksınız", "acaklar");
 $acag2_end = array ("eceğim", "eceksin", "ecek", "eceğiz", "eceksiniz", "ecekler");


 $line = del_mek($line);
 $line = preg_replace("/t$/iu", "d", $line);  // озвончение t на d
 $line = preg_replace("/yem/", "yim", $line);  // 2 неправильных глагола
 $line = preg_replace("/dem/", "dim", $line);  // 2 неправильных глагола
 $line = preg_replace ("/[aıoueiöü]$/iu", "$0y", $line); // если последняя гласная, то добавить y
 $num = preg_match_all ("/[aıoueiöü]/iu", $line, $matches); // вычислить последнюю гласную
 $last_gl = $matches[0][$num-1];

 if (preg_match("/[aıou]/iu", $last_gl)) {$line .= $acag1_end[$bensen];}
 else {$line .= $acag2_end[$bensen];}

return $line;
}




function mayacak($line, $bensen)    {    // отрицание будущего время глагола 
 $acag1_end = array ("acağım", "acaksın", "acak", "acağız", "acaksınız", "acaklar");
 $acag2_end = array ("eceğim", "eceksin", "ecek", "eceğiz", "eceksiniz", "ecekler");

// $line = preg_replace("/yem/", "yim", $line);  // 2 неправильных глагола
// $line = preg_replace("/dem/", "dim", $line);  // 2 неправильных глагола
 $line = preg_replace("/ek$/iu", "ey" . $acag2_end[$bensen], $line);  
 $line = preg_replace("/ak$/iu", "ay" . $acag1_end[$bensen], $line);  

return $line;
}




function acakmi($line, $bensen)    {    // вопрос будущее время глагола 
 $acag1_end = array ("acak mıyım", "acak mısın", "acak mı", "acak mıyız", "acak mısınız", "acaklar mı");
 $acag2_end = array ("ecek miyim", "ecek misin", "ecek mi", "ecek miyiz", "ecek misiniz", "ecekler mi");


 $line = del_mek($line);
 $line = preg_replace("/t$/iu", "d", $line);  // озвончение t на d
 $line = preg_replace("/yem/", "yim", $line);  // 2 неправильных глагола
 $line = preg_replace("/dem/", "dim", $line);  // 2 неправильных глагола
 $line = preg_replace ("/[aıoueiöü]$/iu", "$0y", $line); // если последняя гласная, то добавить y
 $num = preg_match_all ("/[aıoueiöü]/iu", $line, $matches); // вычислить последнюю гласную
 $last_gl = $matches[0][$num-1];

 if (preg_match("/[aıou]/iu", $last_gl)) {$line .= $acag1_end[$bensen];}
 else {$line .= $acag2_end[$bensen];}

return $line;
}




function povel($line, $bensen)    {    // повелительное накланение  глагола 
 $povel_end_a = array ("", "", "sın", "", "ın(ız)", "sınlar");
 $povel_end_am = array ("", "", "mı", "", "mı", "mı");
 $povel_end_u = array ("", "", "sun", "", "un(uz)", "sunlar");
 $povel_end_um = array ("", "", "mu", "", "mu", "mı");
 $povel_end_i = array ("", "", "sin", "", "in(iz)", "sinler");
 $povel_end_im = array ("", "", "mi", "", "mi", "mi");
 $povel_end_o = array ("", "", "sün", "", "ün(üz)", "sünler");
 $povel_end_om = array ("", "", "mü", "", "mü", "mi");

 $line = del_mek($line);
 if ($bensen == 4) {$line = preg_replace ("/[aıoueiöü]$/iu", "$0y", $line);} // если последняя гласная, то добавить y
 $num = preg_match_all ("/[aıoueiöü]/iu", $line, $matches); // вычислить последнюю гласную
 $last_gl = $matches[0][$num-1];

 if 	($last_gl == "a" OR $last_gl == "ı") {$line .= $povel_end_a[$bensen]; $me = $povel_end_am[$bensen];}
 elseif ($last_gl == "o" OR $last_gl == "u") {$line .= $povel_end_u[$bensen]; $me = $povel_end_um[$bensen];}
 elseif ($last_gl == "i" OR $last_gl == "e") {$line .= $povel_end_i[$bensen]; $me = $povel_end_im[$bensen];}
 elseif ($last_gl == "ö" OR $last_gl == "ü") {$line .= $povel_end_o[$bensen]; $me = $povel_end_om[$bensen];}



return array($line, $me);
}


function mapovel($line, $bensen)    {    // отрицание повелительного наклонения глагола 
 $povel_end1 = array ("", "", "sın", "", "yın", "sınlar");
 $povel_end0 = array ("", "", "sin", "", "yin", "sinler");
//$end0 = $povel_end0[$bensen];
//$end1 = $povel_end1[$bensen];
 $line = preg_replace("/ek$/iu", "e" . $povel_end0[$bensen], $line);  
 $line = preg_replace("/ak$/iu", "a" . $povel_end1[$bensen], $line);  
return $line;
}





function aff_shir($line, $bensen, $lar)    {    // широкое время глагола 
 $ar4 = 	array ("a"=>"ı", "ı"=>"ı", "o"=>"u", "u"=>"u", "e"=>"i", "i"=>"i", "ö"=>"ü", "ü"=>"ü");
 $ar2 = 	array ("a"=>"a", "ı"=>"a", "o"=>"a", "u"=>"a", "e"=>"e", "i"=>"e", "ö"=>"e", "ü"=>"e");
 $glagoly13 = Array (
 'al' => 'ı',
 'ol' => 'u',
 'öl' => 'ü',
 'var' => 'ı',
 'ver' => 'i',
 'vur' => 'u',
 'dur' => 'u',
 'gör' => 'ü',
 'bil' => 'i',
 'bul' => 'u',
 'gel' => 'i',
 'kal' => 'ı',
 'san' => 'ı'
 );

 $line = del_mek($line);
list ($num, $last_gl, $last_sogl, $last_glag) = param_slova ($line);
//print $last_glag;
 
 if (array_key_exists($last_glag, $glagoly13)) 
		{$line .= $glagoly13[$last_glag] . "r" . aff_skazuem($glagoly13[$last_glag], $bensen, $lar);}
 else {
		if ($last_sogl==0) {$line .= "r" . aff_skazuem($last_gl, $bensen, $lar);}
		else if ($num == 1 AND $last_sogl==1) {$line .= $ar2[$last_gl] . "r" . aff_skazuem($ar2[$last_gl], $bensen, $lar);}
		else if ($num > 1 AND $last_sogl==1)  {$line .= $ar4[$last_gl] . "r" . aff_skazuem($ar4[$last_gl], $bensen, $lar);;}
	}
return $line;
}




function aff_shir_maz($line, $bensen, $lar)    {    // широкое время глагола 

 $maz_end [1]= array ("a"=>"mam", "ı"=>"mam", "o"=>"mam", "u"=>"mam", "e"=>"mem", "i"=>"mem", "ö"=>"mem", "ü"=>"mem");
 $maz_end [2]= array ("a"=>"mazsın", "ı"=>"mazsın", "o"=>"mazsin", "u"=>"mazsin", "e"=>"mezsin", "i"=>"mezsin", "ö"=>"mezsin", "ü"=>"mezsin");
 $maz_end [3]= array ("a"=>"maz", "ı"=>"maz", "o"=>"maz", "u"=>"maz", "e"=>"mez", "i"=>"mez", "ö"=>"mez", "ü"=>"mez");
 $maz_end [4]= array ("a"=>"mayız", "ı"=>"mayız", "o"=>"mayız", "u"=>"mayız", "e"=>"meyiz", "i"=>"meyiz", "ö"=>"meyiz", "ü"=>"meyiz");
 $maz_end [5]= array ("a"=>"mazsınız", "ı"=>"mazsınız", "o"=>"mazsınız", "u"=>"mazsınız", "e"=>"mezsiniz", "i"=>"mezsiniz", "ö"=>"mezsiniz", "ü"=>"mezsiniz");
 $maz_end [6]= array ("a"=>"mazlar", "ı"=>"mazlar", "o"=>"mazlar", "u"=>"mazlar", "e"=>"mezler", "i"=>"mezler", "ö"=>"mezler", "ü"=>"mezler");

 $line = del_mek($line);
 list ($num, $last_gl, $last_sogl, $last_glag) = param_slova ($line);
 $line .= $maz_end [$bensen][$last_gl];

return $line;
}




?>