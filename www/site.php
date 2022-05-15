<!DOCTYPE html>
<html>



<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Funkino </title>
	<link href="https://fonts.googleapis.com/css2?family=Anybody:wght@200&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="includes/css/style.css">
</head>
<body>

	<?php include "header.php" ?>
	<?php include "sidebar.php" ?>
	<?php include "article-header.php" ?>

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
	    		</select>
	  		</div>
	   		<div>
	    		<br><button type="submit">Lähetä</button>
	    	</div>
	 	</form>
	</div>
	
	
	<main>
		<div style="margin-left: 200px;">
		

			<br>
			<p>
				<div class="moviePreview">

					<img src="images/moviePosters/Avengers.jpg">
					<?php 
						$movieAvengers = new Movie("The Avengers", "Joss Whedon", "Action", 16, "8/10", "TBD");
						$movieAvengers->displayMovie();
					?>
					<button>Liput -></button>
						</div>
				<div class="moviePreview">

					<img src="images/moviePosters/BeeMovie.jpg">
					<?php 
						$movieBeeMovie = new Movie("Bee Movie", "Simon J. Smith", "Lapsille", 7, "6.1/10", "TBD");
						$movieBeeMovie->displayMovie();
					?>
					<button>Liput -></button>
				</div>
				<div class="moviePreview">

					<img src="images/moviePosters/Joker.jpg">
					<?php 
						$movieJoker = new Movie("Joker", "Todd Phillips", "Draama", 16, "8.4/10", "TBD");
						$movieJoker->displayMovie();
					?>
					<button>Liput -></button>
				</div>
				<div class="moviePreview">

					<img src="images/moviePosters/BridgetJones.jpg">
					<?php 
						$movieBridgetJones = new Movie("Bridget Jones", "Sharon Maguire", "Komedia", 11, "6.7/10", "TBD");
						$movieBridgetJones->displayMovie();
					?>
					<button>Liput -></button>
				</div>
				<div class="moviePreview">
					<img src="images/moviePosters/NightmareOnElmStreet.jpg">
					<?php 
						$movieNightmareOnElmStreet = new Movie("Nightmare on Elm street", "Wed Craven", "Kauhu", 18, "7.4/10", "TBD");
						$movieNightmareOnElmStreet->displayMovie();
					?>
					<button>Liput -></button>
				</div>
				<div class="moviePreview">
					<img src="images/moviePosters/ScaryMovie.jpg">
					<?php 
						$movieScaryMovie = new Movie("Scary Movie", "Keenen Ivory Wayans", "Kauhu", 14, "6.2/10", "TBD");
						$movieScaryMovie->displayMovie();
					?>
					<button>Liput -></button>

					
					
				</div>

			</p>

			
		</div>
	
	</main>
	
	
</body>

<?php include "footer.php"  ?>
</html>
