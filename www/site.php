<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link href="https://fonts.googleapis.com/css2?family=Anybody:wght@200&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="includes/css/style.css">
	<?php include "header.php" ?>
</head>
<body>

	<?php include "sidebar.php" ?>
	
	<div style="margin-left: 10%;">

		

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
	 	
	</div>
	<?php include "footer.php" ?>
</body>
</html>
