<!DOCTYPE html>
<html>
<head>
	<title>PHP Array Exercise 1</title>
</head>
<body>
<h1>PHP Array Exercise 1</h1>

<?php 

$weatherCon = 
	['rain', 'sunshine', 'clouds', 'hail', 'sleet', 'snow', 'wind'];
//print_r($weatherCon);
echo "We've seen all kinds of weather this month. At the beginning of the month, we had ".$weatherCon[5]." and ".$weatherCon[6].". Then came ".$weatherCon[1]." with a few ".$weatherCon[2]." and some ".$weatherCon[0].". At least we didn't get any ".$weatherCon[3]." and ".$weatherCon[4].".";


?>

</body>
</html>