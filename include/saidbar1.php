<!DOCTYPE html>
<html>

<head>

	<title>!WHITE TORRENT</title>
	<link rel="stylesheet" type="text/css" href="../css/settings.css"> 

</head>

<body>

	<div class="bar1">
		<p>ЖАНР</p>
		<hr>

		<?php
		$help_v = 0;


		$count_cate = R::exec("SELECT * FROM `categories`",array(
			//пусто...
		)); 


		echo '<ul class = "categories">';

			while ( $help_v != $count_cate + 1 ) 
			{
				$z3 = R::load('categories', $help_v);
				echo '<li class = "categoriesLI"><a href = categories.php?id='. $z3['id'] .' class = "href">' . $z3['name'] . '</a></li>';
				$help_v += 1;
				
			}
		echo '</ul>';
		?>

	</div>

</body>

</html>