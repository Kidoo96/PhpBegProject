<?php 
require 'config.php'; // вкъкване на конфиг файла

$page_title = 'Добави &bull; Тунинг Части'; // Задаване на заглавие за началната страница
include 'inc/header.php'; // вкъкване на хеадър файла


if (isset($_POST['upload'])) {
	// Пътя за сухранение на снимката
	$target = "images/".basename($_FILES['image']['name']);
	$msg = "";
	$title = $_POST['title'];
	$price = $_POST['price'];
	$image = $_FILES['image']['name'];
	$text = $_POST['description'];
	$mid = "1";

	$query = "INSERT INTO parts". "(name, description, price, image, model_id)". "VALUES('$title', '$text', '$price', '$image', '$mid')";

	$query_run = mysqli_query($conn, $query);

	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
		$msg = "image uploaded success";
	}else {
		$msg = "There was a error";
	}

	
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
	<?php

	$sql = "SELECT * FROM parts";
	$result = mysqli_query($conn, $sql);
	while ($row = mysqli_fetch_array($result)) {
		echo "<div id='img-div'>";
			echo "<p>".$row['name']."</p>";
			echo "<p>".$row['price']."</p>";
			echo "<img src='images/".$row['image']."' >";
			echo "<p>".$row['description']."</p>";
		echo "</div>";
	}

	?>



		<form method="POST" action="addparts.php" enctype="multipart/form-data">
			<input type="hidden" name="size" value="1000000">
			<div>
				<label for="title">Заглавие</label>
				<input type="text" name="title">
			</div>
			<div>
				<label for="price">Цена</label>
				<input type="text" name="price">
			</div>
			<div>
				<label >Снимка</label>
				<input type="file" name="image">
			</div>
			<div>
				<label for="description">Описание</label>
				<textarea name="description" cols="40" rows="4"></textarea>
			</div>
			<div>
				<input type="submit" name="upload" value="Upload">
			</div>


		</form>
	</div>
</section>

<?php include 'inc/footer.php'; ?>