<!DOCTYPE html>
<html>
<head>
	<title>PHP Array Exercise 2</title>
</head>
<body>
<?php

$LCities = array ("Tokyo", "Mexico City", "New York City", "Mumbai Seoul",
				 "Shanghai", "Lagos", "Buenos Aires", "Cairo", "London ");
	
	for($i = 0; $i < COUNT($LCities); $i++){
		print $LCities[$i] . ", ";
	}
?>


<?php sort($LCities); ?>

<ul>
	<?php

		for ($i = 0; $i < COUNT($LCities); $i++) {
	 			echo "<li>$LCities[$i]</li>";
		}

	?>
</ul>

<?php array_push($LCities, "Los Angeles", "Calcutta", "Osaka", "Beijing"); ?>
<?php sort($LCities); ?>
<ul>
	<?php

		for ($i = 0; $i < COUNT($LCities); $i++) {
	 			echo "<li>$LCities[$i]</li>";
		}

	?>
</ul>
</body>
</html>