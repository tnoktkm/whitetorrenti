<!DOCTYPE html>
<html>
<head>
	<title>!WHITE TORRENT</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/settings.css">
	<?php include('database.php');
	require_once ('rb.php'); ?>

</head>
<body>

<!--Подключение шапки-->
<?php include('include/header.php'); ?>

	<div class="contentBar">

		<!--Подключение сайдбара1 -->
		<?php include('include/saidbar1.php'); ?>




		<!--Контент блок-->
		<div class="content">
			<h1 id = "glava">
				<?php 
				$id_cate = $_GET[id];
				$name_cate = R::findAll('categories','WHERE `id` = ?', array(
					$id_cate
				));	
				foreach ($name_cate as $z) {
					echo $z['name'];
				}

				?> 
			</h1>

			<!--Блок игр-->
			<div class="games">


	         	<?php
	         	$id = $_GET['id'];
	         	$count_games = 4;
	         	$start = ($_GET['cstr']*$count_games)-$count_games;

				if ($_GET['cstr']) {

					$x = R::findAll('games', 'WHERE `id_categories` = ? ORDER BY id DESC LIMIT ?,?',array(
						$id,
                        $start,
                        $count_games
					));
					foreach ($x as $z) {

						include('game.php');
					}

				}	else {
					$x = R::findAll('games', 'WHERE `id_categories` = ? ORDER BY id DESC LIMIT ?,?',array(
						$id,
						0,
						4

					));
					foreach ($x as $z) {

						include('game.php');
					}

				}





					$numner_cstr = 1;
					if ($_GET['cstr']) {
						$numner_cstr = $_GET['cstr'];
					}
					echo "Ваша страница - {$numner_cstr}";

					?> <div class = 'blocklist'> 
					<?php


					$z2 = R::exec("SELECT * FROM `games` WHERE `id_categories` = ?",array (
						$id

					));
					$count = $z2;

					$count /= $count_games;
					$count = ceil($count);
					$count1 = 1;

					while ($count1 != $count + 1) {
						echo "<p class = 'stranica' ><a href ='?id={$id}&cstr={$count1}'>{$count1}</p></a>";
						$count1 += 1;
					}

					








			?>
				</div>


			</div>









		</div>
			<!--Подключение сайдбара2 -->
			<?php include('include/saidbar2.php'); ?>
	</div>


<center><div class = "foottext" >COPYRIGHT IGOR PESKOV 2018-2018</div></center>

</body>
</html>