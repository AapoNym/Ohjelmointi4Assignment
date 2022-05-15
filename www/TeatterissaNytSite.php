<?php include "article-header.php";?>
<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link href="https://fonts.googleapis.com/css2?family=Anybody:wght@200&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="includes/css/style.css">
	<?php include "header.php" ?>
	<?php include "sidebar.php" ?>
</head>
<body>
<main> <div style="margin-left: 200px;">

	<p1> TEATTERISSA NYT</p1><br><br>

    <?php	$movieJoker = $_SESSION["movieJoker"];?>

	<div class='moviePreview'>
		<img src='images/moviePosters/Joker.jpg' alt='Logo'>
    <?php
	$movieJoker->displayMovie();
	?>
	<button>Liput -></button>
	</div>
	<br>
	<div class="moviePreview">
		<img src="images/moviePosters/BeeMovie.jpg">
		<?php 
		 $movieBeeMovie = $_SESSION["movieBeeMovie"];
		$movieBeeMovie->displayMovie();?>
		<button>Liput -></button>
	</div>
	 <div style="margin-left: 200px;">

	
	<?php include "footer.php" ?>
    
</div>
</div>
</main>
 </body>
 </html>

