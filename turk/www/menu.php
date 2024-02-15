<?php

if ( !defined('TURK') ) {die("*********************************************************************");exit;}

$menus = "";

$MenuM =  fopen ($_SERVER['DOCUMENT_ROOT'] . "/menu.txt", r);

while ($line = fgets ($MenuM, 4096))
{
 $line = trim ($line);
 if (!$line) { $menus .= "<br>";}
 else if (substr($line, 0, 2) == "//") {continue;}
 else if (preg_match("/\t/", $line))
  { 	list($a1, $a2,) = explode("\t", $line, 3); 
	$menus .= "<a href=\"/$a1/\"> $a2 </a><br>\r\n";
  }
 else {$menus .= "<b>" . $line . "</b><br>\r\n";}
}

fclose ($MenuM);





?>