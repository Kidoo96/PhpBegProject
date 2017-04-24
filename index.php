<?php 

require 'config.php'; // вкъкване на конфиг файла

$page_title = 'Начало &bull; Тунинг Части'; // Задаване на заглавие за началната страница
require 'inc/header.php'; // вкъкване на хеадър файла

 ?>
<body>
<header id="main" class="head-bg">
	<div class="logo">
		<a href="#"><img src="images/logo.png"></a>
		<span style="float:right; color: #fff; margin-left: 10px; font-family: "Calibri"; font-size: 20px; ">
			<h1><span style="color: #e83846"; >Тунинг</span> Части &reg;</h1>
			<p>за вашата кола</p>
		</span>
	</div>
	<?php include 'inc/nav.php'; ?>
</header>
<section id="main">
	<div class="intro" align="center">
		<h2>За твоята мощност ще се погрижим <br> ние!</h2>
		<p>Качеството е само при нас.</p>
		<button type="submit" value="Разгледай" class="button" onclick="location.href='catalog.php';">Разгледай</button>
	</div>
</section>

<?php include 'inc/footer.php'; ?>