<?php

if ( !defined('TURK') ) {die("*********************************************************************");exit;}


// Основные парольные настройки. Что меняется в разных хостингах.
// а также некоторые используемые резидентными программами включения


$whereweare = $_SERVER ['SERVER_NAME'];

if ($whereweare == 'turk')
{
$db_name = 'gb_turk'; 
$db_user = "root";
$db_pass = "";
$db_host = "localhost";
}
else 
{
$db_name = 'gb_turk'; 
$db_user = "gb_turk";
$db_pass = "4d74afbb7iw";
$db_host = "mysql100.1gb.ru";
}

include ("functions.php");





?>