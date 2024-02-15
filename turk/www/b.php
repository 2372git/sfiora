<?php

define('TURK', true);


include ("_main.php");

$bbb=0;


$bl = preg_replace ( "/[^0-9a-zA-Z]/" , "" , $_REQUEST['bl']);
$submit = preg_filter ( "/[^0-9a-zA-Zа-яА-Я_ ]/" , "" , $_REQUEST['submit']);
parse_str($_POST['inputs'], $inputs); 

if (!$bl) {$bl=	$inputs['bl'];}
$aaa=	$inputs['aaa'];
$bbb=	$inputs['bbb'];
$ccc=	$inputs['ccc']; // массив выбранных чекбоксов 

// вычисление случайного числа из числа выбранных чекбоксов
if (!isset($ccc)) {$ccc[0] = 1;}
$j=count($ccc);
$d = rand(0, $j-1);
$a = rand(1,10) + 10*($ccc[$d]-1);
$cc_ = array_flip($ccc);




if ($bl)
{
 $connect = mysqli_connect ("$db_host", "$db_user", "$db_pass", "gb_turk");

 if (mysqli_connect_errno()) {
    echo "Не удалось подключиться";
    echo mysqli_connect_error();
    exit();
 }
mysqli_set_charset ( $connect , "utf8" );



$query = "SELECT table_rows, table_name, auto_increment FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA = '$db_name'";
$result = mysqli_query($connect, $query) or die(mysqli_error($connect) . "<br>" . $query);;
while ($qqq = mysqli_fetch_assoc ($result)) 
		{ 
			$Table_lines[$qqq['table_name']] = $qqq['auto_increment']-1; 
		}


 include ("inc/" . $bl . ".php");





 mysqli_close ($connect);
}


?>