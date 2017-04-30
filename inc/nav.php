	<nav class="navi">
		<ul>
			<li><a href="index.php">Начало</a></li>
			<li><a href="catalog.php">Каталог</a></li>
			<li><a href="contact.php">За Контакти</a></li>
		<?php 
		if (isset($_SESSION['username'])) {
		?>
			<li><a href="profile.php">Профил</a></li>
			<li><a href="logout.php" class="active">Изход</a></li>
		<?php
		}
		else {

	?>
			<li><a href="registration.php">Регистрация</a></li>
			<li><a href="login.php" class="active">Вход</a></li>
	<?php
		}
		?>
			<?php 
				if (isset($_SESSION['user_role']) == 1) {
			?>
			<li><a href="addparts.php">Добави части</a></li>
			<?php		
				}


			?>
		</ul>
	</nav>