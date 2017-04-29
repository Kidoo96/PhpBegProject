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
		    <th>Брой</th>
		    <th>Цена (лв)</th>
		  </tr>
		  <tr class="item">
		    <td>1</td>
		    <td>Тунинг пакет / Body Kit за Volkswagen Golf 4 (1997-2003)</td>
		    <td><a href="https://www.bestauto.bg/24763-thickbox_default/%D1%82%D1%83%D0%BD%D0%B8%D0%BD%D0%B3-%D0%BF%D0%B0%D0%BA%D0%B5%D1%82-body-kit-%D0%B7%D0%B0-volkswagen-golf-4-1997-2003.jpg" target="_blank"><img src="https://www.bestauto.bg/24763-home_default/%D1%82%D1%83%D0%BD%D0%B8%D0%BD%D0%B3-%D0%BF%D0%B0%D0%BA%D0%B5%D1%82-body-kit-%D0%B7%D0%B0-volkswagen-golf-4-1997-2003.jpg" alt="Тунинг Пакет"></a></td>
		    <td><input type="number" name="quantity" value="0" min="0" onChange="calc(this.value,'op2','Total')"></td>
		    <td><input type="text" id="op2" name="price" value="690" readonly></td>
		  </tr>
		  <tr class="item">
		    <td>2</td>
		    <td><span class="lineb"> R32 пакет </span> Body Kit за Volkswagen Golf 4 (1997-2003)</td>
		    <td><a href="https://www.bestauto.bg/24762-thickbox_default/r32-%D0%BF%D0%B0%D0%BA%D0%B5%D1%82-body-kit-%D0%B7%D0%B0-volkswagen-golf-4-1997-2003.jpg" target="_blank"><img src="https://www.bestauto.bg/24762-home_default/r32-%D0%BF%D0%B0%D0%BA%D0%B5%D1%82-body-kit-%D0%B7%D0%B0-volkswagen-golf-4-1997-2003.jpg" alt=""></a></td>
		    <td>	<input type="number" name="quantity" value="0" min="0" onChange="calc(this.value,'op2','Total')">	</td>
		    <td>	<input type="text" id="op3"  name="price" value="585" readonly>	</td>
		  </tr>
		  <tr class="item">
		    <td>3</td>
		    <td>Тунинг фарове за Голф 4 / Volkswagen Golf 4 (1997-2004)</td>
		    <td><a href="https://www.bestauto.bg/24720-thickbox_default/тунинг-фарове-за-голф-4-volkswagen-golf-4-1997-2004.jpg" target="_blank"><img src="https://www.bestauto.bg/24720-home_default/%D1%82%D1%83%D0%BD%D0%B8%D0%BD%D0%B3-%D1%84%D0%B0%D1%80%D0%BE%D0%B2%D0%B5-%D0%B7%D0%B0-%D0%B3%D0%BE%D0%BB%D1%84-4-volkswagen-golf-4-1997-2004.jpg" alt=""></a></td>
		    <td><input type="number" name="quantity" value="0" min="0" onChange="calc(this.value,'op4','Total')"></td>
		    <td><input type="text" id="op4" name="rice" value="240" readonly></td>
		  </tr>
		  <tr class="item">
		    <td>4</td>
		    <td>Тунинг пакет за Volkswagen Golf 4</td>
		    <td><a href="https://www.bestauto.bg/24194-thickbox_default/тунинг-пакет-за-volkswagen-golf-4.jpg" target="_blank"><img src="https://www.bestauto.bg/24194-home_default/%D1%82%D1%83%D0%BD%D0%B8%D0%BD%D0%B3-%D0%BF%D0%B0%D0%BA%D0%B5%D1%82-%D0%B7%D0%B0-volkswagen-golf-4.jpg" alt=""></a></td>
		    <td><input type="number" name="quantity" value="0" min="0" onChange="calc(this.value,'op5','Total')"></td>
		    <td><input type="text" id="op5" name="Price" value="280" readonly></div></td>
		  </tr>
		  <tr class="item">
		    <td>5</td>
		    <td>Тунинг прагове за Volkswagen Golf 4 / Bora</td>
		    <td><a href="https://www.bestauto.bg/24184-thickbox_default/тунинг-прагове-за-volkswagen-golf-4-bora.jpg" target="_blank"><img src="https://www.bestauto.bg/24184-home_default/%D1%82%D1%83%D0%BD%D0%B8%D0%BD%D0%B3-%D0%BF%D1%80%D0%B0%D0%B3%D0%BE%D0%B2%D0%B5-%D0%B7%D0%B0-volkswagen-golf-4-bora.jpg" alt=""></a></td>
		    <td><input type="number" name="quantity" value="0" min="0" onChange="calc(this.value,'op6','Total')"></td>
		    <td><input type="text" id="op6" name="Price" value="125" readonly></td>
		  </tr>
		  <tr class="item">
		    <td>6</td>
		    <td>Спойлер за предна броня за Volkswagen Golf 4 (1997-2003)</td>
		    <td><a href="https://www.bestauto.bg/24779-thickbox_default/спойлер-за-предна-броня-за-volkswagen-golf-4-1997-2003.jpg" target="_blank"><img src="https://www.bestauto.bg/24779-home_default/%D1%81%D0%BF%D0%BE%D0%B9%D0%BB%D0%B5%D1%80-%D0%B7%D0%B0-%D0%BF%D1%80%D0%B5%D0%B4%D0%BD%D0%B0-%D0%B1%D1%80%D0%BE%D0%BD%D1%8F-%D0%B7%D0%B0-volkswagen-golf-4-1997-2003.jpg" alt=""></a></td>
		    <td><input type="number" name="quantity" value="0" min="0" onChange="calc(this.value,'op7','Total')"></td>
		    <td><input type="text" name="Price" id="op7" value="75" readonly></td>
		  </tr>
		  <tr class="item">
		    <td>7</td>
		    <td>Тунинг фарове за Volkswagen Golf 4 R32 Style (1997-2004)</td>
		    <td><a href="https://www.bestauto.bg/23288-thickbox_default/тунинг-фарове-за-volkswagen-golf-4-r32-style-1997-2004.jpg" target="_blank"><img src="https://www.bestauto.bg/23288-home_default/%D1%82%D1%83%D0%BD%D0%B8%D0%BD%D0%B3-%D1%84%D0%B0%D1%80%D0%BE%D0%B2%D0%B5-%D0%B7%D0%B0-volkswagen-golf-4-r32-style-1997-2004.jpg" alt=""></a></td>
		    <td><input type="number" name="quantity" value="0" min="0" onChange="calc(this.value,'op8','Total')"></td>
		    <td><input type="text" name="Price" id="op8" value="290" readonly></td>
		  </tr>
		  <tr class="item">
		    <td>8</td>
		    <td>Тунинг решетка за VW Golf 4 (1997-2003)</td>
		    <td><a href="https://www.bestauto.bg/22915-thickbox_default/тунинг-решетка-за-vw-golf-4-1997-2003.jpg" target="_blank"><img src="https://www.bestauto.bg/22915-home_default/%D1%82%D1%83%D0%BD%D0%B8%D0%BD%D0%B3-%D1%80%D0%B5%D1%88%D0%B5%D1%82%D0%BA%D0%B0-%D0%B7%D0%B0-vw-golf-4-1997-2003.jpg" alt=""></a></td>
		    <td><input type="number" name="quantity" value="0" min="0" onChange="calc(this.value,'op9','Total')"></td>
		    <td><input type="text" name="Price" id="op9" value="30" readonly></td>
		  </tr>
		  <tr class="item">
		    <td>9</td>
		    <td>R32 предна броня за Volkswagen Golf 4</td>
		    <td><a href="https://www.bestauto.bg/24179-thickbox_default/тунинг-броня-r32-за-volkswagen-golf-4-1997-2003-7904.jpg" target="_blank"><img src="https://www.bestauto.bg/24179-home_default/%D1%82%D1%83%D0%BD%D0%B8%D0%BD%D0%B3-%D0%B1%D1%80%D0%BE%D0%BD%D1%8F-r32-%D0%B7%D0%B0-volkswagen-golf-4-1997-2003-7904.jpg" alt=""></a></td>
		    <td><input type="number" name="quantity" value="0" min="0" onChange="calc(this.value,'op10','Total')"></td>
		    <td><input type="text" name="Price" id="op10" value="175" readonly></td>
		  </tr>
		  <tr class="item">
		    <td>10</td>
		    <td>Тунинг огледала POWER за Фолксваген / Volkswagen [TO09]</td>
		    <td><a href="https://www.bestauto.bg/22062-thickbox_default/тунинг-огледала-power-за-фолксваген-volkswagen-to09.jpg" target="_blank"><img src="https://www.bestauto.bg/22062-home_default/%D1%82%D1%83%D0%BD%D0%B8%D0%BD%D0%B3-%D0%BE%D0%B3%D0%BB%D0%B5%D0%B4%D0%B0%D0%BB%D0%B0-power-%D0%B7%D0%B0-%D1%84%D0%BE%D0%BB%D0%BA%D1%81%D0%B2%D0%B0%D0%B3%D0%B5%D0%BD-volkswagen-to09.jpg" alt=""></a></td>
		    <td><input type="number" name="quantity" value="0" min="0" onChange="calc(this.value,'op11','Total')"></td>
		    <td><input type="text" name="price" id="op11" value="40" readonly></td>
		  </tr>
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