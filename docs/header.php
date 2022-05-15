

<div class="header">
	<img src="images/FK-Logo.png" alt="Logo">
	<h1>
	   Funkino
	</h1>
	<h2>Hae elokuvaa</h2>
	<h5><form action="index.php" method="post">
			<input type="text" name="search" placeholder="Kirjoita tähän">
			<input type="submit" name="submitted" value="Hae">
			<?php if (isset($_POST['search'])): ?>
				Haetaan elokuvia sanalla: <?php echo $_POST['search']?>
			<?php endif ?>
		</form>
	</h5>	
</div>

