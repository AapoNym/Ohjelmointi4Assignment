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

			</p>
			
		</div>
	
	</main>
	
	
</body>

<?php include "footer.php"  ?>
</html>
