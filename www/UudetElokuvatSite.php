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
<main>
	 <div style="margin-left: 200px;">

	<p1> UUDET ELOKUVAT</p1><br><br>

    <?php	$movieAvengers = $_SESSION["movieAvengers"];?>

	<div class='moviePreview'>
		<img src='images/moviePosters/Avengers.jpg' alt='Logo'>
    <?php
	$movieAvengers->displayMovie();
	?>
	<button>Liput -></button>
	</div>
	<br>
	<div class="moviePreview">
		<img src="images/moviePosters/Joker.jpg">
		<?php 
		 $movieJoker = $_SESSION["movieJoker"];
		$movieJoker->displayMovie();?>
		<button>Liput -></button>
	</div>

	<?php include "footer.php" ?>
    
</div>
</main>
 </body>
 </html>

