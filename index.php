<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="favicon.ico">
<link rel='StyleSheet' type='text/css' href='css/main.css' />
<link rel='StyleSheet' type='text/css' href='css/mob.css' />
<link rel='StyleSheet' type='text/css' href='css/mob2.css' />
<link rel='StyleSheet' type='text/css' href='css/rotator.css' />
<link rel="stylesheet" type="text/css" href="css/comment.css" />
<script type="text/javascript" src="js/jquery-1.6.2.min.js"></script>
<script type="text/javascript" src="js/comment.js"></script>
<script type="text/javascript" src="js/rotator.js"></script> 
<script type="text/javascript" src="js/script.js"></script> 
<title>Альтернативная история</title>
<meta name="keywords" content="Альтернативная история, Запретная архиология, Полая Земля"><!-- Ключевые слова для поисковика /-->
  <meta name="description" content="Сайт о Альтернативной истории"> <!-- Краткий обзор содиржимого контента/-->
  <meta name="Robots" content="noindex,nofollow"> <!-- запрет роботу индексировать страницу и весь сайт/-->
</head>
<body>
<div id="wrapper">

<div id="header">Альтернативная история </div>

<div id=men>
<ul class="menu cf">
  <li><a href="index.php">Главная страница</a></li>
  <li>
    <a href="#">факты</a>
    <ul class="submenu">
	  <li><a href="index.php?page=1">Мегалиты</a></li>
      <li><a href="index.php?page=2">Везувий</a></li>
      <li><a href="index.php?page=3">Дольмены</a></li>
      <li><a href="index.php?page=4">потоп</a></li>
	  <li><a href="index.php?page=5">карьер по имени земля</a></li>
	  <li><a href="index.php?page=6">Филадельфийский эксперимент</a></li>
	  <li><a href="index.php?page=7">Проект Монтаук</a></li>
    </ul>
  </li>
  <li><a href="#">теории</a>
  <ul class="submenu">
	  <li><a href="index.php?page=8">Полая земля</a></li>
      <li><a href="index.php?page=9">луна</a></li>
      <li><a href="index.php?page=10">Откровение Инсайдера 1</a></li>
	  <li><a href="index.php?page=11">Откровение Инсайдера 2</a></li>
	  <li><a href="index.php?page=12">Откровение Инсайдера 3</a></li>
      <li><a href="index.php?page=13">Ануннаки</a></li>
      <li><a href="index.php?page=14">Голографическая вселенная</a></li>
    </ul>
  </li>
  <li><a href="#">Об авторе</a>
  <ul class="submenu">
	  <li><a href="index.php?page=15">автор</a></li>
      <li><a href="index.php?page=16">стихи</a></li>
      <li><a href="index.php?page=17">философия</a></li>
      <li><a href="index.php?page=18">проза</a></li>
	  <li><a href="index.php?page=19">сочинение</a></li>
	  <li><a href="index.php?page=20">Адепт № 9</a></li>
    </ul>
  </li>
  <li><a href="index.php?page=21">Ваше мнение</a></li>
</ul>
</div>
<div id=mob>


<ul class="cd-accordion-menu animated">
		<li><a href="index.php">Главная страница</a></li>
<li class="has-children">
			<input type="checkbox" name ="group-1" id="group-1">
			<label for="group-1">Факты</label>

			<ul>
				<li><a href="index.php?page=1">Мегалиты</a></li>
				<li><a href="index.php?page=2">Везувий</a></li>
				<li><a href="index.php?page=3">Дольмены</a></li>
				<li><a href="index.php?page=4">потоп</a></li>
				<li><a href="index.php?page=5">карьер по имени земля</a></li>
				<li><a href="index.php?page=6">Филадельфийский эксперимент</a></li>
				<li><a href="index.php?page=7">Проект Монтаук</a></li>
			</ul>
		</li>
		
		<li class="has-children">
			<input type="checkbox" name ="group-2" id="group-2">
			<label for="group-2">Теории</label>

			<ul>
				<li><a href="index.php?page=8">Полая земля</a></li>
				<li><a href="index.php?page=9">луна</a></li>
				<li><a href="index.php?page=10">Откровение Инсайдера 1</a></li>
				<li><a href="index.php?page=11">Откровение Инсайдера 2</a></li>
				<li><a href="index.php?page=12">Откровение Инсайдера 3</a></li>
				<li><a href="index.php?page=13">Ануннаки</a></li>
				<li><a href="index.php?page=14">Голографическая вселенная</a></li>
			</ul>
		</li>

		<li class="has-children">
			<input type="checkbox" name ="group-3" id="group-3">
			<label for="group-3">Об авторе</label>

			<ul>
				<li><a href="index.php?page=15">автор</a></li>
				<li><a href="index.php?page=16">стихи</a></li>
				<li><a href="index.php?page=17">философия</a></li>
				<li><a href="index.php?page=18">проза</a></li>
				<li><a href="index.php?page=19">сочинение</a></li>
				<li><a href="index.php?page=20">Адепт № 9</a></li>
			</ul>
		</li>
<li><a href="index.php?page=21">Ваше мнение</a></li>
	</ul> <!-- cd-accordion-menu -->
</div>

<div id="content">

<?php
if (isset($_GET['page'])) { $page=$_GET['page']; }

if (isset($page)) 
  {
   switch ($page)
    {case '1':  include './docs/fakt/1megalit.php' ;break;
     case '2':  include './docs/fakt/2vezuv.php' ;break;
	 case '3':  include './docs/fakt/3dolmen.php' ;break;
	 case '4':  include './docs/fakt/4potop.php' ;break;
	 case '5':  include './docs/fakt/5karer.php' ;break;
	 case '6':  include './docs/fakt/6fil.php' ;break;
	 case '7':  include './docs/fakt/7mok.php' ;break;
	 case '8':  include './docs/teo/1polz.php' ;break;
	 case '9':  include './docs/teo/2luna.php' ;break;
	 case '10': include './docs/teo/3insaider1.php' ;break;
	 case '11': include './docs/teo/4insaider2.php' ;break;
	 case '12': include './docs/teo/5insaider3.php' ;break;
	 case '13': include './docs/teo/6anunac.php' ;break;
	 case '14': include './docs/teo/7gal.php' ;break;
	 case '15': include './docs/avtor/1avtor.php' ;break;
	 case '16': include './docs/avtor/2stix.php' ;break;
	 case '17': include './docs/avtor/3filosof.php' ;break;
	 case '18': include './docs/avtor/4proza.php' ;break;
	 case '19': include './docs/avtor/5sotinenie.php' ;break;
	 case '20': include './docs/avtor/6adept.php' ;break;
	 case '21': include './docs/3mnenie.php' ;break;
     default:   include './docs/404.php'  ;break;
    }
  }
else
   include './docs/1welcome.php'   ;
?>
</div>




<div id="footer"> Ковалёв Роман 2017    <a href="#" title="Вернуться к началу" class="topbutton">^ Наверх ^</a>  </div>
<img src="/cnt/counter.php?cat=istoria&amp;color=3&amp;id=3951198f7bf583460a96638e6a16154b" alt="IT Counter" />
<img src="../images/v.gif" alt="Валидатор"> 
</div>
</body>
</html>