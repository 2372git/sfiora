<?php

if ( !defined('TURK') ) {die("*********************************************************************");exit;}



$query = "SHOW TABLES";
$query = "SELECT table_name, table_rows
FROM INFORMATION_SCHEMA.TABLES
WHERE TABLE_SCHEMA = '$db_name'";

//$Table_lines = Array();

$result = mysqli_query($connect, $query) or die(mysqli_error($connect) . "<br>" . $query);;
while ($qqq = mysqli_fetch_assoc ($result))
{
$q=$qqq['table_name'];
$v=$qqq['table_rows'];
echo $q . "_" . $v . "<br>";

$Table_lines[$q] = $v;
}

foreach ($Table_lines as $q => $v) {  echo $q . "_" . $v . "<br>";}

$content .= "<center><font size=20> ОК </font> ";




 mysqli_free_result($result);


?>