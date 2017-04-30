<?php 

require 'config.php'; // вкъкване на конфиг файла
$page_title = 'Инсайд &bull; Тунинг Части'; // Задаване на заглавие за началната страница
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
		<p>Добре дошъл <?php echo $_SESSION['username'] ?></p>
		<p>Роля: <?php echo $_SESSION['user_role']; ?> </p>
		<p>Потребител ID: <?php echo $_SESSION['user_id']; ?> </p>
		<a href="logout.php">Изход</a>
	</div>
</section>


<?php include 'inc/footer.php'; ?>