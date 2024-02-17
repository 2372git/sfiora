<HTML><HEAD><TITLE> Генератор случайных фраз для изучения турецкого языка </TITLE>
<META HTTP-EQUIV="author" CONTENT="A.Bodunov">
<META HTTP-EQUIV="description" CONTENT="Генератор случайных фраз для изучения турецкого языка">
<META HTTP-EQUIV="keywords"  CONTENT="">
<META HTTP-EQUIV="distribution" CONTENT="global">
<META HTTP-EQUIV="resource-type" CONTENT="document">
<META http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
<LINK rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
<LINK href="/style1.css" type=text/css rel=StyleSheet>

<script type="text/javaScript">
<!--
{JavaScript}
//-->
</script>

<script>
function SendGet1(r){

if($('#bbb').prop('checked')){bb=$('#bbb').val();}
else {bb=0;}

/*

		$.ajax({  
			type: "POST",  
			url: "/b1.php",  
//			data: "bl="+r+"&aaa="+$("#text").val()+"&bbb="+$("#bbb").val(),
			data: "bl="+{bl}+"&aaa="+$("#text").val()+"&bbb="+bb,
			success: function(html){  
				$("#test").html(html); <!--возвращаем ответ сервера  -->  
//				$("#startblock").style.visibility.hidden();
// 				document.getElementById("startblock").style.visibility=hidden;
			}
		});  
				
}


$(function() {
	var $menu_popup = $('.menu-popup');
	
	$(".menu-triger, .menu-close").click(function(){
		$menu_popup.slideToggle(300, function(){
			if ($menu_popup.is(':hidden')) {
				$('body').removeClass('body_pointer');
			} else {
				$('body').addClass('body_pointer');
			}					
		});  
		return false;
	});			
	
	$(document).on('click', function(e){
		if (!$(e.target).closest('.menu').length){
			$('body').removeClass('body_pointer');
			$menu_popup.slideUp(300);
		}
	});
});
*/









$(function() {
    $(document).on("click", ".mobile_menu_container .parent", function(e) {
        e.preventDefault();
        $(this).siblings("ul").addClass("loaded");
    });
    $(document).on("click", ".mobile_menu_container .back", function(e) {
        e.preventDefault();
        $(this).parent().parent().removeClass("loaded");
    });
    $(document).on("click", ".mobile_menu", function(e) {
        e.preventDefault();
        $(".mobile_menu_container").addClass("loaded");
        $(".mobile_menu_overlay").fadeIn();
    });
    $(document).on("click", ".mobile_menu_overlay", function(e) {
        $(".mobile_menu_container").removeClass("loaded");
        $(this).fadeOut();
    });
})






</script>


<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.js'></script>



</HEAD> 

  <BODY BOTTOMMARGIN="0" LEFTMARGIN="0" RIGHTMARGIN="0" TOPMARGIN="0" MARGINWIDTH="0"
	MARGINHEIGHT="0" bgcolor="#ffffff" TEXT="#" class="body_pointer"> 





<!----------------- 0-я ТАБЛИЦА левый столбец, середина, правый ------------------------>

<TABLE BORDER="0" CELLPADDING="0" CELLSPACING="0" align=center width=90%> 
<TR>
<td width="25%"  VALIGN="center" ALIGN="left">
<a href="/"><img src="/turk_flag.jpg"></a>
</td>
<td align = center>
<h2>Генератор случайных фраз.</h2><br>

<div id="startblock">
Сайт предназначен для нарабатывания устойчивых навыков использования аффиксов турецкого языка. <br>
Предлагаемые к переводу фразы на русском языке генерятся случайным образом и не обязательно корректны.<br>
Задача обучаемого за счет постоянной тренировки добиться относительно быстрого перевода.<br><br>
Клик на русском слове выдает его базовый перевод.
</div>


</td>
</TR>

<TR>

<!--------- левый столбец ----------------->
<!--onclick=startblock.style.visibility='hidden'-->

<TD width="25%" VALIGN="top" ALIGN="left">

<!--------- МЕНЮ в левом столбце ----------------->

<div class="menu">
	<a class="menu-triger" href="#"></a>
	<div class="menu-popup">
		<a class="menu-close" href="#"></a>
		<ul>
			<li><a href="#">О компании</a></li>
			<li><a href="#">Услуги</a></li>		
			<li><a href="#">Прайс-лист</a></li>
			<li><a href="#">Услуги</a></li>
			<li><a href="#">Гарантии</a></li>
			<li><a href="#">Контакты</a></li>
		</ul>						
	</div>
</div>


{menus}





<div class="menu_container">
	<a href="#" class="mobile_menu">Показать меню</a>
</div>





<div class="mobile_menu_container">
    <div class="mobile_menu_content">
        <ul>
            <li>
                <a href="#" class="parent">Компьютерная техника</a>
                <ul>
                    <li><a href="#" class="back"></a></li>
                    <li><a href="#">Компьютерная техника</a></li>
                    <li>
                        <a href="#" class="parent">Ноутбуки и аксессуары</a>
                        <ul>
                            <li><a href="#" class="back"></a></li>
                            <li><a href="#">Ноутбуки и аксессуары</a></li>
                            <li><a href="#">Ноутбуки</a></li>
                            <li><a href="#">Аксессуары</a></li>
                            <li>
                                <a href="#" class="parent">Компьютеры и комплектующие</a>
                                <ul>
                                    <li><a href="#" class="back"></a></li>
                                    <li><a href="#">Компьютеры и комплектующие</a></li>
                                    <li><a href="#">Компьютеры</a></li>
                                    <li><a href="#">Моноблоки</a></li>
                                    <li><a href="#">Материнские платы</a></li>
                                    <li><a href="#">Процессоры</a></li>
                                    <li><a href="#">Видеокарты</a></li>
                                    <li><a href="#">Жесткие диски HDD</a></li>
                                    <li><a href="#">Корпуса</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Перифирия</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Техника для печати</a></li>
                    <li><a href="#">Микрофоны</a></li>
                    <li><a href="#">Вебкамеры</a></li>
                    <li><a href="#">Наушники</a></li>
                </ul>
            </li>
            <li><a href="#">Строительство и ремонт</a></li>
            <li>
                <a href="#" class="parent">Телефоны</a>
                <ul>
                    <li><a href="#" class="back"></a></li>
                    <li><a href="#">Телефоны</a></li>
                    <li><a href="#">Nokia</a></li>
                    <li><a href="#">Xiaomi</a></li>
                    <li><a href="#">Samsung</a></li>
                    <li><a href="#">iPhone</a></li>
                </ul>
            </li>
            <li>
                <a href="#" class="parent">Одежда</a>
                <ul>
                    <li><a href="#" class="back"></a></li>
                    <li><a href="#">Одежда</a></li>
                    <li><a href="#">Брюки</a></li>
                    <li>
                        <a href="#" class="parent">Куртки</a>
                        <ul>
                            <li><a href="#" class="back"></a></li>
                            <li><a href="#">Куртки</a></li>
                            <li><a href="#">Зимние куртки</a></li>
                            <li><a href="#">Летние ветровки</a></li>
                            <li><a href="#">Осенняя коллекция</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Штанишки</a></li>
                    <li><a href="#">Майки</a></li>
                </ul>
            </li>
            <li><a href="#">Сантехника</a></li>
            <li><a href="#">Бытовая техника</a></li>
            <li><a href="#">Сад и огород</a></li>
            <li><a href="#">Лампы и светильники</a></li>
            <li><a href="#">Телевизоры</a></li>
        </ul>
    </div>
</div>
<div class="mobile_menu_overlay"></div>












</td>
<TD VALIGN="top" ALIGN="left">
<br><br>
<table border=1 width=100% height=100%><tr><td><br><br><br>


<div id="test">{content}</div>


<br><br><br></td></tr></TABLE> 



</td></tr></TABLE> 







<br>








</BODY>
</HTML>