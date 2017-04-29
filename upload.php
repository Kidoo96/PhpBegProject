<?php 

require 'config.php'; // вкъкване на конфиг файла

$page_title = 'Качване &bull; Тунинг Части'; // Задаване на заглавие за началната страница

include 'inc/header.php'; // вкъкване на хеадър файла

 ?>

 <?php

if (isset($_POST['upload'])) {
	$target = "images/".basename($_FILES['image']['name']);

	$db = mysqli_connect("localhost", "root", "", "db_parts");

	
}


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
		<form method="post" action="upload.php">
			<input type="hidden" name="size" value="1000000">
			<div>
				<input type="file" name="image">
			</div>
			<div>
				<textarea name="text" cols="40" rows="4"></textarea>
			</div>
			<div>
				<input type="submit" name="upload" value="Upload">
			</div>


		</form>
	</div>
</section>




 <?php include 'inc/footer.php'; ?>