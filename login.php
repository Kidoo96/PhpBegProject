<?php 

require 'config.php';

$page_title = 'Вход &bull; Тунинг Части'; // Задаване на заглавие за началната страница
include 'inc/header.php'; // вкъкване на хеадър файла

?>
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
<section id="main" class="white-bg">
	<div class="intro" align="center">

		<form method="POST" action="lg.php" class="form">
			<div>
				<label for="usernameid">Потребителско име</label>
			    <input type="text" maxlength="16" name="username">
			</div>
			<div>
				<label for="passid">Парола</label>
		    	<input type="password" maxlength="16" name="password">
			</div>
		    <input type="submit" name="Submit" value="Вход">    
		</form>

	</div>
</section>