<?php 
require 'config.php'; // вкъкване на конфиг файла

$page_title = 'За контакти &bull; Тунинг Части'; // Задаване на заглавие за началната страница
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
	<div class="contact">

		<?php

			// Променливи
			$to = 'sappy996@gmail.com';
			$fname = $_POST['fname'];
			$email = $_POST['email'];
			$subject = $_POST['subject'];
			$message = $_POST['message'];
			$formcontent = "From: $fname \n Message: $message";

			$mailheader = "From: $email \r\n";

			mail($to, $subject, $formcontent, $mailheader) or die("Error");

			echo "Danke";

		?>


		<form id="contact" action="" method="post">
		    <h3>Връзка с нас</h3>
		    <h4>Отговор до 24 часа</h4>
		    <fieldset>
		      <input placeholder="Име" name="fname" type="text" tabindex="1" required autofocus>
		    </fieldset>
		    <fieldset>
		      <input placeholder="Емайл" name="email" type="email" tabindex="2" required>
		    </fieldset>
		    <fieldset>
		      <input placeholder="Относно" name="subject" type="email" tabindex="2" required>
		    </fieldset>
		    <fieldset>
		      <textarea placeholder="Съобщението...." name="message" tabindex="5" required></textarea>
		    </fieldset>
		    <fieldset>
		      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Изпрати</button>
		    </fieldset>
		  </form>

	</div>

</section>
<?php include 'inc/footer.php'; ?>