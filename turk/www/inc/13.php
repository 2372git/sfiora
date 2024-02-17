<?php

if ( !defined('TURK') ) {die("*********************************************************************");exit;}


$a = rand(0, 8);

if (rand(0, 1)) {$Profess = "Pril";}

if     ($a<4) 		{$b=9;}
elseif ($a==4 OR $a==5) {$b=10;}
elseif ($a==6 OR $a==7) {$b=11;}
elseif ($a==8) 		{$b=12;}

include ($b . ".php");










?>