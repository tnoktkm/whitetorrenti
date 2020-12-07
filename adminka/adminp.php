<!DOCTYPE html>
<html>
<head>
	<title>ADMINKA</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/Asettings.css">
</head>
<body>

	<?php
				include('../database.php');
				require_once ('../rb.php'); 

	
		$name = $_POST['name'];
		$pass = $_POST['password'];

	
		$name = htmlspecialchars($_POST['name']);
		$pass = htmlspecialchars($_POST['password']);

		// Проверка логина и пароля.       P.S. сразу в админ п. нельзя перейти.!
		if ($name == 'test') {
			if ($pass == 'test2'){

					// Та самая админ панель с авторизацией. xD1111
				echo "Успешный вход!<br>";
				echo "Здравствуй, {$name} - повелитель сайта!";



				//КОЛИЧЕСТВО ИГР В КАТЕГОРИИ
				$id = 1;
				//КАТЕГОРИИ
				$cat_name = R::findAll('categories','',array(
					//пусто		
					));
				echo "<br>";
				echo "<div id = 'BlockCategories'><div id = 'BlockCategoriesContent'>";
					foreach ($cat_name as $z1) {

						
						echo $z1['name'] . " - ";
						$id++;

						$z2 = R::exec("SELECT * FROM `games` WHERE `id_categories` = ?",array (
							$id
						));
						$count = $z2;
						echo $count;
						echo "<br>";
						
					}	
					echo "</div></div>";
					?>			

							<!--ДОБАВЛЕНИЕ------------------------------------------------------------------->
							<div id = "BlockAddCategories">
							Добавление категории
					<form action="adminp.php" method="post">
						 <p>Название - <input type="text" name="nameCategories" /></p>
						 <p><input type="submit" value="Добавить" /></p>	
					</form>
							</div>
						<!--ДОБАВЛЕНИЕ END------------------------------------------------------------------->





					<?php










					// Проверка ----------------------------------------------------------------------------
			}else {
				echo "Неправильный пароль!";
			}
		}else {
			echo "Неправильный логин!";
		}
		// Проверка -----------------------------------------------------------------------------------------------------------------





 ?>

</body>
</html>

