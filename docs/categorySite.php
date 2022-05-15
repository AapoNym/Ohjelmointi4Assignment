<?php include "movie.php";?>
<?php session_start(); ?>
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
   	 
		 
	<div class="category">
		<form action="categorySite.php" method="post">
			<div>
	    		<label for = "category"></label>
	    		<select name = "category" id = "category">
	    			<option value =""> --- Valitse kategoria --- </option>
	    			<option value="Komedia">Komedia</option>
	    			<option value="Toiminta">Toiminta</option>
	    			<option value="Kauhu">Kauhu</option>
	    			<option value="Lapsille">Lapsille</option>
	    			<option value="Draama">Draama</option>
	    		</select>
	  		</div>
	   		<div>
	    		<br><button type="submit">Lähetä</button>
	    	</div>
	 	</form>
	</div>
	   <div style="margin-left: 200px;">
   	 	<div class="categorySite">
	<?php
	$category = $_POST['category'];

  //This will be shown if "Komedia" is picked as category
	if ($category == "Komedia"){

	echo "<p1>Kategoria: Komedia</p1>" . "<br><br>";
 
  $movieBridgetJones = $_SESSION["movieBridgetJones"];

  echo "<div class='moviePreview'>";
  echo "<img src='images/moviePosters/BridgetJones.jpg'>";
  $movieBridgetJones->displayMovie();
  echo "<button>Liput -></button>";
	echo "</div>";
	echo "<br>";
  }
	?>

    <?php
    // This is Shown if "kauhu" is picked as category
	if ($category == "Kauhu"){
	echo "<p1>Kategoria: Kauhu</p1>". "<br><br>";
	$movieNightmareOnElmStreet = $_SESSION['movieNightmareOnElmStreet'];

  echo "<div class='moviePreview'>";
	echo "<img src='images/moviePosters/NightmareOnElmStreet.jpg' alt='Logo'>";
	
	$movieNightmareOnElmStreet->displayMovie();
	echo "<button>Liput -></button>";
	echo "</div>";

	echo "<br>";
	echo "<div class='moviePreview'>";
	echo "<img src='images/moviePosters/ScaryMovie.jpg' alt='Logo'>";
	$movieScaryMovie = $_SESSION['movieScaryMovie'];
	$movieScaryMovie->displayMovie();
	echo "<button>Liput -></button>";
	echo "</div>";
     }
	?>

    <?php
   // This is Shown if "Lapsille" is picked as category
	if ($category == "Lapsille"){
	echo "<p1>Kategoria: Lapsille</p1>" . "<br><br>";
    $movieBeeMovie = $_SESSION['movieBeeMovie'];

    echo "<div class='moviePreview'>";
	echo "<img src='images/moviePosters/BeeMovie.jpg' alt='Logo'>";
	$movieBeeMovie->displayMovie();
	echo "<button>Liput -></button>";
	echo "</div>";
     }
	?>
   
	 <?php
    // This is Shown if "Toiminta" is picked as category
	if ($category == "Toiminta"){
	echo "<p1>Kategoria: Toiminta</p1>";
	echo "<br><br>";
	echo "<div class='moviePreview'>";
	echo "<img src='images/moviePosters/Avengers.jpg' alt='Logo'>";
	$movieAvengers = $_SESSION["movieAvengers"];
	$movieAvengers->displayMovie();
	echo "<button>Liput -></button>";
	echo "</div>";
	echo "<br>";
	}
	?>

	 <?php
    // This is Shown if "Draama" is picked as category
	if ($category == "Draama"){
	echo "<p1>Kategoria: Draama</p1>";
	echo "<br><br>";
	$movieJoker = $_SESSION["movieJoker"];
	echo "<div class='moviePreview'>";
	echo "<img src='images/moviePosters/Joker.jpg' alt='Logo'>";
	
	$movieJoker->displayMovie();
	echo "<button>Liput -></button>";
	echo "</div>";
	echo "<br>";
	}
	?>
    <?php
	include "footer.php" 
	?>
</div>
</main>
</body>
</html>
