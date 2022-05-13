<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link href="https://fonts.googleapis.com/css2?family=Anybody:wght@200&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="includes/css/style.css">
</head>
<body>
  
  <?php include "header.php" ?>
	<?php include "sidebar.php" ?>
  
   <main>
   	 <div style="margin-left: 200px;">
   	 	<div class="categorySite">
	<?php
	$category = $_POST['category'];
	if ($category == "Komedia"){
	echo "<p1>Kategoria: Komedia</p1>" . "<br><br>".
	"<img src='images/moviePosters/BridgetJones.jpg' alt='Logo'>";
	echo "<p2>BridgetJones</p2>";
	echo "<br>" .
	"<img src='images/moviePosters/Joker.jpg' alt='Logo'>";
	echo "<p3>Joker</p3>";
     }
	?>
    <?php
	if ($category == "Kauhu"){
		echo "<p1>Kategoria: Kauhu</p1>". "<br><br>" .
	"<img src='images/moviePosters/NightmareOnElmStreet.jpg' alt='Logo'>" .
	"<p2>Nightmare On Elm Street</p2>";
	echo "<br>" .
	"<img src='images/moviePosters/ScaryMovie.jpg' alt='Logo'>"
	. "<p3>Scary Movie</p3>";
     }
	?>

    <?php
	if ($category == "Lapsille"){
		echo "<p1>Kategoria: Lapsille</p1>" . "<br><br>".
	"<img src='images/moviePosters/BeeMovie.jpg' alt='Logo'>";
	echo "<p2>Bee Movie</p2>";
     }
	?>
    <?php
	if ($category == "Toiminta"){
		echo "<p1>Kategoria: Toiminta</p1>";
	    echo "<br><br>";
	    echo "<img src='images/moviePosters/Avengers.jpg' alt='Logo'>";
	    echo "<p2>Avengers</p2>";
	}
	?>
    <?php
	include "footer.php" 
	?>
</div>
</main>
</body>
</html>
