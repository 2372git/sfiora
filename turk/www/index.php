<?php

define('TURK', true);


setlocale(LC_ALL, "ru_RU.UTF8");

//===================================================================


// функция перекидывания файла $file в переменную 
function file_var ($file)    {
$var = "";
if ($var_file = @fopen ($file, r))    {
while ($line = fgets ($var_file, 4096)) {$var .= $line;}
fclose ($var_file);    }
return $var;     }

function file_varbr ($file)    {
$var = "";
if ($var_file = @fopen ($file, r))    {
while ($line = fgets ($var_file, 4096)) {$var .= $line . "<br>";}
fclose ($var_file);    }
return $var;     }

//if (isset ($_REQUEST['bl'])) {$bl = $_REQUEST['bl'];}
//else {$bl = "";}


if (isset ($_REQUEST['bl'])) {$bl = trim (preg_replace ( "/[^0-9a-zA-Z_ -]/" , "" , $_REQUEST['bl']));}
else {$bl = "";}

//print $bl;


include ("menu.php");










include ("b.php");


$content0 .= "<form method='POST' action='/' id='form'>";
$content0 .= "<input type=hidden name=bl value=$bl>";

//print $table_words;
if ($table_words)
{
$content0 .= cheki_boxy($Table_lines[$table_words]/10);
}


$content1 .= "<input onclick=transl.style.visibility='visible' type='button' value='ПЕРЕВОД'>&nbsp; &nbsp; &nbsp; &nbsp; ";
$content1 .= "<input onclick='SendGet1()' onmousedown=transl.style.visibility='visible' type='button' value='СЛЕД.'></form></center>";


$template = "main.tpl";


function shab_sub($matches)
{
  // как обычно: $matches[0] -  полное вхождение шаблона
  // $matches[1] - вхождение первой подмаски, заключенной в круглые скобки и так далее...
return $GLOBALS[$matches[1]];
}

echo preg_replace_callback ("/{([0-9a-zA-Z_]{1,20})}/" , "shab_sub", file_var ($template));  // замена переменных с выбросом шаблона







?>