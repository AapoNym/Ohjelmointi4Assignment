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
	<?php include "movie.php" ?>

	

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
	
	<<?php $movies = array() ?>
	<main>
		<div style="margin-left: 200px;">	
			<br>
			<hr><br>
			<div class="grid-container">
				<div class="moviePreview">
					<img src="images/moviePosters/Avengers.jpg">
					<?php 
						$movies[0] = new Movie("The Avengers", "Joss Whedon", "Toiminta", 16, "8/10", "TBW");
						$movies[0]->displayMovie();
					?>
					<button>Liput -></button>
				</div>
				<div class="moviePreview">

					<img src="images/moviePosters/BeeMovie.jpg">
					<?php 
						$movies[1] = new Movie("Bee Movie", "Simon J. Smith", "Lapsille", 7, "6.1/10", "TBW");
						$movies[1]->displayMovie();
					?>
					<button>Liput -></button>
				</div>
				<div class="moviePreview">

					<img src="images/moviePosters/Joker.jpg">
					<?php 
						$movies[2] = new Movie("Joker", "Todd Phillips", "Draama, Jännitys", 16, "8.4/10", "TBW");
						$movies[2]->displayMovie();
					?>
					<button>Liput -></button>
				</div>
				<div class="moviePreview">

					<img src="images/moviePosters/BridgetJones.jpg">
					<?php 
						$movies[3] = new Movie("Bridget Jones", "Sharon Maguire", "Komedia , Romanttinen", 11, "6.7/10", "TBW");
						$movies[3]->displayMovie();
					?>
					<button>Liput -></button>
				</div>
				<div class="moviePreview">
					<img src="images/moviePosters/NightmareOnElmStreet.jpg">
					<?php 
						$movies[4] = new Movie("Nightmare on Elm street", "Wes Craven", "Kauhu", 18, "7.4/10", "TBW");
						$movies[4]->displayMovie();
					?>
					<button>Liput -></button>
				</div>
				<div class="moviePreview">
					<img src="images/moviePosters/ScaryMovie.jpg">
					<?php 
						$movies[5] = new Movie("Scary Movie", "Keenen Ivory Wayans", "Kauhu, Komedia", 14, "6.2/10", "TBW");
						$movies[5]->displayMovie();
					?>
					<button>Liput -></button>
				</div>
			</div>
		</div>
	
	</main>
</body>


<?php include "footer.php"  ?>
</html>
