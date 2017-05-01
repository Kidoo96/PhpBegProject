<?php 
require 'config.php'; // вкъкване на конфиг файла

$page_title = 'Начало &bull; Тунинг Части'; // Задаване на заглавие за началната страница
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
	<div class="sum">
		<p>Изберете си количество и автоматично ще изпише <font style="color:red">цената</font> по-долу.</p>
		<hr>
		<input type="text" class="tot" name="Total" id="Total" readonly><span class="tot"></span>
	</div>
	<div class="catalog">
		<table id="CatTab" style="width:100%;">
		  <tr>
		    <th>Номер</th>
		    <th>Име</th> 
		    <th>Снимка</th>
		    <th>Цена (лв)</th>
		    <th>Действия</th>
		  </tr>

		  
			<?php

			$sql = "SELECT * FROM parts";
			$result = mysqli_query($conn, $sql);
			$counter = 1;
			while ($row = mysqli_fetch_array($result)) {
				echo "<tr class='item'>";
					echo "<td>".$counter++."</td>";
					echo "<td>".$row['name']."</td>";
					echo "<td><img src='images/".$row['image']."' ></td>";
					echo "<td>".$row['price']." лв.</td>";
					echo "<td class='tdicon'>
					<a href='editparts.php?id=".$row['part_id']."'><img src='images/edit.png' ></a>
					<a href='#'><img src='images/delete.png' ></a>
					</td>";
					//echo "<p>".$row['description']."</p>";
				echo "</tr>";
			}

			?>
	
		</table>
	</div>
</section>

<?php include 'inc/footer.php'; ?>
	<script type="text/javascript">

		function calc(A,B,SUM) { 
			  var one = Number(A); 
			  if (isNaN(one)) { alert('Не правилно число: '+A); one=0; } 
			  var two = Number(document.getElementById(B).value);  
			  if (isNaN(two)) { alert('Не правилно число: '+B); two=0; } 
			  document.getElementById(SUM).value = one * two; 
		}

	</script>