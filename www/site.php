<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<?php include "header.php" ?>
</head>
<body>

	<?php include "sidebar.php" ?>
	
	<div style="margin-left: 20%;">

		

		<?php
			$title = "Transformers";
			$director = "Michael Bay";
			include "article-header.php"
		?>
		<?php
			$movies = array("Joker"=>"8€","Batman"=>"9€","PeppaPig"=>"5€");
		?>
		<form action="site.php" method="post">
			Enter a Name of the movie to get it's price <br>
			<input type="text" name="movieName"><br>

			<input type="submit">
		</form>
		<br>
		<?php

			echo $movies[$_POST["movieName"]];

	 	?>
	 	<?php include "footer.php" ?>
	</div>
</body>
</html>
