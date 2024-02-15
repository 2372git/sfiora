<HTML><HEAD><TITLE> Генератор случайных фраз для изучения турецкого языка </TITLE>
<META HTTP-EQUIV="author" CONTENT="A.Bodunov">
<META HTTP-EQUIV="description" CONTENT="Генератор случайных фраз для изучения турецкого языка">
<META HTTP-EQUIV="keywords"  CONTENT="">
<META HTTP-EQUIV="distribution" CONTENT="global">
<META HTTP-EQUIV="resource-type" CONTENT="document">
<META http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
<LINK rel="shortcut icon" href="/favicon.ico" type="image/x-icon">

<!--LINK href="/style.css" type=text/css rel=StyleSheet-->

<script type="text/javaScript">
<!--
{JavaScript}
//-->
</script>

<script>

function SendGet1(r)
{
	$.ajax(
	{  
		type: "POST",  
		url: "/b1.php",  
		data: {inputs: $('form').serialize()},

		success: function(html)
		{  
			$("#text").html(html); <!--возвращаем ответ сервера  -->  
		}
	});  
}

</script>



<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.js'></script>



</HEAD> 

  <BODY BOTTOMMARGIN="0" LEFTMARGIN="0" RIGHTMARGIN="0" TOPMARGIN="0" MARGINWIDTH="0"
	MARGINHEIGHT="0" bgcolor="#ffffff" TEXT="#"> 




<!----------------- 0-я ТАБЛИЦА левый столбец, середина, правый ------------------------>

<center>

<table border=0 width= align=center><tr><td>
<div id="startblock" align=center>
<a href="/"><img src="/pic/turk_flag.jpg" align=left></a>

<h2>Генератор случайных фраз.</h2>
<br><br>
Сайт предназначен для нарабатывания устойчивых навыков использования аффиксов турецкого языка. <br>
Предлагаемые к переводу фразы на русском языке генерятся случайным образом и не обязательно корректны.<br>
Задача обучаемого за счет постоянной тренировки добиться относительно быстрого перевода.<br><br>
Клик на русском слове выдает его базовый перевод.
</div>
</td></tr></TABLE> 



<!--------- левый столбец ----------------->
<!--onclick=startblock.style.visibility='hidden'-->

<!--------- МЕНЮ в левом столбце ----------------->

<br><br><center>
<table border=1 width=><tr><td VALIGN="top" ALIGN="center"><br><br>

{content0}
<div id="text">{content}</div>
{content1}


<br></td></tr></TABLE> 

<table border=0 width= align=center><tr><td>
{menus}
</td></tr></TABLE> 






<br>










</BODY>
</HTML>