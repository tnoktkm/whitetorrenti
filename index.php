<!DOCTYPE html>
<html>
<head>
	<title>!WHITE TORRENT</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/settings.css">
	<link rel="icon" href="img/favicon.jpg" type="image/x-icon">
	<link rel="shortcut icon" href="img/favicon.jpg" type="image/x-icon">

	<?php include('database.php');
	require_once ('rb.php'); ?>



</head>
<body>

	<script src="test.js"></script>
	<div id = "test">

	<div id = "page-preloader" class = "preloader">
		<div class = "loader">
			
		</div>
	</div>
</div>



<!--Подключение шапки-->
<?php include('include/header.php'); ?>

	<div class="contentBar">

		<!--Подключение сайдбара1 -->
		<?php include('include/saidbar1.php'); ?>




		<!--Контент блок-->
		<div class="content">
			<h1 id = "glava">ИГРЫ</h1>

			<!--Блок игр-->
			<div class="games">

				<?php
					$count_games = 4;
					$start = ($_GET['str']*$count_games)-$count_games;
					$id = $_GET['id'];

					$count_g = R::exec("SELECT * FROM `games`", array(
						//пусто так и должно быть.
					));


				if ($_GET['str']) {

					$x = R::findAll('games', 'ORDER BY id DESC LIMIT ?,?',array(
						$start,
						$count_games
					));
					foreach ($x as $z) {

						include('game.php');
					}

				}	else {
					$x =R::findAll('games','ORDER BY id DESC LIMIT ?,?',array(
						0,
						4
						//пусто
					));
					foreach ($x as $z) {

						include('game.php');
					}
				}

					







			?>

			</div>


			<!--Номера страниц (навигация по сайту.)-->
			<div class = "navigation">
				<?php 
					$numner_str = 1;
					if ($_GET[str]) {
						$numner_str = $_GET['str'];
					}
					echo "Ваша страница - {$numner_str}";

					$stranice = R::exec("SELECT * FROM `games`", array (
						//должно быть пусто.
					));
					$count = $stranice;
					$count /= $count_games;
					$count = ceil($count);
					$count1 = 1;

					# цикл чтобы выводили номера страниц только с сущ на них играх.
					?> <div class = 'blocklist'>

					<?php
					while ($count1 != $count + 1) {
						echo "<p class = 'stranica' ><a href ='?str={$count1}'>{$count1}</p></a>";
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