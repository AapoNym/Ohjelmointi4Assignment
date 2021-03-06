<?php session_start(); ?>
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


	<?php $movies = array(); ?>
	<?php 
		$movies[0] = new Movie("images/moviePosters/Avengers.jpg", "The Avengers", "Joss Whedon", "Toiminta", 16, "8/10", "TBW");
		$movies[1] = new Movie("images/moviePosters/BeeMovie.jpg", "Bee Movie", "Simon J. Smith", "Lapsille", 7, "6.1/10", "TBW");
		$movies[2] = new Movie("images/moviePosters/Joker.jpg", "Joker", "Todd Phillips", "Draama, Jännitys", 16, "8.4/10", "TBW");
		$movies[3] = new Movie("images/moviePosters/BridgetJones.jpg", "Bridget Jones", "Sharon Maguire", "Komedia , Romanttinen", 11, "6.7/10", "TBW");
		$movies[4] = new Movie("images/moviePosters/NightmareOnElmStreet.jpg", "Nightmare on Elm street", "Wes Craven", "Kauhu", 18, "7.4/10", "TBW");
		$movies[5] = new Movie("images/moviePosters/ScaryMovie.jpg", "Scary Movie", "Keenen Ivory Wayans", "Kauhu, Komedia", 14, "6.2/10", "TBW");
	?>
       <?php
	$_SESSION["movieAvengers"] = $movies[0];
	$_SESSION["movieBeeMovie"] = $movies[1];
	$_SESSION["movieJoker"] = $movies[2];
	$_SESSION["movieBridgetJones"] = $movies[3];
	$_SESSION["movieNightmareOnElmStreet"] = $movies[4];
	$_SESSION["movieScaryMovie"] = $movies[5];
	?>
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


	<?php
	$filteredMovies = array_filter($movies, function($movie){
		if(isset($_POST['search'])){
			return str_contains(strtoupper($movie->getName()),strtoupper($_POST['search']));
		}
	});	
	?>

	<main>
		<div style="margin-left: 200px;">	
			<br>
			<hr><br>
			<div class="grid-container">
				

				<?php if(isset($_POST['submitted'])): ?>
					<?php foreach ($filteredMovies as $x => $value): ?>
						<div class="moviePreview">
							<?php $image = $filteredMovies[$x]->getImgPath(); ?>
							<img src= "<?php echo $image ?>">
							<?php $filteredMovies[$x]->displayMovie(); ?>
							<button>Liput -></button>
						</div>
					<?php endforeach; ?>
				<?php else: ?>
					<?php foreach ($movies as $x => $value): ?>
						<div class="moviePreview">
							<?php $image = $movies[$x]->getImgPath(); ?>
							<img src= "<?php echo $image ?>">
							<?php $movies[$x]->displayMovie(); ?>
							<button>Liput -></button>
						</div>
					<?php endforeach; ?>
				<?php endif ?>
			</div>
		</div>
	</main>
</body>

<?php include "footer.php"  ?>
</html>
