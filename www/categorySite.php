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

	<?php
	$category = $_POST['category'];
	if ($category == "Komedia")
	echo "Komedia";
	?>
    
    <?php
	if ($category == "Kauhu")
		echo "Kauhu";
	?>

    <?php
	if ($category == "Lapsille")
		echo "Lapsille";
	?>

    <?php
	if ($category == "Toiminta")
		echo "Toiminta";
	?>

    <?php
	include "footer.php" 
	?>
</body>
</html>
